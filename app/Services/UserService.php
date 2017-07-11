<?php

namespace App\Services;
use App\User as User;
class UserService
{

    public function findAllWithPaginate()
    {
      return User::paginate(5);
    }
}
