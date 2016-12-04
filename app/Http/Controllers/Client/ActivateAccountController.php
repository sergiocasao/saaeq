<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\Users\ActivationAccountNotification;
use Illuminate\Support\Facades\Auth;

use App\User;

class ActivateAccountController extends Controller
{
    public function showActivationMessage(Request $request, User $user_email)
    {
        if ($user_email->active) {
            return $this->userVirifiedResponse($user_email);
        }

        $input = $request->all();

        $data = [
            'user' => $user_email,
        ];

        return view('user.activate_account', $data);
    }

    public function activateAccount(Request $request, User $user_email)
    {
        if ($user_email->active) {
            return $this->userVirifiedResponse($user_email);
        }

        $parameters = $request->only('token');
        $token = $parameters['token'];

        if ($user_email->token != $token) {
            return $this->tokenMismatchResponse($user_email);
        }

        $user_email->active = true;
        $user_email->save();
        Auth::login($user);

        return $this->accountActivatedResponse($user);
    }

    public function resendActivateAccountMail(User $user_email)
    {
        $user_email->notify(new ActivationAccountNotification);
        return redirect()->back()->with('status', 'Hemos reenviado el correo  de activación a '.$user_email->email);
    }

    protected function userVirifiedResponse($user)
    {
        return redirect()->route('client::home')->with('status', 'Tu cuenta ya ha sido activada anteriormente.');
    }

    protected function tokenMismatchResponse($user)
    {
        return redirect()->route('client::register.success.showActivationMessage', cltvoMailEncode($user_email->email));
    }

    protected function accountActivatedResponse($user)
    {
        return redirect()->route('client::home')->with('status', 'Gracias '.$user_email->email.', hemos activado tu cuenta exitosamente.');
    }

}
