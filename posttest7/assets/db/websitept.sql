-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 10:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitept`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `pw`) VALUES
(1, 'nopenul', 'nopenul@gmail.com', '$2y$10$zvAOIkyaxQHmu97gYxNJ4e9LskU9LNGuDFYGdobx46FF8DzZ.lzie'),
(2, 'refalHady', 'repal@gmail.com', '$2y$10$8fkmsb3KcMWPWhjMTZWEiefoi.uBH3iSzRNutsHLtWQrcTXXTg0PC'),
(3, 'admin', 'admin@gmail.com', '$2y$10$YA8fv2BPQfzAUNDngHCfru8vV3n7taPyr/zZW1JHKqYaQD5ZDP6Sq');

-- --------------------------------------------------------

--
-- Table structure for table `db_review`
--

CREATE TABLE `db_review` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tempat_beli` varchar(50) NOT NULL,
  `submit_date` date NOT NULL,
  `rate` int(5) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_review`
--

INSERT INTO `db_review` (`id`, `nama`, `nama_produk`, `tempat_beli`, `submit_date`, `rate`, `konten`, `gambar`) VALUES
(8, 'Nopenul ajah', 'Skinaqua z', 'Toko paedi', '0000-00-00', 3, 'Kerenn', 'Nopenul ajah.png'),
(9, 'Maudy Ayun', 'Moisturizer', 'Tokopedia', '0000-00-00', 4, 'Sukak banget!', 'Maudy Ayun.png'),
(11, 'Nopenul', 'Wardah', 'Shopee', '0000-00-00', 4, 'Mantap banget!', 'Nopenul.png'),
(12, 'Repal Hady', 'Facewash', 'Offline Store', '0000-00-00', 2, 'Sorry to say tapi bikin muka kering', 'Repal Hady.png'),
(13, 'Fadil Jaidi', 'Serum TO Niacinimade', 'Toko paedi', '0000-00-00', 4, 'Oke bikin muka cerahan', 'Fadil Jaidi.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_review`
--
ALTER TABLE `db_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_review`
--
ALTER TABLE `db_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
