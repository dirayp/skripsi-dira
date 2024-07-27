-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 01:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'dira', '123'),
(3, 'yutaka', '456'),
(4, 'putri', '456');

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id_admin` int(11) NOT NULL,
  `id_namabarang` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `satuan` varchar(6) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `warna` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id_admin`, `id_namabarang`, `nama_barang`, `satuan`, `ukuran`, `warna`) VALUES
(3, 23, 'Batik', 'pcs', 'L', 'Cokelat'),
(3, 24, 'Rok Mini', 'pcs', 'M', 'Denim'),
(4, 25, 'Celana Jeans', 'pcs', 'S', 'Denim'),
(2, 26, 'Sweater Crop', 'pcs', 'L', 'Pink'),
(4, 27, 'Celana Pendek', 'pcs', 'M', 'Denim');

-- --------------------------------------------------------

--
-- Table structure for table `master_supplier`
--

CREATE TABLE `master_supplier` (
  `id_admin` int(11) NOT NULL,
  `id_namasupplier` int(11) NOT NULL,
  `nama_supplier` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_supplier`
--

INSERT INTO `master_supplier` (`id_admin`, `id_namasupplier`, `nama_supplier`, `alamat`, `no_telp`) VALUES
(4, 14, 'Duniatex Group', 'Solo', '089123456723'),
(4, 15, 'Lea Jeans', 'Jakarta Barat', '081519990233'),
(2, 16, 'No Label Stuff', 'Bandung', '089517263540'),
(3, 17, 'PT Batam Textille', 'Semarang', '081238991200'),
(3, 18, 'PT Busana Cemerlang', 'Bogor', '087787789290');

-- --------------------------------------------------------

--
-- Table structure for table `trx_keluar`
--

CREATE TABLE `trx_keluar` (
  `id_trxkeluar` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_namabarang` int(11) NOT NULL,
  `tgl_jual` date NOT NULL,
  `jml_barangkeluar` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx_keluar`
--

INSERT INTO `trx_keluar` (`id_trxkeluar`, `id_admin`, `id_namabarang`, `tgl_jual`, `jml_barangkeluar`, `harga_jual`, `total`) VALUES
(1, 0, 4, '2023-08-27', 10, 100000, 1000000),
(2, 0, 5, '2023-08-26', 8, 90000, 720000),
(3, 0, 8, '2023-08-26', 40, 170000, 6800000),
(5, 0, 13, '2023-08-23', 15, 260000, 3900000),
(6, 3, 26, '2023-09-17', 4, 100000, 400000),
(7, 4, 26, '2023-09-17', 8, 100000, 800000),
(8, 2, 25, '2023-09-16', 2, 120000, 240000),
(9, 2, 25, '2023-09-15', 3, 120000, 360000),
(10, 3, 24, '2023-09-14', 9, 125000, 1125000),
(11, 4, 27, '2024-02-19', 24, 80000, 1920000),
(12, 2, 27, '2024-02-15', 15, 80000, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `trx_masuk`
--

CREATE TABLE `trx_masuk` (
  `id_trxmasuk` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_namabarang` int(11) NOT NULL,
  `id_namasupplier` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `jml_barangmasuk` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx_masuk`
--

INSERT INTO `trx_masuk` (`id_trxmasuk`, `id_admin`, `id_namabarang`, `id_namasupplier`, `tgl_beli`, `jml_barangmasuk`, `harga_beli`, `total`) VALUES
(8, 2, 25, 9, '2023-09-17', 80, 60000, 4800000),
(9, 4, 26, 10, '2023-09-17', 100, 40000, 4000000),
(10, 2, 24, 7, '2023-09-17', 50, 70000, 3500000),
(11, 2, 24, 14, '2023-09-17', 50, 70000, 3500000),
(12, 2, 25, 15, '2023-09-17', 80, 60000, 4800000),
(13, 4, 26, 16, '2023-09-17', 100, 80000, 8000000),
(14, 4, 27, 15, '2024-02-10', 75, 65000, 4875000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_namabarang`);

--
-- Indexes for table `master_supplier`
--
ALTER TABLE `master_supplier`
  ADD PRIMARY KEY (`id_namasupplier`);

--
-- Indexes for table `trx_keluar`
--
ALTER TABLE `trx_keluar`
  ADD PRIMARY KEY (`id_trxkeluar`);

--
-- Indexes for table `trx_masuk`
--
ALTER TABLE `trx_masuk`
  ADD PRIMARY KEY (`id_trxmasuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_namabarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `master_supplier`
--
ALTER TABLE `master_supplier`
  MODIFY `id_namasupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trx_keluar`
--
ALTER TABLE `trx_keluar`
  MODIFY `id_trxkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trx_masuk`
--
ALTER TABLE `trx_masuk`
  MODIFY `id_trxmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
