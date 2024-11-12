<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Logistics Website</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

  <link href="../../styles/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <div class="form-signin border">
    <main>
      <form action="../../controllers/login.php" method="POST">
        <img src="../../assets/logistics-logo.jpg" alt="" width="120" height="120">
        <h1 class="h3 mb-3 fw-normal">Please log in</h1>

        <div class="form-floating mb-2">
          <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Email" required>
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Log in</button>
        <div class="d-flex justify-content-around">
          <label for="register">Don't have an account?</label>
          <a href="./register.php" id="register">Register</a>
        </div>
      </form>
    </main>
  </div>
</body>

</html>