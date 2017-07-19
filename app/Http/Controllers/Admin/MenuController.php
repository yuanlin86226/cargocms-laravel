<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as data_request;

use App\Services\admin\MenuService as MenuService;

use App\Exceptions\Handler as Handler;

use Exception;
use View;
use Auth;
use Redirect;

class MenuController extends Controller
{
    protected $menuService;
    protected $handler;

    public function __construct(MenuService $menuService, Handler $handler) {
        $this-> menuService = $menuService;
        $this-> handler = $handler;
    }

    public function index(){
        if(Auth::check()){
            return View::make('admin/menu');
        }
        else{
            return Redirect::action('AuthController@login');
        }
    }
}
