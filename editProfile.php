<?php
session_start();
?>

<?php require './component/head-data.php' ?>

<title>Edit Profile</title>
</head>

<body>

  <section class="d-flex h-100dvh">
    <!-- NAVBAR -->
    <div class="kiri col-3 bg-grey d-flex flex-column justify-content-center position-fixed h-100">
      <a href="homepage.php">
        <h1 class="text-center text-putih mt-5 mb-4">Dapur Kita</h1>
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
            <div class="d-flex justify-content-start align-items-end gap-2 item-navigation  px-3 cursor-pointer">
              <i class="bi bi-plus-lg fs-3"></i>
              <h4>Tambah Resep</h4>
            </div>
          </a>
          <a class="text-decoration-none" href="editProfile.php">
            <div class="d-flex justify-content-start align-items-end gap-2 item-navigation active px-3 cursor-pointe">
              <i class="bi bi-person-fill fs-3"></i>
              <h4>Edit Profile</h4>
            </div>
          </a>
        </div>

        <a class="text-decoration-none" href="login.php">
          <div class="d-flex justify-content-center align-items-end gap-2 item-navigation">
            <i class="bi bi-box-arrow-in-right fs-3 "></i>
            <h4>Keluar</h4>

            <?php require './component/dashProfile.php' ?>

            <!-- MAIN -->
            <div class="wadah kotakv3 shadow">
              <div class="mx-2 mt-2">
                <h2>Edit Profile</h2>
                <div class="garis"></div>
              </div>

              <!-- CONTAIN -->
              <form action="./php/editProfile.php" method="post" enctype="multipart/form-data" class="resep d-flex flex-wrap justify-content-start gap-2 mx-2">
                <div class="w-75 d-flex flex-column align-items-start">
                  <h4 class="mt-2">Foto Profile : </h4>
                  <div class="d-flex justify-content-start align-items-center gap-3">
                    <img src="./img/profile/<?= $_SESSION['profilePicture'] ?>" id="imageView" class="bg-secondary progilePictureView mt-2 rounded-4">
                    <div class="w-40 d-flex flex-column justify-content-start align-items-start gap-1">
                      Gambar Profile Anda sebaiknya memiliki rasio 1:1dan berukuran tidak lebih dari 2MB.
                      <input id="file-upload" type="file" name="profilePicture" accept="image/*" onchange="loadFile(event)" class="w-100" required />
                    </div>
                  </div>
                </div>

                <?php
                $konek = new mysqli('localhost', 'root', '', 'projek_akhir_web');
                $id_user = $_SESSION['id_user'];
                $hasil = mysqli_query($konek, "SELECT * FROM users WHERE id_user =  $id_user");
                $data = mysqli_fetch_array($hasil);
                ?>

                <div class="w-100 ">
                  <h4 class="mt-2">Nama Lengkap : </h4>
                  <input type="text" class="form-control border-black" placeholder="Nama Lengkap" name="namaLengkap" value="<?= $data['namaLengkap'] ?> " required>
                </div>
                <div class="w-100 ">
                  <h4 class="mt-2">Username : </h4>
                  <input type="text" class="form-control border-black" placeholder="Username" name="username" value="<?= $data['username'] ?>">
                </div>
                <div class="w-100 ">
                  <h4 class="mt-2">Email : </h4>
                  <input type="email" class="form-control border-black" placeholder="Email" name="email" value="<?= $data['email'] ?>">
                </div>
                <div class="w-100 ">
                  <h4 class="mt-2">Headline : </h4>
                  <input type="text" class="form-control border-black" placeholder="Contoh : Mahasiswa yang suka memasak" name="headline" value="<?= $data['headline'] ?>" required>
                </div>


                <div class="w-100 d-flex justify-content-center mt-4">
                  <button type="submit" class="btn-manual">Kirim</button>
                </div>

              </form>
              <!-- END CONTAIN -->


            </div>
            <!-- END MAIN -->
          </div>
  </section>

  <script src="js/previewImg.js"></script>
</body>

</html>