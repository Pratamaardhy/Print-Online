-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 06:07 PM
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
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(15) NOT NULL,
  `jumlah_halaman` int(3) NOT NULL,
  `jml_order` int(5) NOT NULL,
  `link_dokumen` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `ukuran_kertas` varchar(255) NOT NULL,
  `opsi_print` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `jumlah_halaman`, `jml_order`, `link_dokumen`, `metode`, `jenis_produk`, `ukuran_kertas`, `opsi_print`) VALUES
(25, 1, 1, 'https://drive.google.com/', 'Transfer Bank', '', '', ''),
(26, 1, 1, 'https://drive.google.com/file/d/1IiTqASGESgM8ByI7N1t-bRXMzQU2penr/view?usp=drivesdk', 'Cash On Delivery', '', '', ''),
(27, 3, 1, 'https://drive.google.com/file/d/1IiTqASGESgM8ByI7N1t-bRXMzQU2penr/view?usp=drivesdk', 'Cash On Delivery', 'Print Warna', 'A4', 'Print Satu Sisi'),
(28, 3, 1, 'https://drive.google.com/', 'Cash On Delivery', 'Print Warna', 'F4', 'Print Bolak Balik'),
(29, 1, 1, 'https://drive.google.com/', 'Transfer Bank', 'Print Hitam Putih', 'Legal', 'Print Bolak Balik'),
(30, 1, 1, 'https://drive.google.com/file/d/1IiTqASGESgM8ByI7N1t-bRXMzQU2penr/view?usp=drivesdk', 'Cash On Delivery', 'Print Warna', 'A4', 'Print Satu Sisi');

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
(2, 'KAKAK', 'Lampung', 'Kota Bandar Lampung', 'jne', 'OKE', '1000', '35000', '2-3 hari', '123'),
(5, 'ALAMAT KAMU', 'Lampung', 'Kota Bandar Lampung', 'jne', 'OKE', '1000', '35000', '2-3 hari', '082244026525'),
(6, 'RUMAH', 'Kalimantan Timur', 'Kabupaten Berau', 'jne', 'OKE', '1000', '44000', '5-7 hari', '082244026525'),
(7, 'kampung', 'Jawa Tengah', 'Kabupaten Blora', 'jne', 'REG', '1000', '23000', '2-3 hari', '082244026525'),
(8, 'alamat palsu', 'Bangka Belitung', 'Kabupaten Bangka Selatan', 'jne', 'OKE', '1000', '45000', '3-6 hari', '082244026525'),
(9, 'rumah', 'DKI Jakarta', 'Kota Jakarta Timur', 'jne', 'OKE', '1000', '12000', '2-3 hari', '082244026525'),
(10, 'Geluran 1/24 A RT 01 RW 01 Geluran Taman', 'Bali', 'Kota Denpasar', 'jne', 'OKE', '1000', '16000', '2-3 hari', '082244026525'),
(11, '', 'Bangka Belitung', 'Kabupaten Belitung', 'jne', 'REG', '1000', '50000', '2-3 hari', ''),
(12, 'Geluran', 'Banten', 'Kabupaten Serang', 'pos', 'Paket Kilat Khusus', '1000', '18050', '3 HARI hari', '082244026525');

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
(1, 'userbaru', '$2y$10$TuVkRZ9IpM1wYnhWJTruM.3S9lxkEpcDUcy1o.2O7jDuKEdYpksby', 'Hanif Al Fathoni', 'user'),
(2, 'hanif922', '$2y$10$bhDFWyB4vYWJjt.pIyiRvOPMVkdVSuZvfzj0e7zYJ3bh0.P4Hcycu', 'Hanif Al Fathoni', 'user'),
(8, 'admin', '$2y$10$acNwlsaz6YGSkLXHY3.KnuhK9i1/H4/CosrPU7OwXgqjab5f7pWiS', 'Administrator', 'admin'),
(9, 'alfatoni922', '$2y$10$gSn2kTmyRzOPA2riv5yOcexHQVUg1ebBkfx6IvuRDuanB4R3kaJB6', 'Hanif Al Fathoni', 'user'),
(10, 'user', '$2y$10$dnCqd6PMoetJUuaBfbPjgu4CXAe4V5bPmSrUBGyFmg.qnuMHe74aC', 'Username', 'user'),
(11, 'lala', '$2y$10$nDg8aMWZbs1kGm6/i5cYfO.KlJlGbbpBeqfz8/3vleKGIK2BsThwq', 'lili', 'user'),
(12, 'sip', '$2y$10$8AZ4c7LEK3feNwh/wDPJJe3g/VtLg3xbvG9.2HWgSCxoNAz2h/FC6', 'oke', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
