<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- ICONS BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <section class="d-flex h-100dvh">
    <!-- NAVBAR -->
    <div class="kiri col-3 bg-grey d-flex flex-column justify-content-center position-fixed h-100">
      <a href="homepage.php">
        <h3 class="text-center text-putih mt-5 mb-4">Dapur Kita</h3>
      </a>
      <div class="p-2 mt-2 d-flex flex-column justify-content-between h-100">
        <div class="tempat-nav-item d-flex flex-column gap-1">
          <a class="text-decoration-none" href="dashboard.php">
            <div class="d-flex justify-content-start align-items-end gap-2 item-navigation px-3 cursor-pointe">
              <i class="bi bi-grid fs-3"></i>
              <h4>Resep Saya</h4>
            </div>
          </a>
          <a class="text-decoration-none" href="tambah.php">
            <div class="d-flex justify-content-start align-items-end gap-2 item-navigation active px-3 cursor-pointer">
              <i class="bi bi-plus-lg fs-3"></i>
              <h4>Tambah Resep</h4>
            </div>
          </a>
          <a class="text-decoration-none" href="editProfile.php">
            <div class="d-flex justify-content-start align-items-end gap-2 item-navigation px-3 cursor-pointe">
              <i class="bi bi-person-fill fs-3"></i>
              <h4>Edit Profile</h4>
            </div>
          </a>
        </div>

        <a class="text-decoration-none" href="login.php">
          <div class="d-flex justify-content-center align-items-end gap-2 item-navigation">
            <i class="bi bi-box-arrow-in-right fs-3"></i>
            <h4>Keluar</h4>
          </div>
        </a>
      </div>
    </div>
    <!-- END NAVBAR -->
    <!-- KIRI TIPUAN -->
    <div class="kiri-tipuan col-3 h-100"></div>
    <!-- END KIRI TIPUAN -->

    <!-- KANAN -->
    <div class="kanan col-9 bg-putih p-2">
      <!-- NAVIGATION PROFILE -->
      <div class="profile d-flex justify-content-between kotakv2 shadow">
        <div class="d-flex justify-content-center align-items-center">
          <h3 class="m-0">Selamat Datang, <?= $_SESSION['username'] ?></h3>
        </div>
        <div class="akun d-flex gap-2 align-items-center justify-content-center me-2">
          <img src="./img/profile/<?= $_SESSION['profilePicture'] ?>" class="profilePicture">
        </div>
      </div>
      <!-- END NAVIGAION PROFILE -->

      <!-- MAIN -->
      <div class="wadah kotakv3 shadow">
        <div class="mx-2 mt-2">
          <h2>Tambah Resep</h2>
          <div class="garis"></div>
        </div>

        <!-- CONTAIN -->

        <form action="./php/add_proses.php" method="post" enctype="multipart/form-data">
          <div class="resep d-flex flex-wrap justify-content-start gap-2 mx-2">
            <div class="w-75 d-flex flex-column align-items-start">
              <div class="d-flex justify-content-center align-items-center">
                <h4 class="mt-2">Gambar Makanan :</h4>
                <div>
                  <input id="file-upload" name="foto" type="file" accept="image/*" onchange="loadFile(event)" class="ms-3" />
                </div>
              </div>
              <img src="" id="imageView" class="bg-secondary gambar-resep-prev mt-2 rounded-4" />
            </div>

            <div class="w-100">
              <h4 class="mt-2">Judul Makanan :</h4>
              <input type="text" name="judul" class="form-control border-black" placeholder="Judul Makanan" />
            </div>

            <div class="w-100">
              <h4 class="mt-2">Deskripsi Singkat :</h4>
              <textarea name="deskripsi" class="form-control border-black" placeholder="Deskripsi singkat" style="height: 100px; resize: none"></textarea>
            </div>

            <div class="w-100">
              <h4 class="mt-2">Bahan-bahan :</h4>
              <textarea name="bahan_bahan" class="form-control border-black" placeholder="Bahan-bahan" style="height: 100px; resize: none"></textarea>
            </div>

            <div class="w-100">
              <h4 class="mt-2">Cara Pembuatan :</h4>
              <textarea name="cara_pembuatan" class="form-control border-black" placeholder="Cara Pembuatan" style="height: 100px; resize: none"></textarea>
            </div>

            <div class="w-100 d-flex justify-content-center mt-4">
              <button type="submit" class="btn-manual">Kirim</button>
            </div>
          </div>
        </form>
        <!-- END CONTAIN -->
      </div>
      <!-- END MAIN -->
    </div>
  </section>

  <script>
    var loadFile = function(event) {
      var output = document.getElementById("imageView");
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src); // free memory
      };
    };
  </script>
</body>

</html>