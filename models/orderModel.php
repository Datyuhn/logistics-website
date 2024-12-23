<?php
require_once __DIR__ . '/../config/db.php';

class OrderModel
{
    private $connectionString;
    private $table_name = "order";

    public function __construct()
    {
        $database = new Database();
        $this->connectionString = $database->getConnection();
    }

    public function createOrder($user_id, $recipient_name, $received_address, $phone_receiver, $order_message, $status, $service_type): bool
    {
        try {
            $countQuery = "SELECT COUNT(id) FROM " . $this->table_name;
            $stmt = $this->connectionString->prepare($countQuery);
            $stmt->execute();
            $totalRecords = (int)$stmt->fetchColumn();

            $query = "SELECT NOW() AS current_time";
            $stmt = $this->connectionString->prepare($query);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $currentTime = $row['current_time'];

            $query = "INSERT INTO " . $this->table_name . " (id, user_id, recipient_name, received_address, phone_receiver, order_date, order_message, status, driver_id, service_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->connectionString->prepare($query);
            $stmt->execute([$totalRecords, $user_id, $recipient_name, $received_address, $phone_receiver, $currentTime, $order_message, $status, $service_type]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getOrderById($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->connectionString->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getOrdersByUserId($user_id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE user_id = ?";
        $stmt = $this->connectionString->prepare($query);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOrdersByDriver($driver_id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE driver_id = ?";
        $stmt = $this->connectionString->prepare($query);
        $stmt->execute([$driver_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
