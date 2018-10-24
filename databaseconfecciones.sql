-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2018 a las 01:07:22
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `databaseconfecciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `nombre`, `link`) VALUES
('1', 'Inicio', 'cProductos'),
('2', 'Permisos', 'Permisos'),
('3', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` varchar(100) NOT NULL,
  `menu_id` varchar(100) NOT NULL,
  `rol_id` varchar(100) NOT NULL,
  `leer` int(11) NOT NULL,
  `insertar` int(11) NOT NULL,
  `actualizar` int(11) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `menu_id`, `rol_id`, `leer`, `insertar`, `actualizar`, `eliminar`) VALUES
('01c078dd-d4a0-11e8-9034-00ff140ddd6d', '3', '3405d69d-cf2e-11e8-af9c-00ff140ddd6d', 1, 1, 1, 1),
('09912907-d498-11e8-9034-00ff140ddd6d', '3', '8aa9fae3-cf2e-11e8-af9c-00ff140ddd6d', 1, 0, 0, 0),
('1c66f06c-d498-11e8-9034-00ff140ddd6d', '2', '8aa9fae3-cf2e-11e8-af9c-00ff140ddd6d', 1, 0, 0, 0),
('227327f3-d498-11e8-9034-00ff140ddd6d', '1', '8aa9fae3-cf2e-11e8-af9c-00ff140ddd6d', 0, 0, 0, 0),
('688f88a4-d0b2-11e8-af46-00ff140ddd6d', '1', '3405d69d-cf2e-11e8-af9c-00ff140ddd6d', 1, 1, 1, 1),
('f67ae0fe-d49f-11e8-9034-00ff140ddd6d', '2', '3405d69d-cf2e-11e8-af9c-00ff140ddd6d', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` varchar(100) NOT NULL,
  `nombre_rol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
('3405d69d-cf2e-11e8-af9c-00ff140ddd6d', 'Admin'),
('8aa21d70-cf2e-11e8-af9c-00ff140ddd6d', 'Usuario Normal'),
('8aa9fae3-cf2e-11e8-af9c-00ff140ddd6d', 'Supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcliente`
--

CREATE TABLE `tblcliente` (
  `CodPrenda` int(11) NOT NULL,
  `Cobros` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcontactenos`
--

CREATE TABLE `tblcontactenos` (
  `Nombre` varchar(30) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  `Mensaje` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcontactenos`
--

INSERT INTO `tblcontactenos` (`Nombre`, `Correo`, `Mensaje`) VALUES
('sad', 'sad', 'sadwda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblempleado`
--

CREATE TABLE `tblempleado` (
  `PagoNomina` int(11) NOT NULL,
  `Prestamos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblnomina`
--

CREATE TABLE `tblnomina` (
  `Nomina` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `PagoNomina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpersona`
--

CREATE TABLE `tblpersona` (
  `Idpersona` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprenda`
--

CREATE TABLE `tblprenda` (
  `IdPrenda` int(11) NOT NULL,
  `CodParte` int(11) NOT NULL,
  `Fechaingreso` date NOT NULL,
  `Fechasalida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproduc`
--

CREATE TABLE `tblproduc` (
  `Id_Prenda` varchar(50) NOT NULL,
  `Cod_Ref` varchar(20) NOT NULL,
  `Nom_Prenda` varchar(30) NOT NULL,
  `Val_Confecc` int(11) NOT NULL,
  `Val_Venta` int(11) NOT NULL,
  `eliminado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblproduc`
--

INSERT INTO `tblproduc` (`Id_Prenda`, `Cod_Ref`, `Nom_Prenda`, `Val_Confecc`, `Val_Venta`, `eliminado`) VALUES
('001', '12341', 'Camisa', 15000, 28000, '0'),
('002', '54632', 'Pantalón Tela', 13500, 27000, '0'),
('003', '44232', 'Blue Jean', 17000, 55000, '0'),
('004', '3131', 'Camiseta', 13000, 30000, '0'),
('20634131-c9d5-11e8-9144-00ff140ddd6d', '342', 'Prueba', 50000, 24555, '0'),
('249e6858-c9d9-11e8-9144-00ff140ddd6d', '453', 'Prueba 4', 2232, 2312, '0'),
('433dead8-c9d9-11e8-9144-00ff140ddd6d', '34234', 'Prueba5', 213, 213, '0'),
('602070c5-c9d8-11e8-9144-00ff140ddd6d', '1234', 'Prueba3', 23, 21312, '0'),
('8aea486f-ca67-11e8-90a8-00ff140ddd6d', '2312', 'PruebaOtravez1.1', 2323, 343232, '1'),
('8aeea716-c9d8-11e8-9144-00ff140ddd6d', '1234', 'Prueba3', 23, 21312, '0'),
('c104cde3-c9d8-11e8-9144-00ff140ddd6d', '1234', 'Prueba3', 23, 21312, '0'),
('f940e024-c9d7-11e8-9144-00ff140ddd6d', '1233', 'Prueba24', 3434, 21312, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblreportes`
--

CREATE TABLE `tblreportes` (
  `Reporte` varchar(30) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `TotalXSemana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbluser`
--

CREATE TABLE `tbluser` (
  `Id_User` varchar(20) NOT NULL,
  `Pass_User` varchar(20) NOT NULL,
  `Email_User` varchar(100) NOT NULL,
  `Phone_User` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbluser`
--

INSERT INTO `tbluser` (`Id_User`, `Pass_User`, `Email_User`, `Phone_User`) VALUES
('001', '123', 'juanrojax', '4445522');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `idrol` varchar(100) NOT NULL,
  `eliminado` varchar(10) NOT NULL,
  `Nom_Completo` varchar(100) NOT NULL,
  `Correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `rol`, `idrol`, `eliminado`, `Nom_Completo`, `Correo`) VALUES
('e06f1a52-cf39-11e8-af9c-00ff140ddd6d', 'Pruebao', '123', 'Supervisor', '8aa9fae3-cf2e-11e8-af9c-00ff140ddd6d', '0', 'Prueba Otravez', 'Prueba@ho.com'),
('f49cd6ab-d4ba-11e8-9034-00ff140ddd6d', 'juanrojax', '123', 'Admin', '3405d69d-cf2e-11e8-af9c-00ff140ddd6d', '0', 'Juan Diego Rojas Valencia', 'juanrojax05@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`CodPrenda`);

--
-- Indices de la tabla `tblempleado`
--
ALTER TABLE `tblempleado`
  ADD PRIMARY KEY (`PagoNomina`);

--
-- Indices de la tabla `tblnomina`
--
ALTER TABLE `tblnomina`
  ADD PRIMARY KEY (`Nomina`);

--
-- Indices de la tabla `tblpersona`
--
ALTER TABLE `tblpersona`
  ADD PRIMARY KEY (`Idpersona`);

--
-- Indices de la tabla `tblprenda`
--
ALTER TABLE `tblprenda`
  ADD PRIMARY KEY (`IdPrenda`);

--
-- Indices de la tabla `tblproduc`
--
ALTER TABLE `tblproduc`
  ADD PRIMARY KEY (`Id_Prenda`);

--
-- Indices de la tabla `tblreportes`
--
ALTER TABLE `tblreportes`
  ADD PRIMARY KEY (`Reporte`);

--
-- Indices de la tabla `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id_User`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrol` (`idrol`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
