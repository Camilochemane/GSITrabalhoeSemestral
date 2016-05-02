-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 01:42 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
`PacienteID` int(11) NOT NULL,
  `Apelido` varchar(20) DEFAULT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Sexo` varchar(10) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `BINr` varchar(19) DEFAULT NULL,
  `DataEmissao` date DEFAULT NULL,
  `Morada` varchar(25) DEFAULT NULL,
  `Telefone` varchar(25) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`PacienteID`, `Apelido`, `Nome`, `Sexo`, `DataNascimento`, `BINr`, `DataEmissao`, `Morada`, `Telefone`, `Email`) VALUES
(1, 'Massango', 'Ayilton Bernardo', 'Masculino', NULL, NULL, NULL, 'Matola-Trevo', '848185155', 'Ayiltonbernardo@gmail.com'),
(2, 'Chemane', 'Camilo', 'Masculino', NULL, NULL, NULL, 'Aeroporto', '123123132123', 'chemane@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
`id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `tipo_id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 1, 'admin@gmail.com', '$2y$10$pSFMOZaIvxRaXLuN3iEDpeChA9CAihoXpyoXuMIV/bKObhJ4i69wq', 'RsoCZuCYeBWFgUc0KmwuGu0Yu42mEuAYqc4FMTRc8kCqIErI5HSwgAgWKJRb', '2016-04-08 23:45:21', '2016-04-28 07:50:34'),
(6, 'Camilo', 2, 'chemanecamilo@gmail.com', '$2y$10$rBgk/y25mcEDM.SDgCA4uuXvljoR2AWVes5xSCz0vmu5pBs/DjfFO', 'TWyRoSUSMSIWWKbXYKuTlZ9nNkDpQLoGE5y1fvDzsRf81KxnomuXq5jdXV1l', '2016-04-09 00:58:30', '2016-04-24 03:24:31'),
(7, 'Amelia', 3, 'secretaria@gmail.com', '$2y$10$zutND73mkE9TEz1O.I8CLuzMn7RItBqTuezzUTqp4V2RmAtewGSUO', 'y0ojy1VtryvjcDrWQohsc6539y1Ed7aHldMv5ILqEcnpDWp5DVdbLUt4mlEk', '2016-04-14 00:56:18', '2016-04-28 07:59:29'),
(8, 'Amelia', 3, 'amelia@gmail.com', '$2y$10$3KdsZJ8hRkMjKILpbvNKfO9ZFOJJ5S1BiMLbny8XrqdXiAatNyJUu', '', '2016-04-14 01:09:17', '2016-04-14 01:09:17'),
(9, 'Ayilton Massango', 2, 'Ayiltonbernardo@gmail.com', '$2y$10$Wu/B6eUDvIhTlEhMJR8ECeP8Twn2/RGHIxjcWd3zrkR2WSmcNnKta', '', '2016-04-26 05:38:04', '2016-04-26 05:38:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
 ADD PRIMARY KEY (`PacienteID`);

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
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
MODIFY `PacienteID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
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
