<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});


*/


Route::auth();

 Route::group(['middleware' => 'usersession'], function () {
        Route::get('/', function ()    {
            // Uses User Session Middleware
        });
        Route::get('/', function () {
    return view('auth/login');
		});
  });
Route::get('/home', 'HomeController@index');
Route::get('/admin', function () {
    return view('dashboard');
});

Route::group( ['prefix'=>'Admin\Menu', 'as' => ''],function () {
 		
		Route::controller('Menu','Admin\Menu\admin_menu_controller');

 });