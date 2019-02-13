-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 13 feb 2019 kl 15:45
-- Serverversion: 5.7.23
-- PHP-version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `videobutik`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `film`
--

CREATE TABLE `film` (
  `filmID` int(5) NOT NULL,
  `Titel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Kategori` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Huvudroll` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pris` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `film`
--

INSERT INTO `film` (`filmID`, `Titel`, `Kategori`, `Huvudroll`, `Pris`) VALUES
(1, 'Braveheart', 'Action', 'Mel Gibson', 20),
(3, 'Matrix', 'Action', 'Keanu Reeves', 40),
(4, 'Fight Club', 'Action', 'Brad Pitt', 15),
(5, 'Patrioten', 'Action', 'Mel Gibson', 15),
(6, 'Goldeneye', 'Action', 'Pierce Brosnan', 30),
(7, 'Blair Witch Project', 'Rysare', 'Stella Johnson', 25),
(8, 'Dum dummare', 'Komedi', 'Jim Carrey', 30),
(9, 'Dödslängtan', 'Thriller', 'Ian Hunter', 30),
(10, 'År 2001', 'Drama', 'Melvin Bragg', 25),
(11, 'Notting Hill', 'Drama', 'Julia Roberts', 25),
(12, 'Little Big Man', 'Action', 'Dustin Hoffman', 30),
(13, 'Fotboll för Buddha', 'Drama', 'Jigme Wongfan', 25),
(14, 'Tootsie', 'Drama', 'Dustin Hoffman', 20),
(15, 'Exorcisten', 'Rysare', 'Linda Blair', 20),
(16, 'Taxi Driver', 'Action', 'Robert DeNiro', 25),
(17, 'American History X', 'Action', 'Edward Norton', 40),
(18, 'Borta med vinden', 'Drama', 'Clark Gable', 30),
(19, 'Änglagård', 'Drama', 'Helena Bergström', 20),
(20, 'Fienden ibland oss', 'Thriller', 'Harrison Ford', 30),
(21, 'Ninth Gate', 'Thriller', 'Johnny Depp', 15),
(22, 'Reality Bites', 'Drama', 'Winona Ryder', 20),
(23, 'Betty Blue', 'Drama', 'Jaques Francois', 40),
(24, 'Leon', 'Action', 'Jean Reno', 20),
(25, 'Black Rain', 'Action', 'Michael Douglas', 30),
(26, 'Cool runnings', 'Komedi', 'John Candy', 20),
(27, 'Fanny och Alexander', 'Drama', 'Jarl Kulle', 25),
(28, 'Indiana Jones', 'Action', 'Harrison Ford', 40),
(29, 'Dodeskaden', 'Drama', 'Shinju Shinoda', 20),
(30, 'GI Jane', 'Action', 'Demi Moore', 30),
(31, 'Dödligt vapen 1', 'Action', 'Mel Gibson', 25),
(32, 'Sjunde inseglet', 'Drama', 'Gunnar Björnstrand', 25),
(33, 'The Shining', 'Rysare', 'Jack Nicholson', 15),
(34, 'Elefantmannen', 'Drama', 'John Hurt', 20),
(35, 'Goldfinger', 'Action', 'Sean Connery', 25),
(36, 'I rosens namn', 'Drama', 'Sean Connery', 30),
(37, 'Jurtjyrkogården', 'Rysare', 'Steve Smith', 15),
(38, 'Ciderhusreglerna', 'Drama', 'Michael Caine', 25),
(39, 'Tillsammans', 'Drama', 'Shanti Roney', 30),
(40, 'Cape Fear', 'Action', 'Robert DeNiro', 20),
(41, 'Cable Guy', 'Komedi', 'Jim Carrey', 25),
(42, 'Cliffhanger', 'Action', 'Sylvester Stallone', 30),
(43, 'Rocky', 'Action', 'Sylvester Stallone', 25),
(44, 'Purpurfärgen', 'Drama', 'Whoppi Goldberg', 30),
(45, 'Krigarens själ', 'Action', 'Temaeru Morrison', 15),
(46, 'Speed', 'Action', 'Keanu Reeves', 30),
(47, 'The Net', 'Thriller', 'Sandra Bullock', 25),
(48, 'Hamlet', 'Drama', 'Kenneth Brannagh', 30),
(49, 'Pluton', 'Action', 'Charlie Sheen', 25),
(50, 'Apocalypse Now', 'Action', 'Martin Sheen', 20);

-- --------------------------------------------------------

--
-- Tabellstruktur `kund`
--

CREATE TABLE `kund` (
  `kundnummer` int(5) NOT NULL,
  `namn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gatuadress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `postnummer` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ort` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `kund`
--

INSERT INTO `kund` (`kundnummer`, `namn`, `gatuadress`, `postnummer`, `ort`) VALUES
(1, 'Inge Danielsson', 'Poppelvägen 7', '11356', 'Stockholm'),
(2, 'Bert Lindqvist', 'Notstigen 82', '12567', 'Stockholm'),
(3, 'Lars Lundberg', 'Pärlegatan 4', '12578', 'Sollentuna'),
(4, 'Lisa Nilsson', 'Rundhagen 823', '15336', 'Nacka'),
(5, 'Hilda Lindqvist', 'Andromedagatan 23', '16537', 'Huddinge'),
(6, 'Wiktor Andersson', 'Fotbollsstigen 23', '15467', 'Stockholm'),
(7, 'Ragnhild Green', 'Kulturgatan 23', '71434', 'Uppsala'),
(8, 'Isak Isaksson', 'Magnoliavägen 2934', '68433', 'Hagfors'),
(9, 'Petter Andersson', 'Strandgatan 23', '15666', 'Solna'),
(10, 'Knut Dahlman', 'Kringlan 23', '25678', 'Hudiksvall'),
(11, 'Louisa Lindström', 'Promenadstråket 82', '65833', 'Molkom'),
(12, 'Vera Lindberg', 'Hurtigrutten 23', '15784', 'Sundbyberg'),
(13, 'Maja Antonsson', 'Tellusgatan 34', '77456', 'Norrtälje'),
(14, 'Carl Svensson', 'Månvägen 25', '25467', 'Bollnäs'),
(15, 'Zeke Brandt', 'Lantvägen 25', '84624', 'Kalmar'),
(16, 'Ture Olsson', 'Kungsgatan 19', '99965', 'Lysekil'),
(17, 'Ulla Lundström', 'Drottninggatan 23', '15489', 'Stockholm'),
(18, 'Oskar Andersson', 'Prinskorvsstigen 34', '14354', 'Järfälla'),
(19, 'Ernst Dahlström', 'Aromgatan 23', '42367', 'Kiruna'),
(20, 'Fredrika Olsson', 'Lökstigen 4', '37689', 'Örebro'),
(21, 'David Holmberg', 'Maradonagången 29', '25478', 'Edsbyn'),
(22, 'Harald Holmström', 'Beatlesboulevarden 23', '15478', 'Danderyd'),
(23, 'Johanna Johansson', 'Sarekstigen 23', '73447', 'Uppsala'),
(24, 'Antonia Johansson', 'Amerikavägen 25', '26589', 'Gävle'),
(25, 'Lennart Persson', 'Kumlagatan 398', '15894', 'Stockholm'),
(26, 'Orvar Persson', 'Uppsalavägen 39', '26478', 'Bollnäs'),
(27, 'Erika Lindell', 'Klintegatan 423', '55567', 'Skara'),
(28, 'Sandra Carlsson', 'Närkestigen 24', '35467', 'Örebro'),
(29, 'Carl Magnusson', 'Norrlandsvägen 495', '25489', 'Hudiksvall'),
(30, 'Erik  Storblad', 'Råsundavägen 23', '12356', 'Solna'),
(31, 'Erik Stenmark', 'Västkustgatan 14', '97834', 'Uddevalla'),
(32, 'Erik Torstensson', 'Ölandsstigen 5', '85678', 'Kalmar'),
(33, 'Ella Ström', 'Domkyrkogatan 34', '72356', 'Uppsala'),
(34, 'Viktoria Bernadotte', 'Översvämningsvägen 1', '68745', 'Arvika'),
(35, 'Quintus Xerxesson', 'Västgötagatan 425', '57789', 'Falköping'),
(36, 'Lovisa Johnsson', 'Fjällstigen 7', '46576', 'Jokkmokk'),
(37, 'Anders Andersson', 'Järnvägsgatan 14', '34598', 'Hallsberg'),
(38, 'Natalie Karlsmark', 'Kustvägen 39', '24444', 'Sundsvall'),
(39, 'Ilona Stark', 'Sicklagatan 53', '15368', 'Nacka'),
(40, 'Petra Pettersson', 'Latinkingsvägen 44', '17689', 'Botkyrka'),
(41, 'Rutger Hauer', 'Strutsgatan 9274', '15456', 'Stockholm'),
(42, 'Jon Anderson', 'Rikemansgränd 65', '16278', 'Täby'),
(43, 'Chris Squire', 'Villavägen 84', '11111', 'Täby'),
(44, 'Steve Howe', 'Bertvägen 19', '54634', 'Skara'),
(45, 'Bill Bruford', 'Marabougatan 88', '15489', 'Sundbyberg'),
(46, 'Rick Wakeman', 'Översvämningsvägen 1', '67677', 'Arvika'),
(47, 'Tony Kaye', 'Jägargatan 22', '24356', 'Sundsvall'),
(48, 'Alan White', 'Åvägen 5', '36567', 'Örebro'),
(49, 'Trevor Rabin', 'Roslagsgatan 33', '79834', 'Östhammar'),
(50, 'Geoff Downes', 'Bandyvägen 64', '26567', 'Edsbyn'),
(51, 'Greger Krut', 'Gammelvägen 88', '14356', 'Stockholm'),
(52, 'Jerker Johansson', 'Övägen 34', '15378', 'Vaxholm'),
(53, 'Jessica Bengtsson', 'Foppagatan 32', '25567', 'Örnsköldsvik'),
(54, 'Johanna Jarl', 'Vattenvägen 98', '38699', 'Örebro'),
(55, 'Pentti Penttonen', 'Samestigen 43', '44444', 'Gällivare'),
(56, 'Muhammed Ali', 'Vänervägen 88', '52468', 'Mariestad'),
(57, 'Boris Jeltsin', 'Selmagatan 32', '61789', 'Sunne'),
(58, 'Bertil Boo', 'Upplandsvägen 845', '71508', 'Tierp'),
(59, 'Ludmilla Barishka', 'Rockringen 32', '82154', 'Mönsterås'),
(60, 'Fatima Malek', 'Dalsgatan 94', '96734', 'Åmål'),
(61, 'Stavros Papadopoulous', 'Petrusvägen 22', '13254', 'Stockholm'),
(62, 'Carmen Santana', 'Slottsgatan 43', '17690', 'Ekerö'),
(63, 'Ture Nerman', 'Vättervägen 92', '37589', 'Askersund'),
(64, 'Ola Norman', 'Frykengatan 21', '62587', 'Torsby'),
(65, 'Karsten Jansen', 'Hockeygatan 66', '58696', 'Jönköping'),
(66, 'Julius Ceasar', 'Skogsvägen 84', '16470', 'Tyresö'),
(67, 'Hannibal Karthago', 'Tyrestagatan 85', '15367', 'Haninge'),
(68, 'Hanna Jansson', 'Studentgatan 98', '72656', 'Uppsala'),
(69, 'Herbert Albertsson', 'Kyrkogatan 11', '28567', 'Härnösand'),
(70, 'Wilma Nordberg', 'Glasvägen 99', '85645', 'Växjö'),
(71, 'Kumar Pamir', 'Gnagetgatan 88', '12134', 'Solna'),
(72, 'Tage Erlander', 'Runstigen 33', '18467', 'Sigtuna'),
(73, 'Lucas Dagerman', 'Dopparegatan 666', '36478', 'Örebro'),
(74, 'Hugo Viktorsson', 'Järnvägsgatan 15', '37788', 'Hallsberg'),
(75, 'Harry Martinsson', 'Hästgatan 22', '31456', 'Hova'),
(76, 'Maria Magnusson', 'Kylskåpsvägen 66', '42356', 'Boden'),
(77, 'Maria Salinas', 'Solgatan 648', '62599', 'Karlstad'),
(78, 'Maria Hedman', 'Odengatan 99', '25467', 'Härnösand'),
(79, 'Maria Svensson', 'Varvsvägen 88', '48755', 'Luleå'),
(80, 'Martha Gonzales', 'Medelpadsgatan 22', '26478', 'Sundsvall'),
(81, 'Gunilla Berg', 'Medelpadsgatan 22', '26444', 'Sundsvall'),
(82, 'Lillemor Borg', 'Timråvägen 22', '27599', 'Sundsvall'),
(83, 'Kurt Olsson', 'Kyrkogatan 33', '26476', 'Hudiksvall'),
(84, 'Zacharias Topelius', 'Fältskärsvägen 88', '11122', 'Stockholm'),
(85, 'Tony Iommi', 'Sabbatgatan 22', '16688', 'Stockholm'),
(86, 'Christer Nilsson', 'Frikyrkovägen 43', '54678', 'Jönköping'),
(87, 'Krister Karlsson', 'Herrgårdsstigen 2', '55588', 'Lidköping'),
(88, 'Michael Larsson', 'Skinnargatan 9', '31245', 'Skinnskatteberg'),
(89, 'Mikael Strindberg', 'Dalmasvägen 5', '36589', 'Ludvika'),
(90, 'Michael Strandberg', 'Skoglundsgatan 4', '16378', 'Nacka'),
(91, 'Mikael Hansson', 'Ögatan 4', '17788', 'Lidingö'),
(92, 'Michael Hedberg', 'Skärgårdsvägen 3', '15478', 'Värmdö'),
(93, 'Larry King', 'Bempavägen 3', '37589', 'Falun'),
(94, 'Ruben Blades', 'Björkgatan 435', '22255', 'Umeå'),
(95, 'Jonas Kling', 'Scaniavägen 6', '16478', 'Södertälje'),
(96, 'Jonna Jansson', 'Kärnkraftsgatan 5', '88888', 'Oskarshamn'),
(97, 'Laura Ingalls', 'Solgatan 650', '66666', 'Karlstad'),
(98, 'Tuva Kjellberg', 'Julbocksvägen 4', '26478', 'Gävle'),
(99, 'Katinka Roos', 'Åvägen 10', '37788', 'Örebro'),
(100, 'Django Reinhardt', 'Jazzgatan 3', '15467', 'Stockholm');

-- --------------------------------------------------------

--
-- Tabellstruktur `uthyrning`
--

CREATE TABLE `uthyrning` (
  `Film` int(5) NOT NULL,
  `Kund` int(5) NOT NULL,
  `utDatum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inDatum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `uthyrning`
--

INSERT INTO `uthyrning` (`Film`, `Kund`, `utDatum`, `inDatum`) VALUES
(1, 10, '2017-11-10 00:00:00', '2017-11-17 00:00:00'),
(5, 10, '2017-11-10 00:00:00', '0000-00-00 00:00:00'),
(10, 20, '2017-11-10 00:00:00', '2017-11-17 00:00:00'),
(15, 20, '2017-11-12 00:00:00', '2017-11-18 00:00:00'),
(20, 20, '2017-11-12 00:00:00', '0000-00-00 00:00:00'),
(25, 30, '2017-11-12 00:00:00', '2017-11-18 00:00:00'),
(30, 40, '2017-11-13 00:00:00', '2017-11-18 00:00:00'),
(35, 60, '2017-11-13 00:00:00', '2017-11-19 00:00:00'),
(40, 80, '2017-11-13 00:00:00', '2017-11-19 00:00:00'),
(45, 100, '2017-11-15 00:00:00', '0000-00-00 00:00:00'),
(50, 100, '2017-11-15 00:00:00', '0000-00-00 00:00:00');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`filmID`);

--
-- Index för tabell `kund`
--
ALTER TABLE `kund`
  ADD PRIMARY KEY (`kundnummer`);

--
-- Index för tabell `uthyrning`
--
ALTER TABLE `uthyrning`
  ADD PRIMARY KEY (`Film`,`Kund`,`utDatum`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `film`
--
ALTER TABLE `film`
  MODIFY `filmID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT för tabell `kund`
--
ALTER TABLE `kund`
  MODIFY `kundnummer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
