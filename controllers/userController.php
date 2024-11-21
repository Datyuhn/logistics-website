<?php
require_once __DIR__ . '/../models/userModel.php';

class UserController
{
  private $userModel;

  public function __construct()
  {
    $this->userModel = new UserModel();
  }

  public function register()
  {
    require_once __DIR__ . '/views/user/register.php';
  }

  public function registerProcess(): int
  {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    return $this->userModel->createUser($fullname, $email, $phone, $password, $address);
  }

  public function login()
  {
    if (isset($_POST['btn-login'])) {
      $this->loginProcess();
    } else {
      include_once 'views/user/login.php';
      // echo $page;
    }
  }

  public function loginProcess()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $this->userModel->getUserByEmail($email);
    // if ($user && password_verify($password, $user['password'])) {
    if ($user && $password == $user['password']) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['fullname'];

      header("Location: index.php?page=home");
      // include_once 'views/home/home.php';
    } else {
      // trường hợp sai email/pass
    }
  }

  public function logout() {
    unset($_SESSION["user_id"]);
    unset($_SESSION["username"]);
    header('Location: index.php?page=home');
  }
  
}
