<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Utama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1>MUHAMMAD RISKI</h1>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">


        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="login.php">Login</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="assets/img/city.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Sistem Pendukung Keputusan</h2>
            <p data-aos="fade-up" data-aos-delay="200">Pemilihan Karyawan Terbaik</p>
            <p data-aos="fade-up" data-aos-delay="200">GRAHA INTI RUB</p>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->
    <div class="about-content">
  <!-- KIRI -->
  <div class="about-left">
    <div class="about-box">
      <div class="about-inner-box">
        <h3>SISTEM PENDUKUNG KEPUTUSAN</h3>
      </div>
      <p>
        SPK biasanya digunakan dalam situasi yang melibatkan banyak variabel dan data yang perlu dipertimbangkan secara simultan. Dengan adanya sistem ini, organisasi dapat melakukan evaluasi alternatif dan memproyeksikan dampak dari setiap pilihan sebelum mengambil keputusan final.
      </p>
    </div>
  </div>

  <!-- KANAN -->
  <div class="about-right">
    <div class="step-box">
      <span>①</span>
      <h4>Pembobotan</h4>
      <div class="tooltip">Menentukan bobot untuk setiap kriteria sesuai tingkat kepentingan.</div>
    </div>
    <div class="step-box">
      <span>②</span>
      <h4>Cari CF & SF</h4>
      <div class="tooltip">Menghitung nilai Core Factor dan Secondary Factor berdasarkan data.</div>
    </div>
    <div class="step-box">
      <span>③</span>
      <h4>Menghitung Nilai Total</h4>
      <div class="tooltip">Menjumlahkan nilai CF dan SF untuk mendapatkan skor akhir.</div>
    </div>
    <div class="step-box">
      <span>④</span>
      <h4>Ranking</h4>
      <div class="tooltip">Mengurutkan hasil berdasarkan nilai total dari terbesar ke terkecil.</div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</section>
  </main>
  <hr>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-7 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>SISTEM PENDUKUNG KEPUTUSAN</span>
          </a>
          <p>Sistem Pendukung Keputusan Pemilihan Karyawan Terbaik pada Graha Inti Rub</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/mhmmdriski.ii"><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">MHMMDRISKI</strong> <span><?= date('Y'); ?></span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://www.instagram.com/mhmmdriski.ii">Muhammad Riski</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

</body>

</html>