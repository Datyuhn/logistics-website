<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Đăng ký gửi hàng</title>
  <link href="/logistics-website/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

</head>

<body class="bg-light">
  <?php include 'views/navbar.php'; ?>

  <div class="container mt-5">
    <main>
      <div class="py-5 text-center">
        <h1>Biểu Mẫu Gửi Đơn Hàng</h1>
        <p class="lead pt-3">Điền vào biểu mẫu dưới đây để gửi đơn hàng của bạn nhanh chóng và an toàn. Vui lòng cung cấp thông tin chính xác để việc giao hàng được thuận lợi.</p>
      </div>

      <div class="row g-5">
        <!-- <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Chi phí thanh toán</span>
            <span class="badge bg-primary rounded-pill">2</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Phí vận chuyển</h6>
                <small class="text-muted">Phí áp dụng cho giao hàng tiêu chuẩn</small>
              </div>
              <span class="text-muted">20,000 đồng</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Phí xử lý</h6>
                <small class="text-muted">Dành cho đơn hàng đặc biệt</small>
              </div>
              <span class="text-muted">10,000 đồng</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Tổng cộng</span>
              <strong>30,000 đồng</strong>
            </li>
          </ul>
        </div> -->


        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Thông Tin Gửi Hàng</h4>
          <form action="" method="POST">
            <div class="row g-3">
              <div class="col-12">
                <label for="recipientName" class="form-label">Họ và Tên Người Nhận</label>
                <input type="text" class="form-control" id="recipientName" name="recipientName" placeholder="Nhập họ và tên" required>
              </div>

              <div class="col-12">
                <label for="phone" class="form-label">Số Điện Thoại người nhận</label>
                <input type="text" class="form-control" id="phone" name="phoneReceiver" placeholder="Nhập số điện thoại" required>
              </div>

              <div class="col-12">
                <label for="orderMessage" class="form-label">Lời nhắn</label>
                <input type="text" class="form-control" id="orderMessage" name="orderMessage" placeholder="Lời nhắn" required>
              </div>

              <div class="col-12">
                <label for="receivedAddress" class="form-label">Địa Chỉ Nhận Hàng</label>
                <input type="text" class="form-control" id="receivedAddress" name="receivedAddress" placeholder="Nhập địa chỉ" required>
              </div>

              <div class="col-12">
                <label for="serviceType" class="form-label">Loại Hình Dịch Vụ</label>
                <select class="form-select" id="serviceType" name="serviceType" required>
                  <option value="" hidden selected>Chọn dịch vụ...</option>
                  <option value="standard">Giao hàng tiêu chuẩn - 10.000 VND</option>
                  <option value="fast">Giao hàng nhanh - 20.000 VND</option>
                  <option value="veryfast">Giao hàng hoả tốc - 30.000 VND</option>
                </select>
              </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" name="btn-create-order" type="submit">Gửi Đơn Hàng</button>
            <a href="index.php?page=home">
              <button class="w-100 btn btn-lg btn-danger mt-2">Quay lại trang chủ</button>
            </a>

          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2024 Công Ty Giao Hàng</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Chính Sách Bảo Mật</a></li>
        <li class="list-inline-item"><a href="#">Điều Khoản</a></li>
        <li class="list-inline-item"><a href="#">Hỗ Trợ</a></li>
      </ul>
    </footer>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/logistics-website/assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>

</html>