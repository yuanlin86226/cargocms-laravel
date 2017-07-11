<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as data_request;

use App\Services\UserService as UserService;


class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this-> userService = $userService;
    }

    public function findAll()
    {
        return response()->json($this-> userService -> findAllWithPaginate());
    }
}
