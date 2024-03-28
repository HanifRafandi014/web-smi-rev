<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url() ?>assets/img/contact-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Hubungi Kami</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li style="color: white;">Hubungi Kami</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Kantor Lembaga</h4>
                <h6>Jl. Terusan Piranha Atas No.135 Malang</h6>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>E-mail</h4>
                <h6>admin@sekolahsabilillah.sch.id</h6>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Telp/ Fax</h4>
                <h6>0341 - 400995</h6>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" style="background-color: #245d43;">Send Message</button></div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Hubungi Kami Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Maps</h2>

        </div>

        <div data-aos="fade-up" data-aos-delay="100">
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15806.710629642006!2d112.6309223!3d-7.928696!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629fac01c5d69%3A0x6b56f0c236ce184d!2sSMP%20Islam%20Sabilillah%20Malang!5e0!3m2!1sid!2sid!4v1711154391141!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div style="margin: 0 auto; text-align:center; padding-top: 10px;">
              <h5>Kampus 2 Sekolah Islam Sabilillah Malang (SISMA)</h5>
              <p>Pusat SISMA Mendidik Indonesia</p>
              <p class="bawah-kampus">SMP Islam Sabililillah Malang</p>
              <p class="bawah-kampus">SMA Islam Sabililillah Malang Boarding School Sistem Pesantren</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Map Hubungi Kami Section -->

  </main><!-- End #main -->