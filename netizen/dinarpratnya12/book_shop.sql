-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 05:25 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(3) NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penerbit` int(3) NOT NULL,
  `id_cat` int(3) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `tahun` int(5) NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `id_penerbit`, `id_cat`, `jumlah`, `harga`, `tahun`, `foto`) VALUES
(2, 'Naruto 001', 'Masashi Kishimoto', 3, 1, 7, 20000, 2000, 'Vol12.png'),
(3, 'Naruto 002', 'Masashi Kishimoto', 1, 6, 3, 20000, 2000, 'Vol2.png'),
(4, 'Naruto 003', 'Masashi Kishimoto', 1, 6, 98, 20000, 2007, 'Vol3.png'),
(5, 'Naruto 004', 'Masashi Kishimoto', 6, 6, -1, 20000, 2007, 'Vol4.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(3) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `qty` int(3) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id`, `id_buku`, `id_order`, `qty`, `harga`) VALUES
(1, 3, 1, 2, 40000),
(2, 2, 2, 4, 80000),
(3, 3, 3, 4, 80000),
(5, 2, 5, 3, 60000),
(6, 3, 6, 5, 100000),
(7, 3, 7, 2, 40000),
(8, 4, 8, 2, 40000),
(9, 5, 9, 101, 2020000);

--
-- Triggers `detail_order`
--
DELIMITER $$
CREATE TRIGGER `Trigger_Order` AFTER INSERT ON `detail_order` FOR EACH ROW BEGIN
	UPDATE buku SET jumlah = jumlah-NEW.qty
    WHERE id = NEW.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(3) NOT NULL,
  `nama_kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Humor'),
(2, 'Romance'),
(6, 'Action'),
(7, 'Drama'),
(8, 'Thriller'),
(10, 'History');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(3) NOT NULL,
  `komentar` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(3) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `id_user`, `id_buku`, `jam`) VALUES
(1, '				Test		', 6, 4, '04:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(3) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_user`, `tanggal`) VALUES
(1, 3, '0000-00-00'),
(2, 3, '2018-07-25'),
(3, 3, '2018-07-25'),
(4, 6, '2018-07-25'),
(5, 6, '2018-07-25'),
(6, 3, '2018-07-25'),
(7, 8, '2018-07-25'),
(8, 8, '2018-07-25'),
(9, 3, '2018-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(3) NOT NULL,
  `nama_penerbit` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `nama_penerbit`) VALUES
(1, 'Elex Media'),
(3, 'Gramedia Pustaka'),
(4, 'Penerbit Lala'),
(5, 'Penerbit Amir'),
(6, 'M Comics'),
(8, 'Radeon Comics');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `jk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `ttl`, `jk`, `alamat`, `username`, `password`, `level`) VALUES
(2, 'Joshua Davian Kristanto', '1998-01-08', 'Pria', 'Perumahan Joyo Grand Blok X / 137 Malang', 'joedave13', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(3, 'Joshua Daverz', '1998-01-08', 'Pria', 'Malang', 'joshua', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(6, 'Yohana Bernike', '1998-06-02', 'Wanita', 'Kediri', 'yohana', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(7, 'Desy Purnamasari', '1996-12-25', '--Pilih Salah Satu--', 'Jakarta', 'desy', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(8, 'anin', '1998-01-08', 'Wanita', 'Malang', 'anin', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(9, 'Andi Hermawan', '1996-06-09', 'Pria', 'Surabaya', 'andi', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(10, 'Daverz', '1998-01-02', 'Pria', 'Malang', 'joe', '250cf8b51c773f3f8dc8b4be867a9a02', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
