-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 10:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_infosekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nomer` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notel` varchar(200) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`nomer`, `nama`, `notel`, `alamat`, `jabatan`) VALUES
(1, 'Suyatno M.Pd', '088656445687', 'Jl. Bareng Kartini No. 10', 'Kepala Sekolah'),
(2, 'Boger Bojinov B.M', '0867887093425', 'Sidorahayu, Wagir', 'Guru Tari'),
(3, 'Sigit Rendang', '0789965589277', 'Jurangwugu, Wagir', 'Guru Budaya'),
(4, 'Ogud Aryaputra', '086657839277', 'Bareng Kartini No. 10', 'Guru Nyenuk'),
(9, 'Abdul Salam', '084432567732', 'Bukit Cemara Tidar', 'Guru PHP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`email`, `password`, `level`) VALUES
('rejaherex201@gmail.com', '79fb4d710a59d89b23d8941a816c80d7', 'user'),
('smkn4malang@gmail.com', '7b5bd38c9101ca36b5dadd50be65f8ad', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nomer` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nomer`, `nama`, `notel`, `alamat`, `kelas`) VALUES
(1, 'Fahmi ', '084647473883', 'Kebonsari', 'XI RPL A'),
(2, 'Royyan', '084647436363', 'Kebonagung', 'XI RPL C'),
(3, 'Wong Wei Hong', '087685449893', 'Gadang', 'XI RPL C'),
(4, 'Ogud Aryaputra', '086657839277', 'Bareng Kartini No. 10', 'Guru Nyenuk'),
(5, 'Zikry', '086745636678', 'Ngaglik', 'XI RPL B'),
(6, 'Chandra', '086745636678', 'Bululawang', 'XI RPL B'),
(8, 'Ogud', '0867663534221', 'Bareng', 'XI RPL B'),
(9, 'Nanda', '086745636678', 'Lumajang', 'XI RPL B'),
(10, 'Sulthon', '086755743325', 'Bukit Cemara Tidar', 'XI RPL B'),
(11, 'Reja', '0886993648756', 'Bandulan', 'XI RPL B'),
(13, 'Sutekno', '0886993648756', 'Wagir', 'XI RPL B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nomer`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nomer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `nomer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
