<?php

namespace App\Services;
use App\User as User;
use Exception;

class UserService {

  public function findAll() {
    return User::all();
  }

  public function findOne($id) {
    return User::find($id);
  }
  
  public function update($user) {

    try {
      $this->verify($user);      
      $updateUser =  User::find($user["id"]);
      $updateUser -> name = $user["name"];
      $updateUser -> email = $user["email"];
      $updateUser -> save();

      return $updateUser;
    } catch (Exception $e) {
      throw $e;
    }
  }
  
  public function destroy($id) {
    return User::destroy($id);
  }
  
  public function save($user) {
    try {
      $this->verify($user);      
      $createdUser = User::create([
        'name' => $user["name"], 
        'email' => $user["email"],
        'password' => bcrypt('123456'),
        'remember_token' => 1
      ]);
      return $createdUser;
    } catch (Exception $e) {
      throw $e;
    }
  }

  public function verify($user) {
    if($user["email"] == "" || $user['name']=="") {
      throw new Exception("請輸入完整資料");
    }
    if(!preg_match("/.+@.+\.+.[a-zA-Z]{1,4}$/", $user["email"])){
      throw new Exception("信箱格式錯誤");
    }
    $mail = User::where('id','!=',$user['id'])->where('email',$user["email"])->get();
    if( count($mail) > 0 )
      throw new Exception("信箱已被註冊，無法使用");
  }
}
