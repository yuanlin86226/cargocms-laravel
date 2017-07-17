<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

<<<<<<< HEAD
//Route::middleware('api')->post('/member','MemberController@postInsertMember');
=======
>>>>>>> d816d01c6801be85d418f103e28df5fcef2b79c5
Route::middleware('api')->get('/user', 'UserController@findAll');
Route::middleware('api')->post('/user', 'UserController@save');
Route::middleware('api')->get('/user/{id}', 'UserController@findOne');
Route::middleware('api')->put('/user/{id}', 'UserController@update');
Route::middleware('api')->delete('/user/{id}', 'UserController@destroy');
