<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đơn Hàng Của Tôi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .status-pending {
      color: orange;
    }
    .status-delivered {
      color: green;
    }
    .status-cancelled {
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <h1 class="mb-4">Đơn Hàng Của Tôi</h1>

    <?php if (isset($_SESSION['user_orders']) && !empty($_SESSION['user_orders'])): ?>
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Địa Chỉ Nhận</th>
            <th>Số Điện Thoại Người Nhận</th>
            <th>Ngày Đặt Hàng</th>
            <th>Tin Nhắn</th>
            <th>Trạng Thái</th>
            <th>Loại Dịch Vụ</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($_SESSION['user_orders'] as $index => $order): ?>
            <tr>
              <td><?= $index + 1 ?></td>
              <td><?= htmlspecialchars($order['received_address']) ?></td>
              <td><?= htmlspecialchars($order['phone_receiver']) ?></td>
              <td><?= date('d/m/Y H:i', strtotime($order['order_date'])) ?></td>
              <td><?= htmlspecialchars($order['order_message']) ?></td>
              <td>
                <?php if ($order['status'] === 'pending'): ?>
                  <span class="status-pending">Đang xử lý</span>
                <?php elseif ($order['status'] === 'delivered'): ?>
                  <span class="status-delivered">Đã giao</span>
                <?php elseif ($order['status'] === 'cancelled'): ?>
                  <span class="status-cancelled">Đã hủy</span>
                <?php else: ?>
                  <span>Không xác định</span>
                <?php endif; ?>
              </td>
              <td><?= htmlspecialchars($order['service_type']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <div class="alert alert-info">Bạn chưa có đơn hàng nào.</div>
    <?php endif; ?>

    <a href="index.php?page=home" class="btn btn-primary mt-3">Quay lại Trang Chủ</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
