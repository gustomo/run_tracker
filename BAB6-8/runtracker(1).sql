-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2024 at 03:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `runtracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id` int NOT NULL,
  `nama_pengguna` varchar(225) NOT NULL,
  `kategori_olahraga` varchar(225) NOT NULL,
  `no_tlp` varchar(225) NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `kondisi_fisik` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`id`, `nama_pengguna`, `kategori_olahraga`, `no_tlp`, `lokasi`, `kondisi_fisik`) VALUES
(5, 'gustomoo', 'sepeda', '0815450981', 'malang', 'sehat'),
(6, 'gustomo duta', 'sepedapancal', '0988', 'mana', 'sehatt');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int NOT NULL,
  `email_phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pasword` varchar(225) NOT NULL,
  `age` int NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `domicile` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `email_phone`, `name`, `pasword`, `age`, `weight`, `height`, `domicile`) VALUES
(1, 'gustomo@gmail.com', 'gustomo', 'babio', 90, 2, 12, 'adsdad'),
(2, 'gustomo@gmail.com', 'gustomo', '', 90, 2, 12, 'adsdad'),
(3, 'gustomo@gmail.com', 'gustomo', '', 90, 2, 12, 'adsdad'),
(4, 'gustomo@gmail.com', 'gustomo', '', 90, 2, 12, 'adsdad'),
(5, 'babi@gmail.com', 'babai', 'fafas', 22, 33, 44, 'fdfadfa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `hobi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `gender`, `hobi`) VALUES
(21, 'hdsaas', 'Male', 'adsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
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
-- AUTO_INCREMENT for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
