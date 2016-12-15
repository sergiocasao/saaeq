<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;

use App\Http\Requests\Users\UpdateEmailRequest;
use App\Http\Requests\Users\UpdatePasswordRequest;
use App\Http\Requests\Users\DeleteAccountRequest;

use App\Notifications\Users\UpdatePasswordNotification;
use App\Notifications\Users\UpdateMailNotification;
use App\Notifications\Users\DeleteAccountNotification;

use App\Curse;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return redirect()->route('user::index', Auth::user()->slug );
    }

    public function index()
    {
        $data = [
            'theme'
        ];

        return view('user.home');
    }


    public function edit()
    {
        return view('user.edit');
    }

    public function updateEmail(UpdateEmailRequest $request, User $user)
    {
        $input = $request->all();

        $clone = Auth::user();

        Auth::user()->email = $input["email"];

        if (!Auth::user()->save()) {
            return Redirect::back()->withErrors(["El email no pudo ser actualizdo correctamente"]);
        }

        $clone->notify( new UpdateMailNotification);

        return redirect()->route('user::index', Auth::user()->slug )->with('status', "El email fue correctamente actualizado");
    }

    public function updatePassword(UpdatePasswordRequest $request, User $user)
    {
        $input = $request->all();

        Auth::user()->password = bcrypt( $input["password"] ) ;

        if (!Auth::user()->save()) {
            return Redirect::back()->withErrors(["La contraseña no pudo ser actualizda correctamente"]);
        }

        Auth::user()->notify( new UpdatePasswordNotification);

        return redirect()->route('user::index', Auth::user()->slug )->with('status', "La contraseña fue correctamente actualizada");
    }

    public function deleteAccount(DeleteAccountRequest $request, User $user)
    {
        Auth::user()->active = false;

        if (!Auth::user()->save()) {
            return Redirect::back()->withErrors(["No pudimos desactivar tu cuenta."]);
        }

        Auth::user()->notify( new DeleteAccountNotification);

        Auth::logout();

        return redirect()->route('client::index')->with('status', "Tu cuenta ha sido desactivada exitosamente, para volver a activarla inicia sesión como siempre.");
    }
}
