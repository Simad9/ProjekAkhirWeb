<?php require './component/head-data.php' ?>
<title>Login</title>
<?php require './component/LogRegTop.php' ?>

<h1 class="text-center mb-3">Selamat Datang</h1>
<form action="./php/cek_login.php" method="post">
  <div>
    <div class="mb-1">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" name="username" id="username">
    </div>
    <div class="mb-2" x-data="{eye : true}">
      <label for="password" class="form-label">Password</label>
      <div class="d-flex justify-content-center align-items-center position-relative">
        <input :type="eye ? 'password' : 'text'" class="form-control" id="password" name="password">
        <i @click="eye = !eye" :class="eye ? 'bi-eye-slash':'bi-eye-fill' " class="bi text-hitam position-absolute cursor-pointer end-0 me-2"></i>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-end">
    <a href="#" class="cursor-pointer text-13px forget-hover">Lupa password?</a>
  </div>

  <div class="d-flex justify-content-center mb-3 mt-2">
    <a class="text-decoration-none" href="dashboard.php"><button type="submit" class="btn-manual">Masuk</button></a>
  </div>
</form>

<div class="d-flex flex-column justify-content-center align-items-center gap-2">
  <p class="m-0 text-grey2 text-15px">atau masuk dengan</p>
  <div class="d-flex gap-2">
    <div class="icons">
      <img src="./icons/google.svg" alt="">
    </div>
    <div class="icons">
      <img src="./icons/github.svg" alt="">
    </div>
    <div class="icons">
      <img src="./icons/facebook.svg" alt="">
    </div>
  </div>
  <p class="text-grey2 .text-15px">Belum punya akun?
    <span">
      <a href="register.php" class="cursor-pointer daftar-login_sekarang text-decoration-none">Daftar
        sekarang</a>
      </span>
  </p>
</div>
</div>
</div>
</div>
</body>

</html>