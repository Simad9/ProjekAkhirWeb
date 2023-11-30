<?php require './component/head-data.php' ?>
<title>Register</title>
<?php require './component/LogRegTop.php' ?>

<h1 class="text-center mb-3">Daftar Akun</h1>
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