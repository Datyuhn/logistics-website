<?php
require_once __DIR__ . '/controllers/UserController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $address = $_POST['address'];

  $userController = new UserController();
  $result = $userController->registerProcess($fullname, $email, $phone, $password, $address);

  if ($result) {
    echo "Registration successful!";
  } else {
    echo "Error occurred during registration!";
  }
}
