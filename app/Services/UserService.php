<?php

namespace App\Services;
use App\User as User;
class UserService {

  public function findAll() {
    return User::paginate(5);
  }

  public function findOne($id) {
    return User::find($id);
  }
  public function update($user) {
    $updateUser =  User::find($user["id"]);
    $updateUser -> name = $user["name"];
    $updateUser -> email = $user["email"];
    $updateUser -> save();

    return $updateUser;
  }
  public function destroy($id) {
    return User::destroy($id);
  }

}
