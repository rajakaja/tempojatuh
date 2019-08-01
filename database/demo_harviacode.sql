-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2019 at 11:31 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_harviacode`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1,'lutfi', 'lutfi', '12345678'),
(1,'raffa', 'raffa', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `jatuh_tempo`) VALUES
(1,'KB-001', 'Kulkas', '2019-09-30'),
(2,'KB-002', 'TV', '2019-10-15'),
(3,'KB-003', 'Kompor', '2019-08-05'),
(4,'KB-004', 'Motor', '2019-08-07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_barang`
-- (See below for the actual view)
--
CREATE TABLE `view_barang` (
`id` int(11)
,`kode_barang` varchar(20)
,`nama_barang` varchar(100)
,`jatuh_tempo` date
,`selisih` int(7)
);

-- --------------------------------------------------------

--
-- Structure for view `view_barang`
--
DROP TABLE IF EXISTS `view_barang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_barang`  AS  select `barang`.`id` AS `id`,`barang`.`nama_barang` AS `nama_barang`,`barang`.`kode_barang` AS `kode_barang`,`barang`.`jatuh_tempo` AS `jatuh_tempo`,to_days(`barang`.`jatuh_tempo`) - to_days(current_timestamp()) AS `selisih` from `barang` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
