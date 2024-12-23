<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theo Dõi Đơn Hàng</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .tracking-steps {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 20px 0;
    }

    .tracking-step {
      text-align: center;
      position: relative;
    }

    .tracking-step:before {
      content: '';
      position: absolute;
      top: 50%;
      left: -50%;
      width: 100%;
      height: 3px;
      background: #ccc;
      z-index: 0;
    }

    .tracking-icon {
      background: #28a745;
      color: #fff;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      z-index: 1;
      position: relative;
    }

    .receipt-section {
      border: 1px solid #ccc;
      padding: 20px;
      margin-top: 20px;
      background: #f8f9fa;
    }

    .receipt-section .form-label {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <?php include 'views/navbar.php'; ?>
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="mt-5">Theo Dõi Đơn Hàng</h1>
    </div>

    <div class="input-group mb-4">
      <input type="text" class="form-control" placeholder="Nhập mã đơn hàng" aria-label="Mã đơn hàng">
      <button class="btn btn-dark" type="button">Theo dõi đơn hàng</button>
    </div>

    <div class="tracking-steps">
      <div class="tracking-step">
        <div class="tracking-icon"><i class="bi bi-check"></i></div>
        <span>Đã lấy hàng</span>
      </div>
      <div class="tracking-step">
        <div class="tracking-icon"><i class="bi bi-check"></i></div>
        <span>Đang vận chuyển</span>
      </div>
      <div class="tracking-step">
        <div class="tracking-icon"><i class="bi bi-check"></i></div>
        <span>Đã nhận hàng</span>
      </div>
      <div class="tracking-step">
        <div class="tracking-icon"><i class="bi bi-check"></i></div>
        <span>Đã hủy</span>
      </div>
    </div>

    <div class="receipt-section">
      <h3>Biên nhận</h3>
      <form>
        <div class="mb-3">
          <label for="recipientSignature" class="form-label">Chữ ký người nhận</label>
          <textarea class="form-control" id="recipientSignature" rows="3" placeholder="Chữ ký người nhận"></textarea>
        </div>
        <div class="mb-3">
          <label for="recipientName" class="form-label">Tên người nhận hàng</label>
          <input type="text" class="form-control" id="recipientName" placeholder="Tên người nhận hàng">
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>