<?php

namespace App\Http\Binds;

use App\Http\Binds\Bind;

use App\User;
use App\Role;

use Route;
use Auth;


class ManageUserBind extends Bind
{

    /**
     * bind methods
     */
    public static function Bind(){
    // para editr al usuario
        Route::bind('user', function ($user_slug) {
            return User::where(["slug" => $user_slug])->first();
        });

    // para que un usuario active su cuenta
        Route::bind('user_email', function ($encode_email) {
            $email = cltvoMailDecode($encode_email);
            return User::with("roles","roles.permissions")->where(["email" => $email])->first();
        });

    // // para editr al usuario
    //     Route::bind('user_editable', function ($user_id) {
    //         return User::with("roles","roles.permissions")
    //             ->whereHas("roles")
    //             ->SuperAdminFilter()
    //             ->find($user_id);
    //     });
    //
    //
    // // para la papelera
    //     Route::bind('erasable_user', function ($user_id) {
    //         $log_user = Auth::user();
    //         return User::with("roles","roles.permissions")
    //             ->where("id" ,"!=" ,$log_user->id)
    //             ->SuperAdminFilter($log_user)
    //             ->find($user_id);
    //     });
    //
    // // para la recovery
    //     Route::bind('user_trashed', function ($user_id) {
    //             $log_user = Auth::user();
    //             return User::onlyTrashed()->with("roles","roles.permissions")
    //             ->where("id" ,"!=" ,$log_user->id)
    //             ->SuperAdminFilter($log_user)
    //             ->find($user_id);
    //
    //     });

    }

}
