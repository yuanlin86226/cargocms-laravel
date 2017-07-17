<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as data_request;

use App\Services\UserService as UserService;
use Exception;
use App\Exceptions\Handler as Handler;

class UserController extends Controller {
    protected $userService;
    protected $handler;

    public function __construct(UserService $userService, Handler $handler) {
        $this-> userService = $userService;
        $this-> handler = $handler;
    }

    public function findAll() {
        return response()->json($this-> userService -> findAll());
    }

    public function findOne($id) {
        error_log("=== $id ===" . $id);
        return response()->json($this-> userService -> findOne($id));
    }

    public function update($id, data_request $request) {
 
        $user["id"] = $id; 
        $user["email"] = $request -> email; 
        $user["name"] = $request -> name; 

        error_log(json_encode($user));

        return response()->json($this-> userService -> update($user));
    }
    public function destroy($id) {
        return response()->json($this-> userService -> destroy($id));
    }

    public function save(data_request $request) {
        try {
            $user["email"] = $request -> email; 
            $user["name"] = $request -> name; 
            $this-> userService -> save($user);

            $data["result"] = true;
            $data["message"] = "使用者建立成功";
            return response()->json($data);
        } catch (Exception $e) {
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return response()->json($returnData, 401);
        }
    }
}
