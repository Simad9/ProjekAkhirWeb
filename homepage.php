<?php
session_start();
include "koneksi.php";
?>

<!-- SUDAH LOGIN -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="" />
  <title>Dapur Kita | Homepage</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="" />
    </div>
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <span> Dapur Kita </span>
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menuSudahLogin.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
            </ul>

            <div class="user_option">
              <form class="form-inline">
                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>

              <a href="dashboard.php"> <img src="./img/profile/<?= $_SESSION['profilePicture'] ?>" class="profilePicture"> </a>


            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box">
                    <h1>WELCOME</h1>
                    <p style="text-align: justify">
                      Selamat datang di Dapur Kita, tempat di mana kreasi
                      kuliner menjadi keajaiban! Dapur Kita adalah sumber
                      inspirasi utama untuk pencinta masak, baik pemula maupun
                      koki berpengalaman. Kami memahami bahwa dapur bukan
                      hanya tempat memasak, tetapi juga ladang kreativitas di
                      mana setiap bahan dan setiap langkah memasak menjadi
                      bagian dari perjalanan kuliner yang menggembirakan.
                    </p>
                    <div class="btn-box">
                      <a href="menuSudahLogin.php" class="btn1"> Jelajahi </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- food section -->
  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center" style="margin-top: 50px">
        <h2>Recipes</h2>
      </div>

      <br>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f1.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>Delicious Pizza</h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo,
                    quisquam velit, magnam voluptatem repellendus sed eaque
                  </p>
                  <div class="btn-box">
                    <a href="#" class="btn1"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f2.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>Delicious Burger</h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo,
                    quisquam velit, magnam voluptatem repellendus sed eaque
                  </p>
                  <div class="btn-box">
                    <a href="#" class="btn1"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/f3.png" alt="" />
                </div>
                <div class="detail-box">
                  <h5>Delicious Pizza</h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo,
                    quisquam velit, magnam voluptatem repellendus sed eaque
                  </p>
                  <div class="btn-box">
                    <a href="#" class="btn1"> Read More </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="menu.php"> More Recipes? </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->

  <section class="about_section layout_padding" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Dapur Kita</h2>
            </div>
            <p style="text-align: justify">
              Di Dapur Kita, kami menawarkan lebih dari sekadar resep-resep
              yang lezat. Kami adalah komunitas yang terhubung oleh cinta akan
              masakan, dan kami berbagi pengalaman, tips, dan trik yang dapat
              meningkatkan keterampilan memasak Anda. Apakah Anda mencari ide
              hidangan sehari-hari, resep untuk acara istimewa, atau informasi
              tentang berbagai bahan makanan, Dapur Kita adalah panduan
              lengkap Anda.
            </p>
            <a href=""> Read More </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45" style="margin-top: 50px">
        <h2>Apa yang pengunjung katakan</h2>
      </div>
      <div class="carousel-wrap row">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  "Dapur Kita benar-benar menyelamatkan hidup saya! Sebagai
                  ibu bekerja, saya selalu mencari resep yang cepat dan lezat.
                  Dapur Kita tidak hanya memberikan resep yang mudah diikuti,
                  tetapi juga memberikan tips yang bermanfaat. Terima kasih
                  Dapur Kita!
                </p>
                <h6>Siti Rahma</h6>
                <p>Jakarta</p>
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img" />
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Saya baru belajar memasak, dan Dapur Kita menjadi panduan
                  terbaik saya. Resep-resepnya variatif, dan instruksinya
                  sangat jelas. Saya bahkan berhasil membuat hidangan istimewa
                  untuk ulang tahun istri saya. Puas sekali!
                </p>
                <h6>Andi Setiawan</h6>
                <p>Surabaya</p>
              </div>
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>Contact Us</h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> WA 08123456789 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> dapurkita@gmail.com </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo"> Dapur Kita </a>
            <p style="text-align: justify">
              Dapur Kita, sumber inspirasi kuliner penuh kreativitas! Temukan
              resep-resep lezat dari berbagai masakan, ikuti tips ahli, dan
              jalin komunitas dengan sesama pecinta masak.
            </p>
            <br />
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>Apa yang pembuat katakan</h4>
          <p>Selamat memasak!</p>
          <p>SEMANGAT!</p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> Created by
          <a href="https://themewagon.com/" target="_blank">Dapur Kita</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>