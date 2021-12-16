DROP DATABASE IF EXISTS `AdministracionPCRS`;

CREATE DATABASE `AdministracionPCRS`;

USE `AdministracionPCRS`;

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


