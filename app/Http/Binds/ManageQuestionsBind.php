<?php

namespace App\Http\Binds;

use App\Http\Binds\Bind;

use Route;
use Auth;

use App\Models\Test\Question;

class ManageQuestionsBind extends Bind
{

    /**
     * bind methods
     */
    public static function Bind(){
    // para editr al usuario
        Route::bind('question_id', function ($question_id) {
            return Question::orderBy('id')->with('answers')->where(["id" => $question_id])->first();
        });

    }

}
