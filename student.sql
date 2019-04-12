-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Apr 2019 pada 20.30
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone_number` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone_number`, `message`, `date`) VALUES
(3, 'Apuys', '16171234@smkifsmd.sch.id', '081214392663', 'Perpect!', '2019-04-11 18:05:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_table`
--

CREATE TABLE IF NOT EXISTS `student_table` (
`id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `school` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `departement` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `student_table`
--

INSERT INTO `student_table` (`id`, `name`, `school`, `email`, `phone_number`, `grade`, `departement`) VALUES
(1, 'Saefulloh Aziz', 'SMK Informatika Sumedang', 'SaefullohAziz027@gmail.com', '081214392665', 'XII - ACP', 'RPL'),
(2, 'Ade Lukman', 'SMK Informatika Sumedang', 'de.lukman.45.dl@gmail.com', '081229783557', 'XII - ACP', 'RPL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
