-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 08:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orca`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `email` varchar(254) COLLATE utf8_lithuanian_ci NOT NULL,
  `name` varchar(254) COLLATE utf8_lithuanian_ci NOT NULL,
  `body` text COLLATE utf8_lithuanian_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `name`, `body`, `parent_id`, `created_at`) VALUES
(1, 'linas.juodvalkis@ktu.edu', 'linas', 'komentaras', 0, '2018-07-05 09:36:34'),
(2, 'john@doe.com', 'John', 'komentaras 2', 1, '2018-07-05 09:40:44'),
(3, 'jane@deere.com', 'Jane', 'komentaras 3', 1, '2018-07-05 09:40:44'),
(4, 'john@example.com', 'John', 'body', 0, '2018-07-05 10:12:52'),
(5, 'john@example.com', 'John', 'body', 0, '2018-07-05 10:53:53'),
(6, 'john@example.com', 'John', 'body', 0, '2018-07-05 11:15:56'),
(7, 'asd@daf.com', 'Denver', 'Denver\'s comment', 5, '2018-07-05 11:37:00'),
(36, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 0, '2018-07-05 16:58:55'),
(37, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 36, '2018-07-05 16:59:04'),
(38, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 0, '2018-07-05 17:05:44'),
(39, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 38, '2018-07-05 17:05:48'),
(40, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 38, '2018-07-05 17:06:11'),
(41, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 0, '2018-07-05 17:09:20'),
(42, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 41, '2018-07-05 17:09:26'),
(43, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 0, '2018-07-05 17:17:52'),
(44, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 43, '2018-07-05 17:17:59'),
(45, 'linas.juodvalkis@ktu.edu', 'Linas', 'asdddd', 0, '2018-07-05 17:18:32'),
(46, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 45, '2018-07-05 17:22:27'),
(47, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 0, '2018-07-05 17:22:35'),
(48, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 0, '2018-07-05 17:27:01'),
(49, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 0, '2018-07-05 17:27:23'),
(50, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 49, '2018-07-05 17:27:28'),
(51, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 49, '2018-07-05 17:27:33'),
(52, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 49, '2018-07-05 17:32:46'),
(53, 'linas.juodvalkis@ktu.edu', 'Linas', 'asd', 0, '2018-07-05 17:34:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`,`parent_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
