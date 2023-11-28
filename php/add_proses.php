<?php
include "../koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $foto   = $_FILES['foto'];
    $judul = $_POST["judul"];
    $bahan_bahan = $_POST["bahan_bahan"];
    $cara_pembuatan = $_POST["cara_pembuatan"];
    $tgl_pembuatan = $_POST["tgl_pembuatan"];

    $query = mysqli_query(
        $konek,
        "INSERT INTO resep (judul, bahan_bahan, cara_pembuatan, tgl_pembuatan, foto) VALUES ('$judul', '$bahan_bahan', $cara_pembuatan, '$tgl_pembuatan', '$foto')"
    ) or die(mysqli_error($konek));
    }
    if ($query) {
        header('Location: ../dashboard.php');
    } else {
        header('Location: ../dashboard.php');
    }

?>