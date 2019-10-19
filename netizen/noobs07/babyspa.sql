-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 05:08 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babyspa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_berita` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `deskripsi`, `foto_berita`) VALUES
(1, 'Manfaat Baby Spa untuk Melatih Motorik Bayi', 'Baby spa atau pijat bayi saat ini sudah semakin populer. Banyak para Bunda yang rutin mengajak buah hatinya ke baby spa untuk mendapatkan berbagai treatment terbaik. Namun, baby spa hanya diperbolehkan jika berat badan Si Kecil sudah mencapai 5kg, lho. Selain mengasyikan, kegiatan yang mencakup renang dan pijat ini tentunya memiliki berbagai manfaat untuk Si Kecil. Salah satunya dapat merangsang gerak motoriknya.', 'b8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id_contact` int(11) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id_contact`, `contact`, `keterangan`) VALUES
(1, 'Location', 'Malang'),
(2, 'Phone', '081209329023'),
(3, 'Social Media', 'instagram : maminaa_'),
(4, 'Email', 'ertyuio@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `detail_reservasi`
--

CREATE TABLE `detail_reservasi` (
  `id_detail` int(11) NOT NULL,
  `reservasi_id` int(11) NOT NULL,
  `subkategori_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jmlh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_reservasi`
--

INSERT INTO `detail_reservasi` (`id_detail`, `reservasi_id`, `subkategori_id`, `harga`, `jmlh`) VALUES
(1, 1, 3, 230000, 0),
(2, 2, 2, 90000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_galery` int(11) NOT NULL,
  `galery` varchar(500) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `judul_kat` varchar(100) NOT NULL,
  `keterangan_kat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `judul_kat`, `keterangan_kat`) VALUES
(1, 'Baby', 'Rangkaian pelayanan untuk bayi ini bisa dimulai sejak si kecil berusia satu bulan. Rangkaiannya meliputi baby swim selama 15 menit dan dilanjutkan dengan baby massage selama 20 menit, diakhiri dengan pemberian sinar infra red selama 10 menit. Seluruh rangkaian ini bisa dilakukan dibawah pengawasan fisioterapis agar tidak terjadi cedera ataupun kesalahan yang berakibat fatal'),
(2, 'Mom', 'Perawatan untuk ibu hamil adalah perawatan untuk relaksasi ibu hamil mengurangi keluhan-keluhan yang dialami selama masa kehamilan akibat perubahan hormon dan tubuh.\r\n\r\nPada dasarnya perawatan untuk ibu hamil hampir sama dengan perawatan yang lain. Tentu saja untuk pijatnya bukan pijat tradisional melainkan pijat dengan gerakan khusus untuk ibu hamil. Kami menggunakan minyak zaitun asli tanpa campuran bahan kimia yang aman bagi ibu hamil (kecuali ada alergi terhadap zaitun). Selain itu tempat perawatan untuk ibu hamil kami buat khusus demi kenyamanan dan tentu saja keamanan ibu hamil.'),
(3, 'Konselor', 'Pelayanan antenatal atau Antenatal Care (ANC) adalah pemeriksaan dan konseling yang diberikan kepada bumil agar bisa melalui masa kehamilan dan masa nifas dengan sehat dan selamat. Komponen ANC sendiri meliputi identifikasi risiko, pencegahan, dan penanganan medik pada bumil.');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `keterangan`) VALUES
(1, 'Superadmin'),
(2, 'User'),
(3, 'Terapis');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `pemesan_id` int(11) NOT NULL,
  `terapis_id` int(11) NOT NULL,
  `sesi_id` int(11) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `total_harga_awal` int(11) DEFAULT NULL,
  `diskon_persen` varchar(5) DEFAULT NULL,
  `nominal_diskon` float DEFAULT NULL,
  `biaya_transportasi` int(11) DEFAULT NULL,
  `status` enum('Booked','Cancelled','Accepted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `pemesan_id`, `terapis_id`, `sesi_id`, `tgl_reservasi`, `total_harga_awal`, `diskon_persen`, `nominal_diskon`, `biaya_transportasi`, `status`) VALUES
(1, 5, 6, 1, '2019-10-01', 230000, '0,01', 2300, 12000, 'Cancelled'),
(2, 5, 6, 1, '2019-10-02', 90000, NULL, NULL, NULL, 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `sesi_reservasi`
--

CREATE TABLE `sesi_reservasi` (
  `id_sesi` int(11) NOT NULL,
  `sesi` varchar(20) NOT NULL,
  `waktu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesi_reservasi`
--

INSERT INTO `sesi_reservasi` (`id_sesi`, `sesi`, `waktu`) VALUES
(1, 'Pagi', '8:00 - 10:00'),
(2, 'Pagi', '10:00 - 12:00'),
(3, 'Siang', '12:00 - 14:00'),
(4, 'Siang', '14:00 - 16:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id_sub_kategori` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul_sub` varchar(500) NOT NULL,
  `keterangan_sub` varchar(100) NOT NULL,
  `foto_sub` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub_kategori`, `kategori_id`, `judul_sub`, `keterangan_sub`, `foto_sub`, `harga`) VALUES
