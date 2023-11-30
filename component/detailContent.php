 </nav>
 <!-- END NAVBAR -->

 <!-- Main Section -->
 <?php
  $id_resep = $_GET["id_resep"];

  $query = "SELECT * FROM users u, resep r WHERE u.id_user = r.id_user AND r.id_resep = $id_resep";

  $hasil = mysqli_query($konek, $query);

  if (mysqli_num_rows($hasil) === 0) {
    // Nanti dirapikan lagi buat control handlingnya
    echo "<h1 class=\"text-center\">Data tidak ada / Terjadi Kesalahan</h1>";
    die;
  }
  $data = mysqli_fetch_array($hasil);  ?>

 <section class="container d-flex flex-column gap-4 pt-4 pb-5">
   <img src="./img/resep/<?= $data['foto'] ?>" alt="Foto Resep" class="gambar-resep rounded-4 shadow-lg">
   <div class="kotak shadow">
     <h2 class="fs-1"><?= $data['judul'] ?></h2>
     <p class="m-0">By. <?= $data['namaLengkap'] ?></p>
     <p class="m-0 pt-2"> <?= $data['deskripsi'] ?></p>
   </div>
   <div class="kotak shadow d-flex flex-column gap-1">
     <h2 class="fs-3">Bahan-bahan</h2>
     <div class="garis"></div>
     <p class="m-0">
       <?= $data['bahan_bahan'] ?>
     </p>
   </div>
   <div class="kotak shadow d-flex flex-column gap-1">
     <h2 class="fs-3">Cara Pembuatan</h2>
     <div class="garis"></div>
     <p class="m-0">
       <?= $data['cara_pembuatan'] ?>
     </p>
   </div>
   <div class="kotak shadow">
     <h2 class="fs-3">Ditulis Oleh</h2>
     <div class="garis"></div>
     <div class="d-flex gap-3 justify-content-start align-items-center mb-2">
       <img src="img/profile/<?= $data['profilePicture'] ?>" alt="" class="profileDitulis">
       <div>
         <h6 class="fs-5 mb-0"><?= $data['namaLengkap'] ?></h6>
         <p class="m-0">pada <?= date('d F Y', strtotime($data['tgl_pembuatan'])) ?> </p>
       </div>
     </div>
     <p class="my-0"> <?= $data['headline'] ?></p>

   </div>
   <div class="kotak shadow">
     <div class="d-flex justify-content-between align-items-center">
       <h2 class="fs-3">Resep lain dari penulis</h2>
       <i class="bi bi-arrow-right fs-3 fw-bold cursor-pointer "></i>
     </div>
     <div class="garis"></div>
     <div class="d-flex flex-wrap gap-3">
       <?php
        $id_user = $data['id_user'];
        $query = "SELECT id_resep, foto, judul FROM resep WHERE id_user = $id_user";
        $hasil = mysqli_query($konek, $query);
        while ($resep = mysqli_fetch_array($hasil)) :
        ?>
         <a href="detail.php?id_resep=<?= $resep['id_resep'] ?>">
           <div class="bg-grey border-radius-15px">
             <img src="img/resep/<?= $resep['foto'] ?>" alt="" class="gambar-card">
             <p class="my-1 py-1 text-wrap text-center text-putih"><?= $resep['judul'] ?></p>
           </div>
         </a>
       <?php endwhile; ?>

     </div>
   </div>
 </section>