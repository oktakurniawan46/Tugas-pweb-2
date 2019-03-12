-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mar 2019 pada 00.51
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oktadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `title`, `isi`, `tanggal`) VALUES
(8, 'okta48', 'kurniawan', '2019-02-20 02:41:07'),
(10, 'AKU CINTA', 'ALLAH', '2019-02-19 15:25:20'),
(11, 'subhanallah', 'walhamdulillah', '2019-02-19 15:39:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usia` int(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `biografi` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usia`, `nim`, `jurusan`, `biografi`, `gender`, `website`, `email`, `level`) VALUES
(49, 'okta', '411d2f5092ce942f2163866113f28168', 18, '0903181823003', 'Sistem Informasi', 'sadsadasdsadasd', 'Laki - Laki', 'www.google.com', 'ocktakurnieawan710@gmail.com', 'admin'),
(50, 'hamba', 'd3b134fa3908983cb6828229d9e76abf', 23, '09031281823055', 'Sistem Informasi', 'aku hamba allah', 'Laki - Laki', 'www.gmail.com', 'ok.mfep@gmail.com', 'admin'),
(51, 'admin', '21232f297a57a5a743894a0e4a801fc3', 25, '0903181823005', 'Sistem Informasi', 'saya adalah admin', 'Laki - Laki', 'www.google.com', 'ockt710@gmail.com', 'admin'),
(52, 'manager', '1d0258c2440a8d19e716292b231e3190', 25, '0903181823006', 'Sistem Informasi', 'saya user', 'Laki - Laki', 'www.google.com', 'bandoso@gmail.com', 'manager'),
(53, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 25, '0903181823008', 'Sistem Informasi', 'aku user', 'Laki - Laki', 'www.google.com', 'user1@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
