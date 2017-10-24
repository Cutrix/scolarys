-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `anneescolaire`;
CREATE TABLE `anneescolaire` (
  `AnneescolaireID` int(11) NOT NULL AUTO_INCREMENT,
  `anneescolaireText` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`AnneescolaireID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `authenfication`;
CREATE TABLE `authenfication` (
  `idauthenfication` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `privilegeEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`idauthenfication`),
  UNIQUE KEY `login_UNIQUE` (`email`),
  KEY `fk_privilege_auth_idx` (`privilegeEt`),
  CONSTRAINT `fk_privilege_auth` FOREIGN KEY (`privilegeEt`) REFERENCES `privileges` (`PrivilegesID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `authenfication` (`idauthenfication`, `email`, `mdp`, `privilegeEt`) VALUES
(1,	'admin@admin.com',	'3f3a85be1de0a9aad8a64799092a6132cdc936c1',	1);

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE `eleve` (
  `EleveID` int(11) NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(20) DEFAULT NULL,
  `prenomEleve` varchar(50) DEFAULT NULL,
  `etablissementEt` int(11) DEFAULT NULL,
  `anneeScolaireEt` int(11) DEFAULT NULL,
  `periodeEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`EleveID`),
  KEY `fk_etablissement_eleve_idx` (`etablissementEt`),
  KEY `fk_an_eleve_idx` (`anneeScolaireEt`),
  CONSTRAINT `fk_an_eleve` FOREIGN KEY (`anneeScolaireEt`) REFERENCES `anneescolaire` (`AnneescolaireID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_etablissement_eleve` FOREIGN KEY (`etablissementEt`) REFERENCES `etablissement` (`EtablissementID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE `etablissement` (
  `EtablissementID` int(11) NOT NULL AUTO_INCREMENT,
  `etablissementText` varchar(100) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`EtablissementID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `matiere`;
CREATE TABLE `matiere` (
  `MatiereID` int(11) NOT NULL AUTO_INCREMENT,
  `matiereText` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MatiereID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `matiere` (`MatiereID`, `matiereText`) VALUES
(1,	'math'),
(2,	'physique-chimie');

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
(3,	'eleve');

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE `professeur` (
  `ProfesseurID` int(11) NOT NULL,
  `nom` varchar(80) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `privilegesEt` int(11) DEFAULT '1',
  `matiereEt` int(11) DEFAULT NULL,
  `etablissementEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProfesseurID`),
  KEY `fk_matiere_idx` (`matiereEt`),
  KEY `fk_etablissement_idx` (`etablissementEt`),
  KEY `fk_privilege_idx` (`privilegesEt`),
  CONSTRAINT `fk_etablissement` FOREIGN KEY (`etablissementEt`) REFERENCES `etablissement` (`EtablissementID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_matiere` FOREIGN KEY (`matiereEt`) REFERENCES `matiere` (`MatiereID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_privilege` FOREIGN KEY (`privilegesEt`) REFERENCES `privileges` (`PrivilegesID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `QuestionID` int(11) NOT NULL AUTO_INCREMENT,
  `qestionText` text,
  `dateQestion` datetime DEFAULT NULL,
  `ProfesseurEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`QuestionID`),
  KEY `fk_professeur_idx` (`ProfesseurEt`),
  CONSTRAINT `fk_professeur` FOREIGN KEY (`ProfesseurEt`) REFERENCES `professeur` (`ProfesseurID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `reponse`;
CREATE TABLE `reponse` (
  `ReponseID` int(11) NOT NULL,
  `reponseText` text,
  `dateReponse` datetime DEFAULT NULL,
  `isTrue` int(11) DEFAULT '0',
  `questionEt` int(11) DEFAULT NULL,
  PRIMARY KEY (`ReponseID`),
  KEY `fk_question_idx` (`questionEt`),
  CONSTRAINT `fk_question` FOREIGN KEY (`questionEt`) REFERENCES `question` (`QuestionID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2017-10-24 09:21:52
