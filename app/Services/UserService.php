<?php

namespace App\Services;
use App\User as User;
use Exception;

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
  public function save($user) {

    if($user["email"] == "") 
      throw new Exception("email 不允許空白");
    
    $createdUser = User::create([
      'name' => $user["name"], 
      'email' => $user["email"],
      'password' => bcrypt('123456'),
      'remember_token' => 1
    ]);

    return $createdUser;
  }


}
