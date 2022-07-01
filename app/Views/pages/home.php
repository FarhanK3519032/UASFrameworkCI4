<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0">Halaman Landing<br><span>Website</span> Lab PTIK</h1>
    <p class="mb-4 pb-0">Lakukan reservasi laboratorium yang tersedia prodi PTIK dengan lebih mudah, efisien, dan praktis. Buat akun sebagai member dan mulai lakukan reservasi untuk menggunakan fasilitas laboratorium</p>
    <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
    <a href="/daftar" class="about-btn scrollto">Get Started</a>
  </div>
</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= Speakers aka About Section ======= -->
  <section id="speakers">
    <div class="container" data-aos="fade-up">
      <div class="row" style="justify-content: space-between;">
        <div class="col-lg-7">
          <div class="habout">
            <h2>About.</h2>
          </div>
          <p>
            Website ini dibuat untuk memudahkan masyarakat civitas UNS maupun non-civitas UNS agar lebih mudah dalam melakukan reservasi laboratorium
            yang terdapat pada program studi Pendidikan Teknik Informatika dan Komputer. Beberapa Lab yang tersedia yaitu :
          </p>
          <ul class="fa-ul">
            <li><span class="fa-li" style="width: 24px; height: 24px"><i class="fa-solid fa-check-double"></i></span>Lab. Software Engineering</li>
            <li><span class="fa-li" style="width: 24px; height: 24px"><i class="fa-solid fa-check-double"></i></span>Multimedia Studio</li>
            <li><span class="fa-li" style="width: 24px; height: 24px"><i class="fa-solid fa-check-double"></i></span>Lab. Networking and Instrumentation</li>
          </ul>
          <p>
            Dengan menggunakan laboratorium yang tersedia, maka civitas maupun non civitas dapat menggunakan berbagai macam fasilitas yang terdapat
            di dalam laboratorium. Bagi Mahasiswa, Dosen, Staff maupun Civitas UNS lainnya tidak akan dikenakan biaya dalam melakukan reservasi.
          </p>
        </div>
        <div class="col-lg-4 pt-4 pt-lg-0">
          <img src="<?= base_url("assets/img/about-img.jpg"); ?>" class="img-fluid" alt="" style="border-radius: 20px;">
        </div>
      </div>
    </div>
  </section><!-- End about Section -->

  <!-- ======= Hotels aka Services Section ======= -->
  <section id="hotels">

    <div id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">
        <div class="hhotel">
          <h2>Services.</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="<?= base_url("assets/img/why-us-1.jpg"); ?>" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
              <div class="card-icon">
                <i class="bx bx-code-block"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Software Engineering</a></h5>
                <p class="card-text">Laboratorium software engineering merupakan lab komputer yang dikhususkan untuk kegiatan yang berhubungan dengan rekayasa perangkat lunak (RPL).</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="<?= base_url("assets/img/why-us-2.jpg"); ?>" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
              <div class="card-icon">
                <i class="bx bx-movie"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Multimedia Studio</a></h5>
                <p class="card-text">Multimedia Studio merupakan studio yang dikhususkan untuk kegiatan yang berhubungan dengan multimedia (shooting, editing, designing, dll).</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="<?= base_url("assets/img/why-us-3.jpg"); ?>" class="card-img-top" alt="..." style="border-radius: 20px 20px 0 0;">
              <div class="card-icon">
                <i class="bx bx-broadcast"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Networking and Instrumentation</a></h5>
                <p class="card-text">Laboratorium Networking dan Instrumentation merupakan lab yang dikhususkan untuk kegiatan yang berhubungan dengan perangkat jaringan (router, hub, switch, dll).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Service Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6">
          <div class="habout">
            <h2>Contact.</h2>
          </div>
          <p>
            Untuk informasi lebih lanjut dapat menghubungi kontak dibawah ini atau melihat alamat kami pada G-maps disamping
          </p>
          <ul class="fa-ul">
            <li><span class="fa-li" style="width: 24px; height: 24px"><i class="fa-solid fa-envelope"></i></span>admin@ptik.uns.ac.id</li>
            <li><span class="fa-li" style="width: 24px; height: 24px"><i class="fa-solid fa-phone"></i></span>021-123 456</li>
          </ul>
        </div>
        <div class="col-lg-4 pt-4 pt-lg-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1159.013585824402!2d110.77470863213748!3d-7.5591748100161515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14450d37a887%3A0xa3da5901b2534937!2sSebelas%20Maret%20University%20-%20Campus%205!5e0!3m2!1sen!2sid!4v1654589794613!5m2!1sen!2sid" width="546" height="410" style="border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?= $this->endSection(); ?>