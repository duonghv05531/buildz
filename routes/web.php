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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/services', 'WelcomeController@service')->name('services');
Route::get('/about', 'WelcomeController@about')->name('about');
Route::get('/team', 'WelcomeController@team')->name('team');
Route::get('/project', 'WelcomeController@project')->name('project');
Route::get('/blog', 'WelcomeController@blog')->name('blog');
Route::get('/contact', 'WelcomeController@contact')->name('contact');

Route::middleware(['auth', 'role:setting'])->group(function () {
    Route::resource('/setting', 'SettingController');
});
Route::middleware(['auth', 'role:service'])->group(function () {
    Route::resource('/service', 'ServiceController');
});
Route::middleware(['auth', 'role:staff'])->group(function () {
    Route::resource('/staff', 'StaffController');
});
Route::middleware(['auth', 'role:slide'])->group(function () {
    Route::resource('/slide', 'SlideController');
});
Route::middleware(['auth', 'role:slidee'])->group(function () {
    Route::resource('/slidee', 'SlideeController');
});
Route::middleware(['auth', 'role:department'])->group(function () {
    Route::resource('/department', 'DepartmentController');
});
Route::middleware(['auth', 'role:position'])->group(function () {
    Route::resource('/position', 'PositionController');
});
Route::middleware(['auth', 'role:salary'])->group(function () {
    Route::resource('/salary', 'SalaryController');
});
Route::middleware(['auth', 'role:permission'])->group(function () {
    Route::resource('/permission', 'PermissionController');
});
Route::middleware(['auth', 'role:permissionrole'])->group(function () {
    Route::resource('/permissionrole', 'PermissionRoleController');
});
Route::middleware(['auth', 'role:role'])->group(function () {
    Route::resource('/role', 'SalaryController');
});
Route::middleware(['auth', 'role:roleuser'])->group(function () {
    Route::resource('/roleuser', 'SalaryController');
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::resource('/user', 'UserController');
});

Route::middleware(['auth', 'role:home'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
