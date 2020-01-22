-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 23 Sty 2020, 00:57
-- Wersja serwera: 5.7.26-29-log
-- Wersja PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `31971658_brzychu`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `producent`
--

CREATE TABLE `producent` (
  `id` int(11) NOT NULL,
  `ProducentNazwa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `producent`
--

INSERT INTO `producent` (`id`, `ProducentNazwa`) VALUES
(4, 'asdasd'),
(3, 'Bombardier'),
(1, 'Cessna'),
(2, 'Saab');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacja`
--

CREATE TABLE `rezerwacja` (
  `id` int(11) NOT NULL,
  `DataZlozenia` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TerminRealizacji` timestamp NULL DEFAULT NULL,
  `KwotaLaczna` double NOT NULL DEFAULT '0',
  `IdStatus` int(11) NOT NULL DEFAULT '1',
  `IdKlient` int(11) NOT NULL,
  `IdPracownik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezusluga`
--

CREATE TABLE `rezusluga` (
  `id` int(11) NOT NULL,
  `IdRezerwacja` int(11) NOT NULL,
  `IdUsluga` int(11) NOT NULL,
  `Ilosc` float NOT NULL,
  `IdSamolot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Wyzwalacze `rezusluga`
--
DELIMITER $$
CREATE TRIGGER `tr_RezUsl_a_D` AFTER DELETE ON `rezusluga` FOR EACH ROW BEGIN 

SET @vCena = (SELECT CenaJedn FROM usluga WHERE id = OLD.IdUsluga);
SET @vKw = (SELECT KwotaLaczna FROM rezerwacja WHERE id = OLD.IdRezerwacja) - ((SELECT @vCena)*OLD.Ilosc);

IF (SELECT @vKw) < 0 THEN
SET @vKW = 0;
END IF;

UPDATE `rezerwacja` 
SET `KwotaLaczna`= (SELECT @vKw)
WHERE id = OLD.IdRezerwacja;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_RezUsl_a_I` AFTER INSERT ON `rezusluga` FOR EACH ROW BEGIN 

SET @vCena = (SELECT CenaJedn FROM usluga WHERE id = NEW.IdUsluga);
SET @vKw = (SELECT KwotaLaczna FROM rezerwacja WHERE id = NEW.IdRezerwacja) + ((SELECT @vCena)*NEW.Ilosc);

UPDATE `rezerwacja` 
SET `KwotaLaczna`= (SELECT @vKw)
WHERE id = NEW.IdRezerwacja;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_RezUsl_a_U` AFTER UPDATE ON `rezusluga` FOR EACH ROW BEGIN 

SET @vCenaOLD = (SELECT CenaJedn FROM usluga WHERE id = OLD.IdUsluga);
SET @vKwOld = (SELECT KwotaLaczna FROM rezerwacja WHERE id = OLD.IdRezerwacja) - ((SELECT @vCenaOLD)*OLD.Ilosc);
SET @vCena = (SELECT CenaJedn FROM usluga WHERE id = NEW.IdUsluga);
SET @vKw = (SELECT @vKwOld) + ((SELECT @vCena)*NEW.Ilosc);

UPDATE `rezerwacja` 
SET `KwotaLaczna`= (SELECT @vKw)
WHERE id = NEW.IdRezerwacja;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samolot`
--

CREATE TABLE `samolot` (
  `id` int(11) NOT NULL,
  `IdProducent` int(11) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Rejestracja` varchar(7) NOT NULL,
  `Opis` varchar(100) DEFAULT NULL,
  `ZdjecieNazwa` varchar(100) DEFAULT NULL,
  `Rozszerzenie` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `samolot`
--

INSERT INTO `samolot` (`id`, `IdProducent`, `Model`, `Rejestracja`, `Opis`, `ZdjecieNazwa`, `Rozszerzenie`) VALUES
(1, 1, '152', 'SP-SAS', 'MaĹy samolot na jednÄ osobÄ', 'Cessna152', 'jpg'),
(2, 2, '340', 'SP-XHK', 'Leci daleko', 'saab340', 'png'),
(3, 3, 'Dash-8', 'SP-EQA', 'DuĹźy samolot', 'bombardierDash8', 'jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `StatusNazwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `status`
--

INSERT INTO `status` (`id`, `StatusNazwa`) VALUES
(1, 'nowy'),
(2, 'potwierdzony'),
(3, 'zrealizowany'),
(4, 'anulowany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `Pesel` varchar(11) NOT NULL,
  `Ulica` varchar(50) NOT NULL,
  `NrDomu` varchar(10) NOT NULL,
  `NrLokalu` varchar(10) DEFAULT NULL,
  `Miejscowosc` varchar(50) NOT NULL,
  `KodPocztowy` varchar(6) NOT NULL,
  `NrTelefonu` varchar(12) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Ranga` varchar(20) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `Imie`, `Nazwisko`, `Pesel`, `Ulica`, `NrDomu`, `NrLokalu`, `Miejscowosc`, `KodPocztowy`, `NrTelefonu`, `Email`, `Ranga`, `Login`, `Password`) VALUES
(1, 'Bartosz', 'BrzychciĹski', '96122106832', 'MacedoĹska', '5', '', 'Kalisz', '62-800', '696207075', 'mafio900@gmail.com', 'Pracownik', 'mafio900', '$2y$10$gjUhTuSApznWfkp0wzeW7e8QWXh45p7HS2QuEVEhV2o5Q9RkmnXia'),
(2, 'Andrzej', 'Kowalski', '96143105245', 'WrocĹawska', '62', '62', 'Kalisz', '62-800', '699888777', 'endrju@wp.pl', 'Klient', 'test', '$2y$10$m35hAm0Q.QfMpZzk.PR7gexB.GYZh0qZpKbRUw//JmyoWABu5hX7y');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usluga`
--

CREATE TABLE `usluga` (
  `id` int(11) NOT NULL,
  `UslugaNazwa` varchar(100) NOT NULL,
  `CenaJedn` double NOT NULL,
  `JednMiary` varchar(20) NOT NULL,
  `Opis` varchar(100) DEFAULT NULL,
  `ZdjecieNazwa` varchar(100) NOT NULL,
  `Rozszerzenie` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `usluga`
--

INSERT INTO `usluga` (`id`, `UslugaNazwa`, `CenaJedn`, `JednMiary`, `Opis`, `ZdjecieNazwa`, `Rozszerzenie`) VALUES
(1, 'Lot kalisz', 500, 'godzine', 'Lot nad miastem Kalisz. Nieziemskie przeĹźycie', 'kalisz', 'jpg'),
(2, 'Lot konin', 1600, 'godzine', 'Lot z Kalisza do Konina i zwiedzanie przepiÄknych okolic.', 'konin', 'jpg'),
(3, 'Lot ostrĂłw wielkopolski', 1000, 'godzine', 'Lot do sÄsiedzkiego miasta baĹźantĂłw.', 'ostrowWielkopolski', 'jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `producent`
--
ALTER TABLE `producent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ_ProducentNazwa` (`ProducentNazwa`);

--
-- Indeksy dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IdKlient` (`IdKlient`),
  ADD KEY `FK_IdPracownik` (`IdPracownik`),
  ADD KEY `FK_IdStatus` (`IdStatus`);

--
-- Indeksy dla tabeli `rezusluga`
--
ALTER TABLE `rezusluga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IdSamolot` (`IdSamolot`),
  ADD KEY `FK_IdUsluga` (`IdUsluga`),
  ADD KEY `FK_IdRezerwacja` (`IdRezerwacja`);

--
-- Indeksy dla tabeli `samolot`
--
ALTER TABLE `samolot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IdProducent` (`IdProducent`);

--
-- Indeksy dla tabeli `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ_Login` (`Login`);

--
-- Indeksy dla tabeli `usluga`
--
ALTER TABLE `usluga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `producent`
--
ALTER TABLE `producent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `rezusluga`
--
ALTER TABLE `rezusluga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `samolot`
--
ALTER TABLE `samolot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `usluga`
--
ALTER TABLE `usluga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  ADD CONSTRAINT `FK_IdKlient` FOREIGN KEY (`IdKlient`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_IdPracownik` FOREIGN KEY (`IdPracownik`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_IdStatus` FOREIGN KEY (`IdStatus`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `rezusluga`
--
ALTER TABLE `rezusluga`
  ADD CONSTRAINT `FK_IdRezerwacja` FOREIGN KEY (`IdRezerwacja`) REFERENCES `rezerwacja` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_IdSamolot` FOREIGN KEY (`IdSamolot`) REFERENCES `samolot` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_IdUsluga` FOREIGN KEY (`IdUsluga`) REFERENCES `usluga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `samolot`
--
ALTER TABLE `samolot`
  ADD CONSTRAINT `FK_IdProducent` FOREIGN KEY (`IdProducent`) REFERENCES `producent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
