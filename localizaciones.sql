CREATE TABLE `localizaciones` (
  `nombre` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pInteres` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `importancia` tinyint(4) NOT NULL,
  `idjuegos` int(11) DEFAULT NULL,
  PRIMARY KEY (`nombre`),
  KEY `idjuegos_idx` (`idjuegos`),
  CONSTRAINT `idjuegos` FOREIGN KEY (`idjuegos`) REFERENCES `juegos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
