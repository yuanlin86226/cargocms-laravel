<?php

namespace App\Http\Controllers;

use App\User as UserEloquent;
use Illuminate\Http\Request;

use View;
use Auth;
use Redirect;

class BoardController extends Controller
{
    public function getIndex(){
    	if(Auth::check()){
    		return View::make('dashboard');
    	}
    	else{
    		return Redirect::action('AuthController@getLogin');
    	}
    }

    public function getMember(){
        if(Auth::check()){
            $members = UserEloquent::where('id','!=',Auth::user()->id)->orderby('id')->paginate(10);

            return View::make('member',['members'=>$members]);
        }
        else{
            return Redirect::action('AuthController@getLogin');
        }
    }

}
