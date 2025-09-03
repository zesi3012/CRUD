-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2024 pada 14.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_peserta_pelatihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peserta`
--

CREATE TABLE `data_peserta` (
  `id_peserta` int(100) NOT NULL,
  `nik_peserta` varchar(100) NOT NULL,
  `no_induk_peserta` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `modul_pelatihan` enum('Pemrograman','Desain Grafis','Animasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_peserta`
--

INSERT INTO `data_peserta` (`id_peserta`, `nik_peserta`, `no_induk_peserta`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `modul_pelatihan`) VALUES
(33, '003222444555666', 2311099, 'Raihan Akbar', 'Laki-Laki', 'Yogyakarta', '2003-07-11', 'Secang', '088111222333', 'Desain Grafis'),
(35, '3308111222333444', 2311041, 'Saiful Budiyono', 'Perempuan', 'Magelang', '2007-02-21', 'Mertoyudan', '088777666555', 'Pemrograman'),
(36, '3301888899991112', 2311011, 'Muhamad Fajar', 'Laki-Laki', 'Cilacap', '2004-05-24', 'Secang', '085111222333', 'Animasi'),
(37, '330818701203005', 2311039, 'Zesi Walikhsani', 'Perempuan', 'Magelang', '2003-12-30', 'Cokro Grabag', '088902847787', 'Desain Grafis'),
(38, '003222444555666', 2311040, 'Novia Ardani', 'Perempuan', 'Semarang', '2004-11-02', 'Bandongan', '081222333444', 'Pemrograman'),
(41, '3308999777888111', 2311057, 'Nurul Siti', 'Perempuan', 'Magelang', '2004-10-17', 'Pancuranmas', '088999111222666', 'Pemrograman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  MODIFY `id_peserta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
