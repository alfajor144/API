CREATE DATABASE api;

CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fechaN` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pais` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);
