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

// // principles
// Route::get('/', 'Admin\AdminController@index')->name('index');
// Route::get('manuals', 'Admin\AdminController@manuals')->name('manuals');
//
// //administrador de settings
// Route::group(['middleware' => ['permission:system_config'] ,'prefix' => 'settings', "as" => "settings." ], function(){
//
//     Route::resource('/','Admin\Settings\ManageSettingController',
//         ['only' => [ 'index', 'update'],
//         'parameters' => ['' => 'setting_key']
//     ]);
//
// });
//
// //administracion de usuarios
// Route::group(['middleware' => ['permission:manage_users'] ,'prefix' => 'users', "as" => "users."  ], function(){
//
//     Route::resource('/','Admin\Users\ManageUserController',
//         ['only' => ['index','create','edit','store','update'],
//         'parameters' => ['' => 'user_editable']
//     ]);
//
//     Route::resource('/','Admin\Users\ManageUserController',
//         ['only' => ["destroy"],
//         'parameters' => ['' => 'erasable_user']
//     ]);
//
//     Route::get( "trash" , 'Admin\Users\ManageUserController@trash')->name("trash");
//     Route::patch( "trash/{user_trashed}" , 'Admin\Users\ManageUserController@recovery')->name("recovery");
// });
//
// // media manager
// Route::group(['middleware' => ['permission:manage_photos'] ,'prefix' => 'photos', "as" => "photos." ], function(){
//     Route::group(['middleware' => ['permission:photos_view']  ], function(){
//         Route::get( "/" , 'Admin\Photos\ManagePhotosController@indexView')->name("index");
//     });
//
//     Route::group(['middleware' => ['onlyajax'], "as" => "ajax."  ,'prefix' => 'ajax' ], function(){
//         Route::resource('/','Admin\Photos\ManagePhotosController',
//             ['only' => ["index",'edit','store','update',"destroy"],
//             'parameters' => ['' => 'photo']
//         ]);
//
//         Route::post( "{photo}/associate" , 'Admin\Photos\ManagePhotosController@associate')->name("associate");
//         Route::delete( "{photo}/disassociate" , 'Admin\Photos\ManagePhotosController@disassociate')->name("disassociate");
//
//         Route::patch( "update/sort" , 'Admin\Photos\ManagePhotosController@sort')->name("sort");
//     });
// });
