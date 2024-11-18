<?php
require_once __DIR__ . '/controllers/UserController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $userController = new UserController();
  if ($userController->loginProcess($email, $password)) {
    echo "Login successful!";
  } else {
    echo "Invalid email or password!";
  }
}
