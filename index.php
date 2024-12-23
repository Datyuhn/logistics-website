<?php

session_start();
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/OrderController.php';
require_once __DIR__ . '/controllers/ServiceController.php';

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'home';
}

if ($page == 'login') {
  $controller = new UserController();
  $controller->login();
} elseif ($page == 'register') {
  $controller = new UserController();
  $controller->register();
} elseif ($page == 'logout') {
  $controller = new UserController();
  $controller->logout();
} elseif ($page == 'order') {
  if (isset($_SESSION['user_id'])) {
    $controller = new OrderController();
    $controller->orderRegister();
  } else {
    $controller = new UserController();
    $controller->login();
  }
} elseif ($page == 'myOrders') {
  $controller = new OrderController();
  $controller->getOrdersByUser($_SESSION['user_id']);
} else {
  include_once 'views/home/home.php';
}
