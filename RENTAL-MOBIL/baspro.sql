-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 08:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `kid` char(5) NOT NULL,
  `knama` varchar(40) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(13) DEFAULT NULL,
  `panggilan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`kid`, `knama`, `alamat`, `no_hp`, `panggilan`) VALUES
('11001', 'Muhammad Anjar Harimurti Rahadi', 'Jalan Seturan Baru Blok E3 Nomor 34', '081958000659', 'Anjar'),
('11002', 'Rifka Canalisa Rahayu', 'Saren no.84 Caturtunggal, Depok, Sleman', '081288565636', 'Rifka'),
('11003', 'Rahul Bin Subagio', 'tb 6 no 2', '082296365028', 'Rahul');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `no_plat` varchar(8) NOT NULL,
  `jenis_kendaraan` varchar(30) DEFAULT NULL,
  `merk_kendaraan` varchar(15) DEFAULT NULL,
  `harga_sewa` int(11) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`no_plat`, `jenis_kendaraan`, `merk_kendaraan`, `harga_sewa`, `status`) VALUES
('AB1029QR', 'Motor Manual', 'Honda', 75000, 'Sewa'),
('AB1111ZZ', 'Mobil Bak Terbuka', 'Toyota', 200000, 'Sewa'),
('AB1154BU', 'Mobil Matic', 'Daihatsu Xenia', 250000, 'Sedia'),
('AB1234OB', 'Mobil Manual', 'Daihatsu Xenia', 250000, 'Sedia'),
('AB1601NR', 'Micro Bus', 'Kia Travello', 600000, 'Sedia'),
('AB1657IQ', 'Motor Matic', 'Yamaha', 100000, 'Sewa'),
('AB1692MN', 'Mobil Matic', 'Toyota', 250000, 'Sewa'),
('AB1999RS', 'Mobil Matic', 'Honda Jazz', 300000, 'Sedia'),
('AB3322RS', 'Micro Bus', 'Toyota Hiace', 800000, 'Sedia'),
('AB4321AA', 'Mobil Matic', 'Sedan Camry', 1000000, 'Sedia'),
('AB6294ZS', 'Mobil Manual', 'Mitsubishi', 225000, 'Sewa'),
('AB9999PR', 'Mobil Manual', 'Fortuner', 1250000, 'Sedia');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `ktp` char(16) NOT NULL,
  `pnama` varchar(30) DEFAULT NULL,
  `palamat` text,
  `pno_hp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`ktp`, `pnama`, `palamat`, `pno_hp`) VALUES
('1231231231231231', 'Isna Nur Aini', 'Boyolali', '085600934634'),
('1234543216789098', 'Rifka Canalisa R', 'Saren', '081982389231'),
('1671042606010005', 'Anjar Harimurti', 'Jalan Seturan Baru Blok E3 No.34', '081958000659'),
('3273041411000008', 'Yones Fernando', 'Jalan Dirgantara IV No.143A', '088980502929'),
('3374114310990001', 'Fiqri Upakarti Adiningsih', 'Waru Timur I/16', '08979040400'),
('3402045910000001', 'Vania Zerlinda', 'Jl. Parangtritis KM.17, Bantul', '089687616940'),
('3404072507000002', 'Liek Allyandaru', 'Jalan Seturan No.405B Depok, Sleman, Yogyakarta', '082136564484'),
('3404072507000222', 'rahul', 'wonosari', '082296365028'),
('5206186106000001', 'Istiqomah', 'Jl. Tambak Bayan III No.2', '085337101595');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `sid` int(11) NOT NULL,
  `waktu_sewa` datetime DEFAULT NULL,
  `lama_sewa` int(11) DEFAULT NULL,
  `tgl_kembali` datetime DEFAULT NULL,
  `kembali_seharusnya` datetime DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `no_plat` varchar(8) DEFAULT NULL,
  `ktp` char(16) DEFAULT NULL,
  `kid` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`sid`, `waktu_sewa`, `lama_sewa`, `tgl_kembali`, `kembali_seharusnya`, `biaya`, `no_plat`, `ktp`, `kid`) VALUES
(1, '2019-10-30 11:20:45', 5, '2019-11-04 09:56:16', '2019-11-04 11:20:45', 800000, 'AB1111ZZ', '1671042606010005', '11001'),
(2, '2019-11-04 15:55:28', 7, '2019-11-05 06:10:13', '2019-11-11 15:55:28', 100000, 'AB1657IQ', '1671042606010005', '11001'),
(3, '2019-11-04 15:56:03', 5, '2019-11-04 10:03:20', '2019-11-09 15:56:03', 112500, 'AB6294ZS', '1671042606010005', '11002'),
(4, '2019-11-04 16:02:59', 4, '2019-11-05 04:33:41', '2019-11-08 16:02:59', 250000, 'AB1692MN', '3404072507000002', '11001'),
(5, '2019-11-04 16:13:41', 6, '2019-11-05 05:43:11', '2019-11-10 16:13:41', 75000, 'AB1029QR', '3273041411000008', '11001'),
(6, '2019-11-04 23:34:40', 7, '2019-11-04 17:38:55', '2019-11-11 23:34:40', 112500, 'AB6294ZS', '1234543216789098', '11001'),
(7, '2019-11-04 23:42:39', 7, '0000-00-00 00:00:00', '2019-11-11 23:42:39', 1400000, 'AB1111ZZ', '3374114310990001', '11001'),
(8, '2019-11-04 23:45:49', 3, '2019-11-04 17:48:41', '2019-11-07 23:45:49', 112500, 'AB6294ZS', '5206186106000001', '11001'),
(9, '2019-11-04 23:49:45', 5, '2019-11-05 05:50:38', '2019-11-09 23:49:45', 112500, 'AB6294ZS', '5206186106000001', '11001'),
(13, '2019-11-05 12:00:35', 6, '0000-00-00 00:00:00', '2019-11-11 12:00:35', 1350000, 'AB6294ZS', '3273041411000008', '11001'),
(14, '2019-11-05 12:02:09', 5, '0000-00-00 00:00:00', '2019-11-10 12:02:09', 375000, 'AB1029QR', '3402045910000001', '11002'),
(15, '2019-11-05 12:08:10', 8, '0000-00-00 00:00:00', '2019-11-13 12:08:10', 2000000, 'AB1692MN', '1231231231231231', '11003'),
(16, '2019-11-05 12:13:28', 6, '0000-00-00 00:00:00', '2019-11-11 12:13:28', 600000, 'AB1657IQ', '1234543216789098', '11003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`no_plat`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`ktp`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `fkNo_Plat` (`no_plat`),
  ADD KEY `fkKID` (`kid`),
  ADD KEY `fkKTP` (`ktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `fkKID` FOREIGN KEY (`kid`) REFERENCES `karyawan` (`kid`),
  ADD CONSTRAINT `fkKTP` FOREIGN KEY (`ktp`) REFERENCES `penyewa` (`ktp`),
  ADD CONSTRAINT `fkNo_Plat` FOREIGN KEY (`no_plat`) REFERENCES `kendaraan` (`no_plat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
