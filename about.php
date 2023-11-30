<?php
session_start();
?>
<?php require './component/head-data.php' ?>
<?php require './component/aboutTop.php' ?>

<!-- BELUM LOGIN -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mx-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="menu.php">Resep</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="about.php">Tentang Kami <span class="sr-only">(current)</span>
      </a>
    </li>
  </ul>
  <div class="user_option">
    <form class="form-inline">
      <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>
    <a href="login.php" class="order_online">Login </a>

    <?php require './component/aboutContent.php' ?>
    <?php require './component/footer-data.php' ?>
