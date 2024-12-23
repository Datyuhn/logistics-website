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
    if (isset($_POST['btn-register'])) {
      $this->registerProcess();
    } else {
      include_once 'views/user/register.php';
    }
  }

  public function registerProcess(): void
  {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $this->userModel->createUser($fullname, $email, $phone, $password, $address);
    header('Location: index.php?page=login');
  }

  public function login()
  {
    if (isset($_POST['btn-login'])) {
      $this->loginProcess();
    } else {
      include_once 'views/user/login.php';
    }
  }

  public function loginProcess()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
      $_SESSION['error'] = 'Email and password are required.';
      include_once 'views/user/login.php';
      return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['error'] = 'Invalid email format.';
      include_once 'views/user/login.php';
      return;
    }

    $user = $this->userModel->getUserByEmail($email);

    if ($user && $password == $user['password']) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['fullname'];
      header("Location: index.php?page=home");
    } else {
      $_SESSION['error'] = 'Incorrect email or password.';
      include_once 'views/user/login.php';
    }
  }

  public function logout()
  {
    unset($_SESSION["user_id"]);
    unset($_SESSION["username"]);
    header('Location: index.php?page=home');
  }
}
