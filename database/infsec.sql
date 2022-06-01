-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 08:56 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infsec`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `uid` varchar(15) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `grade` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`uid`, `semester`, `grade`) VALUES
('apurverd23', 'SS 2022', 1),
('cblundan8', 'SS 2022', 1),
('cmatthewmane56', 'SS 2022', 1),
('cortmann2', 'SS 2022', 1),
('dculp6', 'SS 2022', 1),
('dmaccrosson1', 'SS 2022', 1),
('efarrall4', 'SS 2022', 1),
('gdevaan5', 'SS 2022', 1),
('lsergean3', 'SS 2022', 1),
('meveringham0', 'SS 2022', 1),
('nocarran9', 'SS 2022', 1),
('quirchg8', 'SS 2022', 1),
('rgrimley7', 'SS 2022', 1),
('sbockc23', 'SS 2022', 1),
('vpollea45', 'SS 2022', 1),
('zpetticanb46', 'SS 2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `uid` varchar(10) NOT NULL,
  `matrnr` int(8) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`uid`, `matrnr`, `firstname`, `lastname`) VALUES
('apurverd23', 62311855, 'Aleece', 'Purver'),
('cblundan8', 89331729, 'Corri', 'Blundan'),
('cmatthewma', 48032842, 'Ceil', 'Matthewman'),
('cortmann2', 47492699, 'Carolynn', 'Ortmann'),
('dculp6', 26260865, 'Dacie', 'Culp'),
('dmaccrosso', 38339715, 'Dasha', 'MacCrosson'),
('efarrall4', 30683384, 'Ezri', 'Farrall'),
('gdevaan5', 19986246, 'Gerome', 'De Vaan'),
('lsergean3', 14175255, 'Leola', 'Sergean'),
('meveringha', 57215185, 'Matelda', 'Everingham'),
('nocarran9', 79083147, 'Neale', 'O\'Carran'),
('rgrimley7', 55551027, 'Roslyn', 'Grimley'),
('sbockc23', 31351922, 'Sidonia', 'Bock'),
('vpollea45', 19198729, 'Vilhelmina', 'Polle'),
('zpetticanb', 87495605, 'Zuzana', 'Pettican');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(15) NOT NULL,
  `password` varchar(128) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `password`, `isAdmin`) VALUES
('apurverd23', 'e7de6912b26b215556e289ec1a26fd4d', 0), 		--WXghq55
('cblundan8', '67d7cfc27c8220493613b093c69aedf4', 0),    		--LMwbqXsw
('cmatthewmane56', 'd03c49751da5dc8ed6c2c5abb36664e5', 0),	--k68UNsjW
('cortmann2', '6c49f923b38cc92657bacaf6457f8c6e', 0),		--iktL3n0y
('dculp6', 'e03e08aed12c077bcbda994ce8efd444', 0),				--sQQiuuv
('dmaccrosson1', 'c127875d1e11cfa9f2a5def74afcb18d', 0),		--6fQ2J88W
('efarrall4', '68756cef65d1f117c6f3ed2bd643caa1', 0),		--X10wzl2T
('gdevaan5', 'c3ff14bbab661fd436f5fae2f72ed6b5', 0),		--vlGiCAL
('lsergean3', '91a01928f52f13a0ebd7f259ec3d1bad', 0),		--ogNWA0R1
('meveringham0', '143d12fa136d0b104d3cabc40ea54a05', 0),		--qS1oNh3l
('nocarran9', 'a7e799b257da27ab1f8190307e4094d2', 0),			--DXcw2Gqo
('quirchg8', '8dac7ee7395547b7e12433e6a017606c', 1),			--83jf893
('rgrimley7', 'e049f25d5cc706f964708bc99f409c9e', 0),			--vIC2j3Z
('sbockc23', '81f3604299380411c638c0c5ab385b13', 0),				--cUYSGz
('vpollea45', '38292b3561ab199b0b81335c904ea991', 0),				--f6ImHU
('zpetticanb46', '2f75bc16e802ca111d05c78dc42bb23f', 0);			--tkU7wY

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`uid`,`semester`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `matrnr` (`matrnr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
