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

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/login', function () {
// 	return view('login');
// });



Route::get('/','AuthController@index');
Route::get('/login','AuthController@index');

Route::post('/login','AuthController@login');
Route::get('/admin/logout','AuthController@logout');

// Route::get('/admin/index','Admin\MainController@index');


Route::get('/admin/user','Admin\UserController@index');
Route::get('/admin/role','Admin\RoleController@index');

Route::get('/admin/menu','Admin\MenuController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
