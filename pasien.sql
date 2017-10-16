-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Okt 2017 pada 06.10
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep_dokter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `gender_pasien` varchar(10) NOT NULL,
  `umur_pasien` int(3) NOT NULL,
  `telepon_pasien` int(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `gender_pasien`, `umur_pasien`, `telepon_pasien`, `created_at`, `updated_at`) VALUES
(1, 'noval', 'margahayu', 'laki-laki', 17, 82632, '2017-10-15 03:52:41', '0000-00-00 00:00:00'),
(2, 'oktavio', 'asas', 'laki', 82, 873483, '2017-10-14 20:54:25', '2017-10-14 20:54:25'),
(3, 'oktavio', 'asas', 'laki', 82, 873483, '2017-10-14 20:54:31', '2017-10-14 20:54:31'),
(4, 'njqwnj', 'gjd', 'we', 82, 7379, '2017-10-14 20:55:45', '2017-10-14 20:55:45'),
(5, 'ahaskb', 'khabd', 'ljjadb', 92, 28738723, '2017-10-14 21:00:33', '2017-10-14 21:00:33'),
(6, 'jdsj', 'jahd', 'aksj', 29, 232, '2017-10-14 21:06:05', '2017-10-14 21:06:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
