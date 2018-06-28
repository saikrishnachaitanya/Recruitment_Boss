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

Route::get('/', function () {
    return view('layouts.login');
});
/*Route::get('login','LoginController@getlogin')->name('login');*/
Route::get('Register','Auth\RegisterController@show');
Route::post('store','Auth\RegisterController@store');
Route::post('Admin','LoginController@dologin');
Route::post('login','userloginController@login');
Route::get('organization/{data_email}/','DashboardController@specific');
Route::get('send/{user_email}','testmailController@sendmail');
Route::get('dashboard','DashboardController@getdata');
Route::get('back','DashboardController@dashboard');
Route::get('logout','Controller@getlogin');
Route::get('back','Controller@getlogin');
//}


