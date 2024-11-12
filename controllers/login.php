<?php
require_once '../controllers/userController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $userController = new UserController();
  if ($userController->login($email, $password)) {
    echo "Login successful!";
  } else {
    echo "Invalid email or password!";
  }
}
?>
