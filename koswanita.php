<?php
require 'functions.php';

$id = $_GET['id'];
$query = query("SELECT *, nama_kategori from tbl_kost inner join tbl_kategori on tbl_kost.kategori=tbl_kategori.id_kategori WHERE id = $id")[0];
$apakek = query("SELECT *, nama_kategori from tbl_kost inner join tbl_kategori on tbl_kost.kategori=tbl_kategori.id_kategori");

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
          <span class="sr-only">Loading...</span>
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
              <a href="index.php" class="nav-item nav-link">Beranda</a>
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
                  foreach ($apakek as $key):
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
            <h1 class="display-5 animated fadeIn mb-4"><?php echo $query['nama_kategori']?></h1>
            <nav aria-label="breadcrumb animated fadeIn">
              <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item">
                  <a href="index.php">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                  <a>Tipe Kos</a>
                </li>
                <li
                  class="breadcrumb-item text-body active"
                  aria-current="page"
                >
                  <a><?php echo $query['nama_kategori']?></a>
                </li>
              </ol>
            </nav>
          </div>
          <div class="col-md-6 animated fadeIn">
            <img class="img-fluid" src="img/d.jpeg" alt="" />
          </div>
        </div>
      </div>
      <!-- Header End -->

      <div
        class="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="padding: 35px"
      ></div>
      <!-- Search Start -->
      <!-- <div
        class="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="padding: 35px"
      >
        <div class="container">
          <div class="row g-2">
            <div class="col-md-10">
              <div class="row g-2">
                <div class="col-md-4">
                  <input
                    type="text"
                    class="form-control border-0 py-3"
                    placeholder="Search Keyword"
                  />
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>Property Type</option>
                    <option value="1">Property Type 1</option>
                    <option value="2">Property Type 2</option>
                    <option value="3">Property Type 3</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-dark border-0 w-100 py-3">Search</button>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Search End -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-0 gx-5 align-items-end">
            <div>
              <div
                class="text-start mx-auto mb-5 wow slideInLeft"
                data-wow-delay="0.1s"
              >
              </div>
            </div>



                <!-- Property List Start -->
                <div class="container-xxl py-5">
                  <div class="container">
                    <div class="row g-0 gx-5 align-items-end">
                      <div>
                        <div
                          class="text-start mx-auto mb-5 wow slideInLeft"
                          data-wow-delay="0.1s"
                        >
                <h1 class="mb-3"><?php echo $query['nama_kategori']?></h1>
                <p>
                  <i class="fa fa-check text-primary me-3"></i>Harga Kos : Rp. <?php echo number_format($query['harga'], 2, ',', '.') ?>/tahun
                </p>
              </div>
            </div>

                <div class="mb-4">
                
                  <h2>Fasilitas Kamar</h2>
                  <hr>

            <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      width="30px"
                      class="img-fluid"
                      src="img/bed.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Kasur</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                      width="30px"
                      class="img-fluid"
                      src="img/fan.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Kipas Angin</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                    width="30px"
                      class="img-fluid"
                      src="img/desk.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Meja Belajar</h6>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img
                    width="30px"
                      class="img-fluid"
                      src="img/furniture.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>Lemari</h6>
                </div>
              </a>
            </div>
            
          </div>
        </div>
      </div>

      <div class="mb-4">
                
        <h2>Fasilitas Umum</h2>
        <hr>
  <div class="row g-4">
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
    <a
      class="cat-item d-block bg-light text-center rounded p-3"
    >
      <div class="rounded p-4">
        <div class="icon mb-3">
          <img
            width="30px"
            class="img-fluid"
            src="img/wifi-signal.png"
            alt="Icon"
          />
        </div>
        <h6>Wi-Fi</h6>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <a
      class="cat-item d-block bg-light text-center rounded p-3"
    >
      <div class="rounded p-4">
        <div class="icon mb-3">
          <img
            width="30px"
            class="img-fluid"
            src="img/refrigerator.png"
            alt="Icon"
          />
        </div>
        <h6>Kulkas</h6>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
    <a
      class="cat-item d-block bg-light text-center rounded p-3"
    >
      <div class="rounded p-4">
        <div class="icon mb-3">
          <img
          width="30px"
            class="img-fluid"
            src="img/washing-machine.png"
            alt="Icon"
          />
        </div>
        <h6>Laundry</h6>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a
      class="cat-item d-block bg-light text-center rounded p-3"
    >
      <div class="rounded p-4">
        <div class="icon mb-3">
          <img
          width="30px"
            class="img-fluid"
            src="img/kitchen.png"
            alt="Icon"
          />
        </div>
        <h6>Dapur</h6>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
    <a
      class="cat-item d-block bg-light text-center rounded p-3"
    >
      <div class="rounded p-4">
        <div class="icon mb-3">
          <img
          width="30px"
            class="img-fluid"
            src="img/tv-screen.png"
            alt="Icon"
          />
        </div>
        <h6>TV</h6>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
    <a
      class="cat-item d-block bg-light text-center rounded p-3"
    >
      <div class="rounded p-4">
        <div class="icon mb-3">
          <img
          width="30px"
            class="img-fluid"
            src="img/bathtub.png"
            alt="Icon"
          />
        </div>
        <h6>Kamar Mandi</h6>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
    <a
      class="cat-item d-block bg-light text-center rounded p-3"
    >
      <div class="rounded p-4">
        <div class="icon mb-3">
          <img
          width="30px"
            class="img-fluid"
            src="img/sofa.png"
            alt="Icon"
          />
        </div>
        <h6>Ruang Tamu</h6>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
    <a
      class="cat-item d-block bg-light text-center rounded p-3"
    >
      <div class="rounded p-4">
        <div class="icon mb-3">
          <img
          width="30px"
            class="img-fluid"
            src="img/motorcycle.png"
            alt="Icon"
          />
        </div>
        <h6>Parkir Motor</h6>
      </div>
    </a>
  </div>
