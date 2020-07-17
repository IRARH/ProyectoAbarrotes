CREATE DATABASE abarrotes;
USE abarrotes

DROP TABLE IF EXISTS `historial_inventario`;
CREATE TABLE IF NOT EXISTS `historial_inventario` (
  `num_historial` int(255) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `importe_inicial` float DEFAULT NULL,
  `entrada` float DEFAULT NULL,
  `salida` float DEFAULT NULL,
  `importe_actual` float DEFAULT NULL,
  PRIMARY KEY (`num_historial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `notas_estrella`;
CREATE TABLE IF NOT EXISTS `notas_estrella` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `notas_geminis`;
CREATE TABLE IF NOT EXISTS `notas_geminis` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `notas_guadalupana`;
CREATE TABLE IF NOT EXISTS `notas_guadalupana` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `notas_macel`;
CREATE TABLE IF NOT EXISTS `notas_macel` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `notas_pasadita`;
CREATE TABLE IF NOT EXISTS `notas_pasadita` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `notas_rayo`;
CREATE TABLE IF NOT EXISTS `notas_rayo` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `notas_trebol`;
CREATE TABLE IF NOT EXISTS `notas_trebol` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `notas_vaquita2`;
CREATE TABLE IF NOT EXISTS `notas_vaquita2` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `notas_vaquita3`;
CREATE TABLE IF NOT EXISTS `notas_vaquita3` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `notas_vaquita_df`;
CREATE TABLE IF NOT EXISTS `notas_vaquita_df` (
  `id_nota` int(255) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `tipo_producto` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `nombre_producto` (`nombre_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `pdf_tiendas`;
CREATE TABLE IF NOT EXISTS `pdf_tiendas` (
  `id_pdf` int(255) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `destinatario` varchar(50) DEFAULT NULL,
  `nombre_pdf` varchar(100) DEFAULT NULL,
  `url_pdf` blob DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `id_nota` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_pdf`),
  KEY `id_nota` (`id_nota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `codigo_barras` varchar(50) NOT NULL,
  `proveedor` varchar(50) DEFAULT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `costo_compra` float DEFAULT NULL,
  `costo_venta` float DEFAULT NULL,
  `cantidad_piezas` int(255) DEFAULT NULL,
  `piezas_caja` int(255) DEFAULT NULL,
  `cantidad_cajas` int(255) DEFAULT NULL,
  `total_precio_venta` float DEFAULT NULL,
  `total_precio_compra` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo_barras`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



INSERT INTO `productos` (`codigo_barras`, `proveedor`, `nombre_producto`, `costo_compra`, `costo_venta`, `cantidad_piezas`, `piezas_caja`, `cantidad_cajas`, `total_precio_venta`, `total_precio_compra`, `fecha`, `id_user`) VALUES
('112233445566', 'lala', 'Crema lala', 12.5, 15, 240, 12, 20, 3600, 3000, '2020-07-12', 1),
('224466881144', 'bimbo', 'pan blanco', 20, 26, 84, 7, 12, 2184, 1680, '2020-07-12', 2),
('335577990088', 'alpura', 'crema alpura', 17, 24, 285, 15, 19, 6840, 4845, '2020-07-12', 2),
('119911771166', 'coca cola', 'cocacola  lata', 8, 13, 100, 20, 5, 1300, 800, '2020-07-12', 2),
('231213456543', 'coca cola', 'coca cola envase', 10, 15, 450, 15, 30, 6750, 4500, '2020-07-12', 1),
('214332454365', 'la costeña', 'chiles chipotles', 6, 10, 140, 35, 4, 1400, 840, '2020-07-12', 2),
('827364534758', 'herdez', 'chiles en vinagre', 15, 22, 112, 14, 8, 2464, 1680, '2020-07-13', 1),
('102010213445', 'corona', 'cerveza corona', 30, 37, 104, 8, 13, 3848, 3120, '2020-07-13', 2),
('213243456577', 'bonafont', 'agua bonafont', 10, 15, 135, 9, 15, 2025, 1135, '2020-07-13', 2),
('213243455687', 'sabritas', 'rufles', 8, 13, 130, 13, 10, 1690, 1040, '2020-07-13', 1),
('213243232364', 'cerveza', 'cerveza tecate', 30, 36, 36, 9, 4, 1296, 1080, '2020-07-13', 2),
('324576980943', 'hellmans', 'mayonesa', 25, 32, 90, 15, 6, 2880, 2250, '2020-07-13', 2);



DROP TABLE IF EXISTS `productos_granel`;
CREATE TABLE IF NOT EXISTS `productos_granel` (
  `codigo_barras` varchar(50) NOT NULL,
  `proveedor` varchar(50) DEFAULT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `tipo_producto` varchar(50) DEFAULT NULL,
  `costo_compra` float DEFAULT NULL,
  `costo_venta` float DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `cantidad_bultos` int(255) DEFAULT NULL,
  `total_precio_venta` float DEFAULT NULL,
  `total_precio_compra` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL,
  PRIMARY KEY (`codigo_barras`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`),
  KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;



INSERT INTO `proveedores` (`id_proveedor`, `nombre`) VALUES
(1, 'Sabritas'),
(2, 'Coca cola'),
(3, 'La costeña'),
(4, 'Jarritos'),
(5, 'Corona'),
(6, 'Bonafont');


DROP TABLE IF EXISTS `tiendas`;
CREATE TABLE IF NOT EXISTS `tiendas` (
  `id_tienda` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tienda`),
  KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;



INSERT INTO `tiendas` (`id_tienda`, `nombre`) VALUES
(1, 'Estrella'),
(2, 'Geminis'),
(3, 'Guadalupana'),
(4, 'Macel'),
(5, 'Pasadita'),
(6, 'Rayo'),
(7, 'Trebol'),
(8, 'Vaquita2'),
(9, 'Vaquita3'),
(10, 'vaquitaDF');


DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privilegio` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



INSERT INTO `usuarios` (`id_user`, `user`, `password`, `privilegio`) VALUES
(1, 'administrador', 'admin', 'administrador'),
(2, 'encargado', 'admin', 'administrador');
COMMIT;
