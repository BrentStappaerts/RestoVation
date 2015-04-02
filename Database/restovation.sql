-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 02 apr 2015 om 21:19
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `restauranttype` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gemeente` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(4) NOT NULL,
  `telefoonnummer` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `aantaltafels` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tafels`
--

CREATE TABLE IF NOT EXISTS `tbl_tafels` (
`tafelid` int(11) NOT NULL,
  `tafelnr` int(11) NOT NULL,
  `resto_id` int(11) NOT NULL,
  `aantal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
MODIFY `gerechtid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_reservatie`
--
ALTER TABLE `tbl_reservatie`
MODIFY `reservatieid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_restaurant`
--
ALTER TABLE `tbl_restaurant`
MODIFY `resto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_tafels`
--
ALTER TABLE `tbl_tafels`
MODIFY `tafelid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
