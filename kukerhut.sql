-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2020 pada 07.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kukerhut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'ray', '$2y$10$HdyiRfFPSg9/6ACcdBaWjOEYXOy1SFqusV3/2ZhdkZOfZCowg4TI6'),
(2, 'daffa', '$2y$10$3LxFnILoVGaM.a/ciJXnSOUt92vKtTtcPBB903Jo/jAG8rPO7LDnK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `foto_iklan` varchar(128) DEFAULT NULL,
  `nama_iklan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `foto_iklan`, `nama_iklan`) VALUES
(1, 'bg_31.jpg', 'HUT RI'),
(2, 'about.jpg', 'idul pitri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Cake'),
(2, 'Cookies'),
(3, 'Dessert'),
(4, 'Daily Cake'),
(5, 'Beverage'),
(6, 'Snack                                                '),
(7, 'Frozen Food');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `harga_produk` varchar(128) NOT NULL,
  `foto_produk` varchar(128) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `editor` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `editor`) VALUES
(13, 2, 'Brown Sugar Cookies', 'Rp. 20000 - 30000', 'download.jpeg', 'Cookies dengan taburan gula merah', 'daffa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori_produk_fk` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk_fk` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
