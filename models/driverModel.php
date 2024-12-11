<?php
require_once __DIR__ . '/../config/db.php';

class DriverModel
{
  private $connectionString;
  private $table_name = "driver";

  public function __construct()
  {
    $database = new Database();
    $this->connectionString = $database->getConnection();
  }

  public function getDriverByUserId($user_id)
  {
    $query = "SELECT * FROM driver WHERE user_id = ?";
    $stmt = $this->connectionString->prepare($query);
    $stmt->execute([$user_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
