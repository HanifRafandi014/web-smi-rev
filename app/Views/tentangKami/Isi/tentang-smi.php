<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url() ?>assets/img/about-header.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Tentang SMI</h2>
      <ol>
        <li><a href="Home">Tentang Kami</a></li>
        <li style="color: white;">Tentang SMI</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

      <div class="row gy-4" data-aos="fade-up">

        <div class="col-lg-4" style="background-color: #c2ecd8b0;">

          <!-- The Timeline -->

          <ul class="timeline">

            <li>
              <div class="direction-l">
                <div class="flag-wrapper">
                  <span class="flag">2011 - 2013</span>
                </div>
                <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
              </div>
            </li>

            <li>
              <div class="direction-l">
                <div class="flag-wrapper">
                  <span class="flag">2011 - 2013</span>
                </div>
                <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
              </div>
            </li>

            <li>
              <div class="direction-l">
                <div class="flag-wrapper">
                  <span class="flag">2011 - 2013</span>
                </div>
                <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
              </div>
            </li>

          </ul>

          <style>
            /* ================ The Timeline ================ */

            .timeline {
              position: relative;
              width: 660px;
              margin: 0 auto;
              margin-top: 20px;
              padding: 1em 0;
              list-style-type: none;
              color: rgb(50, 50, 50);
              font-size: 112.5%;
              line-height: 1.6em;
              font-family: "Montserrat", sans-serif;
              ;
            }

            .timeline:before {
              position: absolute;
              left: 50%;
              top: 0;
              content: ' ';
              display: block;
              width: 6px;
              height: 100%;
              margin-left: -3px;
              background: rgb(80, 80, 80);
              background: -moz-linear-gradient(top, rgba(80, 80, 80, 0) 0%, rgb(80, 80, 80) 8%, rgb(80, 80, 80) 92%, rgba(80, 80, 80, 0) 100%);
              background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(30, 87, 153, 1)), color-stop(100%, rgba(125, 185, 232, 1)));
              background: -webkit-linear-gradient(top, rgba(80, 80, 80, 0) 0%, rgb(80, 80, 80) 8%, rgb(80, 80, 80) 92%, rgba(80, 80, 80, 0) 100%);
              background: -o-linear-gradient(top, rgba(80, 80, 80, 0) 0%, rgb(80, 80, 80) 8%, rgb(80, 80, 80) 92%, rgba(80, 80, 80, 0) 100%);
              background: -ms-linear-gradient(top, rgba(80, 80, 80, 0) 0%, rgb(80, 80, 80) 8%, rgb(80, 80, 80) 92%, rgba(80, 80, 80, 0) 100%);
              background: linear-gradient(to bottom, rgba(80, 80, 80, 0) 0%, rgb(80, 80, 80) 8%, rgb(80, 80, 80) 92%, rgba(80, 80, 80, 0) 100%);

              z-index: 5;
            }

            .timeline li {
              padding: 1em 0;
            }

            .timeline li:after {
              content: "";
              display: block;
              height: 0;
              clear: both;
              visibility: hidden;
            }

            .direction-l {
              position: relative;
              width: 300px;
              float: left;
              text-align: right;
            }

            .direction-r {
              position: relative;
              width: 300px;
              float: right;
            }

            .flag-wrapper {
              position: relative;
              display: inline-block;

              text-align: center;
            }

            .flag {
              position: relative;
              display: inline;
              background: rgb(248, 248, 248);
              padding: 6px 10px;
              border-radius: 5px;

              font-weight: 600;
              text-align: left;
            }

            .direction-l .flag {
              -webkit-box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.15), 0 0 1px rgba(0, 0, 0, 0.15);
              -moz-box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.15), 0 0 1px rgba(0, 0, 0, 0.15);
              box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.15), 0 0 1px rgba(0, 0, 0, 0.15);
            }

            .direction-r .flag {
              -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15), 0 0 1px rgba(0, 0, 0, 0.15);
              -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15), 0 0 1px rgba(0, 0, 0, 0.15);
              box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15), 0 0 1px rgba(0, 0, 0, 0.15);
            }

            .direction-l .flag:before,
            .direction-r .flag:before {
              position: absolute;
              top: 50%;
              right: -40px;
              content: ' ';
              display: block;
              width: 20px;
              height: 20px;
              margin-top: -10px;
              background: #fff;
              border-radius: 10px;
              border: 4px solid #245d43;
              z-index: 10;
            }

            .direction-r .flag:before {
              left: -40px;
            }

            .direction-l .flag:after {
              content: "";
              position: absolute;
              left: 100%;
              top: 50%;
              height: 0;
              width: 0;
              margin-top: -8px;
              border: solid transparent;
              border-left-color: rgb(248, 248, 248);
              border-width: 8px;
              pointer-events: none;
            }

            .direction-r .flag:after {
              content: "";
              position: absolute;
              right: 100%;
              top: 50%;
              height: 0;
              width: 0;
              margin-top: -8px;
              border: solid transparent;
              border-right-color: rgb(248, 248, 248);
              border-width: 8px;
              pointer-events: none;
            }

            .time-wrapper {
              display: inline;

              line-height: 1em;
              font-size: 0.66666em;
              color: rgb(250, 80, 80);
              vertical-align: middle;
            }

            .direction-l .time-wrapper {
              float: left;
            }

            .direction-r .time-wrapper {
              float: right;
            }

            .time {
              display: inline-block;
              padding: 4px 6px;
              background: rgb(248, 248, 248);
            }

            .desc {
              margin: 1em 0.75em 0 0;

              font-size: 0.77777em;
              font-style: italic;
              line-height: 1.5em;
            }

            .direction-r .desc {
              margin: 1em 0 0 0.75em;
            }

            /* ================ Timeline Media Queries ================ */

            @media screen and (max-width: 660px) {

              .timeline {
                width: 100%;
                padding: 4em 0 1em 0;
              }

              .timeline li {
                padding: 2em 0;
              }

              .direction-l,
              .direction-r {
                float: none;
                width: 100%;

                text-align: center;
              }

              .flag-wrapper {
                text-align: center;
              }

              .flag {
                background: rgb(255, 255, 255);
                z-index: 15;
              }

              .direction-l .flag:before,
              .direction-r .flag:before {
                position: absolute;
                top: -30px;
                left: 50%;
                content: ' ';
                display: block;
                width: 20px;
                height: 20px;
                margin-left: -9px;
                background: #fff;
                border-radius: 10px;
                border: 4px solid #245d43;
                z-index: 10;
              }

              .direction-l .flag:after,
              .direction-r .flag:after {
                content: "";
                position: absolute;
                left: 50%;
                top: -8px;
                height: 0;
                width: 0;
                margin-left: -8px;
                border: solid transparent;
                border-bottom-color: rgb(255, 255, 255);
                border-width: 8px;
                pointer-events: none;
              }

              .time-wrapper {
                display: block;
                position: relative;
                margin: 4px 0 0 0;
                z-index: 14;
              }

              .direction-l .time-wrapper {
                float: none;
              }

              .direction-r .time-wrapper {
                float: none;
              }

              .desc {
                position: relative;
                margin: 1em 0 0 0;
                padding: 1em;
                background: rgb(245, 245, 245);
                -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.20);
                -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.20);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0.20);

                z-index: 15;
              }

              .direction-l .desc,
              .direction-r .desc {
                position: relative;
                margin: 1em 1em 0 1em;
                padding: 1em;

                z-index: 15;
              }

            }

            @media screen and (min-width: 400px) and (max-width: 660px) {

              .direction-l .desc,
              .direction-r .desc {
                margin: 1em 4em 0 4em;
              }
            }
          </style>

        </div>

        <div class=" col-lg-8" style="text-align: justify;">
          <div class="content ps-lg-5">
            <h3 style="text-align: left;">Tentang Pusat Sabilillah Mendidik Indonesia</h3>
            <p>
              Perjalanan Pusat Sabilillah Mendidik Indonesia (SMI) merupakan sebuah perjalanan gemilang, dipenuhi dengan inovasi dalam meningkatkan standar pendidikan di negeri ini.
              Dimulai dari visi luhur KH Mochamad Tholchah Hasan untuk menjadikan Sabilillah sebagai kekuatan positif bagi perkembangan sekolah-sekolah lain, terutama yang berada di bawah naungan Lembaga Pendidikan Maarif NU.
            </p>
            <p>
              Inisiatif mulia ini kemudian terwujud dengan pembentukan satuan kerja khusus oleh LPI Sabilillah, yang menggelar program diklat perdana pada tahun 2015 dengan partisipasi dari 18 sekolah Almaarif di sekitar Malang Raya dan Pasuruan.
              Awalnya difokuskan pada peningkatan mutu sekolah Maarif, namun seiring waktu, minat terhadap program ini merambah ke sekolah lain di luar jaringan Maarif, sehingga pada tahun 2019, program tersebut diubah namanya menjadi BEST (Be Excellent School by Training). Kegiatan BEST dilaksanakan rutin setiap bulan dengan tema-tema kegiatan pembelajaran dan non-pembelajaran khas SISMA.
            </p>
            <p>
              Evolusi satuan kerja khusus LPI Sabilillah Malang tidak hanya terbatas pada penyelenggaraan program diklat. Melangkah lebih jauh, satuan ini berubah menjadi Pusat Sabilillah Mendidik Indonesia atau Pusat SMI, dengan misi yang lebih meluas dan inklusif. Salah satu misi utamanya adalah program sekolah kloning, yang bertujuan untuk mengadopsi keberhasilan model pendidikan di SISMA dan menerapkannya di sekolah-sekolah lain.
              Minat terhadap program ini melonjak pada tahun 2017, dengan partisipasi sekolah-sekolah dari berbagai daerah seperti SD Al Fitrah Surabaya, Hang Nadim Malay School Batam, SD Islam Tabanan Bali dan sekolah-sekolah Angkasa dibawah naungan Yayasan Ardya Garini Angkatan Udara Republik Indonesia.
            </p>
            <p>
              Selain menjadi tuan rumah bagi program diklat dan kloning, Pusat SMI juga menjadi corong bagi publikasi berbagai kegiatan yang dilakukan di SISMA. Kesuksesan ini tercermin melalui peresmian Radio SISMA FM pada Hari Pendidikan Nasional di tahun 2018, yang kemudian melaju menjadi SISMA TV berbasis channel YouTube pada tahun 2020.
              SISMA TV telah menjadi wadah yang penting dalam menyebarkan berbagai program edukasi, talkshow, dan podcast yang mengundang bintang tamu dari dalam dan luar, memperluas jangkauan serta memberi dampak positif bagi dunia pendidikan di Tanah Air.
            </p>
            <p>
              Dengan demikian, Pusat Sabilillah Mendidik Indonesia kini mengemban tugas-tugas dari tiga seksi utama antara lain: seksi program diklat, seksi program sekolah kloning, dan seksi program penyiaran, yang semuanya bertujuan untuk terus meningkatkan kualitas pendidikan serta memberikan manfaat yang merata bagi masyarakat luas.
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            </ul>
          </div>
        </div>
        
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Why Choose Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Mengapa Memilih Kami</h2>

      </div>

      <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

        <div class="col-xl-5 img-bg" style="background-image: url('<?= base_url() ?>assets/img/why-us-bg.jpg')"></div>
        <div class="col-xl-7 slides  position-relative">

          <div class="slides-1 swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Let's grow your business together</h3>
                  <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima maiores quidem, dolorum.</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsam perferendis asperiores explicabo vel tempore velit totam, natus nesciunt accusantium dicta quod quibusdam ipsum maiores nobis non, eum. Ullam reiciendis dignissimos laborum aut, magni voluptatem velit doloribus quas sapiente optio.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Unde perspiciatis ut repellat dolorem</h3>
                  <h4 class="mb-3">Amet cumque nam sed voluptas doloribus iusto. Dolorem eos aliquam quis.</h4>
                  <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus autem veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat dolor.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Aliquid non alias minus</h3>
                  <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.</h4>
                  <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim dolorum fugiat aut.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                  <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum soluta nihil est. Eum similique neque autem ut.</h4>
                  <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
                </div>
              </div><!-- End slide item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

      </div>

    </div>
  </section><!-- End Why Choose Us Section --><br>

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h3>Ut fugiat aliquam aut non</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Tim Pengembang</h2>

      </div>

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="<?= base_url() ?>assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="<?= base_url() ?>assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="team-member">
            <div class="member-img">
              <img src="<?= base_url() ?>assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="team-member">
            <div class="member-img">
              <img src="<?= base_url() ?>assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>
  </section><!-- End Team Section -->

</main><!-- End #main -->