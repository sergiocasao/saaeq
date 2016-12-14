<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Client\ClientController@index')->name('index');

Auth::routes();

Route::group(['prefix' => 'register', 'as' => 'register.' ], function(){

    Route::get('success/{user_email}', 'Client\ActivateAccountController@showActivationMessage')->name('success.showActivationMessage');

    Route::get('activate/{user_email}', 'Client\ActivateAccountController@activateAccount')->name('activateAccount');

    Route::post('resend/{user_email}', 'Client\ActivateAccountController@resendActivateAccountMail')->name('resendActivateAccountMail');

});

Route::group([ 'prefix' => 'cursos', 'as' => 'curse.' ], function(){

    // Cursos route
    // http://www.saaeq.dev/cursos
    // Route::get('/', 'Client\Curses\CursesController@index')->name('index');

    // Clases route
    // http://www.saaeq.dev/cursos/quimica
    // Route::get('{curse}', 'Client\Curses\CursesController@show')->name('show');

    Route::group([ 'prefix' => '{curse}', 'as' => 'signature.' ], function(){

        // Clases route
        // http://www.saaeq.dev/cursos/quimica/tabla-periodica
        Route::get('{signature}', 'Client\Curses\SignatureController@show')->name('show');

        Route::group([ 'prefix' => '{signature}', 'as' => 'theme.' ], function(){

            // Clases route
            // http://www.saaeq.dev/cursos/quimica/tabla-periodica/elementos
            Route::get('{theme}', 'Client\Curses\ThemesController@show')->name('show');

            Route::group([ 'prefix' => '{theme}', 'as' => '' ], function(){

                // Clases route
                // http://www.saaeq.dev/cursos/quimica/tabla-periodica/elementos/exam
                Route::get('/examen', 'Client\Curses\ExamController@show')->name('exam.show');

                Route::post('/examen', 'Client\Curses\ExamController@store')->name('exam.store');

                // Clases route
                // http://www.saaeq.dev/cursos/quimica/tabla-periodica/elementos/exam
                Route::get('/ahorcado', 'Client\Curses\ActivityController@ahorcado')->name('ahorcado.show');

                Route::get('/sopa-de-letras', 'Client\Curses\ActivityController@sopa')->name('sopa.show');

                Route::get('activity/message', 'Client\Curses\ActivityController@store')->name('activity.store');
            });

        });


    });

});
