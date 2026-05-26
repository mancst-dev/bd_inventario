create database bd_inventario;

use bd_inventario;

CREATE TABLE `categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `fotos` (
  `idFotos` int NOT NULL AUTO_INCREMENT,
  `Formato` varchar(20) DEFAULT NULL,
  `Foto` longblob,
  `dir` varchar(20) DEFAULT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idFotos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Tabla para almacenar la información de las fotos';

CREATE TABLE `historico_ventas` (
  `idHistorico_Ventas` int NOT NULL AUTO_INCREMENT,
  `Cantidad` float DEFAULT NULL,
  `Fecha` timestamp NOT NULL,
  `id_usuario` int NOT NULL,
  `id_producto` varchar(30) NOT NULL,
  PRIMARY KEY (`idHistorico_Ventas`),
  KEY `id_usuario_idx` (`id_usuario`),
  KEY `id_productos_idx` (`id_producto`),
  CONSTRAINT `id_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`idProductos`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Tabla para almacenar la info de un historial de ventas';

CREATE TABLE `inventario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_inventario` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `inventario_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Cantidad_Productos` int DEFAULT NULL,
  `id_inventario` int NOT NULL,
  `id_producto` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_producto_idx` (`id_producto`),
  KEY `id_inventario_idx` (`id_inventario`),
  CONSTRAINT `id_inventario` FOREIGN KEY (`id_inventario`) REFERENCES `inventario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`idProductos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `productos` (
  `idProductos` varchar(30) NOT NULL,
  `NomProducto` varchar(30) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Precio_venta` float NOT NULL,
  `id_categoria` int NOT NULL,
  `id_unidad` int NOT NULL,
  `id_foto` int NOT NULL,
  PRIMARY KEY (`idProductos`),
  KEY `id_categoria_idx` (`id_categoria`),
  KEY `id_unidad_idx` (`id_unidad`),
  KEY `id_foto_idx` (`id_foto`),
  CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_foto` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`idFotos`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_unidad` FOREIGN KEY (`id_unidad`) REFERENCES `unidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Tabla para almacenar la info de lo productos';

CREATE TABLE `rol` (
  `idRol` int NOT NULL AUTO_INCREMENT,
  `NomRol` varchar(30) NOT NULL,
  `Fecha` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Tabla para la asinación de roles (supervisor, cliente)';

CREATE TABLE `unidades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Unidad` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(30) NOT NULL,
  `Contraseña` varchar(30) NOT NULL,
  `id_rol` int NOT NULL,
  `id_foto` int NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Tabla de información de los usuarios';