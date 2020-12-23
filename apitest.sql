CREATE DATABASE apitest;

CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `persona`(`nombre`) VALUES ('Mauro');
INSERT INTO `persona`(`nombre`) VALUES ('Hernesto');
INSERT INTO `persona`(`nombre`) VALUES ('Camila');
