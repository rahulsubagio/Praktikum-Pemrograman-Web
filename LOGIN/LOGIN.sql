-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Sep 2019 pada 06.44
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LOGIN`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `USERS`
--

CREATE TABLE `USERS` (
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `USERS`
--

INSERT INTO `USERS` (`user_name`, `email`, `password`) VALUES
('anu', 'anuanu@gmail.com', 'anuanu'),
('faza', 'faza@gmail.com', 'faza'),
('octa', 'octa@gmail.com', 'octa'),
('rahul', 'rahulsubagio99@gmail.com', 'rahul'),
('rizal', 'rizal@gmail.com', 'rizal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `USERS`
--
ALTER TABLE `USERS`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
