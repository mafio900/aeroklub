-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Gru 2019, 02:50
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `aeroklub`
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
(1, 'Cessna'),
(2, 'Saab'),
(3, 'Bombardier');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacja`
--

CREATE TABLE `rezerwacja` (
  `id` int(11) NOT NULL,
  `DataZlozenia` timestamp NOT NULL DEFAULT current_timestamp(),
  `TerminRealizacji` timestamp NULL DEFAULT NULL,
  `KwotaLaczna` double NOT NULL DEFAULT 0,
  `IdStatus` int(11) NOT NULL DEFAULT 1,
  `IdKlient` int(11) NOT NULL,
  `IdPracownik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `rezerwacja`
--

INSERT INTO `rezerwacja` (`id`, `DataZlozenia`, `TerminRealizacji`, `KwotaLaczna`, `IdStatus`, `IdKlient`, `IdPracownik`) VALUES
(1, '2019-12-04 19:30:11', '2019-12-19 18:00:00', 55500, 2, 2, 1),
(2, '2019-12-11 08:31:23', '2019-12-20 13:00:00', 0, 1, 3, 1),
(3, '2019-12-11 14:50:49', '2019-12-30 13:00:00', 4800, 1, 3, 1),
(4, '2019-12-16 20:35:52', '2019-12-16 22:36:00', 0, 1, 5, 1),
(5, '2019-12-17 13:45:32', '2019-12-31 13:00:00', 0, 1, 2, 1);

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
-- Zrzut danych tabeli `rezusluga`
--

INSERT INTO `rezusluga` (`id`, `IdRezerwacja`, `IdUsluga`, `Ilosc`, `IdSamolot`) VALUES
(1, 3, 2, 3, 3),
(2, 1, 1, 111, 1);

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
  `Opis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `samolot`
--

INSERT INTO `samolot` (`id`, `IdProducent`, `Model`, `Rejestracja`, `Opis`) VALUES
(1, 1, '152', 'SP-SAS', ''),
(2, 2, '340', 'SP-LOC', ''),
(3, 3, 'Dash-8', 'SP-EQA', '');

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
  `NrTelefonu` varchar(9) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Ranga` varchar(20) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `Imie`, `Nazwisko`, `Pesel`, `Ulica`, `NrDomu`, `NrLokalu`, `Miejscowosc`, `KodPocztowy`, `NrTelefonu`, `Email`, `Ranga`, `Login`, `Password`) VALUES
(1, 'Bartosz', 'Brzychciński', '96122106245', 'Macedońska', '5', '', 'Kalisz', '62-800', '696207075', 'mafio900@gmail.com', 'Pracownik', 'mafio901', '$2y$10$91/HeB937BtU1MHJx3f2I.3Y6p9/Ka5AqT3C9vAW9Iu303GPV4Fli'),
(2, 'Szymon', 'Flas', '96091205832', 'Piekarska', '69', '69', 'Kalisz', '62-800', '666666666', 'flas022@wp.pl', 'Klient', '022flas', '$2y$10$JK8BBU9IPDOvzpL3bhj6nO042humBALC6gmkLbka23mMvza2Lc4aO'),
(3, 'Kamil', 'Kosol', '42531255431', 'Koko', '42', '2', 'Kalisz', '53-431', '555555555', 'koko@gmail.com', 'Klient', 'kokos', '$2y$10$SnapVPwNTtPhJhokQ2B9tO2BmySePtK84d/Abx2gGb0y9fopA2sYC'),
(4, 'Włodek', 'Kalski', '24857430953', 'Macedońska', '5', '5', 'Kalisz', '62-800', '234857495', 'mafio900@gmail.com', 'Klient', 'kaka', '$2y$10$13PnIQ6WqnobKMIps4J1H.w.8YVFl72dO.G2FnTW.P9Vc2KFflZ8G'),
(5, 'Kamil', 'Kowalski', '96122106832', 'Kasztanowa', '4', '', 'Kalisz', '62-800', '696206059', 'mama@wp.pl', 'Klient', 'maskotka', '$2y$10$HA929jc492BGidPu50mwb.eNsbPgMQe250ykwNAEg4gztRx.KkGiO'),
(6, 'Kamil', 'Podlaski-Wykoszony', '96122106832', 'Macedońska', '5', '5', 'Kalisz', '62-800', '696207075', 'mafio900@gmail.com', 'Pracownik', 'mafio', '$2y$10$4MkaiTZxf0c7UcbLi6UeRO2PNzYi44nqGCEgStig2lqPky/D5OEMS');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usluga`
--

CREATE TABLE `usluga` (
  `id` int(11) NOT NULL,
  `UslugaNazwa` varchar(100) NOT NULL,
  `CenaJedn` double NOT NULL,
  `JednMiary` varchar(20) NOT NULL,
  `Opis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `usluga`
--

INSERT INTO `usluga` (`id`, `UslugaNazwa`, `CenaJedn`, `JednMiary`, `Opis`) VALUES
(1, 'Lot kalisz', 500, 'godzina', ''),
(2, 'Lot konin', 1600, 'godzina', ''),
(3, 'Lot ostrów wielkopolski', 1000, 'godzina', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `producent`
--
ALTER TABLE `producent`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `rezusluga`
--
ALTER TABLE `rezusluga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `samolot`
--
ALTER TABLE `samolot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
