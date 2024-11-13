-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 02:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_requests`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_requests`
--

CREATE TABLE `contact_requests` (
  `id` int(11) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_requests`
--

INSERT INTO `contact_requests` (`id`, `service_type`, `request_date`) VALUES
(3, 'Servicio de prueba', '2024-10-30 05:43:23'),
(5, 'Mantenimiento preventivo para hardware', '2024-10-30 05:55:01'),
(6, 'Mantenimiento preventivo para hardware', '2024-10-30 05:55:11'),
(7, 'Mantenimiento preventivo para hardware', '2024-10-30 05:58:16'),
(8, 'Mantenimiento preventivo para hardware', '2024-10-30 05:59:04'),
(9, 'Instalación y configuración de equipos', '2024-10-30 06:25:43'),
(10, 'Soporte Personalizado', '2024-10-30 06:25:53'),
(11, 'Mantenimiento predictivo para hardware', '2024-10-30 06:26:03'),
(12, 'Mantenimiento predictivo para software', '2024-10-30 06:26:11'),
(13, 'Mantenimiento predictivo para hardware', '2024-10-30 06:26:26'),
(14, 'Mantenimiento correctivo para software', '2024-10-30 06:26:43'),
(15, 'Mantenimiento correctivo para hardware', '2024-10-30 06:26:50'),
(16, 'Mantenimiento preventivo para software', '2024-10-30 06:27:00'),
(17, 'Instalación y configuración de equipos', '2024-10-30 08:14:28'),
(18, 'Creación de Manuales', '2024-10-30 03:27:15'),
(19, 'Creación de Manuales', '2024-10-30 03:28:10'),
(20, 'Creación de Manuales', '2024-10-30 03:29:15'),
(21, 'Mantenimiento correctivo para software', '2024-11-02 04:40:41'),
(22, 'Mantenimiento preventivo para hardware', '2024-11-02 04:40:55'),
(23, 'Creación de Manuales', '2024-11-01 22:41:10'),
(24, 'Creación de Manuales', '2024-11-13 01:14:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_requests`
--
ALTER TABLE `contact_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_requests`
--
ALTER TABLE `contact_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
