<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as UserEloquent;

use Auth;
use Redirect;
use View;

class AuthController extends Controller
{
    public function getLogin(){
    	return View::make('login');
    }

    public function postLogin(Request $request){
        $authData = $request->only(['email','password']);

        if($request->email=="" || $request->password==""){
        	return Redirect::back()->withErrors(['msg'=>'請輸入完整資料']);
        }
        elseif (Auth::attempt($authData,$request->remember)) {
            return Redirect::action('BoardController@getIndex');
        }
        else{
        	$user = UserEloquent::where('email',$request->email)->get();

        	if(count($user)==0){
        		return Redirect::back()->withErrors(['msg'=>'查無此帳號'])->withInput($request->except('password'));
        	}
        	else{
        		return Redirect::back()->withErrors(['msg'=>'密碼錯誤'])->withInput($request->except('password'));
        	}
        }
    }

    public function getLogout(){
    	Auth::logout();
    	return Redirect::action('AuthController@getLogin');
    }
}
