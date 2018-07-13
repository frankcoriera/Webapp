-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2015 at 06:30 PM
-- Server version: 5.6.23
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `registroClientes` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `f_nacimiento` date NOT NULL,
  `cedula` int(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
    PRIMARY KEY (cedula)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `registroEstaciones` (
  `nombre` varchar(30) NOT NULL,
  `CantidadBicicletas` int(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `servicios` varchar(120) NOT NULL COMMENT 'PRESTAMOS,TOURS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `UsuariosContraseñas` (
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `cedula` int(10) NOT NULL,
  FOREIGN KEY (cedula) REFERENCES RegistroClientes(cedula)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `atenciones_medicas`
--
