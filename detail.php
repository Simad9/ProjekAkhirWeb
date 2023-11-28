<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <!-- ICONS BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar bg-grey py-2 px-5 shadow-lg d-flex align-items-center">
    <h3 class="navbar-brand text-putih">Dapur Kita</h3>
    <div class="d-flex gap-2">
      <a class="text-decoration-none text-light nav-item" href="#">Home</a>
      <a class="text-decoration-none text-light nav-item" href="#">Menu</a>
      <a class="text-decoration-none text-light nav-item" href="#">About</a>
      <a class="text-decoration-none text-light nav-item" href="#">News</a>
    </div>
    <div class="d-flex justify-content-center align-items-center gap-3">
      <i class="bi bi-search fs-5 text-putih"></i>
      <img src="img/profile.jpeg" alt="" class="profilePicture">
    </div>
  </nav>
  <!-- END NAVBAR -->

  <!-- Main Section -->
  <section class="container d-flex flex-column gap-4 pt-4">
    <img src="./img/cendol.webp" alt="" class="gambar-resep rounded-4 shadow-lg">
    <div class="kotak shadow">
      <h4>Cendol Tepung Beras Daun Suji</h4>
      <p class="m-0">By. Wijdan</p>
    </div>
    <div class="kotak shadow d-flex flex-column gap-1">
      <h5>Bahan-bahan</h5>
      <div class="garis"></div>
      <p class="m-0">
        60 gr tepung beras (rosebrand) <br>
        20 gr tepung tapioka (liauw liong pit) <br>
        Sedikit garam halus <br>
        375 ml Air perasan daun suji+pandan <br>
        Air es + es batu
      </p>
    </div>
    <div class="kotak shadow d-flex flex-column gap-1">
      <h5>Bahan-bahan</h5>
      <div class="garis"></div>
      <p class="m-0">
        60 gr tepung beras (rosebrand) <br>
        20 gr tepung tapioka (liauw liong pit) <br>
        Sedikit garam halus <br>
        375 ml Air perasan daun suji+pandan <br>
        Air es + es batu
      </p>
    </div>
    <div class="kotak shadow">
      <h5>Ditulis Oleh</h5>
      <div class="garis"></div>
      <div class="d-flex gap-3 justify-content-start align-items-center mb-2">
        <img src="img/profile.jpeg" alt="" class="profileDitulis">
        <div>
          <h6 class="fs-5 mb-0">Wijdan</h6>
          <p class="m-0">pada 00 September 2023</p>
        </div>
      </div>
      <p class="my-0"> Diskripsi Orang</p>

    </div>
    <div class="kotak shadow">
      <div class="d-flex justify-content-between align-items-center">
        <h5>Resep lain dari penulis</h5>
        <i class="bi bi-arrow-right fs-3 fw-bold cursor-pointer cursor-pointer"></i>
      </div>
      <div class="garis"></div>
      <div class="d-flex flex-wrap gap-3">

        <div class="bg-grey border-radius-15px">
          <img src="img/cendol.webp" alt="" class="gambar-card">
          <p class="my-1 py-1 text-wrap text-center text-putih">Judul Resep</p>
        </div>

        <div class="bg-grey border-radius-15px">
          <img src="" alt="" class="gambar-card">
          <p class="my-1 py-1 text-wrap text-center text-putih">Judul Resep</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER SECTIOn -->
  <!-- COPAS DARI TAMPLATE -->
  <!-- <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>Contact Us</h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> WA 08123456789 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> dapurkita@gmail.com </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo"> Dapur Kita </a>
            <p style="text-align: justify">
              Dapur Kita, sumber inspirasi kuliner penuh kreativitas! Temukan
              resep-resep lezat dari berbagai masakan, ikuti tips ahli, dan
              jalin komunitas dengan sesama pecinta masak.
            </p>
            <br />
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>Apa yang pembuat katakan</h4>
          <p>Selamat memasak!</p>
          <p>SEMANGAT!</p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> Created by
          <a href="https://themewagon.com/" target="_blank">Dapur Kita</a>
        </p>
      </div>
    </div>
  </footer> -->

</body>

</html>