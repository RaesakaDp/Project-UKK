-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2023 pada 06.38
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peduli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pswd` varchar(8) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nik`, `nama_lengkap`, `username`, `pswd`, `status`) VALUES
(1, '1304200410082004', 'Raesaka Dwi Prayoga', 'Admin 1', '12345678', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `suhu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `nik`, `tgl`, `waktu`, `lokasi`, `suhu`) VALUES
(78, '3575089761235645', '2023-01-31', '11:59', 'SMKN 1 PASURUAN', '32'),
(82, '909', '2023-01-31', '18:50', 'SMKN 1 PASURUAN', '33'),
(83, '1008', '2023-01-31', '19:57', 'SMKN 1 PASURUAN', '31'),
(90, '1008', '2023-02-10', '18:03', 'SMKN 1 PASURUAN', '36'),
(92, '1111111111111111111', '2023-02-13', '14:26', 'SMKN 1 PASURUAN', '32'),
(93, '1111111111111111111', '2023-02-13', '14:26', 'Mayangan', '33'),
(94, '22222222222222222222', '2023-02-13', '20:01', 'Warwo', '32'),
(95, '22222222222222222222', '2023-02-13', '20:02', 'Warwo', '36'),
(96, '22222222222222222222', '2023-02-13', '20:02', 'SMKN 1 PASURUAN', '35'),
(97, '1111111111111111111', '2023-02-14', '11:02', 'SMKN 1 PASURUAN', '34'),
(98, '1111111111111111111', '2023-02-14', '11:02', 'SMKN 1 PASURUAN', '34'),
(99, '1111111111111111', '2023-02-14', '14:29', 'Onokopi', '32'),
(109, '1111111111111111', '2023-02-14', '16:45', 'Tosari', '35'),
(110, '1111111111111111', '2023-02-14', '17:46', 'SMKN 1 PASURUAN', '34'),
(111, '1111111111111111', '2023-02-14', '14:46', 'Universitas Negeri Malang', '34'),
(112, '1111111111111111', '2023-02-14', '14:47', 'Alun-Alun Kota Pasuruan', '32'),
(113, '1111111111111111111', '2023-02-14', '17:55', 'Mayangan', '34'),
(114, '1111111111111111111', '2023-02-14', '17:55', 'Tosari', '36'),
(115, '1111111111111111111', '2023-02-14', '17:55', 'Tosari', '36'),
(116, '1111111111111111111', '2023-02-14', '17:55', 'Tosari', '36'),
(117, '111111111111111111', '2023-02-20', '19:44', 'Mayangan', '32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `jenkel` varchar(11) NOT NULL,
  `pswd` varchar(8) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama_lengkap`, `username`, `jenkel`, `pswd`, `status`) VALUES
(5, '1008', 'ocha', 'ochantikku', 'Perempuan', '12345678', 1),
(12, '111111111111111111', 'Farosania Amanda', 'Oxychaae', 'Perempuan', '12345678', 1),
(14, '222222222222222222', 'Amanda Farosania', 'oxchae', 'Perempuan', '22222222', 1),
(23, '543534665464564564', 'repotkan', 'iyootaa', 'Laki-Laki', '12312123', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
