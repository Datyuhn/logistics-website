<?php
require_once __DIR__ . '/../config/db.php';

class OrderModel {
    private $connectionString;
    private $table_name = "order";

    public function __construct() {
        $database = new Database();
        $this->connectionString = $database->getConnection();
    }

    public function createOrder($user_id, $received_address, $phone_receiver, $order_date, $order_message, $status, $driver_id, $service_type): bool {
        try {
            $query = "INSERT INTO " . $this->table_name . " (user_id, received_address, phone_receiver, order_date, order_message, status, driver_id, service_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->connectionString->prepare($query);
            $stmt->execute([$user_id, $received_address, $phone_receiver, $order_date, $order_message, $status, $driver_id, $service_type]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getOrderById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->connectionString->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getOrdersByUser($user_id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE user_id = ?";
        $stmt = $this->connectionString->prepare($query);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOrdersByDriver($driver_id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE driver_id = ?";
        $stmt = $this->connectionString->prepare($query);
        $stmt->execute([$driver_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>