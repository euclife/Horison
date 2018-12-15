<!DOCTYPE html>
<html lang="en">
<head>
  <title>HORISON ULTIMAzzzzzzzzzsssaa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
  <link rel="stylesheet" href="assets/front/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="assets/front/css/animate.css">
  <link rel="stylesheet" href="assets/front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/front/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/front/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/front/css/aos.css">
  <link rel="stylesheet" href="assets/front/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/front/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assets/front/css/jquery.timepicker.css">
  <link rel="stylesheet" href="assets/front/css/flaticon.css">
  <link rel="stylesheet" href="assets/front/css/icomoon.css">
  <link rel="stylesheet" href="assets/front/css/style.css">
  <link rel="stylesheet" href="assets/front/css/custom.css">
</head>
<body>
  <!-- Setting Page -->
  <?php array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = 'home'; ?>
  <!--  -->

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">HORISON ULTIMA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
hgfhgfhgfhgfhgfhgf
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item
          <?php if($page=="home")echo "active"; ?>
          "><a href="index.php?page=home" class="nav-link">Home</a></li>
          <li class="nav-item
          <?php if($page=="rooms")echo "active"; ?>
          "><a href="index.php?page=rooms" class="nav-link">Rooms</a></li>
          <li class="nav-item
          <?php if($page=="services")echo "active"; ?>
          "><a href="index.php?page=services" class="nav-link">Services</a></li>
          <li class="nav-item
          <?php if($page=="about")echo "active"; ?>
          "><a href="index.php?page=about" class="nav-link">About Us</a></li>
          <li class="nav-item
          <?php if($page=="contact")echo "active"; ?>
          "><a href="index.php?page=contact" class="nav-link">Contact</a></li>
          <li class="nav-item
          <?php if($page=="login")echo "active"; ?>
          "><a href="index.php?page=login" class="nav-link">Login/Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <!-- Include Pages -->
  <?php 

  if($page=="home"){
    include "pages/user/menu/home.php";
  }

  if($page=="about"){
    include "pages/user/menu/about.php";
  }

  if($page=="services"){
    include "pages/user/menu/services.php";
  }

  if($page=="rooms"){
    include "pages/user/menu/rooms.php";
  }

  if($page=="contact"){
    include "pages/user/menu/contact.php";
  }

  if($page=="login"){
    include "pages/user/form/login.php";
  }
  ?>

  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-7">
          <h3 class="heading-section">TENTANG KAMI</h3>
          <p class="mb-5" style="text-align: justify;">Salah satu hotel terbaik di Bandung, cocok untuk wisatawan bisnis ataupun wisatawan yang mencari sedikit kemewahan. Horison Ultima Bandung Hotel memberikan penginapan yang menenangkan sembari menjelajahi kota bekas jajahan Belanda yang menawan ini. Pelayanan dan fasilitas kelas pertama, fasilitas bisnis yang baik, serta berbagai pilihan masakan khas lokal dan internasional di tiga bar dan restoran hotel ini membuat pilihan menginap di Ibukota dari Jawa Barat menjadi lebih mudah. Iklim yang sejuk dari kota Bandung menjadikannya sebagai pilihan populer untuk melakukan liburan akhir pekan. Saat ini, dengan industri tekstil yang sedang berkembang serta bangunan kolonial menjadi sebuah magnet bagi dunia bisnis dan pariwisata. Untuk melakukan reservasi di Horison Ultima Bandung Hotel, silahkan masukkan tanggal kedatangan dan keberangkatan Anda di dalam formulir online kami yang aman.</p>
        </div>
        <div class="col-md-6 col-lg-1"></div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">Jl. Pelajar Pejuang 45 No.121, Turangga, Lengkong, Kota Bandung, Jawa Barat 40264</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">(022) 7305000</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@horisonhotel.com</span></a></li>
              <!-- <li><span class="icon icon-clock-o"></span><span class="text">Senin &mdash; Jumat 8:00am - 5:00pm</span></li> -->
            </ul>
          </div>
        </div>


      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>  -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/front/js/jquery.min.js"></script>
  <script src="assets/front/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/front/js/popper.min.js"></script>
  <script src="assets/front/js/bootstrap.min.js"></script>
  <script src="assets/front/js/jquery.easing.1.3.js"></script>
  <script src="assets/front/js/jquery.waypoints.min.js"></script>
  <script src="assets/front/js/jquery.stellar.min.js"></script>
  <script src="assets/front/js/owl.carousel.min.js"></script>
  <script src="assets/front/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/front/js/bootstrap-datepicker.js"></script>
  
  <script src="assets/front/js/aos.js"></script>
  <script src="assets/front/js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/front/js/google-map.js"></script>
  <script src="assets/front/js/main.js"></script>

</body>
</html>