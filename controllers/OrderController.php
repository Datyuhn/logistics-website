<?php
require_once __DIR__ . '/../models/orderModel.php';
require_once __DIR__ . '/../models/driverModel.php';

class OrderController
{
    private $orderModel;
    private $driverModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->driverModel = new DriverModel();
    }

    public function orderRegister()
    {
        if (isset($_POST['btn-create-order'])) {
            $this->createOrderProcess();
        } else {
            include_once 'views/order/orderRegister.php';
        }
    }

    public function createOrderProcess(): void
    {
        $user_id = $_POST['user_id'];
        $received_address = $_POST['received_address'];
        $phone_receiver = $_POST['phone_receiver'];
        $order_date = date('Y-m-d H:i:s'); // Generate current date-time
        $order_message = $_POST['order_message'];
        $status = $_POST['status'];
        $driver_id = $_POST['driver_id'];
        $service_type = $_POST['service_type'];

        // Validate inputs
        if (empty($user_id) || empty($received_address) || empty($phone_receiver) || empty($order_message) || empty($status) || empty($service_type)) {
            $_SESSION['error'] = 'All fields are required.';
            include_once 'views/order/orderRegister.php';
            return;
        }

        if (!preg_match('/^[0-9]{10,15}$/', $phone_receiver)) {
            $_SESSION['error'] = 'Phone number must be between 10 to 15 digits.';
            include_once 'views/order/orderRegister.php';
            return;
        }

        if ($this->orderModel->createOrder($user_id, $received_address, $phone_receiver, $order_date, $order_message, $status, $driver_id, $service_type)) {
            header("Location: index.php?page=orderSuccess");
        } else {
            $_SESSION['error'] = 'Failed to create order. Please try again.';
            include_once 'views/order/orderRegister.php';
        }
    }

    public function orderTracking()
    {
        if (isset($_POST['btn-search-order'])) {
            $this->trackOrderById();
        } else {
            include_once 'views/order/tracking.php';
        }
    }

    public function trackOrderById()
    {
        $order_id = $_POST['order_id'];

        // Validate input
        if (empty($order_id)) {
            $_SESSION['error'] = 'Order ID is required.';
            include_once 'views/order/tracking.php';
            return;
        }

        $order = $this->orderModel->getOrderById($order_id);

        if ($order) {
            $_SESSION['order'] = $order;
            include_once 'views/order/orderDetails.php';
        } else {
            $_SESSION['error'] = 'Order not found.';
            include_once 'views/order/tracking.php';
        }
    }

    public function getOrdersByUser()
    {
        $user_id = $_SESSION['user_id'];

        if (empty($user_id)) {
            header("Location: index.php?page=login");
            return;
        }

        $orders = $this->orderModel->getOrdersByUser($user_id);
        $_SESSION['user_orders'] = $orders;
        include_once 'views/order/myOrders.php';
    }

    public function getOrdersByDriver()
{
    $user_id = $_SESSION['user_id'];
    if (empty($user_id)) {
        header("Location: index.php?page=login");
        return;
    }

    $driver = $this->driverModel->getDriverByUserId($user_id);

    if (!$driver) {
        $_SESSION['error'] = 'You are not associated with any driver account.';
        include_once 'views/error.php';
        return;
    }

    $driver_id = $driver['id'];

    $orders = $this->orderModel->getOrdersByDriver($driver_id);
    $_SESSION['driver_orders'] = $orders;
    include_once 'views/order/deliveryOrders.php';
}
}
