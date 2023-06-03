<?php
require 'functions.php';

$query = query("SELECT id, nama_kategori from tbl_kost inner join tbl_kategori on tbl_kost.kategori=tbl_kategori.id_kategori");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Kos Ibu Tetty</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar Start -->
      <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a
            href="index.php"
            class="navbar-brand d-flex align-items-center text-center"
          >
            <div class="icon p-2 me-2">
              <img
                class="img-fluid"
                src="img/logo.png"
                alt="Icon"
                style="width: 30px; height: 30px"
              />
            </div>
            <h1 class="m-0 text-primary">Kos Ibu Tetty</h1>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="index.php" class="nav-item nav-link active">Beranda</a>
              <a href="about.php" class="nav-item nav-link">Tentang Kami</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Tipe Kos</a
                >
                <div class="dropdown-menu rounded-0 m-0">
                  <?php
                  foreach ($query as $key):
                    # code...
                  ?>
                  <a href="kospria.php?id=<?php echo $key['id']?>" class="dropdown-item"
                    ><?php echo $key['nama_kategori']?></a
                  >
                    <?php endforeach ?>
                </div>
              </div>
              <a href="testimonial.php" class="nav-item nav-link">Testimoni</a>
              <a href="contact.php" class="nav-item nav-link">Kontak</a>
            </div>
          </div>
        </nav>
      </div>
      <!-- Navbar End -->

      <!-- Header Start -->
      <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">
              Temukan <span class="text-primary">Kos Nyaman</span> Untuk Tinggal
              Selama Berkuliah
            </h1>
            <p class="animated fadeIn mb-4 pb-2">
              Jl. Malabar Ujung No.41, RT.01/RW.07, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128
            </p>
            <a href="about.php" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"
              >Cari Tahu</a
            >
          </div>
          <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
              <div class="owl-carousel-item">
                <img class="img-fluid" src="img/p.jpeg" alt="" />
              </div>
              <div class="owl-carousel-item">
                <img class="img-fluid" src="img/kos bu tetty 2.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
      <div
        class="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="padding: 35px"
      ></div>
      
      <!-- Category Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h1 class="mb-3">Sejarah Kos Ibu Tetty</h1>
            <p align="justify" style="width: 1000px; margin-left: -35%; padding-top: 10px; margin-bottom: 100px;">
              Kos Ibu Tetty yang berada di jalan malabar ini sudah didirikan sejak tahun 1991.
               Sebelum mendirikan Kos di pusat kota tersebut, Ibu Tetty sudah lebih dahulu mendirikan kos di daerah dramaga,
                Pada awalnya, bangunan kosan di malabar tersebut merupakan tempat tinggal Bu Tetty bersama anak-anaknya. 
                Namun seiring berjalannya waktu, anak-anaknya memiliki kesibukan masing-masing sehingga Ibu Tetty tinggal sendirian di rumahnya.
                 Berhubung lokasi rumah tersebut sangat strategis di pusat kota bogor dan dekat kampus SV IPB University.
                  Ibu Tetty memutuskan untuk menjadikan rumahnya sebagai kosan karena banyaknya kamar yang kosong.
                   Alasan lain Ibu Tetty menjadikan rumahnya sebagai kosan agar ada yang menemani dirinya sehingga tidak tinggal sendirian lagi di rumah tersebut.
            </p>
          </div>
      <!-- Category End -->

      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="about-img position-relative overflow-hidden p-5 pe-0">
                <img class="img-fluid w-100" src="img/hah.jpg" />
              </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
              <h1 class="mb-4">#1 CARA MEMILIH KOS YANG BAIK & BENAR</h1>
              <p class="mb-4" align="justify">
                Memilih kos yang benar dan dekat dengan kampus adalah hal penting bagi mahasiswa,
                ingatlah bahwa memilih kos yang benar dan dekat dengan kampus adalah keputusan yang penting.
                 Luangkan waktu untuk mempertimbangkan faktor-faktor tersebut dan 
                 pastikan anda merasa nyaman dengan pilihan kos anda. <br> Berikut saran dari kami cara memilih kos yang benar :            </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Budget yang sesuai: Tentukan anggaran yang Anda miliki untuk kos
              </p>
                <i class="fa fa-check text-primary me-3"></i>Keamanan dan privasi: Pastikan kos tersebut memiliki sistem <br>keamanan yang  memadai
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Fasilitas yang memadai: Periksa fasilitas yang disediakan di kos tersebut,
                 seperti kamar mandi, dapur bersama, akses internet, dan ruang belajar
              </p>
              
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div
      class="text-center mx-auto mb-5 wow fadeInUp"
      data-wow-delay="0.1s"
      style="max-width: 600px"
    >
      <h1 class="mb-3">Mereka Mengatakan!</h1>
      <p>
        Review yang diberikan oleh para penyewa yang sudah menyewa kos di Kos Ibu Tetty
      </p>
    </div>
    <div
      class="owl-carousel testimonial-carousel wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="testimonial-item bg-light rounded p-3">
        <div class="bg-white border rounded p-4">
          <p>
            Pas awal-awal udah bingung mau dimana lagi, terus kebetulan
            masih sesuai budget lah yaa dengan kualitas yang masih sesuai
            spesifikasi.
          </p>
          <div class="d-flex align-items-center">
            <img
              class="img-fluid flex-shrink-0 rounded"
              src="img/cahya.jpg"
              style="width: 45px; height: 45px"
            />
            <div class="ps-3">
              <h6 class="fw-bold mb-1">Cahyani Dara</h6>
              <small>Akuntansi</small>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-item bg-light rounded p-3">
        <div class="bg-white border rounded p-4">
          <p>
            Awal masuk kuliah bingung nyari kosan gaada yang cocok, terus
            disaranin sama temen di kos bu tetty. Ibu kosnya baik banget,
            kamarnya bersih dan sudah ada laundry.
          </p>
          <div class="d-flex align-items-center">
            <img
              class="img-fluid flex-shrink-0 rounded"
              src="img/pop.jpg"
              style="width: 45px; height: 45px"
            />
            <div class="ps-3">
              <h6 class="fw-bold mb-1">M. Rafif Faqih Hidayat</h6>
              <small>Analisis Kimia</small>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-item bg-light rounded p-3">
        <div class="bg-white border rounded p-4">
          <p>
            lokasinya dekat dengan kampus jadi perjalanan kekampus bisa
            berjalan kaki dan kosannya bersih, jadi nyaman tinggal disitu
            selama berkuliah.
          </p>
          <div class="d-flex align-items-center">
            <img
              class="img-fluid flex-shrink-0 rounded"
              src="img/wawaa.jpeg"
              style="width: 45px; height: 45px"
            />
            <div class="ps-3">
              <h6 class="fw-bold mb-1">Salwa Salsabila</h6>
              <small>Komunikasi</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Kontak</h5>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i> Jl. Malabar Ujung No.41, RT.01/RW.07,
                 Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+62 813-1023-6891
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>kosibutetty@gmail.com
              </p>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Menu</h5>
              <a class="btn btn-link text-white-50" href="about.php">Tentang Kami</a>
              <?php
                  foreach ($query as $key):
                    # code...
                  ?>
                  <a href="kospria.php?id=<?php echo $key['id']?>" class="btn btn-link text-white-50"
                    ><?php echo $key['nama_kategori']?></a
                  >
                    <?php endforeach ?>
              <a class="btn btn-link text-white-50" href="testimonial.php">Testimoni</a>
              <a class="btn btn-link text-white-50" href="contact.php">Kontak</a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Galeri Foto</h5>
              <div class="row g-2 pt-2">
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/bbb.jpeg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/b.jpeg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/c.jpeg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/d.jpeg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/e.jpeg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="img/bb.jpeg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Media Sosial</h5>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100093021164032&mibextid=ZbWKwL"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href="https://youtube.com/@KosIbuTetty"
                  ><i class="fab fa-youtube"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="index.php">Kos Ibu Tetty</a>, All
                Right Reserved.
                Designed By
                <a class="border-bottom" href="https://www.notion.so/Brainware-Wiki-06fc9dc5bd764d158fcf79317a5c9c3d"
                  >Brainware</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
