-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 30 sep 2018 om 12:19
-- Serverversie: 10.3.9-MariaDB
-- PHP-versie: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brittai314_wtcPapillon`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblEvent`
--

CREATE TABLE `tblEvent` (
  `eventID` int(3) NOT NULL,
  `naamEvent` text NOT NULL,
  `datum` date NOT NULL,
  `plaats` varchar(10) NOT NULL,
  `groep` varchar(5) NOT NULL,
  `uur` time NOT NULL,
  `afstand` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblLid`
--

CREATE TABLE `tblLid` (
  `lidID` int(1) NOT NULL,
  `gebruikersnaam` varchar(10) NOT NULL,
  `wachtwoord` varchar(15) NOT NULL,
  `voornaam` varchar(15) DEFAULT NULL,
  `naam` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblLid`
--

INSERT INTO `tblLid` (`lidID`, `gebruikersnaam`, `wachtwoord`, `voornaam`, `naam`, `email`, `geboortedatum`) VALUES
(1, 'admin', 'Admin123', NULL, NULL, NULL, NULL),
(2, 'jan', 'janA850', 'Jan', 'Adams', 'jannekaadams@hotmail.com', '1963-02-05'),
(3, 'paul', 'paulA850', 'Paul', 'Adams', 'pauladams@skynet.be', '1961-12-31'),
(4, 'ronny', 'ronnyB850', 'Ronny', 'Boonen', 'martine.bevers@telenet.be', '1967-12-23'),
(5, 'nina', 'ninaB850', 'Nina', 'Braspenning', 'pat-nina@telenet.be', '1972-06-17'),
(6, 'jan', 'janB850', 'Jan', 'Braspenning', 'janbraspenning@telenet.be', '1968-06-18'),
(7, 'neel', 'neelB850', 'Neel', 'Brosens', 'corneel.brosens.matthe@telenet.be', '1951-06-20'),
(8, 'wim', 'wimB850', 'Wim', 'Brosens', 'brosens.w@telenet.be', '1977-07-25'),
(9, 'gert', 'gertH850', 'Gert', 'Hillen', 'gert.hillen@pandora.be', '1974-02-14'),
(10, 'frans', 'fransJ850', 'Frans', 'Jacobs', 'jacobsfrans@live.be', '1956-01-05'),
(11, 'hans', 'hansJ850', 'Hans', 'Jacobs', 'hans.jacobs@hotmail.be', '1983-08-18'),
(12, 'bart', 'bartK850', 'Bart', 'Klinkenberg', 'bpc@klinkenberg.nl', '1978-07-10'),
(13, 'eric', 'ericK850', 'Eric', 'Korstanje', 'eric.korstanje@telenet.be', '1966-09-23'),
(14, 'wesley', 'wesleyM850', 'Wesley', 'Minnebach', 'wminnebach@gategroup.com', '1977-05-26'),
(15, 'bart', 'bartM850', 'Bart', 'Mertens', 'bartmertens654@hotmail.com', '1983-11-14'),
(16, 'frank', 'frankM850', 'Frank', 'Mertens', 'mertens.frank@hotmail.com', '1981-08-09'),
(17, 'walter', 'walterM850', 'Walter', 'Martens', 'walter.lutgartmartens@gmail.com', '1955-05-28'),
(18, 'gust', 'gustM850', 'Gust', 'Michielsen', NULL, '1950-07-14'),
(19, 'sus', 'susM850', 'Sus', 'Michielsen', 'susmichielsen@hotmail.com', '1957-01-19'),
(20, 'patrick', 'patrickM850', 'Patrick', 'Michiels', 'patrick.michiels2322@telenet.be', '1965-04-22'),
(21, 'hans', 'hansM850', 'Hans', 'Meijers', 'hans.meijers@telenet.be', '1947-07-15'),
(22, 'yves', 'yvesP850', 'Yves', 'Peeters', 'yves.peeters-segers@telenet.be', '1967-09-12'),
(23, 'patrick', 'patrickV850', 'Patrick', 'Van der Linden', 'pat-nina@telenet.be', '1966-11-09'),
(24, 'marcel', 'marcelV850', 'Marcel', 'Van dun', NULL, '1956-11-22'),
(25, 'peter', 'peterV850', 'Peter', 'Verheyen', 'peterverheyen@telenet.be', '1971-03-17'),
(26, 'marc', 'marcV850', 'Marc', 'Vosters', 'marc_edwine@skynet.be', '1971-04-23'),
(27, 'liesbeth', 'liesbethV850', 'liesbeth', 'Van bergen', 'mertens_vanbergen@telenet.be', NULL),
(28, 'luc', 'lucL850', 'Luc', 'Loos', 'voegwerkenloos@telenet.be', NULL),
(29, 'stijn', 'stijnD850', 'Stijn', 'De Roover', 'Derooverstinus@gmail.com', NULL),
(30, 'danny', 'dannyD850', 'Danny', 'Demeijer', 'dannydemeijer87@gmail.com', NULL),
(31, 'sam', 'samV850', 'Sam', 'Van den Broeck', 'Samvandenbroek@live.com', NULL),
(32, 'lieve', 'lieveV850', 'Lieve', 'Van den Heuvel', 'gert.hillen@pandora.be', NULL),
(33, 'peter', 'peterVDL850', 'Peter', 'Van der Linden', 'peter.hild.vanderlinden@pandora.be', '1966-03-27');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tblLid`
--
ALTER TABLE `tblLid`
  ADD PRIMARY KEY (`lidID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tblLid`
--
ALTER TABLE `tblLid`
  MODIFY `lidID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
