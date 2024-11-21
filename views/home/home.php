<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Logistics Website</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
  <link href="/logistics-website/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

  <link href="/logistics-website/public/css/carousel.css" rel="stylesheet">
</head>

<body style="background-color: white !important;">
  <?php include 'views/navbar.php'; ?>
  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="position-relative">
            <img src="public/images/img01.jpg" class="w-100" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.4;"></div>
          </div>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Nhanh Chóng - An Toàn - Tin Cậy: Dịch Vụ Giao Hàng Hàng Đầu!</h1>
              <p>Vận chuyển chuyên nghiệp với thời gian giao hàng nhanh nhất. Cam kết an toàn cho mọi đơn hàng của bạn.</p>
              <p><a class="btn btn-lg btn-primary" href="index.php?page=order">Đăng kí ngay</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="position-relative">
            <img src="public/images/img02.jpg" class="w-100" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.4;"></div>
          </div>
          <div class="container">
            <div class="carousel-caption">
              <h1>Giao Hàng Dễ Dàng, Đưa Thế Giới Đến Gần Bạn Hơn!</h1>
              <p>Dễ dàng đặt giao hàng chỉ với vài cú nhấp chuột. Chúng tôi luôn đồng hành cùng bạn!</p>
              <p><a class="btn btn-lg btn-primary" href="#">Tìm hiểu thêm</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="position-relative">
            <img src="public/images/img03.jpg" class="w-100" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.4;"></div>
          </div>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Tối Ưu Hành Trình, Giao Trọn Niềm Tin!</h1>
              <p>Từ hàng nhỏ đến lô hàng lớn, dịch vụ của chúng tôi đều đảm bảo tiết kiệm và hiệu quả.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Về chúng tôi</a></p>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container marketing">

      <div class="row text-danger">
        <div class="col-lg-4">
          <h1>>5.000</h1>
          <p>Tài xế chuyên nghiệp và nhiệt huyết.</p>
        </div>
        <div class="col-lg-4">
          <h1>>10.000.000</h1>
          <p>Đơn hàng được vân chuyển thành công mỗi năm.</p>
        </div>
        <div class="col-lg-4">
          <h1>98%</h1>
          <p>Đơn hàng được giao đúng thời hạn trên toàn quốc.</p>
        </div>
      </div>

      <hr class="featurette-divider">
      <section id="services" class="text-center">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="intro">
                <h2 class="text-center mb-5"><strong>Dịch vụ của chúng tôi</strong></h2>
                <p class="mx-auto">Chúng tôi cung cấp giải pháp giao hàng toàn diện, đáp ứng mọi nhu cầu vận chuyển của bạn.</p>
              </div>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6">
              <div class="service">
                <img src="public/images/giaohoatoc.jpg" alt="" style="max-width: 40%" class="py-5">
                <h5>Giao hàng hỏa tốc</h5>
                <p>Đảm bảo giao hàng trong ngày với tốc độ và độ chính xác cao.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="service">
                <img src="public/images/giaonhanh.jpg" alt="" style="max-width: 40%" class="py-5">
                <h5>Giao hàng nhanh</h5>
                <p>Cung cấp dịch vụ vận chuyển với chi phí cạnh tranh và thời gian giao hàng tối ưu.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="service">
                <img src="public/images/giaotietkiem.jpg" alt="" style="max-width: 40%" class="py-5">
                <h5>Giao hàng tiết kiệm</h5>
                <p>Đảm nhận vận chuyển hàng hóa với chi phí tối thiểu, hiệu quả tối đa.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <hr class="featurette-divider">
      <h2 class="text-center"><strong>Vì sao nên chọn chúng tôi</strong></h2>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img src="public/images/img04.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-text pb-4">Giao hàng đúng hẹn, đảm bảo an toàn tuyệt đối cho mọi đơn hàng.</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-md btn-outline-danger col-6">Xem</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="public/images/img05.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-text pb-4">Dịch vụ vận chuyển với chi phí cạnh tranh, tối ưu ngân sách.</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-md btn-outline-danger col-6">Xem</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="public/images/img06.jpg" alt="">
                <div class="card-body">
                  <h5 class="card-text pb-4">Hỗ trợ khách hàng 24/7 với đội ngũ chuyên nghiệp và tận tâm.</h5>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-md btn-outline-danger col-6">Xem</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Công Nghệ Hiện Đại. <span class="text-muted">Theo dõi đơn hàng trực tuyến và cập nhật trạng thái thời gian thực.</span></h2>
        </div>
        <div class="col-md-5">
          <img src="public/images/img07.jpg" width="400" height="400" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Mạng Lưới Rộng Khắp. <span class="text-muted">Phủ sóng dịch vụ trên toàn quốc và quốc tế</span></h2>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="public/images/img08.jpg" width="400" height="400" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Linh Hoạt Đa Dịch Vụ. <span class="text-muted">Đáp ứng mọi nhu cầu, từ hàng nhỏ lẻ đến vận chuyển quy mô lớn.</span></h2>
        </div>
        <div class="col-md-5">
          <img src="public/images/img09.jpg" width="400" height="400" alt="">
        </div>
      </div>

      <hr class="featurette-divider">
      <h2 class="text-center"><strong>Bắt đầu gửi hàng ngay</strong></h2>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-left: 40px;">
            <div class="col">
              <div class="card shadow-sm col-10">
                <img src="public/images/step1.jpg" width="100%" height="275" alt="">
                <div class="card-body text-center">
                  <h3>Tạo tài khoản</h3>
                  <p class="card-text">Bắt đầu gửi hàng chưa đầy 2 phút.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm col-10">
                <img src="public/images/step2.jpg" width="100%" height="275" alt="">
                <div class="card-body text-center">
                  <h3>Gửi hàng</h3>
                  <p class="card-text">Đăng ký gửi hàng trực tuyến với nhiều lựa chọn dịch vụ.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm col-10">
                <img src="public/images/step3.jpg" width="100%" height="275" alt="">
                <div class="card-body text-center">
                  <h3>Theo dõi đơn hàng</h3>
                  <p clas s="card-text">Theo dõi đơn hàng của bạn theo thời gian thực.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container row mb-5">
        <a class="btn btn-lg btn-danger px-5 m-auto col-4">Đăng ký làm tài xế</a>
      </div>
    </div>
    <?php include 'views/footer.php'; ?>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-IhjqBgnr6x0ZXvVRKhuiwFQ5GO2nKZgFSPfUZFLp37i6qG/q3Fx3Fhyjc1GxNB1j" crossorigin="anonymous"></script>
  <script src="/logistics-website/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>