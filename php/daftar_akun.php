<?php
$konek = new mysqli('localhost', 'root', '', 'projek_akhir_web');

// Ngambil data
$username = $_POST["username"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

// cek username sudah ada atau belum
$result = mysqli_query($konek, "SELECT username FROM users WHERE username = '$username'");
if (mysqli_fetch_assoc($result)) {
  echo "<script>alert('username sudah terdaftar!')</script>";
  header('location:../login.php?pesan=terdaftar');
}

// cek konfimrasi password
if ($password !== $password2) {
  echo "<script>alert('konfirmasi password tidak sesuai!')</script>";
  header('location:../login.php?pesan=gagal');
}

// enskripsi password
$password = password_hash($password, PASSWORD_DEFAULT);
// tambah userbaru ke database
$query = "INSERT INTO `users` (`id_user`, `username`, `email`, `password`) VALUES (NULL, '$username', NULL, '$password');";
$data = mysqli_query($konek, $query);
// Kirim ke login
if ($data == true) {
  header('location:../login.php?pesan=berhasil');
} else {
  header('location:../login.php?pesan=gagal');
}
