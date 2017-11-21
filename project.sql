-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 10:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(50) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `id_penyedia` int(50) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_penyedia` (`id_penyedia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `id_penyedia`) VALUES
(1, 'Vans Authentic Brown SolGum', 'Sepatu', 12),
(16, 'Converse Allstar Navy', 'Sepatu', 1),
(17, 'GG', 'BB', 11);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(50) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `alamat_karyawan` varchar(50) NOT NULL,
  `notelp_karyawan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `password`, `alamat_karyawan`, `notelp_karyawan`) VALUES
(1, 'Gabriel', 123, 'Jl Singgalang', '082285182758'),
(2, 'Tommy', 1234, 'Jl Balam', '0822675463');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(50) NOT NULL AUTO_INCREMENT,
  `id_barang` int(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `total_belanja` varchar(50) NOT NULL,
  `id_karyawan` int(50) NOT NULL,
  PRIMARY KEY (`id_pembelian`),
  KEY `id_barang` (`id_barang`),
  KEY `id_barang_2` (`id_barang`),
  KEY `id_karyawan` (`id_karyawan`),
  KEY `id_karyawan_2` (`id_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_barang`, `tanggal`, `total_belanja`, `id_karyawan`) VALUES
(1, 17, '18 Novermber 2017', 'Rp 355.000', 1),
(2, 16, '26 November 2017', 'Rp 300.000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penyedia`
--

CREATE TABLE IF NOT EXISTS `penyedia` (
  `id_penyedia` int(50) NOT NULL AUTO_INCREMENT,
  `nama_penyedia` varchar(50) NOT NULL,
  `alamat_penyedia` varchar(50) NOT NULL,
  PRIMARY KEY (`id_penyedia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `penyedia`
--

INSERT INTO `penyedia` (`id_penyedia`, `nama_penyedia`, `alamat_penyedia`) VALUES
(1, 'Vans', 'Jl Balam'),
(11, 'Converse', 'Jl Dahlia'),
(12, 'LOLO', 'jl dahlia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('admin', 'admin', 'admin'),
('Gabriel', '123', 'karyawan'),
('Tommy', '1234', 'karyawan');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_penyedia`) REFERENCES `penyedia` (`id_penyedia`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
