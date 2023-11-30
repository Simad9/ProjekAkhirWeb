</head>

<body class="bg-login h-100dvh">
  <div class="d-flex bg-login h-100">
    <div class=" kiri col-7 d-flex flex-column justify-content-center align-items-center text-light">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="m-1">Selamat datang kembali di </h2>
        <h2 class="fs-1">Dapur Kita</h2>
      </div>
      <p>Menjelajahi Rasa, Membagikan Kreativitas.</p>
      <div class="d-flex justify-content-center mb-3 mt-2">
        <a class="text-decoration-none" href="index.php"><button type="submit" class="btn-manual">Kembali</button></a>
      </div>
    </div>
    <div class="kanan col-5 d-flex flex-column justify-content-center align-items-center text-light">
      <div class="card bg-grey p-3 text-putih w-75">
        <?php
        if (isset($_GET["pesan"])) {
          if ($_GET["pesan"] == "berhasil") {
            echo "<script>alert('Akun berhasil Terdaftar')</script>";
          } else if ($_GET["pesan"] == "gagal") {
            echo "<script>alert('Email dan Password salah')</script>";
          } else if ($_GET["pesan"] == "keluar") {
            echo "<script>alert('Berhasil Keluar')</script>";
          } else if ($_GET["pesan"] == "terdaftar") {
            echo "<script>alert('Sudah Terdaftar')</script>";
          }
        }
        ?>