-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 05:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisproduk`
--

CREATE TABLE `tb_jenisproduk` (
  `id_jp` int(11) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenisproduk`
--

INSERT INTO `tb_jenisproduk` (`id_jp`, `jenis_produk`) VALUES
(1, 'Print Warna'),
(2, 'Print Hitam Putih'),
(3, 'Print Foto');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jumlahorder`
--

CREATE TABLE `tb_jumlahorder` (
  `id_jo` int(11) NOT NULL,
  `jml_order` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jumlahorder`
--

INSERT INTO `tb_jumlahorder` (`id_jo`, `jml_order`) VALUES
(1, 'Print 1 Kali'),
(2, 'Print 2 Kali'),
(3, 'Print 3 Kali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_opsiprint`
--

CREATE TABLE `tb_opsiprint` (
  `id_op` int(11) NOT NULL,
  `ops_print` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_opsiprint`
--

INSERT INTO `tb_opsiprint` (`id_op`, `ops_print`) VALUES
(1, 'Print satu sisi'),
(2, 'Print bolak-balik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(15) NOT NULL,
  `id_jp` int(3) NOT NULL,
  `id_uk` int(3) NOT NULL,
  `jumlah_halaman` int(3) NOT NULL,
  `id_jo` int(3) NOT NULL,
  `id_op` int(3) NOT NULL,
  `id_mp` int(3) NOT NULL,
  `link_dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id_jp`, `id_uk`, `jumlah_halaman`, `id_jo`, `id_op`, `id_mp`, `link_dokumen`) VALUES
(1, 1, 2, 0, 1, 2, 0, ''),
(2, 1, 2, 4, 1, 2, 0, ''),
(3, 1, 2, 4, 1, 2, 0, ''),
(4, 1, 2, 4, 1, 2, 0, ''),
(5, 3, 1, 5, 1, 1, 2, ''),
(6, 1, 1, 1, 1, 1, 1, ''),
(7, 1, 1, 1, 1, 1, 1, ''),
(8, 1, 1, 1, 1, 1, 1, ''),
(9, 1, 1, 1, 1, 1, 1, ''),
(10, 0, 0, 0, 0, 0, 0, ''),
(11, 0, 0, 1, 0, 0, 0, ''),
(12, 1, 1, 3, 1, 1, 1, ''),
(13, 1, 1, 1, 1, 1, 1, ''),
(14, 1, 1, 1, 1, 1, 1, ''),
(15, 1, 1, 1, 1, 1, 1, ''),
(16, 1, 1, 1, 1, 1, 1, 'https://drive.google.com/file/d/1IiTqASGESgM8ByI7N1t-bRXMzQU2penr/view?usp=drivesdk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_mp` int(11) NOT NULL,
  `metode_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_mp`, `metode_pembayaran`) VALUES
(1, 'Cash On Delivery'),
(2, 'Transfer Bank');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `id` int(11) NOT NULL,
  `alamat` mediumtext NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` text NOT NULL,
  `ekspedisi` varchar(255) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `ongkir` varchar(100) NOT NULL,
  `estimasi` varchar(100) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengiriman`
--

INSERT INTO `tb_pengiriman` (`id`, `alamat`, `provinsi`, `kota`, `ekspedisi`, `paket`, `berat`, `ongkir`, `estimasi`, `nohp`) VALUES
(10, 'Geluran 1/24 A RT 01 RW 01 Geluran Taman', 'Jawa Timur', 'Kabupaten Sidoarjo', 'jne', 'YES', '1000', '10000', '1-1 hari', '082244026525'),
(11, 'Geluran 1/24 A RT 01 RW 01 Geluran Taman', 'Jawa Timur', 'Kota Madiun', 'jne', 'OKE', '1000', '7000', '2-3 hari', '082244026525'),
(12, 'Geluran 1/24 A RT 01 RW 01 Geluran Taman', 'Jawa Timur', 'Kabupaten Bondowoso', 'jne', 'OKE', '1000', '7000', '2-3 hari', '082244026525'),
(13, 'Geluran 1/24 A RT 01 RW 01 Geluran Taman', 'Kalimantan Utara', 'Kabupaten Malinau', 'jne', 'OKE', '1000', '63000', '5-7 hari', '082244026525');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ukurankertas`
--

CREATE TABLE `tb_ukurankertas` (
  `id_uk` int(11) NOT NULL,
  `ukuran_kertas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ukurankertas`
--

INSERT INTO `tb_ukurankertas` (`id_uk`, `ukuran_kertas`) VALUES
(1, 'Kertas A4'),
(2, 'Kertas F4'),
(3, 'Kertas Legal'),
(4, 'Kertas A3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(2, 'hanif922', '$2y$10$bhDFWyB4vYWJjt.pIyiRvOPMVkdVSuZvfzj0e7zYJ3bh0.P4Hcycu', 'Hanif Al Fathoni', 'user'),
(8, 'admin', '$2y$10$acNwlsaz6YGSkLXHY3.KnuhK9i1/H4/CosrPU7OwXgqjab5f7pWiS', 'Administrator', 'admin'),
(9, 'alfatoni922', '$2y$10$gSn2kTmyRzOPA2riv5yOcexHQVUg1ebBkfx6IvuRDuanB4R3kaJB6', 'Hanif Al Fathoni', 'user'),
(10, 'user', '$2y$10$dnCqd6PMoetJUuaBfbPjgu4CXAe4V5bPmSrUBGyFmg.qnuMHe74aC', 'Username', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenisproduk`
--
ALTER TABLE `tb_jenisproduk`
  ADD PRIMARY KEY (`id_jp`);

--
-- Indexes for table `tb_jumlahorder`
--
ALTER TABLE `tb_jumlahorder`
  ADD PRIMARY KEY (`id_jo`);

--
-- Indexes for table `tb_opsiprint`
--
ALTER TABLE `tb_opsiprint`
  ADD PRIMARY KEY (`id_op`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_mp`);

--
-- Indexes for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `tb_ukurankertas`
--
ALTER TABLE `tb_ukurankertas`
  ADD PRIMARY KEY (`id_uk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenisproduk`
--
ALTER TABLE `tb_jenisproduk`
  MODIFY `id_jp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jumlahorder`
--
ALTER TABLE `tb_jumlahorder`
  MODIFY `id_jo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_opsiprint`
--
ALTER TABLE `tb_opsiprint`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_mp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ukurankertas`
--
ALTER TABLE `tb_ukurankertas`
  MODIFY `id_uk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id_order`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_pengiriman`) REFERENCES `tb_pengiriman` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
