-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Maj 2024, 08:15
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dra`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dra_users`
--

CREATE TABLE `dra_users` (
  `id` int(11) NOT NULL,
  `imie` tinytext DEFAULT NULL,
  `nazwisko` tinytext DEFAULT NULL,
  `telefon` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `haslo` varchar(30) DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `Miasto` text DEFAULT NULL,
  `Zdjęcie` varchar(100) DEFAULT NULL,
  `Opis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `dra_users`
--

INSERT INTO `dra_users` (`id`, `imie`, `nazwisko`, `telefon`, `email`, `haslo`, `login`, `Miasto`, `Zdjęcie`, `Opis`) VALUES
(1, 'Bezimienny', 'Grafin', 123456789, 'admin123@gmail.com', 'haslo', 'Admin', NULL, NULL, NULL),
(2, 'Remigiusz', 'Stonoga', 999888777, 'rozowaBula@gmail.com', 'qwerty', 'RemSton12', 'Poznan', 'user.png', 'Cos'),
(3, 'Stefan', 'Brzytwa', 123456789, 'brzytwa123@gmail.com', 'zaq1@WSX', 'br123', 'Warszawa', 'szef.jpg', 'Lubie auta'),
(4, 'Krzysztof', 'Kononowicz', 98765432, 'Konon123@interia.pl', 'qwerty', 'Kkon', '', '', ''),
(5, 'Jan', 'Olch', 123456789, 'olcha@onet.pl', 'uczen', 'KR123', 'Wrocław', 'Olcha.png', 'Krol olch'),
(6, 'Jakub', 'Blaszczykowski', 123456789, 'Blasz@gmail.com', '9876', 'BB123', 'Poznan', 'pilkarzyk.png', 'Pilkarz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dra_users`
--
ALTER TABLE `dra_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dra_users`
--
ALTER TABLE `dra_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
