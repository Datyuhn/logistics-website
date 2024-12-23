<?php
require_once __DIR__ . '/../models/orderModel.php';

class OrderController
{
    private $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
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
        $recipient_name = $_POST['recipientName'];
        $phone_receiver = $_POST['phoneReceiver'];
        $order_message = $_POST['orderMessage'];
        $received_address = $_POST['receivedAddress'];
        $service_type = $_POST['serviceType'];
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
        $status = '1';

        $this->orderModel->createOrder($user_id, $recipient_name, $received_address, $phone_receiver, $order_message, $status, $service_type);
        // $this->getOrdersByUser($user_id);
        header('Location: index.php?page=myOrders');
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

    public function getOrdersByUser($user_id)
    {
        if (empty($user_id)) {
            header("Location: index.php?page=login");
            return;
        }

        $orders = $this->orderModel->getOrdersByUserId($user_id);
        $_SESSION['user_orders'] = $orders;
        include_once 'views/order/myOrders.php';
    }
}
