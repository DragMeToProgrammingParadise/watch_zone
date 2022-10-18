<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Watch Zone -Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="btn btn-outline-danger" href="index.php">Watch Zone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new-arrivals.php">New Arrivals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="men.php">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="women.php">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages.php?page_id=1">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages.php?page_id=2">About Us</a>
          </li>
        </ul>
        <div class="dropdown border-danger">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="dropdown-toggle" src="images/user.png" width="26" height="26" alt="">
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="myaccount.php">My Account</a></li>
            <li><a class="dropdown-item" href="mycart.php">My Cart</a></li>
            <li><a class="dropdown-item" href="myorders.php">My Orders</a></li>
          </ul>
        </div>
        <div class="mx-2">
          <a href="login.php" class="btn btn-outline-danger">Login
          </a>
          <a href="signup.php" class="btn btn-outline-danger">Signup
          </a>
        </div>

      </div>
    </div>
  </nav>