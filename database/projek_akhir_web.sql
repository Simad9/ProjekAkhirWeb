-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 09:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_akhir_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `bahan_bahan` text NOT NULL,
  `cara_pembuatan` text NOT NULL,
  `tgl_pembuatan` date NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `judul`, `deskripsi`, `bahan_bahan`, `cara_pembuatan`, `tgl_pembuatan`, `foto`, `id_user`) VALUES
(9, 'Kolak Pisang', 'Kolak pisang adalah hidangan tradisional Indonesia yang terdiri dari pisang dimasak dalam kuah manis berbasis kelapa, dengan tambahan gula merah, pandan, dan kelapa parut. Pisang yang lembut bertemu dengan kuah kaya dan gurih, menjadikannya hidangan penutup hangat yang sering dihadirkan dalam berbagai momen spesial di Indonesia.', 'pisang kepok, 1/2 kg ubi madu, santan (1/2 buah kelapa arut), daun pandan, gula pasir, garam, Gula merah secukupnya (sebagai pewarna biar gak pucat)', 'Kupas ubi,dan potong pisang beserta ubi cuci dan sisihkan. \r\nLalu peras santan ke wadah,masukkan ubi dan pisang yg sudah di potong, Lalu didihkan,sambil menunggu ubinya empuk masukkan daun pandan,garam,gula,gula merah tunggu hingga meresap sekitar 5 menit.tes rasa jika sudah pas matikan api dan sajikan.', '2023-11-30', '65683c1ca826b.webp', 2),
(10, 'Cendol Dawet', 'Cendol dawet merupakan minuman tradisional Indonesia yang menyegarkan dan unik. Terdiri dari cendol, sejenis adonan berwarna hijau dari tepung beras, yang disajikan dalam santan kelapa dan gula merah cair. Dawet, sejenis jelly hijau, juga sering ditambahkan untuk memberikan tekstur kenyal. Cendol dawet dikenal akan kombinasi rasa manis, segar, dan lembut, menjadikannya pilihan populer untuk meredakan dahaga dan menikmati sensasi rasa tradisional Indonesia.', '60 gr Tepung Beras, \r\n40 gr Tepung Tapioka, \r\n1 Bks Nutrijell Plain, 10gr / kecil (me: Nutrijell Melon), \r\n1/2 sdt Garam, \r\n1 sdm Gula Pasir, \r\n500 ml Air, \r\nSecukupnya Perisa Pandan,\r\nSecukupnya Es batu.', 'Campur tepung, garam, gula &amp; Nutrijell.. Aduk rata Masukkan air, lalu aduk hingga tak ada yg bergerindil, tambahkan perisa pandan ½ sdt atau secukupnya.    Jerang di atas kompor, aduk perlahan sampai kental &amp; meletup² Kecilkan api, aduk terus hingga adonan kalis, terlihat bening &amp; mengkilap... matikan api      Siapkan wadah berisi air &amp; es batu     Segera cetak menggunakan cetakan dawet atau pakai saringan/parutan kasar sepertiku On Pict ini masih kurang kalis yaaa, terlalu lemes, tapi aku dah tak sabar 😁     Lumayan.... Ada beras merah nyempil 🤭 tadi tepung berasnya kurang 1sdm, jadi aku kasih tepung beras merah (blender sendiri) 😁', '2023-11-30', '65683d359bea5.webp', 2),
(11, 'Es Pisang Ijo', 'Es Pisang Ijo adalah hidangan penutup khas Makassar, Indonesia, yang terkenal dengan kelezatan dan keunikan penyajiannya. Hidangan ini terdiri dari pisang yang dibungkus dengan lapisan adonan berwarna hijau dari tepung beras ketan, kemudian dikukus hingga matang. Pisang yang telah dibalut adonan hijau tersebut kemudian dipotong tipis dan disajikan dengan saus santan dan sirup gula merah. Es Pisang Ijo menawarkan kombinasi rasa manis, lembut, dan segar, menjadikannya hidangan yang sangat disukai untuk dinikmati dalam suasana hangat Indonesia.', '3 buah pisang kepok, \r\n☘️BAHAN PISANG IJO, \r\n35 gram tepung beras, \r\n35 gram tepung terigu, \r\n75 ml jus pandan (10 lbr daun pandan, 4 daun Suji 300 ml air), \r\nSecubit garam, \r\n1/2 sachet segitiga santan, \r\n☘️BAHAN BUBUR SUM SUM, \r\n60 gram tepung beras, \r\n500 ml air, \r\n1.5 segitiga santan, \r\n1/4 sdt garam, \r\n1 sdm gula pasir, \r\n1 lembar daun pandan di sobek lalu di simpul, \r\n☘️BAHAN LAINNYA, \r\ndisesuaikan Sirup cocopandan, \r\ndisesuaikan Es batu, ', 'Kukus pisang kepok 10 menit. Jus daun pandan dan daun Suji, lalu saring,   Dalam panci campur jadi satu terigu dan tepung beras,tambahkan garam,gula dan jus pandan,serta santan instan. Aduk rata tidak ada yg bergerindil. Masak dengan api kecil sambil diaduk hingga Kalis, tidak menempel di panci. angkat.   Ambil secukupnya adonan, alasi dng plastik. Pipihkan adonan merata lalu taruh pisang diatas nya dan guling serta rapikan hingga pisang terbalut adonan sempurna. Kukus selama 20 menit atau sampai matang   Masukkan bahan bubur jadi satu. Masak bahan bubur sambil sesekali di aduk aduk supaya tidak gosong.   Aduk aduk terus sampai mendidih dan meletup letuo. Matikan api  Ambil mangkok. Isi dengan bubur sum sum. Lalu potong2 pisang ijo dan tata diatas nya.beri es batu lalu tambahkan sirup cocopandan. Enak banget segar dan mengenyangkan', '2023-11-30', '65683dffcb1ea.webp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `profilePicture` varchar(255) DEFAULT 'profile-dummy.png',
  `namaLengkap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `headline`, `profilePicture`, `namaLengkap`) VALUES
(1, '123', NULL, '$2y$10$zo6zYOO48h69FBYfyC3lgOXzPZdZYOqDZBeFYZKdy9bsESkoTnkz2', NULL, 'profile-dummy.png', NULL),
(2, 'wijdan', 'wijdan@gmail.com', '$2y$10$pW4frmTIKVu4gaAS3EahiOEHXgOCVFKq43u36fc3I/B3Ab0pGTRZS', 'Mahasiswa yang suka menulis minuman khas Indonesia', '65683b5ca0a91.jpeg', ' Wijdan Akhmad'),
(3, 'adit', NULL, '$2y$10$lHS2kHs.erS5GmfTuZGgZO9Y0JHA4gUUJVW9gc0rhDRCSj1otY6WG', NULL, 'profile-dummy.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
