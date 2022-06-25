-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 11:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `srt_klr`
--

CREATE TABLE `srt_klr` (
  `id` int(10) NOT NULL,
  `no_srt` varchar(150) NOT NULL,
  `asal_srt` varchar(150) NOT NULL,
  `tgl_srt` varchar(25) NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `ket` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `srt_msk`
--

CREATE TABLE `srt_msk` (
  `id` int(10) NOT NULL,
  `no_srt` varchar(150) NOT NULL,
  `asal_srt` varchar(150) NOT NULL,
  `tgl_srt` varchar(25) NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `ket` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`, `level`, `created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Farhan Mulyaputra', 'admin', '2022-06-06 08:32:25'),
(12, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Rehan Putra', 'user', '2022-06-10 08:03:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `srt_klr`
--
ALTER TABLE `srt_klr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srt_msk`
--
ALTER TABLE `srt_msk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `srt_klr`
--
ALTER TABLE `srt_klr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `srt_msk`
--
ALTER TABLE `srt_msk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
