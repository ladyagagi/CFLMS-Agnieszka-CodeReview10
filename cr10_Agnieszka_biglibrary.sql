-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 19. Jul 2020 um 12:22
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_Agnieszka_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_Agnieszka_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_Agnieszka_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `type` enum('book','cd','dvd') DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL,
  `author` char(30) DEFAULT NULL,
  `publisher` varchar(40) DEFAULT NULL,
  `ISBN` varchar(30) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `available` enum('yes','no') DEFAULT NULL,
  `publish_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `type`, `title`, `author`, `publisher`, `ISBN`, `description`, `img`, `available`, `publish_date`) VALUES
(3, 'dvd', 'Louis de Funès Le Gendarme', 'Jean Girault', 'SNC', '764-257334', 'The film mostly takes place in Saint-Tropez, a fashionable resort on the French Riviera. Louis de Funès plays Ludovic Cruchot, the sergeant of gendarmerie of Saint-Tropez. It is the first film in The gendarme series, and has spawned five sequels.', 'https://images-na.ssl-images-amazon.com/images/I/71vHYNjyA1L._SL1200_.jpg', 'no', '2017-09-09'),
(4, 'book', 'Quite', 'Susan Cain', 'Goldmann', '9783442157648', 'Childhood, adolescence and your early twenties are times wrought with insecurity and self-doubt. Your search for your place in the world can seem daunting. Focusing on the strengths and challenges of being introverted, this book is full of examples from school, family life and friendship, and applies the breakthrough discoveries of Quiet.', 'https://bci.kinokuniya.com/jsp/images/book-img/97801/97801410/9780141029191.JPG', 'yes', '2016-05-01'),
(5, 'book', 'The Life-Changing Magic of...', 'Sarah Knight', 'Querus', '978-1-78429-847-0', 'Are you stressed out, overbooked, and underwhelmed by life? Fed up with pleasing everyone else before you please yourself? Then it is time to stop ....', 'https://images-na.ssl-images-amazon.com/images/I/51LBD1MehqL.jpg', 'no', '2017-05-01'),
(13, 'dvd', 'The 100', 'Dean White', 'who knows', '978-1-78429-00000', '97 Jahre sind vergangen, seit das nukleare Armageddon unseren Planeten völlig verwüstet hat. Die letzten Menschen leben auf der Ark, einer altersschwachen Raumstation, die von der Überbevölkerung bedroht ist, denn die Reserven gehen zur Neige. ', 'https://images2.medimops.eu/product/19cd6d/M0B00ZBNB7L2-source.jpg', 'no', '2020-07-13'),
(14, 'cd', 'Selena Gomez - Rare (Limited Box)', 'Selena Gomez', 'INTERSCOPE', '978-1-78429-00007', 'pipapo & so and tralalla', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_71303911/fee_786_587_png', 'no', '2020-07-14'),
(15, 'cd', 'ALL IN - THE CDS', 'TOTO', 'Columbia', '00008', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum', 'https://www.libro.at/imagestreaming/cache/512x512/0/6/ec389dd1df13cc89c638e7de6ee4b4f59bf4810f7c71cf590f6113214d1221c19a249c20b07906a16fa813f8de3bed9abf4833f18b3dc84025b7d363e46f32ab', 'yes', '2020-02-06'),
(16, 'book', 'Test 4', 'Autor4', 'SNC', '978-1-78429-847-67', 'pipapo & so', 'https://www.morawa.at/annotstream/9781785152443/COP/Leon-Donna/Trace-Elements.jpg?sq=5', 'yes', '2020-06-30');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
