<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SISMA Mendidik Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">

  <style>
    @media (min-width: 1200px) {

      .container,
      .container-lg,
      .container-md,
      .container-sm,
      .container-xl,
      .container-xxl {
        max-width: 1100px;
      }

      .navbar-spsp {
        background-color: #245d43 !important;
        border-radius: 20px;
        padding: 5px 50px;
      }

    }

    .marquee-wrapper {
      /* background: #2F394C; */
      text-align: center;
    }

    .marquee-wrapper .container {
      overflow: hidden;
    }

    .marquee-inner span {
      float: left;
      width: 50%;
    }

    .marquee-wrapper .marquee-block {
      --total-marquee-items: 9;
      height: 250px;
      width: calc(250px * (var(--total-marquee-items)));
      overflow: hidden;
      box-sizing: border-box;
      position: relative;
      margin: 20px auto;
      /* background-color: var(--dark); */
      padding: 0 0;
    }

    .marquee-inner {
      display: block;
      width: 200%;
      position: absolute;
    }

    .marquee-inner p {
      font-weight: 800;
      font-size: 30px;
      font-family: cursive;
    }

    .marquee-inner.to-left {
      animation: marqueeLeft 25s linear infinite;
    }

    /* .marquee-inner.to-right{
  animation: marqueeRight 25s linear infinite;

} */
    .marquee-item {
      width: 230px;
      height: 150px;
      display: inline-block;
      margin: 0 10px;
      float: left;
      transition: all .2s ease-out;
      /* background-color: yellowgreen; */
    }

    @keyframes marqueeLeft {
      0% {
        left: 0;
      }

      100% {
        left: -100%;
      }
    }

    /* @keyframes marqueeRight{
  0% { 
    left: -100%; 
  }
  100% {
   left: 0; 
  }
} */
  </style>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between navbar-spsp">

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
              document.classList.add('navbar-spsp');
            } else {
              document.classList.remove('navbar-spsp');
            }
          });
        });
      </script>

      <a href="home" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">
          <img src="assets/img/logo smi.png" alt="">
          <p style="font-size:14px; padding-top:8%;">SISMA Mendidik <br>Indonesia</p>
        </h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="tentangKami/tentang-smi">Tentang SMI</a></li>
              <li><a href="tentangKami/tim-pengembang">Tim Pengembang</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Program Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="programKami/studi-banding">STUDI BANDING</a></li>
              <li><a href="programKami/program-best">BEST</a></li>
              <li><a href="programKami/pentalokanas">PENTALOKANAS</a></li>
              <li><a href="programKami/sekolah-kloning">SEKOLAH KLONING</a></li>
              <li><a href="programKami/sisma-tv">SISMA TV</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="publikasi/sisma-news">SISMA News</a></li>
              <li><a href="publikasi/agenda">Agenda</a></li>
              <li><a href="publikasi/galeri">Galeri</a></li>
            </ul>
          </li>

          <li><a href="hubungiKami/hubungi-kami">Hubungi Kami</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header --><!-- End Header -->


  <header>
    <div>
      <div>
        <div id="header-carousel-head" class="carousel slide carousel-fade" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
          </div>

          <div class="carousel-inner" style="width: 100%; height: vh;">
            <div class="carousel-item active" data-bs-interval="3000">
              <img class="w-100" src="assets/img/slider_home/STUBAD.jpg" alt="Gambar">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(57, 112, 100, 0.7);">
                <h5>Studi Banding</h5>
                <button style="padding: 8px; border: none; background-color: #103021; border-radius: 10px">
                  <a href="programKami/studi-banding" style="color: white; font-size: 18px;">Read More</a>
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img class="w-100" src="assets/img/slider_home/BEST.jpg" alt="Gambar">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(57, 112, 100, 0.7);">
                <h5>Program Best</h5>
                <button style="padding: 8px; border: none; background-color: #103021; border-radius: 10px">
                  <a href="programKami/program-best" style="color: white; font-size: 18px;">Read More</a>
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-ride="carousel">
              <img class="w-100" src="assets/img/slider_home/PENTAA.jpg" alt="Gambar">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(57, 112, 100, 0.7);">
                <h5>Pentalokanas</h5>
                <button style="padding: 8px; border: none; background-color: #103021; border-radius: 10px">
                  <a href="programKami/pentalokanas" style="color: white; font-size: 18px;">Read More</a>
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-ride="carousel">
              <img class="w-100" src="assets/img/slider_home/KLONING_2.jpg" alt="Gambar">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(57, 112, 100, 0.7);">
                <h5>Program Kloning</h5>
                <button style="padding: 8px; border: none; background-color: #103021; border-radius: 10px">
                  <a href="programKami/sekolah-kloning" style="color: white; font-size: 18px;">Read More</a>
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-ride="carousel">
              <img class="w-100" src="assets/img/slider_home/KLONING_2.jpg" alt="Gambar">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(57, 112, 100, 0.7);">
                <h5>Program Kloning</h5>
                <button style="padding: 8px; border: none; background-color: #103021; border-radius: 10px">
                  <a href="programKami/sekolah-kloning" style="color: white; font-size: 18px;">Read More</a>
                </button>
              </div>
            </div>
            <div class="carousel-item" data-bs-ride="carousel">
              <img class="w-100" src="assets/img/slider_home/KLONING_2.jpg" alt="Gambar">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(57, 112, 100, 0.7);">
                <h5>Program Kloning</h5>
                <button style="padding: 8px; border: none; background-color: #103021; border-radius: 10px">
                  <a href="programKami/sekolah-kloning" style="color: white; font-size: 18px;">Read More</a>
                </button>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel-head" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#header-carousel-head" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
          </button>
        </div>
      </div>
    </div>
  </header>