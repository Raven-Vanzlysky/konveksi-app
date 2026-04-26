-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2026 at 11:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.5.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konveksidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(18) NOT NULL,
  `alamat` text NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `password`, `email`, `no_hp`, `alamat`, `role`) VALUES
(15, 'Ioreum', 'Chiron', '$2y$12$UX7NKyOH53yvGdkXkYIou.kjdf2welHL0eWySGyrss0FalNnVaote', 'voiture@noire.com', '084524532', 'Bandung', 'Admin'),
(22, 'Lieutnant', 'Gon', '$2y$12$rr8wyDfcFkvWa3rO89Ey5./FwUZzZQjg1OVr8ApLvx8hC6GUbF5fa', 'huhu@huhu.com', '098098', 'klkjlkjl', 'User'),
(26, 'Kiki', 'Koko', '$2y$12$g4Yl6I4Fc0RxzitcvOZWmu2nyvnlJJzj8Hj.NwQnT1bTY2/XPMhga', 'kuku@kaka', '982', 'Keke', 'Admin'),
(27, 'asdsadsad', ';lj;lj', '$2y$12$V5s/dYTPlOLWQVCMKj0O1.iwbDg7yxe9KUfk8xl3h2TD13Z2eFV1K', 'sadsad@sdads', '93423439393933', 'dsffdsfdsf', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `stok` int NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
