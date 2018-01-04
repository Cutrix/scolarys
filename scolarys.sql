-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `privilegesEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`AdminID`),
  UNIQUE KEY `login_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`AdminID`, `email`, `mdp`, `privilegesEt`) VALUES
(1,	'admin@admin.com',	'3f3a85be1de0a9aad8a64799092a6132cdc936c1',	1);

DROP TABLE IF EXISTS `anneescolaire`;
CREATE TABLE `anneescolaire` (
  `AnneescolaireID` int(11) NOT NULL AUTO_INCREMENT,
  `anneescolaireText` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`AnneescolaireID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `authentification`;
CREATE TABLE `authentification` (
  `idauthentification` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `privilegeEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`idauthentification`),
  KEY `fk_peivilege_authen_idx` (`privilegeEt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `eleve`;
CREATE TABLE `eleve` (
  `EleveID` int(11) NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(20) DEFAULT NULL,
  `prenomEleve` varchar(50) DEFAULT NULL,
  `etablissementEt` int(11) DEFAULT NULL,
  `anneeScolaireEt` int(11) DEFAULT NULL,
  `periodeEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`EleveID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE `etablissement` (
  `EtablissementID` int(11) NOT NULL AUTO_INCREMENT,
  `etablissementText` varchar(100) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`EtablissementID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `etablissement` (`EtablissementID`, `etablissementText`, `numero`) VALUES
(1,	'ponty',	'22345678'),
(2,	'dfdf',	NULL),
(36,	'Anador',	NULL);

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE `matiere` (
  `MatiereID` int(11) NOT NULL AUTO_INCREMENT,
  `matiereText` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MatiereID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `matiere` (`MatiereID`, `matiereText`) VALUES
(1,	'math'),
(2,	'physique-chimie'),
(3,	'philosophie'),
(4,	'allemand');

DROP TABLE IF EXISTS `parent`;
CREATE TABLE `parent` (
  `idparent` int(11) NOT NULL AUTO_INCREMENT,
  `nomParent` varchar(45) DEFAULT NULL,
  `prenomParent` varchar(45) DEFAULT NULL,
  `eleveEt` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mdp` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idparent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `periode`;
CREATE TABLE `periode` (
  `PeriodeID` int(11) NOT NULL,
  `periodeText` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PeriodeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `privileges`;
CREATE TABLE `privileges` (
  `PrivilegesID` int(11) NOT NULL AUTO_INCREMENT,
  `privilegeText` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`PrivilegesID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `privileges` (`PrivilegesID`, `privilegeText`) VALUES
(1,	'superadmin'),
(2,	'professeur'),
(3,	'parent'),
(4,	'eleve');

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE `professeur` (
  `ProfesseurID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `privilegesEt` int(11) DEFAULT '1',
  `matiereEt` int(11) DEFAULT NULL,
  `etablissementEt` int(11) DEFAULT NULL,
  `authEt` int(11) DEFAULT NULL,
  `mdp` varchar(45) DEFAULT '39dfa55283318d31afe5a3ff4a0e3253e2045e43',
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ProfesseurID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `professeur` (`ProfesseurID`, `nom`, `prenom`, `privilegesEt`, `matiereEt`, `etablissementEt`, `authEt`, `mdp`, `email`) VALUES
(1,	'Remar',	'julio',	2,	1,	1,	NULL,	'39dfa55283318d31afe5a3ff4a0e3253e2045e43',	'julio@gmail.com'),
(2,	'ZOUNON',	'kevin',	2,	3,	36,	NULL,	'39dfa55283318d31afe5a3ff4a0e3253e2045e43',	'kevinzounon@gmail.com'),
(3,	'BEUGRE',	'kouassi gustave',	2,	1,	1,	NULL,	'mikinana',	'gusto@gmail.com');

DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `QuestionID` int(11) NOT NULL AUTO_INCREMENT,
  `qestionText` text,
  `dateQestion` datetime DEFAULT NULL,
  `ProfesseurEt` int(11) DEFAULT NULL,
  `planification` date DEFAULT NULL,
  PRIMARY KEY (`QuestionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `question` (`QuestionID`, `qestionText`, `dateQestion`, `ProfesseurEt`, `planification`) VALUES
(1,	NULL,	'0000-00-00 00:00:00',	2,	NULL),
(2,	NULL,	'0000-00-00 00:00:00',	2,	NULL),
(3,	NULL,	'0000-00-00 00:00:00',	2,	NULL),
(4,	'presi?',	'0000-00-00 00:00:00',	2,	NULL),
(5,	'presi?',	'2017-12-29 10:50:06',	2,	NULL),
(6,	'presi?',	'2017-12-29 10:56:27',	2,	NULL),
(7,	'bia',	'2017-12-29 11:52:33',	2,	NULL),
(8,	'bia',	'2017-12-29 11:52:57',	2,	NULL),
(9,	'bia',	'2017-12-29 11:56:08',	2,	NULL),
(10,	'Quel est le president de la ci?',	'2017-12-29 12:16:48',	2,	NULL),
(11,	'tyytrtry',	'2018-01-04 11:34:18',	2,	NULL),
(12,	'tyytrtry',	'2018-01-04 11:35:02',	2,	NULL),
(13,	'tyytrtry',	'2018-01-04 11:37:48',	2,	NULL),
(14,	'tyytrtry',	'2018-01-04 11:38:09',	2,	NULL),
(15,	'tyytrtry',	'2018-01-04 11:41:48',	2,	NULL),
(16,	'tyytrtry',	'2018-01-04 11:42:17',	2,	NULL);

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE `reponse` (
  `ReponseID` int(11) NOT NULL AUTO_INCREMENT,
  `reponseText` text,
  `dateReponse` datetime DEFAULT NULL,
  `isTrue` int(11) DEFAULT '0',
  `questionEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`ReponseID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reponse` (`ReponseID`, `reponseText`, `dateReponse`, `isTrue`, `questionEt`) VALUES
(1,	'retz',	'2017-12-29 11:51:23',	0,	6),
(2,	'partouze',	'2017-12-29 11:51:23',	0,	6),
(3,	'elem',	'2017-12-29 11:51:23',	0,	6),
(4,	'retz',	'2017-12-29 11:52:33',	0,	7),
(5,	'partouze',	'2017-12-29 11:52:33',	0,	7),
(6,	'elem',	'2017-12-29 11:52:33',	0,	7),
(7,	'retz',	'2017-12-29 11:52:57',	0,	8),
(8,	'partouze',	'2017-12-29 11:52:57',	0,	8),
(9,	'elem',	'2017-12-29 11:52:57',	0,	8),
(10,	'retz',	'2017-12-29 11:56:09',	0,	9),
(11,	'partouze',	'2017-12-29 11:56:09',	0,	9),
(12,	'elem',	'2017-12-29 11:56:09',	0,	9),
(13,	'ADO',	'2017-12-29 12:13:00',	1,	9),
(14,	'RICHARD',	'2017-12-29 12:13:00',	1,	9),
(15,	'XXX',	'2017-12-29 12:13:00',	1,	9),
(16,	'ADO',	'2017-12-29 12:16:50',	1,	10),
(17,	'RICHARD',	'2017-12-29 12:16:50',	1,	10),
(18,	'XXX',	'2017-12-29 12:16:50',	1,	10),
(19,	'ty',	'2018-01-04 11:34:18',	2,	11),
(20,	'',	'2018-01-04 11:34:18',	2,	11),
(21,	'',	'2018-01-04 11:34:18',	2,	11),
(22,	'',	'2018-01-04 11:34:18',	2,	11),
(23,	'ty',	'2018-01-04 11:35:02',	2,	12),
(24,	'',	'2018-01-04 11:35:02',	2,	12),
(25,	'',	'2018-01-04 11:35:02',	2,	12),
(26,	'',	'2018-01-04 11:35:02',	2,	12),
(27,	'ty',	'2018-01-04 11:37:48',	2,	13),
(28,	'',	'2018-01-04 11:37:48',	2,	13),
(29,	'',	'2018-01-04 11:37:48',	2,	13),
(30,	'',	'2018-01-04 11:37:48',	2,	13),
(31,	'ty',	'2018-01-04 11:38:10',	2,	14),
(32,	'',	'2018-01-04 11:38:10',	2,	14),
(33,	'',	'2018-01-04 11:38:10',	2,	14),
(34,	'',	'2018-01-04 11:38:10',	2,	14),
(35,	'ty',	'2018-01-04 11:42:17',	2,	16),
(36,	'',	'2018-01-04 11:42:17',	2,	16),
(37,	'',	'2018-01-04 11:42:17',	2,	16),
(38,	'',	'2018-01-04 11:42:17',	2,	16);

DROP TABLE IF EXISTS `resultats`;
CREATE TABLE `resultats` (
  `idresulat` int(11) NOT NULL AUTO_INCREMENT,
  `eleveEt` int(11) NOT NULL,
  `matiereEt` int(11) NOT NULL,
  `isTrue` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idresulat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- 2018-01-04 11:46:05
