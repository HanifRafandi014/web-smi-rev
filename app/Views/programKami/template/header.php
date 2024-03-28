<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Program Kami</title>
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

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">
          <img src="<?= base_url() ?>assets/img/logo smi.png" alt="">
          <p style="font-size:14px; padding-top:8%;">SISMA Mendidik <br>Indonesia</p>
        </h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>tentangKami/tentang-smi">Tentang SMI</a></li>
              <li><a href="<?= base_url() ?>tentangKami/tim-pengembang">Tim Pengembang</a></li>
              <li><a href="<?= base_url() ?>tentangKami/visi-misi">Visi & Misi</a></li>
              <li><a href="<?= base_url() ?>tentangKami/selayang-pandang">Selayang Pandang</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Program Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>programKami/studi-banding">STUDI BANDING</a></li>
              <li><a href="<?= base_url() ?>programKami/program-best">BEST</a></li>
              <li><a href="<?= base_url() ?>programKami/pentalokanas">PENTALOKANAS</a></li>
              <li><a href="<?= base_url() ?>programKami/sekolah-kloning">SEKOLAH KLONING</a></li>
              <li><a href="<?= base_url() ?>programKami/sisma-tv">SISMA TV</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>publikasi/sisma-news">SISMA News</a></li>
              <li><a href="<?= base_url() ?>publikasi/agenda">Agenda</a></li>
              <li><a href="<?= base_url() ?>publikasi/galeri">Galeri</a></li>
            </ul>
          </li>

          <li><a href="<?= base_url() ?>hubungiKami/hubungi-kami">Hubungi Kami</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header --><!-- End Header -->

  <script>
    function toggleText() {
      var fullText = document.getElementById("fullText");
      var btnText = document.getElementById("learnMore");

      if (fullText.style.display === "none") {
        fullText.style.display = "block";
        btnText.innerHTML = "Baca Sedikit";
      } else {
        fullText.style.display = "none";
        btnText.innerHTML = "Selengkapnya";
      }
    }
  </script>