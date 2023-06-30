SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS SGMEC;

USE SGMEC;

DROP TABLE IF EXISTS departamento;

CREATE TABLE `departamento` (
  `id_departamento` int(8) NOT NULL AUTO_INCREMENT,
  `tipo_departamento` varchar(150) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO departamento VALUES("5","Laboratorista");
INSERT INTO departamento VALUES("6","Encargado");



DROP TABLE IF EXISTS equipos;

CREATE TABLE `equipos` (
  `id_equipo` int(8) NOT NULL AUTO_INCREMENT,
  `id_ubicacion` int(11) DEFAULT NULL,
  `modelo` varchar(150) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `especificaciones` varchar(1000) NOT NULL,
  `observaciones` varchar(400) NOT NULL,
  `fallo_repor` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_equipo`),
  KEY `id_ubicacion` (`id_ubicacion`),
  CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE IF EXISTS estado;

CREATE TABLE `estado` (
  `id_estado` int(8) NOT NULL AUTO_INCREMENT,
  `tipo_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO estado VALUES("1","Activo");
INSERT INTO estado VALUES("2","Mantenimiento");
INSERT INTO estado VALUES("3","Inactivo");



DROP TABLE IF EXISTS mantenimiento;

CREATE TABLE `mantenimiento` (
  `id_mantenimiento` int(8) NOT NULL AUTO_INCREMENT,
  `tipo_mantenimiento` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mantenimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO mantenimiento VALUES("1","Preventivo");
INSERT INTO mantenimiento VALUES("2","Correctivo");
INSERT INTO mantenimiento VALUES("3","Ambos");



DROP TABLE IF EXISTS reportes;

CREATE TABLE `reportes` (
  `id_reporte` int(8) NOT NULL AUTO_INCREMENT,
  `id_mantenimiento` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_equipo` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id_reporte`),
  KEY `id_mantenimiento` (`id_mantenimiento`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_equipo` (`id_equipo`),
  CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`id_mantenimiento`) REFERENCES `mantenimiento` (`id_mantenimiento`),
  CONSTRAINT `reportes_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  CONSTRAINT `reportes_ibfk_3` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE IF EXISTS ubicacion;

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(8) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios VALUES("28","Brissa","Ortiz","Sanchez","al222011195@gmail.com","5");



SET FOREIGN_KEY_CHECKS=1;