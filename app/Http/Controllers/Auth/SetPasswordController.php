<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

use Auth;

class SetPasswordController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user_email)
    {
        return view("auth.passwords.set", ["encode_email"=> cltvoMailEncode($user_email->email)] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user_email)
    {
        $input = $request->all();

        $user_email->password = bcrypt( $input["password"] ) ;
        $user_email->active = true;

        if (!$user_email->save()) {
            return Redirect::back()->withErrors(['Tu cuenta no pudo ser activada']);
        }

        Auth::login($user_email);

        return redirect( $user_email->getHomeUrl() );
    }
}
