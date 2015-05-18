-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 18 mei 2015 om 16:42
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `restovation`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_gebruikers`
--

CREATE TABLE IF NOT EXISTS `tbl_gebruikers` (
`id` int(11) NOT NULL,
  `gebruikersnaam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwoord` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `voornaam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_gebruikers`
--

INSERT INTO `tbl_gebruikers` (`id`, `gebruikersnaam`, `passwoord`, `voornaam`, `naam`, `email`) VALUES
(12, 'gans', '$2y$10$Pb.3p5fYv5fOP9aKbBMymekmAplc4qEsNYqKzA7sNND51o9Nk5Ije', 'qdfsfds', 'fqds', 't@gfqdfsdsf.com'),
(13, 'tvoo', '$2y$10$oVjNeLf8eYGz3sLEwddnb..F.PYV4rD3lbei7y2X0jTLeZ4mFx0Tm', 'vervoort', 'tijs', 'tfd@fjqsk.com'),
(14, 'test', '$2y$10$hFC3zJEw/ggTTKSOoVcQme7x.YnxzmTm0KWW/C2MtfcxDxrIesyAO', 'fdq', 'fdsq', 'fdqs@dfd.com'),
(15, 'reltih', '$2y$10$1oP.2L5k6PLuJlN2XJmUquPbIAsopYvhY3zuyNPABXw0HjIcc0zK.', 'qfds', 'fdsq', 'dfsqsfsd@lol.com'),
(16, 'test123', '$2y$10$KQlQfL8p9C.36m9crRUcWe.C8LV7WXmVOxuigtD8DyM5fIda/Z.dq', 'qfd', 'sqf', 'fds@lol.col');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
`gerechtid` int(11) NOT NULL,
  `resto_id` int(11) NOT NULL,
  `gerechtnaam` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gerechttype` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gerechtprijs` decimal(4,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`gerechtid`, `resto_id`, `gerechtnaam`, `gerechttype`, `gerechtprijs`) VALUES
(1, 0, 'videe', 'hoofdgerecht', '20.00'),
(2, 0, 'frut', 'hoofdgerecht', '8.00'),
(3, 0, 'lol', 'sdgf', '20.00'),
(4, 0, 'azert', 'azett', '10.00'),
(5, 0, 'lekker tetten', 'hoofdgerecht', '25.00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_reservatie`
--

CREATE TABLE IF NOT EXISTS `tbl_reservatie` (
`reservatieid` int(11) NOT NULL,
  `klantnaam` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `telefoonnummer` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `uur` time NOT NULL,
  `aantal` int(5) NOT NULL,
  `tafelid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_restaurant`
--

CREATE TABLE IF NOT EXISTS `tbl_restaurant` (
`resto_id` int(11) NOT NULL,
  `restaurantnaam` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gemeente` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(4) NOT NULL,
  `telefoonnummer` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_restaurant`
--

INSERT INTO `tbl_restaurant` (`resto_id`, `restaurantnaam`, `adres`, `gemeente`, `postcode`, `telefoonnummer`, `id`) VALUES
(1, 'ganzennest', 'watervoort 50', 'herentals', 2200, '01489633358', 16),
(2, 'fdqs', 'dqfs', 'dqfs', 2275, '1264556489', 16),
(3, 'jkh', 'fgh', 'dfh', 2275, '01458975', 0),
(4, 'aer', 'azer', 'azer', 22756, '01554985', 15);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tafels`
--

CREATE TABLE IF NOT EXISTS `tbl_tafels` (
`tafelid` int(11) NOT NULL,
  `tafelnr` int(11) NOT NULL,
  `resto_id` int(11) NOT NULL,
  `aantal` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_tafels`
--

INSERT INTO `tbl_tafels` (`tafelid`, `tafelnr`, `resto_id`, `aantal`) VALUES
(1, 1, 0, 10),
(3, 3, 0, 5);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexen voor tabel `tbl_gebruikers`
--
ALTER TABLE `tbl_gebruikers`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
 ADD PRIMARY KEY (`gerechtid`);

--
-- Indexen voor tabel `tbl_reservatie`
--
ALTER TABLE `tbl_reservatie`
 ADD PRIMARY KEY (`reservatieid`);

--
-- Indexen voor tabel `tbl_restaurant`
--
ALTER TABLE `tbl_restaurant`
 ADD PRIMARY KEY (`resto_id`);

--
-- Indexen voor tabel `tbl_tafels`
--
ALTER TABLE `tbl_tafels`
 ADD PRIMARY KEY (`tafelid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_gebruikers`
--
ALTER TABLE `tbl_gebruikers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
MODIFY `gerechtid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `tbl_reservatie`
--
ALTER TABLE `tbl_reservatie`
MODIFY `reservatieid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_restaurant`
--
ALTER TABLE `tbl_restaurant`
MODIFY `resto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `tbl_tafels`
--
ALTER TABLE `tbl_tafels`
MODIFY `tafelid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
