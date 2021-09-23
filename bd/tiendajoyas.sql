-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2021 a las 01:37:09
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendajoyas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaproducto`
--

CREATE TABLE `categoriaproducto` (
  `idCategoriaProducto` int(11) NOT NULL,
  `nombreCategoria` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoriaproducto`
--

INSERT INTO `categoriaproducto` (`idCategoriaProducto`, `nombreCategoria`) VALUES
(1, 'Anillos'),
(2, 'Amuletos'),
(3, 'Aretes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditcards`
--

CREATE TABLE `creditcards` (
  `idCreditCards` int(11) NOT NULL,
  `nombreUser` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numCC` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `creditcards`
--

INSERT INTO `creditcards` (`idCreditCards`, `nombreUser`, `numCC`) VALUES
(1, 'Everaldo Garcia Lopez', '4242424242424242'),
(2, 'Jesus Abrahan Deyta Matus ', '1212121212121212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesventas`
--

CREATE TABLE `detallesventas` (
  `idDetallesVentas` int(11) NOT NULL,
  `idVentas` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `precio` int(50) NOT NULL,
  `subtotal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detallesventas`
--

INSERT INTO `detallesventas` (`idDetallesVentas`, `idVentas`, `idProducto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 1, 1, 10, 1500, 15000),
(3, 44, 9, 3, 200, 600),
(4, 45, 8, 1, 300, 300),
(5, 46, 3, 2, 200, 400),
(6, 47, 1, 2, 400, 800),
(11, 2, 9, 6, 600, 3600),
(12, 3, 3, 7, 700, 4900),
(13, 4, 13, 8, 800, 6400),
(14, 5, 6, 9, 900, 8100),
(15, 6, 12, 10, 1000, 10000),
(16, 18, 8, 11, 1100, 12100),
(17, 19, 1, 12, 1200, 14400),
(18, 20, 7, 13, 1300, 16900),
(19, 21, 10, 14, 1400, 19600),
(20, 22, 10, 15, 1500, 22500),
(21, 23, 11, 4, 400, 1600),
(22, 24, 12, 5, 300, 1500),
(23, 25, 13, 3, 500, 1500),
(24, 26, 8, 4, 100, 400),
(25, 27, 14, 5, 300, 1500),
(26, 33, 5, 16, 2000, 32000),
(27, 34, 11, 17, 2100, 35700),
(28, 35, 15, 18, 2200, 39600),
(29, 36, 11, 19, 2300, 43700),
(30, 43, 15, 20, 2400, 48000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `idDireccion` int(11) NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cPostal` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entreCalle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`idDireccion`, `ciudad`, `cPostal`, `calle`, `entreCalle`, `descripcion`) VALUES
(1, 'Puebla', '72229', '20 de Noviembre', '5 De Mayo y Miguel Hidalgo 1810', 'Es una casa muy bonita y pintada de color negro alv.'),
(2, 'Mexico', '755589', 'Independencia', '2 de Octubre y Manzanales', 'Casa de dos piso color oro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tamano` int(10) NOT NULL,
  `ruta_web` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `ruta_sistema` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `nombre`, `tamano`, `ruta_web`, `ruta_sistema`) VALUES
(1, 'Anillo1.jpg', 120, 'img/productos/Anillo1.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(2, 'amuleto.jpg', 300, 'img/productos/amuleto.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(3, 'arete14k.jpg', 120, 'img/productos/arete14k.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(4, 'CollarCorazonAbierto.png', 320, 'img/productos/CollarCorazonAbierto.png', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(5, 'Anillo Corona deslumbrante transparente.png', 120, 'img/productos/Anillo Corona deslumbrante transparente.png', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(6, 'AmuletoShell.jpg', 320, 'img/productos/AmuletoShell.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(7, 'ARETES CHANDELIER PALACE.jpg', 120, 'img/productos/ARETES CHANDELIER PALACE.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(8, 'ARETES BELLA.jpg', 320, 'img/productos/ARETES BELLA.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(9, 'Anilloserpiente.jpg', 120, 'img/productos/Anilloserpiente.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(10, 'ANILLO PANTHÈRE.jpg', 320, 'img/productos/ANILLO PANTHÈRE.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(11, 'ANILLO PANTHÈRE CARTIER.jpg', 120, 'img/productos/ANILLO PANTHÈRE CARTIER.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(12, 'Anillo love 3 diamantes.jpg', 320, 'img/productos/Anillo love 3 diamantes.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(13, 'COLLAR RÉFLECTION DE CARTIER.jpg', 120, 'img/productos/COLLAR RÉFLECTION DE CARTIER.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(14, 'Pendientes caresse d\'orchidées par cartier.jpg', 320, 'img/productos/Pendientes caresse d\'orchidées par cartier.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/'),
(15, 'COLLAR AMULETTE DE CARTIER XS.jpg', 120, 'img/productos/COLLAR AMULETTE DE CARTIER XS.jpg', 'c:/xampp/htdocs/tienda_joyas/img/productos/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `idPagos` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `item_price_currency` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `idVentas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `costoProd` int(15) NOT NULL,
  `precioProd` int(15) NOT NULL,
  `descripcionProd` text COLLATE utf8_unicode_ci NOT NULL,
  `existenciaProd` int(20) NOT NULL,
  `marcaProd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `materialProducto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tipoPersona` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `oferta` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `idCategoriaProducto` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProd`, `costoProd`, `precioProd`, `descripcionProd`, `existenciaProd`, `marcaProd`, `materialProducto`, `tipoPersona`, `oferta`, `idCategoriaProducto`, `idProveedor`) VALUES
(1, 'Anillo Thanos', 5000, 6000, 'Anillos 5k, es el mejor regalo para ilusionar a su amante.', 50, 'Nisterloy', 'Oro', 'Hombre', 'Si', 1, 1),
(2, 'Amuleto Plata', 500, 1000, 'Este amuleto la hace ver espectacular además es de la suerte y atrae el dinero en dólares.', 10, 'Amulchaman', 'Plata', 'Mujer', 'Si', 2, 2),
(3, 'Aretes Oro', 14135, 21500, 'Aretes de oro 24k con 23 puntos de diamante y 32 puntos de zafiro.\r\n\r\n', 5, 'Amulchaman', 'Oro Amarillo', 'Mujer', 'si', 3, 1),
(4, 'Collar Corazón abierto', 1500, 3250, 'La cadena larga lo hace ideal para combinar con otras piezas y los detalles de cuentas añaden una textura extra a tu look. Úselo para mostrar su historia o regálelo a alguien que le importa.', 10, 'Nisterloy', 'Pandora Plata', 'Mujer', 'No', 2, 1),
(5, 'Anillo Corona deslumbrante transparente', 2100, 2600, 'Un anillo muy adecuado para la princesa o reina especial de tu vida, se puede combinar con casi todas las demás opciones de la colección Pandora para un estilo verdaderamente real.', 16, 'Pandora', 'Plata', 'Mujer', 'No', 1, 2),
(6, ' Amuleto Shell Blanco', 1600, 2645, 'Este bonito amuleto tiene un brillante diseño. Un único cristal tallado de gran tamaño cuelga de una cadena bañada en tono oro, y refracta y refleja la luz que recibe. Una pieza única, que llamará la atención, y una bonita idea para regalar, esta pieza de bisutería es perfecta para estilismos elegantes y festivos.', 38, 'Swarovski ', 'Oro Blanco', 'Mujer', 'Si', 2, 2),
(7, 'ARETES CHANDELIER PALACE, AZUL, BAÑO DE RODIO', 3100, 4500, 'Añade un toque de glamour vintage atemporal a tu look para ocasiones especiales con estos exuberantes aretes de araña. Este diseño largo en cascada es una explosión de color, y muestra sus piezas centrales en majestuoso azul de una bonita forma, resaltadas por formas florales abstractas hechas con suntuosas piedras. Elegantes y exuberantes, están expertamente elaborados con mucho brillo. Artículos a juego disponibles.', 58, 'CHANDELIER ', 'Rodio', 'Mujer', 'Si', 3, 2),
(8, 'ARETES BELLA, DORADO, BAÑO DE ORO', 1500, 2100, 'De este par de Aretes chapados en oro irradian cálidas tonalidades color miel. Audaz y bello, el cristal Golden Shadow de engaste biselado conjura una sensación de encanto y brillantez a su alrededor. ¡Dé vida a la elegancia clásica con un destello dorado que nunca pasa de moda! Diámetro del cristal: 1,4 cm.', 17, 'BELLA', 'Baño de oro', 'Mujer', 'Si', 3, 2),
(9, 'Anillo de serpiente en plata de ley con piedras ne', 3500, 1700, 'La serpiente es un poderoso símbolo que representa la fertilidad o una fuerza vital creativa. A medida que las serpientes pierden su piel a través de desprendimiento, son símbolos de renacimiento, transformación, inmortalidad y curación. Use este anillo de serpiente de piedra negra con ojos de piedra roja en su dedo y tome el poder de comenzar una nueva vida.', 38, 'Gnoce ', 'Plata', 'Mujer', 'Si', 1, 1),
(10, 'ANILLO PANTHÈRE DE CARTIER', 277000, 277000, 'Anillo Panthère de Cartier, oro amarillo de 18 quilates, laca negra. Granates tsavoritas, ónix.', 3, 'Cartier', 'ORO AMARILLO, LACA, ', 'Hombre', 'No', 1, 1),
(11, 'Anillo panthère de cartier', 150000, 159000, 'Anillo Panthère de Cartier, oro blanco de 18 quilates, granates tsavoritas, ónix', 2, 'Cartier', 'Oro Blanco', 'Hombre', 'No', 1, 2),
(12, 'Anillo love 3 diamantes', 80000, 86000, 'Anillo LOVE, oro amarillo de 18 quilates, engastado con tres diamantes talla brillante con un total de 0,22 quilates. Ancho: 5,5 mm.', 2, 'Cartier', 'Oro amarillo', 'Hombre', 'No', 1, 2),
(13, 'Collar réflection de cartier', 270000, 28000, 'Collar Réflection de Cartier, oro blanco de 18 quilates, engastado con un diamante talla troidia, un diamante talla princesa y cinco diamantes talla baguette con un total de 0,81 quilates.', 1, 'Cartier', 'Oro Blanco', 'Mujer', 'No', 2, 2),
(14, 'Pendientes caresse d orchidées par cartier', 65000, 77000, 'Pendientes Caresse d Orchidées par Cartier, modelo pequeño, oro rosa de 18 quilates, cada uno engastado con un diamante talla brillante con un total de 0,01 quilate.', 4, 'Cartier', 'Oro Rosa', 'Mujer', 'No', 3, 2),
(15, 'Collar amulette de cartier xs', 80000, 83000, 'Collar Amulette de Cartier, modelo XS, oro rosa de 18 quilates, ónix, nácar blanco, engastado con 2 diamantes talla brillante con un total de 0,05 quilates. Diámetro de los motivos: 12 mm. Cadena ajustable.', 4, 'Cartier', 'Oro Rosa', 'Mujer', 'No', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosimg`
--

CREATE TABLE `productosimg` (
  `idProducto` int(11) NOT NULL,
  `idImagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productosimg`
--

INSERT INTO `productosimg` (`idProducto`, `idImagen`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(11) NOT NULL,
  `nombreProv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombreProv`, `pais`, `telefono`, `fax`, `email`) VALUES
(1, 'Marcos Huerta Jimenez', 'Chile', '5891634780', '313414515', 'marquitosAnillos@gmail.com'),
(2, 'Julian Sao Dasilva', 'Brasil', '6987316540', '313414516', 'juliancitoAmuletos@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE `rolusuario` (
  `idRolUsuario` int(11) NOT NULL,
  `nombreRol` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rolusuario`
--

INSERT INTO `rolusuario` (`idRolUsuario`, `nombreRol`) VALUES
(1, 'Super Administrador'),
(2, 'Almacenista'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUs` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `emailUs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefonoUs` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contrasenaUs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fotoUs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` int(5) NOT NULL,
  `idDireccion` int(11) NOT NULL,
  `idCreditCards` int(11) NOT NULL,
  `idRolUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUs`, `emailUs`, `telefonoUs`, `contrasenaUs`, `fotoUs`, `estatus`, `idDireccion`, `idCreditCards`, `idRolUsuario`) VALUES
(1, 'Everaldo', 'aldo123@gmail.com', '1234567890', 'aldo123', 'user1.jpg', 1, 1, 1, 1),
(2, 'Jesus', 'matuzalen@gmail.com', '7863210598', 'matus321', 'user2.jpg', 1, 2, 2, 3),
(3, 'Sergio', 'sergioelbailador@gamail.com', '6578123049', 'checoPerez345', 'user3.jpg', 1, 2, 2, 3),
(4, 'Arturo', 'leopardito7u7@gmail.com', '4780319852', 'artur956', 'user4.jpg', 1, 2, 1, 3),
(5, 'Sergio', 'sergioelbailador@gamail.com', '6578123049', 'checoPerez345', 'user3.jpg', 1, 2, 2, 3),
(6, 'Arturo', 'leopardito7u7@gmail.com', '4780319852', 'artur956', 'user4.jpg', 1, 2, 1, 3),
(8, 'luis', 'ayuwoki@gmail.com', '75642310598', 'china894', 'user5.jpg', 1, 1, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVentas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVentas`, `fecha`, `idUsuario`) VALUES
(1, '2021-02-08', 2),
(2, '2021-02-09', 2),
(3, '2021-02-09', 6),
(4, '2021-02-09', 3),
(5, '2021-02-09', 6),
(6, '2021-02-09', 3),
(18, '2021-02-10', 6),
(19, '2021-02-10', 2),
(20, '2021-02-10', 8),
(21, '2021-02-10', 5),
(22, '2021-02-10', 3),
(23, '2021-02-11', 4),
(24, '2021-02-11', 6),
(25, '2021-02-11', 2),
(26, '2021-02-11', 2),
(27, '2021-02-11', 5),
(33, '2021-02-12', 8),
(34, '2021-02-12', 6),
(35, '2021-02-12', 8),
(36, '2021-02-12', 6),
(43, '2021-02-12', 2),
(44, '2021-02-08', 2),
(45, '2021-02-08', 3),
(46, '2021-02-08', 4),
(47, '2021-02-08', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoriaproducto`
--
ALTER TABLE `categoriaproducto`
  ADD PRIMARY KEY (`idCategoriaProducto`);

--
-- Indices de la tabla `creditcards`
--
ALTER TABLE `creditcards`
  ADD PRIMARY KEY (`idCreditCards`);

--
-- Indices de la tabla `detallesventas`
--
ALTER TABLE `detallesventas`
  ADD PRIMARY KEY (`idDetallesVentas`),
  ADD KEY `idVentas` (`idVentas`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idDireccion`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idPagos`),
  ADD KEY `idVentas` (`idVentas`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idCategoriaProducto` (`idCategoriaProducto`,`idProveedor`),
  ADD KEY `idProveedor` (`idProveedor`);

--
-- Indices de la tabla `productosimg`
--
ALTER TABLE `productosimg`
  ADD KEY `idProducto` (`idProducto`,`idImagen`),
  ADD KEY `idImagen` (`idImagen`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  ADD PRIMARY KEY (`idRolUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idDireccion` (`idDireccion`,`idCreditCards`,`idRolUsuario`),
  ADD KEY `idRolUsuario` (`idRolUsuario`),
  ADD KEY `idCreditCards` (`idCreditCards`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVentas`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoriaproducto`
--
ALTER TABLE `categoriaproducto`
  MODIFY `idCategoriaProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `creditcards`
--
ALTER TABLE `creditcards`
  MODIFY `idCreditCards` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detallesventas`
--
ALTER TABLE `detallesventas`
  MODIFY `idDetallesVentas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `idDireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `idPagos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  MODIFY `idRolUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVentas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesventas`
--
ALTER TABLE `detallesventas`
  ADD CONSTRAINT `detallesventas_ibfk_1` FOREIGN KEY (`idVentas`) REFERENCES `ventas` (`idVentas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detallesventas_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`idVentas`) REFERENCES `ventas` (`idVentas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idCategoriaProducto`) REFERENCES `categoriaproducto` (`idCategoriaProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productosimg`
--
ALTER TABLE `productosimg`
  ADD CONSTRAINT `productosimg_ibfk_1` FOREIGN KEY (`idImagen`) REFERENCES `imagenes` (`idImagen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productosimg_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idDireccion`) REFERENCES `direccion` (`idDireccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idRolUsuario`) REFERENCES `rolusuario` (`idRolUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`idCreditCards`) REFERENCES `creditcards` (`idCreditCards`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
