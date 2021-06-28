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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::resource('/setting', 'SettingController');
Route::resource('/service', 'ServiceController');
Route::resource('/staff', 'StaffController');
Route::resource('/slide', 'SlideController');
Route::resource('/slidee', 'SlideeController');
