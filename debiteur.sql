-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 11:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oefening`
--

-- --------------------------------------------------------

--
-- Table structure for table `debiteur`
--

CREATE TABLE `debiteur` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `tussenvoegsel` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `totaal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `debiteur`
--

INSERT INTO `debiteur` (`id`, `email`, `voornaam`, `tussenvoegsel`, `achternaam`, `totaal`) VALUES
(3, 'gcockayne2@psu.edu', 'Gerhard', 'van', 'Cockayne', '34,20'),
(4, 'csnibson3@unesco.org', 'Caressa', 'van', 'Snibson', '22,64'),
(5, 'strotman4@dmoz.org', 'Shelby', 'van', 'Trotman', '16.,99'),
(6, 'kcholwell5@vinaora.com', 'King', 'van', 'Cholwell', '1,82'),
(7, 'kfewlass6@loc.gov', 'Kala', 'van', 'Fewlass', '26,40'),
(8, 'csnelman7@ycombinator.com', 'Cornie', 'van', 'Snelman', '43,98'),
(9, 'kdriffield8@google.de', 'Kandy', 'van', 'Driffield', '12,84'),
(10, 'wstenner9@fotki.com', 'Winny', 'van', 'Stenner', '5,07'),
(11, 'kskadea@newsvine.com', 'Krystyna', 'van', 'Skade', '38,57'),
(12, 'mbedminsterb@studiopress.com', 'Maddi', 'van', 'Bedminster', '29,48'),
(13, 'jartusc@dropbox.com', 'Jude', 'van', 'Artus', '34,54'),
(14, 'cburded@stumbleupon.com', 'Cristabel', 'van', 'Burde', '94,76'),
(15, 'dfitzgeralde@accuweather.com', 'Darn', 'van', 'Fitzgerald', '66,7'),
(16, 'trottcherf@kickstarter.com', 'Trueman', 'van', 'Rottcher', '96,44'),
(17, 'blidgertong@jalbum.net', 'Benjamin', 'van', 'Lidgerton', '58,63'),
(18, 'gheaselgraveh@yellowpages.com', 'Gladys', 'van', 'Heaselgrave', '8,20'),
(19, 'ttynnani@indiegogo.com', 'Tobie', 'van', 'Tynnan', '74,93'),
(20, 'dkingdonj@domainmarket.com', 'Devin', 'van', 'Kingdon', '34,68'),
(21, 'ewhetnellk@sciencedirect.com', 'Emma', 'van', 'Whetnell', '36,59'),
(22, 'dbultitudel@constantcontact.com', 'Daryl', 'van', 'Bultitude', '29,59'),
(23, 'nmaberm@liveinternet.ru', 'Nelli', 'van', 'Maber', '27,49'),
(24, 'ireyn@google.ca', 'Ichabod', 'van', 'Rey', '52,84'),
(25, 'cneasamo@mapquest.com', 'Crysta', 'van', 'Neasam', '38,58'),
(26, 'lboatwrightp@blogger.com', 'Lucas', 'Andrzejak', 'Boatwright', '29,53'),
(27, 'istollsteimerq@networksolutions.com', 'Issy', 'Doyle', 'Stollsteimer', '45,20'),
(28, 'rmechanr@columbia.edu', 'Rebeca', 'Tousey', 'Mechan', '59,29'),
(29, 'klehrers@plala.or.jp', 'Karlik', 'Blyth', 'Lehrer', '36,29'),
(30, 'mmacmychemt@si.edu', 'Merridie', 'Deary', 'MacMychem', '52,93'),
(31, 'ecalcottu@europa.eu', 'Erin', 'Clayden', 'Calcott', '25,85'),
(32, 'ndallasv@last.fm', 'Nehemiah', 'Fenney', 'Dallas', '18,58'),
(33, 'acorranw@zdnet.com', 'Ara', 'Cantle', 'Corran', '3,84'),
(34, 'ralcornx@slashdot.org', 'Raimund', 'Charon', 'Alcorn', '63,85'),
(35, 'afitkiny@shop-pro.jp', 'Agustin', 'Cross', 'Fitkin', '29,57'),
(36, 'hvigarsz@reference.com', 'Harbert', 'Pecha', 'Vigars', '38,42'),
(37, 'fdowner10@businesswire.com', 'Florette', 'Lownie', 'Downer', '38,29'),
(38, 'ggeorgelin11@xrea.com', 'Griff', 'Gagen', 'Georgelin', '93,47'),
(39, 'kaffron12@creativecommons.org', 'Kalila', 'Jardin', 'Affron', '38,58'),
(40, 'shabron13@pinterest.com', 'Sammy', 'Stutte', 'Habron', '9,05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `debiteur`
--
ALTER TABLE `debiteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `debiteur`
--
ALTER TABLE `debiteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
