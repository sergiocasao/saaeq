<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\Users\ActivationAccountNotification;
use Illuminate\Support\Facades\Auth;
use App\User;

class ActivateAccountController extends Controller
{

    protected $redirectTo = '/home';

    public function showActivationMessage(Request $request, User $user_email)
    {
        if (Auth::check()) {
            Auth::logout();
        }

        if ($user_email->active) {
            return $this->userVirifiedResponse($request, $user_email);
        }

        $input = $request->all();

        $data = [
            'user' => $user_email,
        ];

        return view('client.activate_account', $data);
    }

    public function activateAccount(Request $request, User $user_email)
    {
        if (Auth::check()) {
            Auth::logout();
        }

        $request['email'] = $user_email->email;

        if ($user_email->active) {
            return $this->userVirifiedResponse($request, $user_email);
        }


        $parameters = $request->only('token');
        $token = $parameters['token'];

        if ($user_email->token != $token) {
            return $this->tokenMismatchResponse($user_email);
        }

        $user_email->active = true;
        $user_email->save();

        Auth::login($user_email);

        return $this->accountActivatedResponse($user_email);
    }

    public function resendActivateAccountMail(User $user_email)
    {
        $user_email->notify(new ActivationAccountNotification);
        return redirect()->back()->with('status', 'Hemos reenviado el correo  de activación a '.$user_email->email);
    }

    protected function userVirifiedResponse(Request $request, User $user_email)
    {
        return redirect('login')->with('status', 'Esta cuenta ya ha sido activada anteriormente.')->withInput($request->only('email'));
    }

    protected function tokenMismatchResponse(User $user_email)
    {
        return redirect()->route('client::register.success.showActivationMessage', cltvoMailEncode($user_email->email));
    }

    protected function accountActivatedResponse(User $user_email)
    {
        return redirect($this->redirectTo)->with('status', 'Gracias '.$user_email->email.', hemos activado tu cuenta exitosamente.');
    }

}
