-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Mar 2022, 13:32
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id` int(11) NOT NULL,
  `Imie` text COLLATE utf8_polish_ci DEFAULT NULL,
  `Nazwisko` text COLLATE utf8_polish_ci DEFAULT NULL,
  `Klasa` text COLLATE utf8_polish_ci DEFAULT NULL,
  `SREDNIA` float DEFAULT NULL,
  `Orzeczenie` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uczniowie`
--

INSERT INTO `uczniowie` (`id`, `Imie`, `Nazwisko`, `Klasa`, `SREDNIA`, `Orzeczenie`) VALUES
(1, 'Nikodem', 'Kowalski', '1A', 2, 1),
(2, 'Jagoda', 'Kwiatek', '1A', 3, 0),
(3, 'Mariusz', 'Rzepa', '1A', 4.5, 0),
(4, 'Jan', 'Koniarz', '1A', 6, 1),
(5, 'Jakub', 'Łękowski', '1A', 5, 1),
(6, 'Nikodem', 'Mazur', '1A', 3.4, 1),
(7, 'Jan', 'Rak', '1B', 3, 0),
(8, 'Piotr', 'Mondeo', '1B', 5.3, 1),
(9, 'Jakub', 'Koper', '1B', 4.3, 1),
(10, 'Ola', 'Rak', '1B', 1.3, 0),
(11, 'Monika', 'Wiatr', '1B', 2.3, 0),
(12, 'Bartłomiej', 'Masło', '1B', 3.1, 1),
(13, 'Gniewosz', 'Ozimek', '1B', 3.4, 1),
(14, 'Maciek', 'Rzywiec', '2A', 1.7, 0),
(15, 'Robek', 'Broniarz', '2A', 4.1, 0),
(16, 'Helena', 'Broniarz', '2A', 6, 0),
(17, 'Adam', 'Treblina', '2A', 3.1, 0),
(18, 'Jarosław', 'Treblina', '2A', 1.4, 0),
(19, 'Nikodem', 'Baran', '2A', 1.7, 0),
(20, 'Urszula', 'Borowiec', '2A', 4, 0),
(21, 'Honorata', 'Trzaskowska', '2B', 5.3, 1),
(22, 'Maja', 'Trzaskowska', '2B', 3.5, 1),
(23, 'Hugo', 'Boroszewicz', '2B', 4.5, 1),
(24, 'Piotr', 'Piotrowicz', '2B', 5.2, 1),
(25, 'Tomasz', 'Jasicki', '2B', 2.5, 1),
(26, 'Maciek', 'Fero', '2B', 1.5, 1),
(27, 'Ewelina', 'Borychowska', '2B', 3.5, 1),
(28, 'Maciek', 'Chrzanowski', '3A', 6, 1),
(29, 'Anna', 'Chrzanowska', '3A', 3.6, 1),
(30, 'Honorata', 'Bobrowska', '3A', 2.6, 1),
(31, 'Piotr', 'Czarnek', '3A', 5.6, 1),
(32, 'Gniewosz', 'Jasicki', '3A', 4.6, 1),
(33, 'Ola', 'Gerta', '3A', 2.6, 0),
(34, 'Bartosz', 'Szamapanowski', '3A', 3.6, 0),
(35, 'Jan', 'Nowak', '3B', 2.4, 1),
(36, 'Darek', 'Nowak', '3B', 1.4, 1),
(37, 'Marian', 'Lumbmauer', '3B', 1.8, 1),
(38, 'Franek', 'Matuszkiewicz', '3B', 3.4, 1),
(39, 'Mateusz', 'Wichura', '3B', 2.7, 1),
(40, 'Urszula', 'Poniatowska', '3B', 5.4, 1),
(41, 'Alicja', 'Michałowicz', '3B', 2.6, 1),
(42, 'Jan', 'Kowalski', '1A', 2, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
