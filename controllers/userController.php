<?php
require_once '../models/userModel.php';

class UserController {
  private $userModel;

  public function __construct() {
    $this->userModel = new UserModel();
  }

  public function register($fullname, $email, $phone, $password, $address): int {
    return $this->userModel->createUser($fullname, $email, $phone, $password, $address);
  }

  public function login($email, $password) {
    $user = $this->userModel->getUserByEmail($email);
    // if ($user && password_verify($password, $user['password'])) {
    if ($user && $password == $user['password']) {
      session_start();
      $_SESSION['user_id'] = $user['id'];
      return true;
    }
    return false;
  }
}
?>
