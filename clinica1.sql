-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 02:26 PM
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
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `horaInicio` time(6) NOT NULL,
  `horaFim` time(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `nome`, `data`, `horaInicio`, `horaFim`) VALUES
(1, '6', '2016-05-03', '01:01:02.000000', '01:32:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `especialidade`
--

CREATE TABLE IF NOT EXISTS `especialidade` (
`EspecialidadeID` int(11) NOT NULL,
  `Designacao` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `especialidade`
--

INSERT INTO `especialidade` (`EspecialidadeID`, `Designacao`) VALUES
(1, 'Ortopedista'),
(2, 'Legista'),
(3, 'Otorinolaringologista');

-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
`FuncionarioID` int(11) NOT NULL,
  `BINR` varchar(50) NOT NULL,
  `Apelido` varchar(50) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Sexo` varchar(25) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Morada` varchar(50) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `EspecialidadeID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Funcao` varchar(50) NOT NULL,
  `DataEmissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id`, `nome`) VALUES
(1, 'admin'),
(2, 'medico'),
(3, 'secretaria'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_id` int(255) NOT NULL,
  `datanascimento` date NOT NULL,
  `morada` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` int(9) NOT NULL,
  `binr` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dataemissao` date NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `apelido` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `especialidade` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `genero`, `tipo_id`, `datanascimento`, `morada`, `telefone`, `binr`, `dataemissao`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `apelido`, `especialidade`) VALUES
(5, 'Admin', '', 1, '0000-00-00', '', 0, '', '0000-00-00', 'admin@gmail.com', '$2y$10$pSFMOZaIvxRaXLuN3iEDpeChA9CAihoXpyoXuMIV/bKObhJ4i69wq', 'GyYvXUN4UDEBYxdfSzT4cLbQGHkiswC3sN1aSuOf2jERTxkCzqTerJ8G55Vo', '2016-04-08 23:45:21', '2016-05-07 23:08:22', '', ''),
(6, 'Camilo', '', 2, '0000-00-00', '', 0, '', '0000-00-00', 'chemanecamilo@gmail.com', '$2y$10$rBgk/y25mcEDM.SDgCA4uuXvljoR2AWVes5xSCz0vmu5pBs/DjfFO', 'UsXkhRwzLfnvNkYfWXmHH446Sj6oR79MmlCkXrrbxyrv4epd3aN4JSUIus9r', '2016-04-09 00:58:30', '2016-05-07 21:58:21', '', ''),
(7, 'Amelia', '', 3, '0000-00-00', '', 0, '', '0000-00-00', 'secretaria@gmail.com', '$2y$10$zutND73mkE9TEz1O.I8CLuzMn7RItBqTuezzUTqp4V2RmAtewGSUO', '5tczGGVWTLegaaZUr7rveDW5zj53s6VBabndFUdIE50BNkyCWkRpgiPoGU9U', '2016-04-14 00:56:18', '2016-05-09 17:39:06', '', ''),
(8, 'Amelia', '', 3, '0000-00-00', '', 0, '', '0000-00-00', 'amelia@gmail.com', '$2y$10$3KdsZJ8hRkMjKILpbvNKfO9ZFOJJ5S1BiMLbny8XrqdXiAatNyJUu', '', '2016-04-14 01:09:17', '2016-04-14 01:09:17', '', ''),
(9, 'Ayilton Massango', '', 2, '0000-00-00', '', 0, '', '0000-00-00', 'Ayiltonbernardo@gmail.com', '$2y$10$Wu/B6eUDvIhTlEhMJR8ECeP8Twn2/RGHIxjcWd3zrkR2WSmcNnKta', '', '2016-04-26 05:38:04', '2016-04-26 05:38:04', '', ''),
(10, 'Camilo', 'M', 2, '0000-00-00', '', 0, '', '0000-00-00', '', '$2y$10$s/tRmObrirANXwFWcfLFw.Unh.XsEdWZXaT1UMonwa5Mj1SGbk1ti', '', '2016-05-05 04:42:47', '2016-05-05 04:42:47', 'Chemane', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
 ADD PRIMARY KEY (`EspecialidadeID`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
 ADD PRIMARY KEY (`FuncionarioID`), ADD KEY `EspecialidadeID` (`EspecialidadeID`);

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
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
MODIFY `EspecialidadeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
MODIFY `FuncionarioID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
MODIFY `PacienteID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `funcionarios`
--
ALTER TABLE `funcionarios`
ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`EspecialidadeID`) REFERENCES `especialidade` (`EspecialidadeID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
