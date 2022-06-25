-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2022 pada 19.28
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `srt_klr`
--

CREATE TABLE `srt_klr` (
  `id` int(10) NOT NULL,
  `no_srt` varchar(50) NOT NULL,
  `asal_srt` varchar(50) NOT NULL,
  `tgl_srt` varchar(25) NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `file` varchar(150) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `srt_klr`
--

INSERT INTO `srt_klr` (`id`, `no_srt`, `asal_srt`, `tgl_srt`, `perihal`, `ket`, `file`, `created`) VALUES
(1, '123/a/d3', 'xxxxx', '13 February, 2022', 'VV', 'sudah diarsipkan', '1-3712-pak-20190215-540-BU_YEN_PAK_2017.pdf', '2022-02-19 09:46:53'),
(2, '123/a/d3', 'xxxxx', '6 February, 2022', 'vdvdxf', 'sudah diarsipkan', '2-CamScanner 12-20-2021 08.48.pdf', '2022-02-19 09:48:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `srt_msk`
--

CREATE TABLE `srt_msk` (
  `id` int(10) NOT NULL,
  `no_srt` varchar(50) NOT NULL,
  `asal_srt` varchar(50) NOT NULL,
  `tgl_srt` varchar(25) NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `file` varchar(150) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `srt_klr`
--
ALTER TABLE `srt_klr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `srt_msk`
--
ALTER TABLE `srt_msk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `srt_klr`
--
ALTER TABLE `srt_klr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `srt_msk`
--
ALTER TABLE `srt_msk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
