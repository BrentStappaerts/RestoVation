-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 18 mei 2015 om 22:43
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
-- Tabelstructuur voor tabel `tbl_gebruikers`
--

CREATE TABLE IF NOT EXISTS `tbl_gebruikers` (
`id` int(11) NOT NULL,
  `gebruikersnaam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwoord` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `voornaam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_gebruikers`
--

INSERT INTO `tbl_gebruikers` (`id`, `gebruikersnaam`, `passwoord`, `voornaam`, `naam`, `email`) VALUES
(1, 'Tijsos', '$2y$10$pkDO4cRpAqgTiA9BQncSiuByDc2gaWUbn2QbF3nrmoaPh2YS2DxZm', 'Tijs', 'Vervoort', 'tijsvervoort@gmail.com'),
(2, 'dummy', '$2y$10$rAGKlN6eUtOkW03LJrdDX./rKijWt4cykJJ0uDmU/nxb4/XyvbuWe', 'dummy', 'test', 'dummy@gmail.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`gerechtid`, `resto_id`, `gerechtnaam`, `gerechttype`, `gerechtprijs`) VALUES
(1, 0, 'Ganzenlever', 'Voorgerecht', '8.00'),
(2, 0, 'Ribbekes met friet', 'Hoofdgerecht', '16.00'),
(3, 0, 'Dame Blanche', 'dessert', '6.00');

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
(2, 'hamburgerkeet', 'rozenlaan 20', 'Antwerpen', 2300, '014589678', 2),
(3, 'Visrestaurant', 'vislaan 20', 'Gent', 2500, '01589765', 2),
(4, 'Het ganzennest', 'watervoort 26', 'Herentals', 2200, '014896358', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tafels`
--

CREATE TABLE IF NOT EXISTS `tbl_tafels` (
`tafelid` int(11) NOT NULL,
  `tafelnr` int(11) NOT NULL,
  `resto_id` int(11) NOT NULL,
  `aantal` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_tafels`
--

INSERT INTO `tbl_tafels` (`tafelid`, `tafelnr`, `resto_id`, `aantal`) VALUES
(1, 1, 0, 4),
(2, 2, 0, 4),
(3, 3, 0, 4),
(4, 5, 0, 2),
(5, 5, 0, 2),
(6, 6, 0, 8),
(7, 7, 0, 8),
(8, 9, 0, 6),
(9, 10, 0, 10);

--
-- Indexen voor geëxporteerde tabellen
--

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
MODIFY `gerechtid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `tafelid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
