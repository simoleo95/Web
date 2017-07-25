-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 25, 2017 alle 12:27
-- Versione del server: 10.1.21-MariaDB
-- Versione PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articolo`
--

CREATE TABLE `articolo` (
  `IDarticolo` int(11) NOT NULL,
  `titolo` char(20) DEFAULT NULL,
  `descrizione` text,
  `foto` blob,
  `categoria` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `articolo`
--

INSERT INTO `articolo` (`IDarticolo`, `titolo`, `descrizione`, `foto`, `categoria`) VALUES
(1, 'Automobile', 'questa automobile è molto carina', NULL, 'automobili');

-- --------------------------------------------------------

--
-- Struttura della tabella `asta`
--

CREATE TABLE `asta` (
  `IDasta` int(11) NOT NULL,
  `dataI` datetime DEFAULT NULL,
  `dataF` datetime DEFAULT NULL,
  `userC` char(20) DEFAULT NULL,
  `userV` char(20) DEFAULT NULL,
  `IDprezzoP` int(11) DEFAULT NULL,
  `IDprezzoF` int(11) DEFAULT NULL,
  `IDarticolo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `asta`
--

INSERT INTO `asta` (`IDasta`, `dataI`, `dataF`, `userC`, `userV`, `IDprezzoP`, `IDprezzoF`, `IDarticolo`) VALUES
(1, '2017-07-12 08:49:26', '2017-07-13 23:59:59', 'andrecocc', 'simoleo', 1, 2, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `persona`
--

CREATE TABLE `persona` (
  `username` char(20) NOT NULL,
  `nome` char(20) DEFAULT NULL,
  `cognome` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `email` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `persona`
--

INSERT INTO `persona` (`username`, `nome`, `cognome`, `password`, `email`) VALUES
('andrecocc', 'andrea', 'cocci', 'cocci', 'cocc@cocc.cocc'),
('simoleo', 'simone', 'leo', 'leo', 'leoleo@leo.leo');

-- --------------------------------------------------------

--
-- Struttura della tabella `prezzo`
--

CREATE TABLE `prezzo` (
  `IDprezzo` int(11) NOT NULL,
  `valore` int(11) DEFAULT NULL,
  `valuta` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prezzo`
--

INSERT INTO `prezzo` (`IDprezzo`, `valore`, `valuta`) VALUES
(1, 10, 'abbracci'),
(2, 69, 'carezze');

-- --------------------------------------------------------

--
-- Struttura della tabella `valutazione`
--

CREATE TABLE `valutazione` (
  `IDvalutazione` int(11) NOT NULL,
  `valutazione` int(11) DEFAULT NULL,
  `personaV` char(20) DEFAULT NULL,
  `personaC` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articolo`
--
ALTER TABLE `articolo`
  ADD PRIMARY KEY (`IDarticolo`);

--
-- Indici per le tabelle `asta`
--
ALTER TABLE `asta`
  ADD PRIMARY KEY (`IDasta`),
  ADD KEY `userC` (`userC`),
  ADD KEY `userV` (`userV`),
  ADD KEY `IDprezzoP` (`IDprezzoP`),
  ADD KEY `IDprezzoF` (`IDprezzoF`),
  ADD KEY `IDarticolo` (`IDarticolo`);

--
-- Indici per le tabelle `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`username`);

--
-- Indici per le tabelle `prezzo`
--
ALTER TABLE `prezzo`
  ADD PRIMARY KEY (`IDprezzo`);

--
-- Indici per le tabelle `valutazione`
--
ALTER TABLE `valutazione`
  ADD PRIMARY KEY (`IDvalutazione`),
  ADD UNIQUE KEY `personaV` (`personaV`),
  ADD UNIQUE KEY `personaC` (`personaC`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articolo`
--
ALTER TABLE `articolo`
  MODIFY `IDarticolo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `asta`
--
ALTER TABLE `asta`
  MODIFY `IDasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `prezzo`
--
ALTER TABLE `prezzo`
  MODIFY `IDprezzo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `valutazione`
--
ALTER TABLE `valutazione`
  MODIFY `IDvalutazione` int(11) NOT NULL AUTO_INCREMENT;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `asta`
--
ALTER TABLE `asta`
  ADD CONSTRAINT `asta_ibfk_1` FOREIGN KEY (`userC`) REFERENCES `persona` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asta_ibfk_2` FOREIGN KEY (`userV`) REFERENCES `persona` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asta_ibfk_3` FOREIGN KEY (`IDprezzoP`) REFERENCES `prezzo` (`IDprezzo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asta_ibfk_4` FOREIGN KEY (`IDprezzoF`) REFERENCES `prezzo` (`IDprezzo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asta_ibfk_5` FOREIGN KEY (`IDarticolo`) REFERENCES `articolo` (`IDarticolo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `valutazione`
--
ALTER TABLE `valutazione`
  ADD CONSTRAINT `valutazione_ibfk_1` FOREIGN KEY (`personaV`) REFERENCES `persona` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valutazione_ibfk_2` FOREIGN KEY (`personaC`) REFERENCES `persona` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
