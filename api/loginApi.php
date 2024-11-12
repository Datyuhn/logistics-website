<?php
require_once '../controllers/userController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $userController = new UserController();
  if ($userController->login($email, $password)) {
    echo json_encode(["status" => "success", "message" => "Login successful"]);
  } else {
    echo json_encode(["status" => "error", "message" => "Invalid email or password"]);
  }
}
?>
