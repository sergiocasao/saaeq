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


Auth::routes();

// Route::group(['prefix' => 'register/success', 'as' => 'register.success.' ], function(){
//
//     Route::get('{user_email}', 'Client\ActivateAccountController@showMessageSent')->name('showMessageSent');
//
//     Route::post('{user_email}/activate', 'Client\ActivateAccountController@activateAccount')->name('activateAccount');
//
//     Route::post('{user_email}/resend', 'Client\ActivateAccountController@resendActivateAccountMail')->name('resendActivateAccountMail');
//
// });
//
// Route::group(['middleware' => 'authactive' ], function(){
//
//     Route::get('/', 'Client\ClientController@index')->name('index');
//
// });
