CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `id_role` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_role` (`id_role`),
  KEY `id_role_2` (`id_role`),
  CONSTRAINT `fk_role` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE `pedidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `notasPedido` varchar(255) NOT NULL,
  `productos` json NOT NULL,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ;

INSERT INTO `productos` VALUES (2,'ViroGrip','ViroGrip noche 2 pastillas',0.50,'S-Viro-Grip-Gelcap-Pm-24-Sobres-1-29933.webp'),(7,'Virogrip dia','Virogrip dia, 2 tabletas',0.50,'S-Viro-Grip-Gelcap-Am-24-Sobres-1-29932.webp'),(8,'cefradoxilo','cefradoxilo, para evitrar infecciones',20.00,'lasante_cefadroxilo_capsulas.png');
INSERT INTO `roles` VALUES (1,'ADMIN'),(2,'CLIENT');
INSERT INTO `usuarios` VALUES (1,'Francisco','franc1sc0.sv.xd@gmail.com','HolaHola01',2),(2,'Admin','admin@admin.com','PharmOnline$%2023',1);