<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <style>
    li{
       margin: 10px 0;
      }
  </style>

  <title>SI PERPUSTAKAAN SMPN 4 KOTA BENGKULU</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/flexs/img/favicon.png" rel="icon">
  <link href="assets/flexs/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/flexs/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/flexs/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/flexs/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/flexs/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/flexs/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/flexs/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/flexs/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center">
        <span class="logo d-flex align-items-center">SI PERPUSTAKAAN</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url('pengunjung'); ?>">Home</a></li>
          <li><a class="getstarted scrollto" href="/perpustakaan/pengunjung/buku">Cari Buku</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <div data-aos="fade-up" data-aos-delay="600">
            <div style="width: 500px;" class="mt-4 card">
              <div class="card-body">

                <?php
                if (isset($_GET['alert'])) {
                  if ($_GET['alert'] == "berhasil") {
                    echo "<div class='alert alert-success font-weight-bold text-center'>Terima kasih telah mengisi data pengunjung!</div>";
                  } else {
                    echo "<div class='alert alert-danger font-weight-bold text-center'>Harap mengisi data dengan benar!</div>";
                  }
                }
                ?>

                <h4 class="font-weight-bold text-center mb-3 mt-3">DATA PENGUNJUNG</h4>

                <!-- validasi error -->
                <?php echo validation_errors(); ?>

                <form method="post" action="<?php echo base_url() . 'pengunjung/tambah_pengunjung'; ?>">
                  <div class="mt-3 form-group">
                    <label for="username">Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                  </div>
                  <div class="mt-3 form-group">
                    <label for="kelas">Kelas</label>
                    <input name="kelas" type="text" class="form-control" placeholder="Kelas">
                  </div>
                  <div class="mt-3 form-group">
                    <label for="kelas">Kegiatan</label>
                    <input name="kegiatan" type="text" class="form-control" placeholder="Kegiatan">
                  </div>

                  <div class="d-grid gap-2">
                    <button type="submit" class="mt-3 btn btn-primary btn-block">Kirim</button>
                  </div>


                </form>
              </div>

            </div>
          </div>

        </div>
        <div class="mt-4 col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/flexs/img/hero-img.jpg" class="mt-4 img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>TATA TERTIB PERPUSTAKAAN SMP NEGERI 4 KOTA BENGKULU</p>
        </header>

        <!-- Feature Tabs -->
        <div style="margin-top: 0;" class="row feture-tabs" data-aos="fade-up">
          <div class="col"></div>
          <div class="col-lg-6 ">

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">UMUM</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">KOLEKSI REFERENSI</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">BUKU PAKET DAN BUKU UMUM</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <ol>
                  <li>Yang dapat menjadi anggota Perpustakaan adalah Murid, Guru, Karyawan dan warga SMP Negeri 4 Kota Bengkulu.</li>
                  <li>Calon Anggota harus mengisi formulir yang sudah disediakan.</li>
                  <li>Pengunjung diharapkan tidak menganggu lingkungan perpustakaan</li>
                  <li>Pengunjung tidak diperkenankan membawa tas, benda tajam dan makanan kedalam ruangan Perpustakaan</li>
                  <li>Pengunjung tidak diperkenankan merusak bahan-bahan pustaka serta fasilitas perpustakaan.</li>

                </ol>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                  <p>Buku-buku referensi tidak diperkenankan dibawa pulang dan hanya boleh dibaca didalam ruangan perpustakaan.</p>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
              <ol>
                  <li>Buku paket dipinjamkan selama tahun pelajaran berlangsung.</li>
                  <li>Buku-buku umum boleh dipinjamkan selama 7 hari.</li>
                  <li>Buku-buku yang rusak atau hilang tanggung jawab peminjam dan harus diganti menurut judul yang hilang tersebut.</li>
                  <li>Pengunjung diharapkan tidak merusak bahan-bahan pustaka.</li>
                  <li>Buku-buku literasi dapat dipinjamkan maksimal 3 hari</li>
                  <li>Apabila buku tersebut terlambat mengembalikannya dikenakan denda Rp.1000/hari</li>

                </ol>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>
          <div class="col"></div>

          <div class="col-lg-6">
            <img src="assets/img/features-2.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

      </div>

    </section><!-- End Features Section -->


  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files -->
  <script src="assets/flexs/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/flexs/vendor/aos/aos.js"></script>
  <script src="assets/flexs/vendor/php-email-form/validate.js"></script>
  <script src="assets/flexs/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/flexs/vendor/purecounter/purecounter.js"></script>
  <script src="assets/flexs/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/flexs/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/flexs/js/main.js"></script>

</body>

</html>