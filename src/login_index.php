<?php
include_once "config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- MDB -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Custom styles -->
  <!-- <link rel="stylesheet" href="./CSS/style.css" /> -->
  <!-- jQuery CDN  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-white border-bottom">
      <div class="container">
        <div class="row gy-3">
          <!-- Left elements -->
          <div class="col-lg-2 col-sm-4 col-4">
            <b style="font-size: 2em; margin-right: 30px;">C</b>
          </div>
          <!-- Left elements -->

          <!-- Center elements -->
          <div class="order-lg-last col-lg-10 col-sm-8 col-8">
            <div class="d-flex float-end">
              <a href="/wishlist_page.php" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center">
                <i class="fas fa-heart m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">Wishlist</p>
              </a>
              <a href="/cart_page.php" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center">
                <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">My cart</p>
              </a>
              <a href="/order_page.php" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center">
                <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">My orders</p>
              </a>
              <a href="#" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"  onclick="sign_out()">
                <i class="fas fa-user-alt m-1 me-md-2"></i>
                <p class="d-none d-md-block mb-0">Sign out</p>
              </a>
            </div>
          </div>
          <!-- Center elements -->

          <!-- Right elements -->
        </div>
      </div>
    </div>
    <!-- Jumbotron -->

    <!-- Navbar -->
    <!-- Jumbotron -->
    <div class="bg-primary text-white py-5">
      <div class="container py-5">
        <h1>
          Best products & <br />
          brands in our store
        </h1>
        <p>Trendy Products, Factory Prices, Excellent Service</p>
        <button type="button" class="btn btn-outline-light">
          Learn more
        </button>
        <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
          <span class="pt-1">Purchase now</span>
        </button>
      </div>
    </div>
    <!-- Jumbotron -->
  </header>

  <!-- Products -->
  <section>
    <div class="container my-5">
      <header class="mb-4">
        <h3>New products</h3>
      </header>
      <div class="row" id="main_display"></div>
    </div>
  </section>
  <!-- Products -->

  <!-- Feature -->
  <section class="mt-5" style="background-color: #f5f5f5">
    <div class="container text-dark pt-3">
      <header class="pt-4 pb-3">
        <h3>Why choose us</h3>
      </header>

      <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Reasonable prices</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                do eiusmor
              </p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Best quality</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                do eiusmor
              </p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Worldwide shipping</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                do eiusmor
              </p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Customer satisfaction</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                do eiusmor
              </p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Happy customers</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                do eiusmor
              </p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
        <div class="col-lg-4 col-md-6">
          <figure class="d-flex align-items-center mb-4">
            <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
              <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
            </span>
            <figcaption class="info">
              <h6 class="title">Thousand items</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                do eiusmor
              </p>
            </figcaption>
          </figure>
          <!-- itemside // -->
        </div>
        <!-- col // -->
      </div>
    </div>
    <!-- container end.// -->
  </section>
  <!-- Feature -->

  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted mt-3" style="background-color: #f5f5f5">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start pt-4 pb-4">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-12 col-lg-3 col-sm-12 mb-2">
            <!-- Content -->
            <a href="#" class="">
              <b style="font-size: 2em;">C</b>
            </a>
            <p class="mt-2 text-dark">© 2023 Copyright: CEDCOSS.com</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-dark fw-bold mb-2">Store</h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-muted" href="#">About us</a></li>
              <li><a class="text-muted" href="#">Find store</a></li>
              <li><a class="text-muted" href="#">Categories</a></li>
              <li><a class="text-muted" href="#">Blogs</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-dark fw-bold mb-2">Information</h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-muted" href="#">Help center</a></li>
              <li><a class="text-muted" href="#">Money refund</a></li>
              <li><a class="text-muted" href="#">Shipping info</a></li>
              <li><a class="text-muted" href="#">Refunds</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-dark fw-bold mb-2">Support</h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-muted" href="#">Help center</a></li>
              <li><a class="text-muted" href="#">Documents</a></li>
              <li><a class="text-muted" href="#">Account restore</a></li>
              <li><a class="text-muted" href="#">My orders</a></li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-12 col-sm-12 col-lg-3">
            <!-- Links -->
            <h6 class="text-uppercase text-dark fw-bold mb-2">Newsletter</h6>
            <p class="text-muted">
              Stay in touch with latest updates about our products and offers
            </p>
            <div class="input-group mb-3">
              <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
              <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                Join
              </button>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <div class="">
      <div class="container">
        <div class="d-flex justify-content-between py-4 border-top">
          <!--- payment --->
          <div>
            <i class="fab fa-lg fa-cc-visa text-dark"></i>
            <i class="fab fa-lg fa-cc-amex text-dark"></i>
            <i class="fab fa-lg fa-cc-mastercard text-dark"></i>
            <i class="fab fa-lg fa-cc-paypal text-dark"></i>
          </div>
          <!--- payment --->
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->
</body>
<!-- Custom scripts -->
<script type="text/javascript" src="./JS/script.js"></script>
</html>