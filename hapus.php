<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($konek, "DELETE FROM users where id=$id");
if ($query) {
    header('Location: index.php');
} else {
    header('Location: home.php?status=gagal');
}
?>