-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 04:58 AM
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
(1, 'Es teh', 'Ini Deskripsi teh', 'es', 'seduh air', '2023-11-27', '', 1),
(2, 'Lemper', '', '500 gram beras ketan', 'Rendam beras ketan minimal 1 jam (saya 18 jam karena proses masak mengalami delay 🤭🤭🤭. Tapi diganti air rendamannya agar tidak bau)', '2023-11-28', '', 10),
(3, 'Lemper', 'Deskripsi Lemper', 'Nasi', 'Ini dia caranya', '2023-11-28', '6565a5d72f9ed.jpg', 12),
(4, 'test', '', 'test', 'test', '2023-11-28', '6565bd7d41666.png', 13),
(5, 'Cendol Enak', 'Saya gak jago bikin cendol tapi saya mencoba', 'Katanya sih tepung', 'Saya cari google\r\n', '2023-11-29', '6566b4cb447d2.webp', 12);

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
  `profilePicture` varchar(255) DEFAULT NULL,
  `namaLengkap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `headline`, `profilePicture`, `namaLengkap`) VALUES
(1, 'wijdan', 'wijdan123@gmail.com', 'wijdan123', 'Pelajar suka masak', NULL, NULL),
(10, 'wijdan123', '123@gmail.com', '$2y$10$uiokJNEsmcONACCdq2KvwuflH4tMNZtJs1OuHuj5RIGHRYut9zCeG', NULL, NULL, NULL),
(12, '123', 'wijdan@gmail.com', '$2y$10$Povndd0Q/sqz6haWBLNs5elO1QxtJt.nQmONDUIhWBrhaeRS/QymS', 'Mahasiswa Aja', '65659f1abe425.jpeg', 'Wijdan Akhmad'),
(14, 'A', 'wijdan@gmail.com', '$2y$10$qOzUHiGjSsPZLdsc2SAokuvOahMoL4kV2ehRQkOYaUvLvR3Qu3YJq', 'Mahasiswa Aja', '6565be4d89ce6.png', 'A');

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
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
