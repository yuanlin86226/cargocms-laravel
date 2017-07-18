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

Route::middleware('api')->get('/admin/user', 'admin\UserController@findAll');
Route::middleware('api')->post('/admin/user', 'admin\UserController@save');
Route::middleware('api')->get('/admin/user/{id}', 'admin\UserController@findOne');
Route::middleware('api')->put('/admin/user/{id}', 'admin\UserController@update');
Route::middleware('api')->delete('/admin/user/{id}', 'admin\UserController@destroy');
