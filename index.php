<?php

session_start();
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/DriverController.php';
require_once __DIR__ . '/controllers/OrderController.php';
require_once __DIR__ . '/controllers/ProductController.php';
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
  require_once __DIR__ . '/views/order/orderRegister.php';
} else {
  include_once 'views/home/home.php';
}

// elseif ($uri == '/driver/register') {
// $controller = new DriverController();
// $controller->register();
// } elseif ($uri == '/order/create') {
// $controller = new OrderController();
// $controller->create();
// } elseif ($uri == '/order/track') {
// $controller = new OrderController();
// $controller->track();
// } elseif ($uri == '/order/view') {
// $controller = new OrderController();
// $controller->view();
// } elseif ($uri == '/products') {
// $controller = new ProductController();
// $controller->index();
// } elseif ($uri == '/services') {
// $controller = new ServiceController();
// $controller->index();
// }
// else {
//   http_response_code(404);
//   // require_once __DIR__ . '/../views/error.php';
//   echo $uri;
// }
