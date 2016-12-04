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
