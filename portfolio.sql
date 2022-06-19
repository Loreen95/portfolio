-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 jun 2022 om 23:26
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `onderwerp` varchar(100) NOT NULL,
  `bericht` text NOT NULL,
  `bedrijfsnaam` varchar(100) DEFAULT NULL,
  `vestiging` varchar(100) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `telefoonnummer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`id`, `naam`, `email`, `onderwerp`, `bericht`, `bedrijfsnaam`, `vestiging`, `adres`, `postcode`, `telefoonnummer`) VALUES
(13, 'Lisa Hakhoff', 'lisahakhoff@ziggo.nl', 'test', 'test', 'Test', 'Haarlem', 'Reinwardstraat', '2041VD', 612345678),
(14, 'test', 'lisahakhoff@ziggo.nl', 'test', 'test', 'test', 'test', 'Reinwardstraat', '2041VD', 612345678),
(15, 'Lisa Hakhoff', 'lisahakhoff@ziggo.nl', 'testte', 'test', '', '', 'Reinwardstraat', '2041VD', 612345678);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `omschrijving` text NOT NULL,
  `foto` text NOT NULL,
  `github` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`id`, `naam`, `omschrijving`, `foto`, `github`) VALUES
(1, 'Meldingen Management Systeem', 'Een gebruiker kan registeren en meldingen aanmaken. Personeel kan meldingen behandelen.', 'school-mms.jpg', 'https://github.com/Loreen95/school-meldingen-management'),
(2, 'Restaurant Website', 'Gebruikers kunnen registreren, bestellen en waar personeel klanten in het systeem kunnen zetten, reserveringen kunnen behandelen.', 'restaurant.jpg', ''),
(3, 'Vier op een rij', 'Een vier op een rij spel, waarin spelers het doel hebben om vier muntjes van dezelfde kleur horizontaal of verticaal achter elkaar te zetten.', 'vier-op-een-rij.jpg', 'https://github.com/Loreen95/vier-op-een-rij'),
(4, 'Lingo', 'Een lingo spel. Een random woord wordt gekozen en de speler moet deze raden. Wanneer een woord goed geraden is mag de speler grabbelen in de ballenbak.', 'lingo.jpg', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `procent` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `skills`
--

INSERT INTO `skills` (`id`, `naam`, `procent`) VALUES
(1, 'SQL', '80.00'),
(2, 'C#', '75.00'),
(3, 'PHP', '80.00'),
(4, 'JavaScript', '30.00'),
(5, 'Python', '55.00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werkervaring`
--

CREATE TABLE `werkervaring` (
  `id` int(11) NOT NULL,
  `beginjaar` year(4) NOT NULL,
  `bedrijf` varchar(100) NOT NULL,
  `plaats` varchar(100) NOT NULL,
  `functie` varchar(100) NOT NULL,
  `eindjaar` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `projecten`
--
ALTER TABLE `projecten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
