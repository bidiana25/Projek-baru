-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 01:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_m_akun1`
--

CREATE TABLE `t_m_akun1` (
  `id_akun1` int(11) NOT NULL,
  `nama_akun1` varchar(30) NOT NULL,
  `kode_akun1` varchar(20) NOT NULL,
  `kategori_akun1` enum('Harta (Aktiva)','Kewajiban/Hutang (Liability)','Modal (equity)','Pendapatan','Beban/Biaya (Expense)') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_m_akun1`
--

INSERT INTO `t_m_akun1` (`id_akun1`, `nama_akun1`, `kode_akun1`, `kategori_akun1`) VALUES
(1, 'Aset tetap', '1-0001', 'Harta (Aktiva)');

-- --------------------------------------------------------

--
-- Table structure for table `t_m_akun2`
--

CREATE TABLE `t_m_akun2` (
  `id_akun2` int(11) NOT NULL,
  `rid_akun1` int(11) NOT NULL,
  `kode_akun2` varchar(30) NOT NULL,
  `nama_akun2` varchar(30) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_m_akun2`
--

INSERT INTO `t_m_akun2` (`id_akun2`, `rid_akun1`, `kode_akun2`, `nama_akun2`, `ket`) VALUES
(1, 1, '2-001', 'Kas Dan Bank', 'Kas dan bank sekolah insan teladan pekanbaru'),
(2, 1, '2-1212', 'Peralatan Sekolah', 'Peralatan belajar\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `role` enum('yayasan','bendahara','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'yayasan', 'e62f7824c7aab9dfc2d8ca00448afbfa', 'Bapak Cuk', 'yayasan'),
(2, 'bendahara', '62f7dec74b78ba0398e6a9f317f55126', 'Bendahara Sekolah', 'bendahara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_m_akun1`
--
ALTER TABLE `t_m_akun1`
  ADD PRIMARY KEY (`id_akun1`);

--
-- Indexes for table `t_m_akun2`
--
ALTER TABLE `t_m_akun2`
  ADD PRIMARY KEY (`id_akun2`),
  ADD KEY `rid_akun1` (`rid_akun1`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_m_akun1`
--
ALTER TABLE `t_m_akun1`
  MODIFY `id_akun1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_m_akun2`
--
ALTER TABLE `t_m_akun2`
  MODIFY `id_akun2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_m_akun2`
--
ALTER TABLE `t_m_akun2`
  ADD CONSTRAINT `t_m_akun2_ibfk_1` FOREIGN KEY (`rid_akun1`) REFERENCES `t_m_akun1` (`id_akun1`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
