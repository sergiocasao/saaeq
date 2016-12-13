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

            Route::group([ 'prefix' => '{theme}/examen', 'as' => 'exam.' ], function(){

                // Clases route
                // http://www.saaeq.dev/cursos/quimica/tabla-periodica/elementos/exam
                Route::get('/', 'Client\Curses\ExamController@show')->name('show');

                Route::post('/', 'Client\Curses\ExamController@store')->name('store');


            });

        });


    });

});
