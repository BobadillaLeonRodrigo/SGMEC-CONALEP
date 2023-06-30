SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS SGMEC;

USE SGMEC;

DROP TABLE IF EXISTS departamento;

CREATE TABLE `departamento` (
  `id_departamento` int(8) NOT NULL AUTO_INCREMENT,
  `tipo_departamento` varchar(150) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO departamento VALUES("1","Laboratorista");
INSERT INTO departamento VALUES("2","Encargado");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id_usuario` int(8) NOT NULL AUTO_INCREMENT,
  `nombreu` varchar(100) NOT NULL,
  `appu` varchar(100) NOT NULL,
  `apmu` varchar(100) NOT NULL,
  `emailu` varchar(100) NOT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_departamento` (`id_departamento`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios VALUES("1","mariana","romero","alvarez","al222111120@gmail.com","1");
INSERT INTO usuarios VALUES("2","Rodrigo","Bobadilla","León","al222110815@gmail.com","2");
INSERT INTO usuarios VALUES("3","Jesus","Bobadilla","León","123456789@gmail.com","1");



SET FOREIGN_KEY_CHECKS=1;