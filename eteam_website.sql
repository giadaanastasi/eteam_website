-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 alle 19:48
-- Versione del server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eteam_website`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `descriptions`
--

CREATE TABLE IF NOT EXISTS `descriptions` (
  `position` varchar(20) NOT NULL,
  `text_ita` longtext NOT NULL,
  `text_eng` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `descriptions`
--

INSERT INTO `descriptions` (`position`, `text_ita`, `text_eng`) VALUES
('car_2008', 'Nome: ET1;Competizioni: FSAE Italy;Risultati: ; ', 'Name: ET1;Competitions: FSAE Italy;Results: ; '),
('car_2009', 'Nome: ET2ev;Competizioni: FSAE Italy, FS Germany;Risultati:  ;', 'Name: ET2ev;Competitions: FSAE Italy, FS Germany;Results:  ;'),
('car_2010', 'Nome: ET3;Competizioni: FSAE Italy, FS Germany;Risultati: Best Italian Team (Italia) ; ', 'Name: ET3;Competitions: FSAE Italy, FS Germany;Results:  Best Italian Team (Italy); '),
('car_2011', 'Nome: ETken ;Competizioni: FSAE Italy, FS Germany;Risultati: Media Award (Germania) ; ', 'Name: ETken ;Competitions: FSAE Italy, FS Germany;Results: Media Award (Germany);'),
('car_2012', 'Nome: ET5;Competizioni: FSAE Italy, FS Germany;Risultati: ; ', 'Name: ET5;Competitions: FSAE Italy, FS Germany;Results: ; '),
('car_2013', 'Nome: ET5xl;Competizioni: FS Czech;Risultati: ; ', 'Name: ET5xl;Competitions: FS Czech;Results: ; '),
('car_2014', 'Nome: ET456 ;Competizioni: FSAE Italy (Classe 1C),Formula Electric Italy;Risultati: ; ', 'Name:ET456 ;Competitions: FSAE Italy (Classe 1C),Formula Electric Italy;Results: ; '),
('car_2015', 'Nome: ;Competizioni: FSAE Italy ;Risultati: 1° Design Event (Italia), 1° Business Plan (Italia) , 1° Cost Event (Italia), 1° Classe 3 (Italia); ', 'Name: ;Competitions: FSAE Italy ;Results: 1° Design Event (Italy), 1° Business Plan (Italy) , 1° Cost Event (Italy), 1° Classe 3 (Italy); '),
('car_2016', 'Nome: Kerub ;Competizioni: FSAE Italy, FS Hungary ;Risultati: 1° Business Plan (Italia), 1° Business Plan (Ungheria) ; ', 'Name: Kerub ;Competitions: FSAE Italy, FS Hungary ;Results : 1° Presentation Event (Italy), 1° Business Plan (Hungary) ; '),
('car_2017', 'Nome: Kerub X ;Competizioni: FSAE Italy, FS Germany;Risultati: ; ', 'Name: Kerub X;Competitions: FSAE Italy, FS Germany;Results:  ;'),
('car_2018', 'Nome: Kerub H;Competizioni: FSAE Italy, FS Germany;Risultati: 1° Cost Event (Italia) ; ', 'Name: Kerub H ;Competitions: FSAE Italy, FS Germany;Results: 1° Cost Event (Italy);'),
('car_2019', 'Nome: Kerublast ;Competizioni: FSAE Italy, FS Germany, FS Czech;Risultati: 1° Business Plan (Italia e Germania), 1° Cost Report (Italia), 5° Acceleration (Germania) ; ', 'Name: Kerublast ;Competitions: FSAE Italy, FS Germany, FS Czech;Results: 1 Business Plan (Italy and Germany), 1 Cost Report (Italy), 5 Acceleration (Germany) ;'),
('index_1', 'L''E-team è la squadra che rappresenta l''Università di Pisa alle competizioni di Formula SAE e Formula Student in Italia ed Europa. Nasce nel 2007, oggi conta più di 80 membri provenienti da più di 15 corsi di laurea differenti', 'E-team is the team that represents the University of Pisa in Formula SAE and Formula Student competitions. Born in 2007, it includes nowadays more than 80 members, coming from more than 15 different degree courses.');

-- --------------------------------------------------------

--
-- Struttura della tabella `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `name` varchar(200) NOT NULL,
  `image` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `images`
--

INSERT INTO `images` (`name`, `image`) VALUES
('index_img_1', 'uploads/background.jpg'),
('index_img_2', 'uploads/FB_IMG_1564401412416.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `sector` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Nome_Cognome` varchar(20000) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Nome_Cognome`) VALUES
(3, 'websiteDesigner', '$2y$10$vO9YSMwxGUqIp0Gr7AKan.2gl6lMzTWguy6eQNuROvdhljD0RI29S', 'websiteDesigner'),
(4, 'giada.anastasi@gmail.com', '$2y$10$JHkqmrgg.OWP7Tv97b5YH.ZCCYnpcFPlxGuj5.ntBHDw3kE0RQlKC', 'Giada Anastasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
 ADD PRIMARY KEY (`position`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
