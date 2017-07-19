<?php

namespace App\Http\Controllers\Admin;

use App\User as UserEloquent;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use View;
use Auth;
use Redirect;

class MainController extends Controller
{
    public function index(){
    	if(Auth::check()){
    		return View::make('admin/index');
    	}
    	else{
    		return Redirect::action('AuthController@login');
    	}
    }



}
