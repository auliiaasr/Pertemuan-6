-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2022 pada 18.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `movies`
--

CREATE TABLE `movies` (
  `id` int(6) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `rating` varchar(6) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movies`
--

INSERT INTO `movies` (`id`, `judul`, `tahun`, `rating`, `gambar`) VALUES
(1, 'THE GODFATHER', '1972', 'R', 'images/1.jpg'),
(2, 'ZODIAC', '2007', 'D', 'images/2.jpg'),
(3, 'ELITE', '2021', 'R', 'images/3.jpg'),
(4, 'MARRIAGE STORY', '2019', 'R', 'images/4.jpg'),
(5, 'THE BATMAN', '2022', 'PG-13', 'images/6.jpg'),
(6, 'SPIDERMAN NO WAY HOME', '2021', 'PG-13', 'images/7.jpg'),
(7, 'LEON THE PROFESSIONAL', '1994', 'R', 'images/8.jpg'),
(8, 'DUNE', '2021', 'SU', 'images/9.jpg'),
(9, 'THE SILENCE OF THE LAMBS', '1991', 'R', 'images/10.jpg'),
(10, 'THE IRREGULARS', '2021', 'D', 'images/5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
