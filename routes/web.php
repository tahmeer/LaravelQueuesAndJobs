<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/mail',"MailController@SendMail")->name('mailsender');
Route::get('/cache',"CacheController@Index")->name('cache');
Route::get('/login','BasicController@Login')->name('login');
Route::post('/authenticated','BasicController@LoginUser')->name('loginuser');
Route::get('/register','BasicController@ShowRegister')->name('showregister');
Route::post('/user-register','BasicController@Register')->name('register');
Route::get('/welcomeUser','BasicController@WelcomeUser')->name('welcome');
Route::post('/logout','BasicController@Logout')->name('logout');
