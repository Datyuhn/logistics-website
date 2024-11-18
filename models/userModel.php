<?php
require_once __DIR__ . '/../config/db.php';

class UserModel {
  private $conn;
  private $table_name = "user";

  public function __construct() {
    $database = new Database();
    $this->conn = $database->getConnection();
  }

  public function createUser($fullname, $email, $phone, $password, $address): int {
    $query = "INSERT INTO " . $this->table_name . " (fullname, email, phone, password, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->conn->prepare($query);
    // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $stmt->execute([$fullname, $email, $phone, $password, $address]);
    return $stmt->rowCount();
  }

  public function getUserByEmail($email) {
    $query = "SELECT * FROM " . $this->table_name . " WHERE email = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
?>
