-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 01:13 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinica1`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_04_03_191906_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
`id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id`, `nome`) VALUES
(1, 'admin'),
(2, 'medico'),
(3, 'secretaria');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `tipo_id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 1, 'admin@gmail.com', '$2y$10$pSFMOZaIvxRaXLuN3iEDpeChA9CAihoXpyoXuMIV/bKObhJ4i69wq', '1gwYifrzUJCS0U4zvpuVVyO6JNM2eH1PITIMqWwQkTcZ3b26UfuuuUP757Ln', '2016-04-08 23:45:21', '2016-04-15 16:05:06'),
(6, 'Camilo', 2, 'chemanecamilo@gmail.com', '$2y$10$rBgk/y25mcEDM.SDgCA4uuXvljoR2AWVes5xSCz0vmu5pBs/DjfFO', '', '2016-04-09 00:58:30', '2016-04-09 00:58:30'),
(7, 'Amelia', 3, 'secretaria@gmail.com', '$2y$10$zutND73mkE9TEz1O.I8CLuzMn7RItBqTuezzUTqp4V2RmAtewGSUO', 'ACdUWE9B4umlZ7iDG7pvZ1DPERz7WhiJtxLfVjhWXxmye072d0OrSGGfGbM5', '2016-04-14 00:56:18', '2016-04-15 18:03:01'),
(8, 'Amelia', 3, 'amelia@gmail.com', '$2y$10$3KdsZJ8hRkMjKILpbvNKfO9ZFOJJ5S1BiMLbny8XrqdXiAatNyJUu', '', '2016-04-14 01:09:17', '2016-04-14 01:09:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `tipo_id` (`tipo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
