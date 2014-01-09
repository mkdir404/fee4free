CREATE TABLE `fee_customer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `calle` varchar(250) DEFAULT NULL,
  `colonia` varchar(250) DEFAULT NULL,
  `delegacion` varchar(250) DEFAULT NULL,
  `codigo_postal` int(11) DEFAULT NULL,
  `rfc` varchar(250) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `activo` int(2) DEFAULT '1',
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `fee_profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `calle` varchar(250) DEFAULT NULL,
  `colonia` varchar(250) DEFAULT NULL,
  `delegacion` varchar(250) DEFAULT NULL,
  `codigo_postal` int(11) DEFAULT NULL,
  `rfc` varchar(250) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `ruta_imagen` varchar(250) DEFAULT NULL,
  `leyenda` longtext,
  `activo` int(2) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `fee_invoices` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `calle` varchar(250) DEFAULT NULL,
  `colonia` varchar(250) DEFAULT NULL,
  `delegacion` varchar(250) DEFAULT NULL,
  `codigo_postal` int(11) DEFAULT NULL,
  `rfc` varchar(250) DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `fecha_factura` date DEFAULT NULL,
  `concepto` varchar(250) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL,
  `iva_retenido` int(11) DEFAULT NULL,
  `isr` int(11) DEFAULT NULL,
  `total_pagado` int(11) DEFAULT NULL,
  `llave_customer` int(11) DEFAULT NULL,
  `activo` int(2) DEFAULT '1',
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;