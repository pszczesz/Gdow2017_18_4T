-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2017, 08:29
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `users_4a2017_2`
--
CREATE DATABASE IF NOT EXISTS `users_4a2017_2` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `users_4a2017_2`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `adres` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `info`
--

INSERT INTO `info` (`id`, `imie`, `nazwisko`, `adres`) VALUES
(1, 'Jan', 'Nowak', 'Papucany Dolne 236/12'),
(2, 'Mariusz', 'Turecki', 'Toruń 31-233, Mostowa 4'),
(3, 'Monika', 'Morska', 'Toruń 32-3434, Grocka 34'),
(4, 'Anna', 'Janik', 'Kraków 31-271, Portowa 55'),
(5, 'Tadeusz', 'Król', 'Kraków 31-275, Górna45');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logins`
--

DROP TABLE IF EXISTS `logins`;
CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `logins`
--

INSERT INTO `logins` (`id`, `login`, `password`) VALUES
(1, 'login1', 'login1'),
(2, 'login2', 'login2'),
(3, 'login3', 'login3'),
(4, 'login4', 'login4'),
(5, 'qaz', 'qaz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
