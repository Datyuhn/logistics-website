<?php
require_once __DIR__ . '/../config/db.php';

class UserModel
{
  private $connectionString;
  private $table_name = "user";

  public function __construct()
  {
    $database = new Database();
    $this->connectionString = $database->getConnection();
  }

  public function createUser($fullname, $email, $phone, $password, $address): bool
  {
    try {
      $countQuery = "SELECT COUNT(id) FROM " . $this->table_name;
      $stmt = $this->connectionString->prepare($countQuery);
      $stmt->execute();
      $totalRecords = (int)$stmt->fetchColumn();

      $query = "INSERT INTO " . $this->table_name . " (id, fullname, email, phone, password, address) VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $this->connectionString->prepare($query);
      $stmt->execute([$totalRecords, $fullname, $email, $phone, $password, $address]);
      return true;
    } 
    catch (Exception) {
      return false;
    }
  }

  public function getUserByEmail($email)
  {
    $query = "SELECT * FROM " . $this->table_name . " WHERE email = ?";
    $stmt = $this->connectionString->prepare($query);
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
