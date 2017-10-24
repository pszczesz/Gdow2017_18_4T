-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Paź 2017, 08:57
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `firma4ti_2017`
--
CREATE DATABASE IF NOT EXISTS `firma4ti_2017` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `firma4ti_2017`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `depts`
--

DROP TABLE IF EXISTS `depts`;
CREATE TABLE `depts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `depts`
--

INSERT INTO `depts` (`id`, `name`, `description`) VALUES
(1, 'kierowca', 'Kieruje samochodem'),
(2, 'sprzedawca', 'sprzedaje towary klientom'),
(3, 'kierownik', 'zarządza swoimi podwładnymi'),
(4, 'asystent', 'pomaga kierownikowi a zarządzaniu'),
(5, 'zastępca', 'czasami zastępuje kierownika lub go wspiera'),
(6, 'magazynier', 'pracuje w magazynie pilnując porządku');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `workers`
--

DROP TABLE IF EXISTS `workers`;
CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `lastname` varchar(80) COLLATE utf8_polish_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `workers`
--

INSERT INTO `workers` (`id`, `firstname`, `lastname`, `salary`, `dept_id`) VALUES
(1, 'Alojzy', 'Morfinek', 3500, 3),
(2, 'Anna', 'Twaróg', 3200, 4),
(3, 'Piotr', 'Górecki', 2900, 1),
(4, 'Tomasz', 'Pałek', 3500, 6),
(5, 'Matylda', 'Górnik', 2900, 2),
(6, 'Renata', 'Turek', 2900, 2),
(7, 'Roman', 'Hajduk', 3800, 4),
(8, 'Janusz', 'Nowak', 2890, 4),
(9, 'Grażyna', 'Gryk', 3700, 2),
(10, 'Ryszard', 'Ochódzki', 4900, 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `depts`
--
ALTER TABLE `depts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `works_depts` FOREIGN KEY (`dept_id`) REFERENCES `depts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
