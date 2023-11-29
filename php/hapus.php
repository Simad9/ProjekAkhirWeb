<?php
$id_resep = $_GET["id_resep"];

$konek = new mysqli('localhost', 'root', '', 'projek_akhir_web');

$query = "DELETE FROM resep where id_resep=$id_resep";

$cek = mysqli_query($konek, $query);
if ($cek) {
  header('location:../dashboard.php');
} else {
  header('location:../dashboard.php?notif="tidak_terhapus"');
}
