<?php

namespace App\Http\Binds;

use App\Http\Binds\Bind;
use App\Photo;

use Route;

class ManagePhotosBind extends Bind
{

    /**
     * bind methods
     */
    public static function Bind(){
        // para las fotos
            Route::bind('photo', function ($photo_id) {
                return Photo::find($photo_id);
            });

    }

}
