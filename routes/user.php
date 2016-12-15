<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/home', 'User\UserController@home')->name('home');


Route::group([ 'prefix' => '{user}' ], function(){

    Route::get('/', 'User\UserController@index')->name('index');

    Route::get('editar-perfil', 'User\UserController@edit')->name('edit');
    Route::patch('editar-perfil', 'User\UserController@updateEmail')->name('email.update');
    Route::patch('editar-perfil/password', 'User\UserController@updatePassword')->name('password.update');
    Route::patch('editar-perfil/delete', 'User\UserController@deleteAccount')->name('profile.delete');

    Route::group([ 'prefix' => 'test', 'as' => 'test.' ], function(){

        Route::get('/', 'User\Test\TestController@index')->name('index');
        Route::get('question/{question_id}', 'User\Test\TestController@show')->name('show');
        Route::post('question/{question_id}', 'User\Test\TestController@update')->name('update');
        Route::get('thank-you', 'User\Test\TestController@thanks')->name('thanks');

    });

});
