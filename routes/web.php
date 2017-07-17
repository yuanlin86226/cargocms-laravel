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



Route::get('/','AuthController@getLogin');
Route::post('/login','AuthController@postLogin');
Route::get('/logout','AuthController@getLogout');

Route::get('/dashboard','BoardController@getIndex');
<<<<<<< HEAD
Route::get('/user','BoardController@getMember');
=======
Route::get('/user','BoardController@getUser');
>>>>>>> d816d01c6801be85d418f103e28df5fcef2b79c5

// Route::get('/ShowMember','MemberController@ShowMember');
// Route::get('/InsertMember','MemberController@InsertMember');
// Route::post('/postInsertMember','MemberController@postInsertMember');
// Route::get('/UpdateMember','MemberController@UpdateMember');
// Route::post('/postUpdateMember','MemberController@postUpdateMember');
// Route::get('/DeleteMember','MemberController@DeleteMember');
//Route::post('DeleteMember/{id}', 'MemberController@DeleteMember');
