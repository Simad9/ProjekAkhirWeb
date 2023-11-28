<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

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
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
  />
  <!-- nice select  -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous"
  />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <section class="d-flex h-100dvh " >
    <!-- NAVBAR -->
    <div class="kiri col-3 bg-grey d-flex flex-column justify-content-center position-fixed h-100">
      <h3 class="text-center text-putih mt-5 mb-4">Dapur Kita</h3>
      <div class="p-2 mt-2 d-flex flex-column justify-content-between h-100">

        <div class="tempat-nav-item d-flex flex-column gap-1">
          <a class="text-decoration-none" href="dashboard.php">
            <div class="d-flex justify-content-start align-items-end gap-2 item-navigation active px-3 cursor-pointe">
              <i class="bi bi-grid fs-3"></i>
              <h4>Resep Saya</h4>
            </div>
          </a>
          <a class="text-decoration-none" href="tambah.php">
            <div class="d-flex justify-content-start align-items-end gap-2 item-navigation px-3 cursor-pointer">
              <i class="bi bi-plus-lg fs-3"></i>
              <h4>Tambah Resep</h4>
            </div>
          </a>
          <a class="text-decoration-none" href="edit.php">
            <div class="d-flex justify-content-start align-items-end gap-2 item-navigation px-3 cursor-pointe">
              <i class="bi bi-person-fill fs-3"></i>
              <h4>Edit Profile</h4>
            </div>
          </a>
        </div>

        <a class="text-decoration-none" href="login.php">
          <div class="d-flex justify-content-center align-items-end gap-2 item-navigation">
            <i class="bi bi-box-arrow-in-right fs-3 "></i>
            <h4>Keluar</h4>
          </div>
        </a>

      </div>
    </div>
    <!-- END NAVBAR -->
    <!-- KIRI TIPUAN -->
    <div class="kiri-tipuan col-3 h-100">
    </div>
    <!-- END KIRI TIPUAN -->

    <!-- KANAN -->
    <div class=" kanan col-9 bg-putih p-2 ">

      <!-- NAVIGATION PROFILE -->
      <div class="profile d-flex justify-content-between kotakv2 shadow">
        <div class="d-flex justify-content-center align-items-center">
          <h3 class="m-0">Selamat Datang, <?= $_SESSION['username'] ?> </h3>
        </div>
        <div class="akun d-flex gap-2 align-items-center justify-content-center me-2 ">
          <a class="text-decoration-none text-hitam" href="tambah.php"><i
              class="bi bi-plus-lg fs-3 cursor-pointer"></i></a>
          <img src="img/profile.jpeg" alt="Profile" class="profilePicture">
        </div>
      </div>
      <!-- END NAVIGAION PROFILE -->

      <!-- MAIN -->
      <div class="wadah kotakv3 shadow ">
        <div class="mx-2 mt-2">
          <h2>Resep Saya</h2>
          <div class="garis"></div>
        </div>

        <!-- CONTAIN -->
        <?php
          $query = mysqli_query($konek, "SELECT * FROM resep");
          while ($row = mysqli_fetch_array($query)) {
        ?>

        <section class="food_section layout_padding">
        <div class="filters-content" >
          <div class="row grid">
            <div class="col-sm-6 col-lg-4 all pizza">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="images/f1.png" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5><?= $row['judul']; ?></h5>
                      <p>
                        <?= $row['bahan_bahan']; ?>
                      </p>
                      <p>
                        <?= $row['cara_pembuatan']; ?>
                      </p>
                      <div class="d-flex justify-content-between px-3 py-2">
                        <button class="btn-manual">
                          <i class="bi bi-pencil-square"></i>
                          Edit
                        </button>
                        <button class="btn-hapus">
                          <i class="bi bi-trash"></i>
                          Hapus
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </section>
        <?php } ?>

        <!-- END CONTAIN -->
      </div>
      <!-- END MAIN -->
    </div>
    </section>


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
</body>

</html>