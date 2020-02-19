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
    return view('index');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin-login','loginController@adminlogin')->name('admin-login');
// Route::get('/user-Registration','registerController@userregister')->name('user-Registration');
Route::post('/add-Registration','UserRegistarController@addregister')->name('add-Registration');
Route::get('/user-Registration','UserRegistarController@showRegisterForm')->name('user-Registration');
Route::get('/user-list','UserRegistarController@showuserlist')->name('user-list');