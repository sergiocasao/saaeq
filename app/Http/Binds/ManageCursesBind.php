<?php

namespace App\Http\Binds;

use App\Http\Binds\Bind;

use Route;
use Auth;

use App\Curse;
use App\Signature;
use App\Theme;

class ManageCursesBind extends Bind
{

    /**
     * bind methods
     */
    public static function Bind(){
    // para editr al usuario
        Route::bind('curse', function ($curse) {
            return Curse::all()->where("slug", $curse)->first();
        });

        Route::bind('signature', function ($signature) {
            return Signature::where("slug", $signature)->with('themes')->first();
        });

        Route::bind('theme', function ($theme) {
            return Theme::where("slug", $theme)->first();
        });

    }

}