(1, 1, 'Massage', 'Pijatan lembut oleh tenaga profesional yang akan membantu memperlancar peredaran darah si kecil. Min', 'baby.jpg', 85000),
(2, 1, 'Scrub', 'Dalam baby body scrub ini anak akan diberikan bergabai macam body scrub pada bagian tubuhnya yang te', 'babyscrub.jpg', 90000),
(3, 1, 'gymball', 'Menguatkan otot-otot dan persendian,Meningkatkan perkembangan motorik,Meningkatkan fleksibilitas ata', 'gymball.jpg', 80000),
(4, 1, 'Swim', 'Begitu masuk kedalam klinik “Baby Spa”, Anda akan langsung disambut oleh 2 kolam besar berwarna puti', 'b6.jpg', 85000),
(5, 2, 'Yoga Ibu Hamil', 'Dengan melakukan penetralan yoga, akan mendukung perubahan tubuh yang terjadi dan memperkuat otot tu', 'yoga.jpg', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `username`, `email`, `no_telp`, `alamat`, `foto`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '091322332234', 'malang', 'my-account-login-icon.png', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'sasa', 'sasa', 'sasa@123', '0813999293433', 'Malang', '', 'f45731e3d39a1b2330bbf93e9b3de59e', 2),
(5, 'meli', 'meli', 'meli@gmail.com', '2', 'meli', NULL, '315fef7b8d30f99d6964f489ee4c9828', 2),
(6, 'yasmini', 'yasmini', 'yasmini@gmail.com', '9029109012', 'malang', 't1.jpg', '0bad1b8571cd7ad70fb02939a1f9b6fb', 3),
(7, 'saskia', 'saskia', 'saskia@gmail.com', '091322332234', 'malnag', 'default.png', '7d207ce9e36a6a60ec529d1f62038ed2', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_detailreservasi_subkategori` (`subkategori_id`),
  ADD KEY `fk_detailreservasi_reservasi` (`reservasi_id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `fk_reservasi_sesi` (`sesi_id`),
  ADD KEY `fk_reservasi_user` (`pemesan_id`),
  ADD KEY `fk_reservasi_terapisid` (`terapis_id`);

--
-- Indexes for table `sesi_reservasi`
--
ALTER TABLE `sesi_reservasi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_sub_kategori`),
  ADD KEY `fk_subkategori_kategori` (`kategori_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sesi_reservasi`
--
ALTER TABLE `sesi_reservasi`
  MODIFY `id_sesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_sub_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD CONSTRAINT `fk_detailreservasi_reservasi` FOREIGN KEY (`reservasi_id`) REFERENCES `reservasi` (`id_reservasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detailreservasi_subkategori` FOREIGN KEY (`subkategori_id`) REFERENCES `sub_kategori` (`id_sub_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `fk_reservasi_sesi` FOREIGN KEY (`sesi_id`) REFERENCES `sesi_reservasi` (`id_sesi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservasi_terapisid` FOREIGN KEY (`terapis_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservasi_user` FOREIGN KEY (`pemesan_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `fk_subkategori_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_level` FOREIGN KEY (`level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
