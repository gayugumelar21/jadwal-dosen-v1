-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 08:41 PM
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
-- Database: `db_uti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwaldosen`
--

CREATE TABLE `tbl_jadwaldosen` (
  `id` int(11) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam_pelajaran` varchar(5) NOT NULL,
  `nama_dosen` varchar(80) NOT NULL,
  `matakuliah` varchar(80) NOT NULL,
  `ruangan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jadwaldosen`
--

INSERT INTO `tbl_jadwaldosen` (`id`, `kelas`, `hari`, `jam_pelajaran`, `nama_dosen`, `matakuliah`, `ruangan`) VALUES
(1, 'IF 22 A', 'Senin', '09:00', 'Gayu Gumelar, S.Kom.', 'Dasar-Dasar Pemrograman', 'Lab 1 A'),
(2, 'IF 22 B', 'Selasa', '07:00', 'Gayu Gumelar, S.Kom.', 'Design Grafis', 'Lab 1 A'),
(3, 'IF 22 C', 'Rabu', '09:00', 'Angga Bayu Santoso, S.Kom.', 'Aplikom', 'Lab 2 A'),
(4, 'IF 22 D', 'Kamis', '11:00', 'Ade Surahman, S.Kom,.M.Kom.', 'Pemrograman Mobile', 'Lab 1 ICT '),
(5, 'IF 22 E', 'Jumat', '13:00', 'Sanriomi Sintaro, S.Kom,.M.Kom.', 'Pemrograman Mobile', 'Lab 1 A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jadwaldosen`
--
ALTER TABLE `tbl_jadwaldosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jadwaldosen`
--
ALTER TABLE `tbl_jadwaldosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
