-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2026 at 05:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporsekolah03`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'Menunggu',
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `user_id`, `fasilitas`, `kategori`, `deskripsi`, `foto`, `status`, `tanggal`) VALUES
(1, 1, 'Handphone', 'Rusak Ringan', 'Layar pecah', NULL, 'Menunggu', '2026-10-06 08:27:07'),
(2, 1, 'Handphone', 'Rusak Ringan', 'Layar pecah', NULL, 'Menunggu', '2026-10-06 08:27:24'),
(11, 1, 'Meja', 'Rusak Ringan', 'ga rusak', NULL, 'Menunggu', '2026-10-06 08:52:37'),
(12, 1, 'Kemoceng', 'Rusak Ringan', 'Patah', NULL, 'Menunggu', '2026-10-06 09:00:16'),
(13, 1, 'Bunga', 'Rusak Ringan', 'no minus', 'laporan_1791252118.jpg', 'Menunggu', '2026-10-06 09:01:57'),
(14, 1, 'Handphoneku', 'Rusak Berat', 'LCD pecah', 'laporan_1791256979.jpg', 'Menunggu', '2026-10-06 10:22:58'),
(15, 1, 'Earphone', 'Tidak Berfungsi', ' tidak terdengar', 'laporan_1791257650.jpg', 'Menunggu', '2026-10-06 10:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'siswa', '12345', 'Siswa Demo', 'siswa'),
(2, 'admin', '12345', 'Administrator', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_laporan_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_laporan_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
