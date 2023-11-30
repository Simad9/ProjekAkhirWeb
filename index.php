<?php
$konek = new mysqli('localhost', 'root', '', 'projek_akhir_web');
?>
<?php require './component/head-data.php' ?>

<!-- BELUM LOGIN -->
<title>Dapur Kita </title>
<?php require './component/homeMainTop.php' ?>

<a class="nav-link" href="index.php">Home </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="menu.php">Resep</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="about.php">Tentang Kami</a>
</li>
</ul>

<div class="user_option">
  <form class="form-inline">
    <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
      <i class="fa fa-search" aria-hidden="true"></i>
    </button>
  </form>
  <a href="login.php" class="order_online"> Login </a>
</div>

<?php require './component/homeMainMid.php' ?>
<div class="row">
      <!-- CARD -->
      <?php
      $query = mysqli_query($konek, "SELECT * FROM resep");
      while ($row = mysqli_fetch_array($query)) {
      ?>
        <div class="col-sm-6 col-lg-4">

          <div class="box">
            <div>
              <div class="img-box">
                <img src="./img/resep/<?= $row['foto'] ?>" alt="" />
              </div>
              <div class="detail-box">
                <h5 class="text-center"><?= $row['judul'] ?></h5>

                <div class="truncate-line-clamp">
                  <p><?= $row['deskripsi'] ?></p>
                </div>

                <div class="btn-box">
                  <a href="detailBelumLogin.php?id_resep=<?= $row['id_resep'] ?>" class="btn1"> Lanjut Baca </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      <?php } ?>
    </div>


<div class="text-center btn-box">
  <a href="menu.php">Lihat Lainnya</a>
</div>

<?php require './component/homeMainBot.php' ?>
<?php require './component/footer-data.php' ?>
