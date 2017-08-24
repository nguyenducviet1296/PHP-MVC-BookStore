-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 06:47 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(5) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `birthDate` date NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `phoneNumber`, `birthDate`, `address`) VALUES
(1, 'Nam Pao', 'nampao@gmail.com', '012398765', '2017-08-01', '21 Jump St, Washington, USA'),
(2, 'La QuÃ¡n Trung', 'trunglq@gmail.com', '012398765', '2017-08-01', '22 Jump St, Washington, USA'),
(3, 'NgÃ´ Thá»«a Ã‚n', 'antn@gmail.com', '012398765', '2017-08-01', '23 Jump St, Washington, USA'),
(10, 'God Oda', 'oda@gmail.com', '012398765', '1989-01-01', '24 Jump St, Toronto, USA'),
(11, 'Fujama Fuiji', 'fufu@gmail.com', '0123987654', '1969-01-01', '25 Jump St, Toronto, USA');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(5) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `idCategorie` int(5) NOT NULL,
  `idAuthor` int(5) NOT NULL,
  `publishedYear` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `idCategorie`, `idAuthor`, `publishedYear`) VALUES
(1, 'How to?', 3, 1, 2018),
(2, 'Tam quoc dien nghia', 1, 2, 2017),
(3, 'Tay du ky', 2, 3, 2017),
(5, 'Doremon', 6, 11, 1984),
(7, 'One Piece', 5, 10, 1996);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Tiá»ƒu thuyáº¿t'),
(2, 'Truyá»n thuyáº¿t'),
(3, 'Khoa há»c'),
(5, 'Anime'),
(6, 'Manga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAuthor` (`idAuthor`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
