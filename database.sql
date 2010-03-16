-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2010 at 02:04 PM
-- Server version: 5.0.89
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hdragomi_geek`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `start_date` timestamp NOT NULL default '0000-00-00 00:00:00',
  `end_date` timestamp NOT NULL default '0000-00-00 00:00:00',
  `title` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `location` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `tipul` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL default 'user',
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `by_user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `start_date`, `end_date`, `title`, `location`, `tipul`, `user_id`) VALUES
(1, '2010-02-27 08:00:00', '2010-02-27 09:30:00', 'Jogging2', 'Rozelor', 'user', 1),
(2, '2010-02-27 10:00:00', '2010-02-27 13:00:00', 'Expoziție Carte', 'Humanitas', 'user', 1),
(4, '2010-02-28 15:00:00', '2010-02-28 15:05:00', 'Todo''s Review', '310', 'exam', 1),
(8, '2010-02-28 14:25:00', '2010-02-28 14:30:00', 'Smoke Break', '40x', 'third', 1),
(9, '2010-02-25 18:00:00', '2010-02-25 20:00:00', 'Curs Programare', 'A204', 'course', 1),
(10, '2010-02-22 10:00:00', '2010-02-22 11:30:00', 'Examen Info', 'C456', 'exam', 1),
(11, '2010-02-23 10:00:00', '2010-02-26 22:00:00', 'Expozitie Foto2', 'Humanitas', 'third', 1),
(12, '2010-02-28 16:48:00', '2010-02-28 17:18:00', 'Hello', 'There', 'user', 1),
(13, '2010-02-24 04:10:00', '2010-02-24 06:40:00', 'Sweet Slumber [Edited]', 'Bed', 'user', 1),
(14, '2010-02-22 20:00:00', '2010-02-22 21:45:00', 'Concert Phoenix', 'Club Fratelli Timisoara', 'third', 1),
(15, '2010-02-22 08:00:00', '2010-02-22 10:00:00', 'seminar LRC', 'sala 101', 'user', 1),
(16, '2010-02-22 15:00:00', '2010-02-22 17:00:00', 'cumparaturi cu Mara', 'Mall', 'user', 1),
(17, '2010-02-22 12:00:00', '2010-02-22 13:30:00', 'Curs Literatura comparata', 'A01', 'course', 1),
(18, '2010-02-22 22:15:00', '2010-02-22 23:30:00', 'Film cu Lexu', 'Cinema City', 'user', 1),
(19, '2010-02-23 10:30:00', '2010-02-23 12:45:00', 'Paintball', 'in padure', 'third', 1),
(20, '2010-02-23 20:00:00', '2010-02-23 11:00:00', 'Karaoke Party', 'Garaj Pink Freud', 'third', 1),
(21, '2010-02-23 08:00:00', '2010-02-23 08:59:00', 'Design grafic', 'A003', 'course', 1),
(22, '2010-02-23 00:00:00', '2010-02-23 04:00:00', 'Party DnB', 'Setup', 'third', 1),
(23, '2010-02-23 05:35:00', '2010-02-22 06:47:05', 'midnight junkfood snack', 'dugheana Zet - complex', 'user', 1),
(24, '2010-02-23 13:00:00', '2010-02-23 14:00:00', 'Pranz cu Gicu', 'Casa cu Flori', 'user', 1),
(25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'user', 1),
(26, '2010-02-23 18:38:00', '2010-02-23 19:08:00', 'ciocolata cu lapte', 'in parc', 'user', 1),
(27, '2010-02-23 09:00:00', '2010-02-23 10:30:00', 'curs balet', 'S334', 'course', 1),
(28, '2010-02-27 04:40:00', '2010-02-27 04:40:00', '"GasFest"', 'Priviata', 'user', 1),
(29, '2010-02-23 15:00:00', '2010-02-23 16:30:00', 'examen mate', 'A43', 'exam', 1),
(30, '2010-02-24 10:30:00', '2010-02-24 11:30:00', 'curs info', 'S7', 'course', 1),
(31, '2010-02-24 16:30:00', '2010-02-24 18:30:00', 'geekmeet', 'incubatorul de afaceri', 'third', 1),
(32, '2010-02-24 08:00:00', '2010-02-24 09:30:00', 'curs foto', 'A23', 'course', 1),
(33, '2010-02-27 18:00:00', '2010-02-27 20:00:00', 'Curs econometrie', 'Dumitru Mares - Pestalozzi', 'course', 1),
(34, '2010-02-24 12:00:00', '2010-02-24 13:30:00', 'exam conta', 'A01', 'exam', 1),
(35, '2010-02-26 01:00:00', '2010-02-26 02:00:00', 'Insomnia party', 'Insomnia', 'third', 1),
(36, '2010-02-27 14:00:00', '2010-02-27 16:00:00', 'Curs Analiza economico-financiara si gestiune a intreprinderii', 'P06 - Pestalozzi', 'course', 1),
(37, '2010-02-27 21:00:00', '2010-02-27 23:30:00', 'Patinoar', 'Real Aradului', 'user', 1),
(38, '2010-02-26 17:00:00', '2010-02-26 20:00:00', 'Restanta Contabilitate Financiara', 'A1 - Drept', 'exam', 1),
(40, '2010-02-28 20:00:00', '2010-02-28 21:00:00', 'prezentare proiect', 'Incubator', 'user', 1),
(41, '2010-02-28 22:00:00', '2010-02-28 22:00:00', 'Pizza night', 'Complex', 'user', 1),
(42, '2010-02-28 01:00:00', '2010-02-28 04:00:00', 'Happy time', 'Happy club', 'third', 1),
(43, '2010-02-26 13:55:00', '2010-02-26 14:05:00', 'Intoxicare cu tigari', 'foisor UVT', 'user', 1),
(44, '2010-02-28 09:00:00', '2010-02-28 11:00:00', 'Examen Econometrie', 'UVT, A31', 'exam', 1),
(45, '2010-02-26 08:00:00', '2010-02-26 10:00:00', 'Coffe & cups', 'StartBucks', 'third', 1),
(46, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'user', 5),
(47, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'user', 5),
(48, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'user', 5),
(49, '2010-02-24 20:18:00', '2010-02-24 20:48:00', 'o chestie', 'undeva', 'exam', 5),
(50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'eveniment inexistent', 'Timisoara, Romania', 'third', 5),
(52, '2010-03-04 22:59:00', '2010-03-04 23:29:00', 'a', 'a', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL default '',
  `password` char(50) NOT NULL,
  `logins` int(10) unsigned NOT NULL default '0',
  `last_login` int(10) unsigned default NULL,
  `nume` varchar(200) character set utf8 collate utf8_unicode_ci default NULL,
  `prenume` varchar(200) character set utf8 collate utf8_unicode_ci default NULL,
  `faculta` varchar(200) character set utf8 collate utf8_unicode_ci default NULL,
  `anul` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`, `nume`, `prenume`, `faculta`, `anul`) VALUES
(1, 'geek@hdragomir.com', 'geek', 'f14ffbb33727c53652bcc22c638dd77b1a357ce671e89eeb11', 30, 1267556545, NULL, NULL, '', NULL),
(4, 'horia@hdragomir.com', 'horia', 'b15e725dc524b25349c63bb7d31ad82bcdcf3485389a25eaca', 1, 1267373507, NULL, NULL, NULL, NULL),
(5, 'lijuvezihuhecusy@tempomail.fr', 'test123', '4fc0f7cfce3d4ce374fb850ec256008140e6ede69c0e5d4397', 2, 1267384068, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_tokens`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
