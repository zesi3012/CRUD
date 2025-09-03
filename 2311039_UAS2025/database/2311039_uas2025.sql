-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2025 pada 10.34
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
-- Database: `2311039_uas2025`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `email`, `password`) VALUES
(3, 'admin', 'admin', 'admin01@gmail.com', '$2y$10$GbEipFX946LEYjHkXSYgmeO8pmGwecd9cVvQU0Jx/tbKgH.6WdW2y'),
(5, 'Siti Fatimah', 'siti', 'siti@gmail.com', '$2y$10$J1w/Tyxoig3v.De5zHP54e43YYyOVSYxNA3DtalH8w1aeWQD6xNuG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(100) NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `deskripsi`, `harga`, `stok`, `foto`) VALUES
(10, 'Green Smoothie', 'Segar dan sehat! Green smoothie kami terbuat dari campuran sayuran hijau segar, buah-buahan, dan superfood untuk energi alami sepanjang hari.', 24000, 20, 0x677265656e2e6a7067),
(11, 'Mango Smoothie', 'Kenikmatan tropis dalam setiap tegukan! Mango smoothie kami terbuat dari mangga segar berkualitas, menghasilkan rasa manis alami yang memanjakan.', 20000, 20, 0x6d616e676f2e6a7067),
(12, 'Avocado Smoothie', 'Kelezatan creamy yang kaya nutrisi! Avocado smoothie kami dibuat dari alpukat segar, menghasilkan rasa lembut dan memuaskan.', 23000, 20, 0x456173792041766f6361646f20536d6f6f7468696520666f7220427265616b66617374205f20486f7720546f204d616b6520496e20456173696573742057617973212e6a7067),
(13, 'Strawberry and Berry Smoothie', 'Smoothie segar dari stroberi, aneka beri, dan yogurt lembut, dipermanis alami dengan madu. Kaya vitamin, serat, dan antioksidan, cocok untuk sarapan, setelah olahraga, atau camilan sehat!', 24000, 20, 0x44656c6963696f757320426572727920536d6f6f74686965205265636970652e6a7067),
(14, 'Banana Smoothie', 'Smoothie lembut dan creamy dari pisang segar, susu, dan sedikit madu. Kaya energi, serat, dan nutrisi, cocok untuk sarapan sehat atau penambah semangat sepanjang hari!', 19000, 20, 0x42616e616e6120416c6d6f6e642042757474657220536d6f6f746869652e6a7067),
(15, 'Kiwi Green Healthy Smoothie', 'Smoothie segar dan sehat dengan kombinasi kiwi, bayam, pisang, dan air kelapa. Kaya vitamin C, serat, dan antioksidan, memberikan kesegaran dan energi alami untuk memulai hari dengan penuh semangat!', 25000, 19, 0x4b6977692041766f6361646f20477265656e20536d6f6f746869652e6a7067),
(16, 'Chocolate Peanut Butter Smoothie', 'Smoothie kaya rasa dengan kombinasi cokelat, selai kacang, dan susu, memberikan rasa manis dan gurih yang sempurna. Kaya protein, lezat, dan memuaskan, cocok untuk camilan atau energi setelah beraktivitas!', 23000, 20, 0x44656c6963696f75732043686f636f6c617465205065616e75742042757474657220436f74746167652043686565736520536d6f6f7468696520526563697065212e6a7067),
(17, 'Chocolate Banana and Peanut Smoothie', '\r\nSmoothie lezat dengan perpaduan cokelat, pisang, dan selai kacang yang creamy. Rasanya manis dan gurih, kaya akan protein dan energi, cocok untuk sarapan atau camilan yang memuaskan!', 23000, 20, 0x43686f636f6c6174652042616e616e6120536d6f6f746869652e6a7067),
(18, 'Vanila Fruit Smoothie', 'Smoothie lembut dengan perpaduan buah segar dan es krim vanila yang creamy. Rasanya manis dan menyegarkan, cocok untuk dinikmati kapan saja sebagai camilan sehat atau pencuci mulut yang ringan!', 24000, 21, 0x50617373696f6e2046727569742056616e696c6c6120536d6f6f74686965205265636970652e6a7067),
(19, 'Watermelon Smoothie', 'Smoothie segar dari semangka yang manis dan juicy, dipadukan dengan sedikit lime untuk kesegaran ekstra. Ringan, menyegarkan, dan penuh dengan kandungan air, sempurna untuk menghilangkan dahaga di hari panas!', 23000, 15, 0x57617465726d656c6f6e20536d6f6f746869652e6a7067),
(20, 'Raspberry Smoothie', 'Smoothie segar dengan rasa asam manis dari raspberry, dipadukan dengan yogurt lembut dan sedikit madu. Kaya akan vitamin C dan antioksidan, cocok untuk camilan sehat yang menyegarkan!', 25000, 15, 0x426c756562657272792052617370626572727920536d6f6f746869652e6a7067),
(23, 'Berry Smoothie', 'Berry Smoothie adalah minuman segar yang terbuat dari campuran berbagai buah beri seperti stroberi, blueberry, dan raspberry, dicampur dengan yogurt atau susu. Kaya akan vitamin, antioksidan, dan serat, smoothie ini menyegarkan serta mendukung kesehatan kulit dan sistem imun. Ideal untuk sarapan atau camilan sehat.', 23000, 13, 0x45617379204865616c74687920426c7565626572727920536d6f6f746869652e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `email`, `pesan`, `status`) VALUES
(1, 'zesi walikhsani', 'zesiwalikhsani@gmail.com', 'haii, bagaimana cara memesan produk?', 'dibaca'),
(5, 'Budi', 'budi@gmail.com', 'Bagaiman cara memesan produk?', 'dibaca'),
(6, 'Zahra', 'zahra@gmail.com', 'haloo\r\n', 'dibaca'),
(8, 'cantigi', 'cantigi@gmail.com', 'bagaimana cara memesan produk?', 'dibaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(26, 'song hye kyo', 'kyo', 'kyo@gmail.com', '$2y$10$5O.WxT.tGlAQkNbZZkXf1OV45OT.jlo05Yt8DlFSoNtBJD5m7STyu'),
(27, 'Cantigi Azkayra Shabira', 'can', 'c@gmail.com', '$2y$10$sU8EsFjyS13qYYujtuPKjuyJ1hAKQZCX9P2pIDxUFmJ4pe9S2/6Hq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
