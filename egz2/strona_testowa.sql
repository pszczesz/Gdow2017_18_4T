-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Lis 2017, 08:33
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `strona_testowa`
--
CREATE DATABASE IF NOT EXISTS `strona_testowa` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `strona_testowa`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kolory`
--

DROP TABLE IF EXISTS `kolory`;
CREATE TABLE `kolory` (
  `id` int(11) NOT NULL,
  `kolor` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kolory`
--

INSERT INTO `kolory` (`id`, `kolor`, `color`) VALUES
(1, 'biały', 'white'),
(2, 'zielony', 'green'),
(3, 'żółty', 'yellow'),
(4, 'różowy', 'pink'),
(5, 'czerwony', 'red'),
(6, 'niebieski', 'blue');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rozmiary`
--

DROP TABLE IF EXISTS `rozmiary`;
CREATE TABLE `rozmiary` (
  `id` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rozmiary`
--

INSERT INTO `rozmiary` (`id`, `size`) VALUES
(1, 6),
(2, 8),
(3, 10),
(4, 12),
(5, 14),
(6, 16),
(7, 18),
(8, 20);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kolory`
--
ALTER TABLE `kolory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rozmiary`
--
ALTER TABLE `rozmiary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kolory`
--
ALTER TABLE `kolory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `rozmiary`
--
ALTER TABLE `rozmiary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
