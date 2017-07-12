<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as data_request;

use App\Services\UserService as UserService;


class UserController extends Controller {
    protected $userService;

    public function __construct(UserService $userService) {
        $this-> userService = $userService;
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

}
