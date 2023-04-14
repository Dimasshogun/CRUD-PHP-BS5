-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2023 pada 11.25
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(12) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `foto_siswa` varchar(200) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `foto_siswa`, `alamat`) VALUES
(41, '18090001', 'Ulva Devi Yuliana', 'Perempuan', 'IMG-20210814-WA0064.jpg', 'Pemalang'),
(42, '18090002', 'Dimas Shofa Gunarso', 'Laki-laki', '18090002.jpg', 'Pemalang'),
(58, '18090003', 'Rania Natasya', 'Perempuan', '18090003.JPG', 'Jakarta'),
(59, '18090004', 'Tegar', 'Laki-laki', '18090004.JPG', 'Tegal'),
(60, '1', 'Ulva Devi Yuliana', 'Perempuan', '1.JPG', 'asd'),
(61, '2', 'Kita', 'Perempuan', '2.JPG', 'adsf'),
(62, '3', 'Dimas Shofa Gunarso', '', '3.JPG', 'adsf'),
(63, '4', 'dsf', 'Perempuan', '4.JPG', 'adsf'),
(65, '65', 'wetr', 'Perempuan', '65.JPG', 'ewrt'),
(66, '5654', 'Tegar', 'Laki-laki', '5654.JPG', 'dfs');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
