-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 11:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `harga_produk` varchar(128) NOT NULL,
  `foto_produk` varchar(128) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_kategori`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(1, 1, 'Cake', 'Pie Buah', 'Rp.160.000', 'product-1.jpg', 'Pie buah rasanya seperti buah'),
(2, 1, 'Cake', 'Cake Ulang Tahun', 'Rp.350.000', 'product-2.jpg', 'Selamat Ulang tahun kami ucapkan..'),
(3, 2, 'Cookies', 'Nastar Stick', 'Rp.140.000', 'product-3.jpg', 'Seperti mati lampuu ya sayang'),
(4, 2, 'Cookies', 'Sagu Keju Edam', 'Rp.110.000', 'product-4.jpg', 'edan pisan brow'),
(5, 3, 'Dessert', 'Puding Cake', 'Rp.70.000', 'product-5.jpg', 'my puddin'),
(6, 3, 'Dessert', 'Puding Prune', 'Rp.70.000', 'product-6.jpg', 'pruneeeee'),
(7, 4, 'Daily Cake', 'Banana Cream Cheese', 'Rp.80.000', 'product-7.jpg', 'Cheese Cream Banana'),
(8, 4, 'Daily Cake', 'Brownies Fudge', 'Rp.60.000', 'product-8.jpg', 'naon'),
(9, 5, 'Beverage', 'Es Jelly', 'Rp.10.000', 'product-9.jpg', 'es es jelly jelly'),
(10, 5, 'Beverage', 'Green Tea', 'Rp.6.500', 'product-10.jpg', 'Hijau Daun tetew'),
(11, 6, 'Snack', 'Salted Egg', 'Rp.45.000', 'product-11.jpg', 'Telor Asin'),
(12, 6, 'Snack', 'Onigiri', 'Rp.15.000', 'product-12.jpg', 'serizawaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori_produk_fk` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk_fk` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
