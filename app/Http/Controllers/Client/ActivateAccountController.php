<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class ActivateAccountController extends Controller
{
    public function showMessageSent(Request $request, User $user_email)
    {
        // dd($user_email->getMailActivationAcountUrl());

        $input = $request->all();

        $data = [
            'user' => $user_email,
        ];

        if (isset($input['ac'])) {
            $data['activation_code'] = base64_decode($input['ac']);
        }

        return view('user.activate_account', $data);
    }

    public function activateAccount(Request $request, User $user_email)
    {
        dd('Activar cuenta');
        return view('user.home');
    }

    public function resendActivateAccountMail(User $user_email)
    {
        dd('Hello world');
    }
}