</div>

<br>
<br>
<div class="mb-4">
                
  <h2>Akses</h2>
  <hr>

<div class="row g-4">
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
<a
class="cat-item d-block bg-light text-center rounded p-3"
>
<div class="rounded p-4">
  <div class="icon mb-3">
    <img
      width="30px"
      class="img-fluid"
      src="img/university.png"
      alt="Icon"
    />
  </div>
  <h6>Kampus SV IPB</h6>
  <span>5-7 Menit</span>
</div>
</a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
<a
class="cat-item d-block bg-light text-center rounded p-3"
>
<div class="rounded p-4">
  <div class="icon mb-3">
    <img
      width="30px"
      class="img-fluid"
      src="img/minimarket.png"
      alt="Icon"
    />
  </div>
  <h6>Minimarket</h6>
  <span>3-5 Menit</span>
</div>
</a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
<a
class="cat-item d-block bg-light text-center rounded p-3"
>
<div class="rounded p-4">
  <div class="icon mb-3">
    <img
    width="30px"
      class="img-fluid"
      src="img/restaurant.png"
      alt="Icon"
    />
  </div>
  <h6>Tempat Makan</h6>
  <span>1-2 Menit</span>
</div>
</a>
</div>
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
<a
class="cat-item d-block bg-light text-center rounded p-3"
>
<div class="rounded p-4">
  <div class="icon mb-3">
    <img
    width="30px"
      class="img-fluid"
      src="img/stationery.png"
      alt="Icon"
    />
  </div>
  <h6>Foto Kopi</h6>
  <span>1-2 Menit</span>
</div>
</a>
</div>

</div>
</div>
</div>
</div>
</div>

<br>
  <br>
  <br>
<!-- <div class="container-xxl py-5">
  <div class="container">
    <div class="row g-0 gx-5 align-items-end">
      <div>
        <div
          class="text-start mx-auto mb-5 wow slideInLeft"
          data-wow-delay="0.1s"
        > -->
<div class="mb-4 ">
                
  <h2>Peraturan Kos</h2>
  <hr>
<div class="row g-4">
<div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"
  <p>
    <i class="fa fa-check text-primary me-3"></i>Untuk perempuan dilarang untuk naik ke lantai 2 ataupun sebaliknya laki-laki dilarang untuk berada di lantai 1
  </p>
    <i class="fa fa-check text-primary me-3"></i>Setiap penyewa harus menerapkan kebersihan
  </p>
  <p>
    <i class="fa fa-check text-primary me-3"></i>Menjaga dengan baik fasilitas umum yang disediakan, jika merusaknya maka harus menggantinya
  </p>
</div>


<br>
<div class="mb-4">
                
  <h2>Album</h2>
  <hr>
  <div class="row g-4">
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

      <div class="rounded p-4">
        <div class="">
          <img
            class="img-fluid"
            src="img/boleh5.jpg"
            alt="Icon"
          />
        </div>
      </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

    <div class="rounded p-4">
      <div class="">
        <img
          class="img-fluid"
          src="img/c.jpeg"
          alt="Icon"
        />
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

  <div class="rounded p-4">
    <div class="">
      <img
        class="img-fluid"
        src="img/d.jpeg"
        alt="Icon"
      />
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

    <div class="rounded p-4">
      <div class="">
        <img
          class="img-fluid"
          src="img/cewe1.jpeg"
          alt="Icon"
        />
      </div>
    </div>
  </div>
</div>
</div>
                      <!-- Call to Action Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="bg-light rounded p-3">
            <div
              class="bg-white rounded p-4"
              style="border: 1px dashed rgba(0, 185, 142, 0.3)"
            >
              <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                  <img
                    class="img-fluid rounded w-100"
                    src="img/tetty.jpeg"
                    alt=""
                  />
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <div class="mb-4">
                    <h7 class="mb-3">HUBUNGI KONTAK RESMI KAMI</h7>
                    <p >
                    <h4>Tetty Soesilawati</h4> </p> <br> Jl. Malabar Ujung No.41, RT.01/RW.07, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128
                    </p>
                  </div>
                  <a href="https://wa.wizard.id/823969" class="btn btn-primary py-3 px-4 me-2"
                    ><i class="wa.me/085695160652"></i>Whatsapp</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Call to Action End -->
      <!-- Property List End -->
      




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
              <a class="btn btn-link text-white-50" href="index.php">Beranda</a>
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
