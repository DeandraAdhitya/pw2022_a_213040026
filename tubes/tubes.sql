-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 05:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id` int(11) NOT NULL,
  `nama_tanaman` varchar(255) NOT NULL,
  `nama_latin` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id`, `nama_tanaman`, `nama_latin`, `jenis`, `gambar`) VALUES
(1, 'Bunga Matahari', 'Helianthus Annus', 'Tanaman Hias', 'matahari.jpg'),
(2, 'Melati Putih', 'Jasminus Sambac', 'Tanaman Hias', 'melati.jpg'),
(3, 'Cempaka Kuning', 'Michelia Champaka', 'Tanaman Hias', 'cempaka.jpg'),
(4, 'Adenium', 'Adenium SP', 'Tanaman Hias', 'adenium.jpg'),
(5, 'Cocor Bebek', 'Kalanchoe Pinnuta', 'Tanaman Hias', 'cocor.jpg'),
(6, 'Ekor Musang', 'Lycopodium Carinatum', 'Tanaman Hias', 'musang.jpg'),
(7, 'Kamelia', 'Camellia Japonica', 'Tanaman Hias', 'camelia.jpg'),
(8, 'Lili Paris', 'Chlorophytum SP', 'Tanaman Hias', 'paris.jpg'),
(9, 'Gladiol', 'Gladiolus Hortulanus', 'Tanaman Hias', 'gladiol.jpg'),
(10, 'Flamboyan', 'Delonix Regia', 'Tanaman Hias', 'flamboyan.jpg'),
(52, 'Mawar Merah', 'Red Mawar', 'Tanaman Unik', '62a40f15cedbf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$6WEUWnasSSAbTuW4VfGHU.J8mZCyw7W12fa7sa7..bU82ETBcpaVi'),
(3, 'deandra', '$2y$10$OGyC/KBgyRuroaW.GW46RuCN2CwG9W4TnH7Z/yMWT4PbjRgjHpt/S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
