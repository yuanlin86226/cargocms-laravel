<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as data_request;

use App\Services\Admin\UserService as UserService;
use Exception;
use App\Exceptions\Handler as Handler;

use View;
use Auth;
use Redirect;


class UserController extends Controller {
    protected $userService;
    protected $handler;

    public function __construct(UserService $userService, Handler $handler) {
        $this-> userService = $userService;
        $this-> handler = $handler;
    }

    public function index(){
        if(Auth::check()){
            return View::make('admin/user');
        }
        else{
            return Redirect::action('AuthController@login');
        }
    }

    public function findAll() {
        return response()->json($this-> userService -> findAll());
    }

    public function findOne($id) {
        return response()->json($this-> userService -> findOne($id));
    }

    public function update($id, data_request $request) {
        try {
            $user["id"] = $id; 
            $user["email"] = $request -> email; 
            $user["name"] = $request -> name;
            $this-> userService -> update($user);

            $data["result"] = true;
            $data["message"] = "使用者修改成功";
            return response()->json($data);
            
        } catch (Exception $e) {
            $returnData = array(
                'result' => false,
                'message' => $e->getMessage()
            );
            return response()->json($returnData);
        }
        
    }

    public function destroy($id) {
        
        try {
            $this-> userService -> destroy($id);

            $data["result"] = true;
            $data["message"] = "使用者刪除成功";
            return response()->json($data);
            
        } catch (Exception $e) {
            $returnData = array(
                'result' => false,
                'message' => $e->getMessage()
            );
            return response()->json($returnData);
        }
    }

    public function save(data_request $request) {
        try {
            $user['id'] = "";
            $user["email"] = $request -> email; 
            $user["name"] = $request -> name; 
            $this-> userService -> save($user);

            $data["result"] = true;
            $data["message"] = "使用者建立成功";
            
            return response()->json($data);
        } catch (Exception $e) {
            $returnData = array(
                'result' => false,
                'message' => $e->getMessage()
            );
            return response()->json($returnData);
        }
    }
}
