<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <!-- ICONS BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- ALPINE JS -->
  <script src="//unpkg.com/alpinejs" defer></script>
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-login h-100dvh">
  <div class="d-flex bg-login h-100">
    <div class=" kiri col-7 d-flex flex-column justify-content-center align-items-center text-light">
      <h2>Mari bergabung di Dapur Kita!</h2>
      <p>Menjelajahi Rasa, Membagikan Kreativitas.</p>
      <div class="d-flex justify-content-center mb-3 mt-2">
          <a class="text-decoration-none" href="index.php"><button type="submit" class="btn-manual">Kembali</button></a>
      </div>
    </div>
    <div class="kanan col-5 d-flex flex-column justify-content-center align-items-center text-light">
      <div class="card bg-grey p-3 text-putih w-75">
        <h2 class="text-center">Daftar Akun</h2>
        <div>
          <form action="./php/daftar_akun.php" method="post">
            <div class="mb-1">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-2" x-data="{eye : true}">
              <label for="password" class="form-label">Password</label>
              <div class="d-flex justify-content-center align-items-center position-relative">
                <input :type="eye ? 'password' : 'text'" class="form-control" id="password" name="password">
                <i @click="eye = !eye" :class="eye ? 'bi-eye-slash':'bi-eye-fill' " class="bi text-hitam position-absolute cursor-pointer end-0 me-2"></i>
              </div>
            </div>
            <div class="mb-2" x-data="{eye : true}">
              <label for="password" class="form-label">Re-Password</label>
              <div class="d-flex justify-content-center align-items-center position-relative">
                <input :type="eye ? 'password' : 'text'" class="form-control" id="password" name="password2">
                <i @click="eye = !eye" :class="eye ? 'bi-eye-slash':'bi-eye-fill' " class="bi text-hitam position-absolute cursor-pointer end-0 me-2"></i>
              </div>
            </div>
        </div>

        <div class="d-flex justify-content-center my-3">
          <button type="submit" class="btn-manual">Daftar</button>
        </div>

        </form>

        <div class="d-flex flex-column justify-content-center align-items-center gap-2">
          <p class="text-grey2 .text-15px">Punya akun?
            <span">
              <a href="login.php" class="cursor-pointer daftar-login_sekarang text-decoration-none">Masuk
                sekarang</a>
              </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>