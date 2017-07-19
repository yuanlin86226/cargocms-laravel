<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as data_request;

use App\Services\admin\RoleService as RoleService;

use App\Exceptions\Handler as Handler;

use Exception;
use View;
use Auth;
use Redirect;

class RoleController extends Controller
{
    protected $roleService;
    protected $handler;

    public function __construct(RoleService $roleService, Handler $handler) {
        $this-> roleService = $roleService;
        $this-> handler = $handler;
    }

    public function index(){
        if(Auth::check()){
            return View::make('admin/role');
        }
        else{
            return Redirect::action('AuthController@login');
        }
    }
}
