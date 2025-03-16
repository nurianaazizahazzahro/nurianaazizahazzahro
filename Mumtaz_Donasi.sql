-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 05:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphan`
--

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `d_id` int(3) NOT NULL,
  `program` varchar(20) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `d_nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` int(20) NOT NULL,
  `d_alamat` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
$sql = "SELECT DATE_FORMAT(tanggal_donasi, '%Y-%m') as bulan, SUM(jumlah) as total_donasi
        FROM donasi
        GROUP BY DATE_FORMAT(tanggal_donasi, '%Y-%m')
        ORDER BY DATE_FORMAT(tanggal_donasi, '%Y-%m') DESC";

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`d_id`, `program`, `jumlah`, `d_nama`, `email`, `kontak`, `d_alamat`, `gambar`) VALUES
(1, 'Wakaf Al Quran', 99999999, 'Amrina Rosyada', 'tokokita@gmail.com', '2147483647',  '2dedwq', 'th (4).jpg' '');
(2, 'Qurban Bareng', 12121212, 'ridwan', 'ahmadridwan@gmail.com', '1234568',  'tempuran', 'th (5).jpg' '');
(3, 'Sedekah Daging', 20000000, 'ashadi', 'ashadi@gmail.com', '2147483647',  'gandusari', 'th (6).jpg' '');
(4, 'Sedekah Sahur', 10000000, 'nuriana azizah azahro', 'nurianaazizah12@gmail.com', '2147483647',  'jogja', 'th (7).jpg' '');
(5, 'Qurban Bareng', 8000000, 'azza', 'fatimah@gmail.com', '2147483647',  '12e2e22e', 'azza.jpg' '');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `u_id` int(3) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`u_id`, `nama_lengkap`, `alamat_lengkap`, `kontak`, `email`, `komen`) VALUES
(1, 'Vyshak', '764 Hill Court \r\nGlendora, CA 91740', 55555444, 'Vyshak@gmail.com', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'edwin', '587 Riverside Ave. \r\nHephzibah, GA 30815', 55555444, 'edwin@test.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-
-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `join_date` datetime DEFAULT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `username`, `password`, `join_date`) VALUES
(1, 'admin', '5d6d3529d6fb33be6dbfdd9cdd85791b', '2008-09-09 00:00:00', 'Admin', 'User', 'M', '1990-01-01', 'City', 'ST', ''),
(2, 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2008-09-10 00:00:00', 'Normal', 'User', 'F', '1990-02-01', 'Another City', 'ST', '');

--
-- Indexes for dumped tables
--

--
-- 

--
-- Indexes for table `donation`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`u_id`);

--
-- 

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- 

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donasi`
  MODIFY `d_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `ulasan`
  MODIFY `u_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
--
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
COMMIT;
