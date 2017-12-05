-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Gru 2017, 08:41
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `swieta2017`
--
CREATE DATABASE IF NOT EXISTS `swieta2017` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `swieta2017`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odbiorcy`
--

DROP TABLE IF EXISTS `odbiorcy`;
CREATE TABLE `odbiorcy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `odbiorcy`
--

INSERT INTO `odbiorcy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'Adam', 'Nowak'),
(2, 'Tomasz', 'Burek'),
(3, 'Grażyna', 'Edyk'),
(4, 'Marzena', 'Turek'),
(5, 'Dominika', 'Ryk'),
(6, 'Henryk', 'Mrozek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prezenty`
--

DROP TABLE IF EXISTS `prezenty`;
CREATE TABLE `prezenty` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `opis` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `odbiorcaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `prezenty`
--

INSERT INTO `prezenty` (`id`, `nazwa`, `cena`, `opis`, `odbiorcaID`) VALUES
(1, 'Misiek', '12.89', 'ładny misiek pluszowy', 4),
(2, 'Samochodzik 2D', '34.99', 'Samochodzik układanka', 1),
(3, 'Czajnik', '22.90', 'Czajnik kolorowy', 5),
(4, 'Lalka', '45.99', 'Lalka do zaboawy', 3),
(7, 'samolocik', '33.66', 'Samolot do sklejania', 1),
(8, 'Rowerek', '123.99', 'Mały rowerek na trzech kółkach', 2),
(9, 'Gwizdek', '5.99', 'Mały gwizdek zielony', 6),
(10, 'Czekolada', '3.99', 'Czekolada mleczna Milka', 6);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `odbiorcy`
--
ALTER TABLE `odbiorcy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prezenty`
--
ALTER TABLE `prezenty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `odbiorcaID` (`odbiorcaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `odbiorcy`
--
ALTER TABLE `odbiorcy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `prezenty`
--
ALTER TABLE `prezenty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `prezenty`
--
ALTER TABLE `prezenty`
  ADD CONSTRAINT `prezenty_ibfk_1` FOREIGN KEY (`odbiorcaID`) REFERENCES `odbiorcy` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
