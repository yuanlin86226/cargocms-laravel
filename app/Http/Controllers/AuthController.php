<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as UserEloquent;

use Auth;
use Redirect;
use View;

class AuthController extends Controller
{
    public function index(){
    	return View::make('login');
    }

    public function login(Request $request){
        $authData = $request->only(['username', 'password']);

        // http://laraveldaily.com/laravel-login-email-username-one-field/

        if (empty($request->username) || empty($request->password)) {
        	return Redirect::back()->withErrors(['msg'=>'請輸入完整資料']);
        }
        elseif (Auth::attempt($authData, $request->remember)) {
            return Redirect::action('Admin\UserController@index');
        }
        else {
        	$user = UserEloquent::where('username', $request->username)->get();

        	if (count($user)==0) {
        		return Redirect::back()->withErrors(['msg'=>'查無此帳號'])->withInput($request->except('password'));
        	}
        	else {
        		return Redirect::back()->withErrors(['msg'=>'密碼錯誤'])->withInput($request->except('password'));
        	}
        }
    }

    public function logout(){
    	Auth::logout();
    	return Redirect::action('AuthController@index');
    }
}
