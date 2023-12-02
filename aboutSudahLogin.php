<?php
session_start();
?>
<?php require './php/session.php' ?>
<?php require './component/head-data.php' ?>
<?php require './component/aboutTop.php' ?>

<!-- SUDAH LOGIN -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mx-auto">
    <li class="nav-item ">
      <a class="nav-link" href="homepage.php">Home </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="menuSudahLogin.php">Resep</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#about">Tentang Kami</a>
    </li>
  </ul>
  <div class="user_option">
    <form class="form-inline">
      <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>
    <a href="dashboard.php"> <img src="./img/profile/<?= $_SESSION['profilePicture'] ?>" class="profilePicture"> </a>

    <?php require './component/aboutContent.php' ?>
    <?php require './component/footer-data.php' ?>
