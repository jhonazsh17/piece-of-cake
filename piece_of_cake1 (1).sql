-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2019 a las 19:07:51
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piece_of_cake1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_question` int(11) NOT NULL COMMENT 'foreign key of question table',
  `answer_description` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `order_in_option` int(2) DEFAULT NULL,
  `id_user_support` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `answers`
--

INSERT INTO `answers` (`id`, `id_question`, `answer_description`, `order_in_option`, `id_user_support`, `created_at`, `updated_at`) VALUES
(187, 13, 'Harry collects cigarettes for selling.', 5, 15, '2019-09-02 16:44:44', '2019-09-02 16:44:44'),
(188, 9, 'The group plays rock music.', 2, 41, '2019-09-02 16:50:39', '2019-09-02 16:50:39'),
(189, 10, 'Geography Professor / State University.', 4, 41, '2019-09-02 16:50:39', '2019-09-02 16:50:39'),
(190, 11, 'Professor Barry Jameson', 4, 41, '2019-09-02 16:50:39', '2019-09-02 16:50:39'),
(191, 12, '\"The Institute of Music\" is the name of rock band.', 3, 41, '2019-09-02 16:50:39', '2019-09-02 16:50:39'),
(192, 9, 'The group plays rock music.', 2, 52, '2019-09-02 16:50:47', '2019-09-02 16:50:47'),
(193, 10, 'Geography Professor / State University.', 4, 52, '2019-09-02 16:50:47', '2019-09-02 16:50:47'),
(194, 11, 'Professor Barry Jameson', 4, 52, '2019-09-02 16:50:47', '2019-09-02 16:50:47'),
(195, 12, '\"The Institute of Music\" is the name of rock band.', 3, 52, '2019-09-02 16:50:47', '2019-09-02 16:50:47'),
(196, 9, 'The group plays rock music.', 2, 42, '2019-09-02 16:51:23', '2019-09-02 16:51:23'),
(197, 10, 'Geography Professor / State University.', 4, 42, '2019-09-02 16:51:24', '2019-09-02 16:51:24'),
(198, 11, 'Professor Barry Jameson', 4, 42, '2019-09-02 16:51:24', '2019-09-02 16:51:24'),
(199, 12, '\"The Institute of Music\" is the name of rock band.', 3, 42, '2019-09-02 16:51:24', '2019-09-02 16:51:24'),
(200, 13, 'Harry Morgan is a garbage seller.', 2, 59, '2019-09-02 16:51:39', '2019-09-02 16:51:39'),
(201, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 59, '2019-09-02 16:51:39', '2019-09-02 16:51:39'),
(202, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 59, '2019-09-02 16:51:39', '2019-09-02 16:51:39'),
(203, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 59, '2019-09-02 16:51:39', '2019-09-02 16:51:39'),
(204, 17, 'Newspaper.', 5, 59, '2019-09-02 16:51:39', '2019-09-02 16:51:39'),
(205, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 59, '2019-09-02 16:51:39', '2019-09-02 16:51:39'),
(206, 13, 'Harry recycle garbage and he creates works of art.', 3, 61, '2019-09-02 16:58:06', '2019-09-02 16:58:06'),
(207, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 61, '2019-09-02 16:58:06', '2019-09-02 16:58:06'),
(208, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 61, '2019-09-02 16:58:06', '2019-09-02 16:58:06'),
(209, 16, '\"Harmony\" / empty cigarette boxes.', 1, 61, '2019-09-02 16:58:06', '2019-09-02 16:58:06'),
(210, 17, 'Newspaper.', 5, 61, '2019-09-02 16:58:06', '2019-09-02 16:58:06'),
(211, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 61, '2019-09-02 16:58:07', '2019-09-02 16:58:07'),
(212, 13, 'Harry recycle garbage and he creates works of art.', 3, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(213, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(214, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(215, 16, '\"Love in the Harmony\" / boxes.', 4, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(216, 17, 'WastePaper.', 4, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(217, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(218, 13, 'Harry recycle garbage and he creates works of art.', 3, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(219, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(220, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(221, 16, '\"Love in the Harmony\" / boxes.', 4, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(222, 17, 'WastePaper.', 4, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(223, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 50, '2019-09-02 16:58:27', '2019-09-02 16:58:27'),
(224, 13, 'Harry recycle garbage and he creates works of art.', 3, 14, '2019-09-02 17:02:22', '2019-09-02 17:02:22'),
(225, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 14, '2019-09-02 17:02:22', '2019-09-02 17:02:22'),
(226, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 14, '2019-09-02 17:02:22', '2019-09-02 17:02:22'),
(227, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 14, '2019-09-02 17:02:22', '2019-09-02 17:02:22'),
(228, 17, 'Garbage.', 1, 14, '2019-09-02 17:02:22', '2019-09-02 17:02:22'),
(229, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 14, '2019-09-02 17:02:22', '2019-09-02 17:02:22'),
(230, 13, 'Harry recycle garbage and he creates works of art.', 3, 45, '2019-09-02 17:02:28', '2019-09-02 17:02:28'),
(231, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', 3, 45, '2019-09-02 17:02:29', '2019-09-02 17:02:29'),
(232, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 45, '2019-09-02 17:02:29', '2019-09-02 17:02:29'),
(233, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 45, '2019-09-02 17:02:29', '2019-09-02 17:02:29'),
(234, 17, 'Boxes.', 3, 45, '2019-09-02 17:02:29', '2019-09-02 17:02:29'),
(235, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 45, '2019-09-02 17:02:29', '2019-09-02 17:02:29'),
(236, 13, 'Harry recycle garbage and he creates works of art.', 3, 15, '2019-09-02 17:02:40', '2019-09-02 17:02:40'),
(237, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 15, '2019-09-02 17:02:40', '2019-09-02 17:02:40'),
(238, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 15, '2019-09-02 17:02:40', '2019-09-02 17:02:40'),
(239, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 15, '2019-09-02 17:02:40', '2019-09-02 17:02:40'),
(240, 17, 'WastePaper.', 4, 15, '2019-09-02 17:02:40', '2019-09-02 17:02:40'),
(241, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 15, '2019-09-02 17:02:40', '2019-09-02 17:02:40'),
(242, 13, 'Harry recycle garbage and he creates works of art.', 3, 45, '2019-09-02 17:04:24', '2019-09-02 17:04:24'),
(243, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', 3, 45, '2019-09-02 17:04:25', '2019-09-02 17:04:25'),
(244, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 45, '2019-09-02 17:04:25', '2019-09-02 17:04:25'),
(245, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 45, '2019-09-02 17:04:25', '2019-09-02 17:04:25'),
(246, 17, 'Garbage.', 1, 45, '2019-09-02 17:04:25', '2019-09-02 17:04:25'),
(247, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 45, '2019-09-02 17:04:25', '2019-09-02 17:04:25'),
(248, 13, 'Harry recycle garbage and he creates works of art.', 3, 41, '2019-09-02 17:06:48', '2019-09-02 17:06:48'),
(249, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 41, '2019-09-02 17:06:48', '2019-09-02 17:06:48'),
(250, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 41, '2019-09-02 17:06:48', '2019-09-02 17:06:48'),
(251, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 41, '2019-09-02 17:06:48', '2019-09-02 17:06:48'),
(252, 17, 'WastePaper.', 4, 41, '2019-09-02 17:06:48', '2019-09-02 17:06:48'),
(253, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 41, '2019-09-02 17:06:48', '2019-09-02 17:06:48'),
(254, 13, 'Harry recycle garbage and he creates works of art.', 3, 52, '2019-09-02 17:06:52', '2019-09-02 17:06:52'),
(255, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 52, '2019-09-02 17:06:52', '2019-09-02 17:06:52'),
(256, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 52, '2019-09-02 17:06:52', '2019-09-02 17:06:52'),
(257, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 52, '2019-09-02 17:06:52', '2019-09-02 17:06:52'),
(258, 17, 'WastePaper.', 4, 52, '2019-09-02 17:06:53', '2019-09-02 17:06:53'),
(259, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 52, '2019-09-02 17:06:53', '2019-09-02 17:06:53'),
(260, 13, 'Harry Morgan is just a recycler.', 1, 36, '2019-09-02 20:15:09', '2019-09-02 20:15:09'),
(261, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', 3, 36, '2019-09-02 20:15:10', '2019-09-02 20:15:10'),
(262, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 36, '2019-09-02 20:15:10', '2019-09-02 20:15:10'),
(263, 16, '\"Harmony\" / empty cigarette boxes.', 1, 36, '2019-09-02 20:15:10', '2019-09-02 20:15:10'),
(264, 17, 'Metals.', 2, 36, '2019-09-02 20:15:10', '2019-09-02 20:15:10'),
(265, 18, 'The Plaza Art Gallery is just one of the Harry\'s works.', 3, 36, '2019-09-02 20:15:10', '2019-09-02 20:15:10'),
(266, 13, 'Harry recycle garbage and he creates works of art.', 3, 38, '2019-09-02 20:16:07', '2019-09-02 20:16:07'),
(267, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 38, '2019-09-02 20:16:07', '2019-09-02 20:16:07'),
(268, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 38, '2019-09-02 20:16:08', '2019-09-02 20:16:08'),
(269, 16, 'Boxes / \"Harmony\"', 5, 38, '2019-09-02 20:16:08', '2019-09-02 20:16:08'),
(270, 17, 'Garbage.', 1, 38, '2019-09-02 20:16:08', '2019-09-02 20:16:08'),
(271, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 38, '2019-09-02 20:16:08', '2019-09-02 20:16:08'),
(272, 13, 'Harry recycle garbage and he creates works of art.', 3, 21, '2019-09-02 20:16:37', '2019-09-02 20:16:37'),
(273, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', 3, 21, '2019-09-02 20:16:38', '2019-09-02 20:16:38'),
(274, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 21, '2019-09-02 20:16:38', '2019-09-02 20:16:38'),
(275, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 21, '2019-09-02 20:16:38', '2019-09-02 20:16:38'),
(276, 17, 'Garbage.', 1, 21, '2019-09-02 20:16:38', '2019-09-02 20:16:38'),
(277, 18, 'Harry Morgan is a person that sells art in Plaza Art Gallery.', 5, 21, '2019-09-02 20:16:38', '2019-09-02 20:16:38'),
(278, 13, 'Harry recycle garbage and he creates works of art.', 3, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(279, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', 3, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(280, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(281, 16, 'Harry\'s latest collection / breakfast cereal boxes.', 2, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(282, 17, 'Boxes.', 3, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(283, 18, 'Harry Morgan is a person that sells art in Plaza Art Gallery.', 5, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(284, 13, 'Harry recycle garbage and he creates works of art.', 3, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(285, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', 3, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(286, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(287, 16, 'Harry\'s latest collection / breakfast cereal boxes.', 2, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(288, 17, 'Boxes.', 3, 27, '2019-09-02 20:16:42', '2019-09-02 20:16:42'),
(289, 18, 'Harry Morgan is a person that sells art in Plaza Art Gallery.', 5, 27, '2019-09-02 20:16:43', '2019-09-02 20:16:43'),
(290, 13, 'Harry recycle garbage and he creates works of art.', 3, 30, '2019-09-02 20:16:59', '2019-09-02 20:16:59'),
(291, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 30, '2019-09-02 20:16:59', '2019-09-02 20:16:59'),
(292, 15, '\"Love in the Morning\" is the title of his favorite book.', 1, 30, '2019-09-02 20:16:59', '2019-09-02 20:16:59'),
(293, 16, 'Harry\'s latest collection / breakfast cereal boxes.', 2, 30, '2019-09-02 20:16:59', '2019-09-02 20:16:59'),
(294, 17, 'Garbage.', 1, 30, '2019-09-02 20:17:00', '2019-09-02 20:17:00'),
(295, 18, 'The Harry\'s works of art is in fan club.', 1, 30, '2019-09-02 20:17:00', '2019-09-02 20:17:00'),
(296, 13, 'Harry recycle garbage and he creates works of art.', 3, 20, '2019-09-02 20:18:24', '2019-09-02 20:18:24'),
(297, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 20, '2019-09-02 20:18:24', '2019-09-02 20:18:24'),
(298, 15, '\"Harmony\" is the name of a song.', 2, 20, '2019-09-02 20:18:24', '2019-09-02 20:18:24'),
(299, 16, 'Boxes / \"Harmony\"', 5, 20, '2019-09-02 20:18:24', '2019-09-02 20:18:24'),
(300, 17, 'Garbage.', 1, 20, '2019-09-02 20:18:24', '2019-09-02 20:18:24'),
(301, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 20, '2019-09-02 20:18:24', '2019-09-02 20:18:24'),
(302, 13, 'Harry collects cigarettes for selling.', 5, 36, '2019-09-02 20:18:41', '2019-09-02 20:18:41'),
(303, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de motocicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 1, 36, '2019-09-02 20:18:41', '2019-09-02 20:18:41'),
(304, 15, '\"Harmony\" is the name of a song.', 2, 36, '2019-09-02 20:18:41', '2019-09-02 20:18:41'),
(305, 16, 'Harry\'s latest collection / breakfast cereal boxes.', 2, 36, '2019-09-02 20:18:41', '2019-09-02 20:18:41'),
(306, 17, 'Newspaper.', 5, 36, '2019-09-02 20:18:41', '2019-09-02 20:18:41'),
(307, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 36, '2019-09-02 20:18:41', '2019-09-02 20:18:41'),
(308, 13, 'Harry recycle garbage and he creates works of art.', 3, 29, '2019-09-02 20:19:20', '2019-09-02 20:19:20'),
(309, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 29, '2019-09-02 20:19:20', '2019-09-02 20:19:20'),
(310, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 29, '2019-09-02 20:19:20', '2019-09-02 20:19:20'),
(311, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 29, '2019-09-02 20:19:20', '2019-09-02 20:19:20'),
(312, 17, 'Garbage.', 1, 29, '2019-09-02 20:19:20', '2019-09-02 20:19:20'),
(313, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 29, '2019-09-02 20:19:20', '2019-09-02 20:19:20'),
(314, 13, 'Harry Morgan is just a recycler.', 1, 32, '2019-09-02 20:19:29', '2019-09-02 20:19:29'),
(315, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', 3, 32, '2019-09-02 20:19:29', '2019-09-02 20:19:29'),
(316, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 32, '2019-09-02 20:19:29', '2019-09-02 20:19:29'),
(317, 16, 'Harry\'s latest collection / breakfast cereal boxes.', 2, 32, '2019-09-02 20:19:30', '2019-09-02 20:19:30'),
(318, 17, 'Garbage.', 1, 32, '2019-09-02 20:19:30', '2019-09-02 20:19:30'),
(319, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 32, '2019-09-02 20:19:30', '2019-09-02 20:19:30'),
(320, 13, 'Harry Morgan is just a recycler.', 1, 22, '2019-09-02 20:19:37', '2019-09-02 20:19:37'),
(321, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 22, '2019-09-02 20:19:37', '2019-09-02 20:19:37'),
(322, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 22, '2019-09-02 20:19:37', '2019-09-02 20:19:37'),
(323, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 22, '2019-09-02 20:19:37', '2019-09-02 20:19:37'),
(324, 17, 'Boxes.', 3, 22, '2019-09-02 20:19:37', '2019-09-02 20:19:37'),
(325, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 22, '2019-09-02 20:19:37', '2019-09-02 20:19:37'),
(326, 13, 'Harry Morgan is just a recycler.', 1, 26, '2019-09-02 20:19:54', '2019-09-02 20:19:54'),
(327, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 26, '2019-09-02 20:19:54', '2019-09-02 20:19:54'),
(328, 15, '\"Love in the Morning\" is the title of his favorite book.', 1, 26, '2019-09-02 20:19:54', '2019-09-02 20:19:54'),
(329, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 26, '2019-09-02 20:19:54', '2019-09-02 20:19:54'),
(330, 17, 'WastePaper.', 4, 26, '2019-09-02 20:19:54', '2019-09-02 20:19:54'),
(331, 18, 'The Harry\'s works of art is in fan club.', 1, 26, '2019-09-02 20:19:54', '2019-09-02 20:19:54'),
(332, 13, 'Harry Morgan is just a recycler.', 1, 18, '2019-09-02 20:19:56', '2019-09-02 20:19:56'),
(333, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 18, '2019-09-02 20:19:56', '2019-09-02 20:19:56'),
(334, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 18, '2019-09-02 20:19:56', '2019-09-02 20:19:56'),
(335, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 18, '2019-09-02 20:19:56', '2019-09-02 20:19:56'),
(336, 17, 'WastePaper.', 4, 18, '2019-09-02 20:19:56', '2019-09-02 20:19:56'),
(337, 18, 'Harry Morgan is a person that sells art in Plaza Art Gallery.', 5, 18, '2019-09-02 20:19:56', '2019-09-02 20:19:56'),
(338, 13, 'Harry recycle garbage and he creates works of art.', 3, 34, '2019-09-02 20:20:06', '2019-09-02 20:20:06'),
(339, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de motocicletas, maquinas nuevas, e incluso maquinaria agrícola nueva.', 4, 34, '2019-09-02 20:20:06', '2019-09-02 20:20:06'),
(340, 15, '\"Harmony\" is the name of a song.', 2, 34, '2019-09-02 20:20:06', '2019-09-02 20:20:06'),
(341, 16, '\"Love in the Harmony\" / boxes.', 4, 34, '2019-09-02 20:20:06', '2019-09-02 20:20:06'),
(342, 17, 'Newspaper.', 5, 34, '2019-09-02 20:20:06', '2019-09-02 20:20:06'),
(343, 18, 'The Plaza Art Gallery is just one of the Harry\'s works.', 3, 34, '2019-09-02 20:20:07', '2019-09-02 20:20:07'),
(344, 13, 'Harry Morgan is just a recycler.', 1, 64, '2019-09-02 20:20:16', '2019-09-02 20:20:16'),
(345, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 64, '2019-09-02 20:20:16', '2019-09-02 20:20:16'),
(346, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 64, '2019-09-02 20:20:16', '2019-09-02 20:20:16'),
(347, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 64, '2019-09-02 20:20:16', '2019-09-02 20:20:16'),
(348, 17, 'WastePaper.', 4, 64, '2019-09-02 20:20:16', '2019-09-02 20:20:16'),
(349, 18, 'Harry Morgan is a person that sells art in Plaza Art Gallery.', 5, 64, '2019-09-02 20:20:16', '2019-09-02 20:20:16'),
(350, 13, 'Harry Morgan is a garbage seller.', 2, 36, '2019-09-02 20:21:39', '2019-09-02 20:21:39'),
(351, 13, 'Harry recycle garbage and he creates works of art.', 3, 28, '2019-09-02 20:25:03', '2019-09-02 20:25:03'),
(352, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', 3, 28, '2019-09-02 20:25:03', '2019-09-02 20:25:03'),
(353, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 28, '2019-09-02 20:25:03', '2019-09-02 20:25:03'),
(354, 16, 'Harry\'s latest collection / breakfast cereal boxes.', 2, 28, '2019-09-02 20:25:03', '2019-09-02 20:25:03'),
(355, 17, 'WastePaper.', 4, 28, '2019-09-02 20:25:03', '2019-09-02 20:25:03'),
(356, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 28, '2019-09-02 20:25:03', '2019-09-02 20:25:03'),
(357, 13, 'Harry recycle garbage and he creates works of art.', 3, 60, '2019-09-02 20:25:31', '2019-09-02 20:25:31'),
(358, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 60, '2019-09-02 20:25:32', '2019-09-02 20:25:32'),
(359, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 60, '2019-09-02 20:25:32', '2019-09-02 20:25:32'),
(360, 16, '\"Love in the Harmony\" / boxes.', 4, 60, '2019-09-02 20:25:32', '2019-09-02 20:25:32'),
(361, 17, 'Metals.', 2, 60, '2019-09-02 20:25:32', '2019-09-02 20:25:32'),
(362, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 60, '2019-09-02 20:25:32', '2019-09-02 20:25:32'),
(363, 13, 'Harry recycle garbage and he creates works of art.', 3, 37, '2019-09-02 20:26:06', '2019-09-02 20:26:06'),
(364, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 37, '2019-09-02 20:26:06', '2019-09-02 20:26:06'),
(365, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 37, '2019-09-02 20:26:06', '2019-09-02 20:26:06'),
(366, 16, '\"Love in the Harmony\" / boxes.', 4, 37, '2019-09-02 20:26:06', '2019-09-02 20:26:06'),
(367, 17, 'WastePaper.', 4, 37, '2019-09-02 20:26:06', '2019-09-02 20:26:06'),
(368, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 37, '2019-09-02 20:26:06', '2019-09-02 20:26:06'),
(369, 13, 'Harry Morgan is just a recycler.', 1, 23, '2019-09-02 20:28:11', '2019-09-02 20:28:11'),
(370, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 23, '2019-09-02 20:28:11', '2019-09-02 20:28:11'),
(371, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 23, '2019-09-02 20:28:11', '2019-09-02 20:28:11'),
(372, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 23, '2019-09-02 20:28:11', '2019-09-02 20:28:11'),
(373, 17, 'WastePaper.', 4, 23, '2019-09-02 20:28:11', '2019-09-02 20:28:11'),
(374, 18, 'Harry Morgan is a person that sells art in Plaza Art Gallery.', 5, 23, '2019-09-02 20:28:11', '2019-09-02 20:28:11'),
(375, 13, 'Harry Morgan is just a recycler.', 1, 51, '2019-09-04 20:09:16', '2019-09-04 20:09:16'),
(376, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de motocicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 1, 51, '2019-09-04 20:09:16', '2019-09-04 20:09:16'),
(377, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 51, '2019-09-04 20:09:16', '2019-09-04 20:09:16'),
(378, 16, '\"Love in the Harmony\" / boxes.', 4, 51, '2019-09-04 20:09:16', '2019-09-04 20:09:16'),
(379, 17, 'Garbage.', 1, 51, '2019-09-04 20:09:16', '2019-09-04 20:09:16'),
(380, 18, 'The Harry\'s works of art is in fan club.', 1, 51, '2019-09-04 20:09:17', '2019-09-04 20:09:17'),
(381, 13, 'Harry recycle garbage and he creates works of art.', 3, 40, '2019-09-04 20:11:28', '2019-09-04 20:11:28'),
(382, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 40, '2019-09-04 20:11:28', '2019-09-04 20:11:28'),
(383, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 40, '2019-09-04 20:11:28', '2019-09-04 20:11:28'),
(384, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 40, '2019-09-04 20:11:29', '2019-09-04 20:11:29'),
(385, 17, 'WastePaper.', 4, 40, '2019-09-04 20:11:29', '2019-09-04 20:11:29'),
(386, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 40, '2019-09-04 20:11:29', '2019-09-04 20:11:29'),
(387, 13, 'Harry Morgan is just a recycler.', 1, 54, '2019-09-04 20:17:28', '2019-09-04 20:17:28'),
(388, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 54, '2019-09-04 20:17:28', '2019-09-04 20:17:28'),
(389, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', 4, 54, '2019-09-04 20:17:28', '2019-09-04 20:17:28'),
(390, 16, '\"Love in the Harmony\" / boxes.', 4, 54, '2019-09-04 20:17:28', '2019-09-04 20:17:28'),
(391, 17, 'Newspaper.', 5, 54, '2019-09-04 20:17:28', '2019-09-04 20:17:28'),
(392, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 54, '2019-09-04 20:17:28', '2019-09-04 20:17:28'),
(393, 13, 'Harry recycle garbage and he creates works of art.', 3, 58, '2019-09-09 17:28:05', '2019-09-09 17:28:05'),
(394, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 58, '2019-09-09 17:28:05', '2019-09-09 17:28:05'),
(395, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 58, '2019-09-09 17:28:05', '2019-09-09 17:28:05'),
(396, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 58, '2019-09-09 17:28:05', '2019-09-09 17:28:05'),
(397, 17, 'WastePaper.', 4, 58, '2019-09-09 17:28:06', '2019-09-09 17:28:06'),
(398, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 58, '2019-09-09 17:28:06', '2019-09-09 17:28:06'),
(399, 13, 'Harry recycle garbage and he creates works of art.', 3, 58, '2019-09-09 17:28:06', '2019-09-09 17:28:06'),
(400, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 58, '2019-09-09 17:28:06', '2019-09-09 17:28:06'),
(401, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 58, '2019-09-09 17:28:06', '2019-09-09 17:28:06'),
(402, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 58, '2019-09-09 17:28:06', '2019-09-09 17:28:06'),
(403, 17, 'WastePaper.', 4, 58, '2019-09-09 17:28:06', '2019-09-09 17:28:06'),
(404, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', 2, 58, '2019-09-09 17:28:06', '2019-09-09 17:28:06'),
(405, 13, 'Harry recycle garbage and he creates works of art.', 3, 56, '2019-09-09 17:31:09', '2019-09-09 17:31:09'),
(406, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 56, '2019-09-09 17:31:09', '2019-09-09 17:31:09'),
(407, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 56, '2019-09-09 17:31:09', '2019-09-09 17:31:09'),
(408, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 56, '2019-09-09 17:31:09', '2019-09-09 17:31:09'),
(409, 17, 'WastePaper.', 4, 56, '2019-09-09 17:31:09', '2019-09-09 17:31:09'),
(410, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 56, '2019-09-09 17:31:09', '2019-09-09 17:31:09'),
(411, 13, 'Harry recycle garbage and he creates works of art.', 3, 11, '2019-09-09 17:33:08', '2019-09-09 17:33:08'),
(412, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 11, '2019-09-09 17:33:08', '2019-09-09 17:33:08'),
(413, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 11, '2019-09-09 17:33:08', '2019-09-09 17:33:08'),
(414, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 11, '2019-09-09 17:33:08', '2019-09-09 17:33:08'),
(415, 17, 'WastePaper.', 4, 11, '2019-09-09 17:33:08', '2019-09-09 17:33:08'),
(416, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 11, '2019-09-09 17:33:08', '2019-09-09 17:33:08'),
(417, 13, 'Harry recycle garbage and he creates works of art.', 3, 13, '2019-09-09 17:35:52', '2019-09-09 17:35:52'),
(418, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 13, '2019-09-09 17:35:52', '2019-09-09 17:35:52'),
(419, 15, '\"Harmony\" is one of the Harry\'s latest collection.', 5, 13, '2019-09-09 17:35:53', '2019-09-09 17:35:53'),
(420, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 13, '2019-09-09 17:35:53', '2019-09-09 17:35:53'),
(421, 17, 'WastePaper.', 4, 13, '2019-09-09 17:35:53', '2019-09-09 17:35:53'),
(422, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 13, '2019-09-09 17:35:53', '2019-09-09 17:35:53'),
(423, 13, 'Harry recycle garbage and he creates works of art.', 3, 65, '2019-09-09 17:35:54', '2019-09-09 17:35:54'),
(424, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 65, '2019-09-09 17:35:54', '2019-09-09 17:35:54'),
(425, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 65, '2019-09-09 17:35:54', '2019-09-09 17:35:54'),
(426, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 65, '2019-09-09 17:35:54', '2019-09-09 17:35:54'),
(427, 17, 'WastePaper.', 4, 65, '2019-09-09 17:35:54', '2019-09-09 17:35:54'),
(428, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 65, '2019-09-09 17:35:54', '2019-09-09 17:35:54'),
(429, 13, 'Harry recycle garbage and he creates works of art.', 3, 51, '2019-09-09 17:40:24', '2019-09-09 17:40:24'),
(430, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', 2, 51, '2019-09-09 17:40:24', '2019-09-09 17:40:24'),
(431, 15, '\"Love in the Harmony\" is one of the works of art.', 3, 51, '2019-09-09 17:40:24', '2019-09-09 17:40:24'),
(432, 16, '\"Harmony\" / breakfast cereal boxes.', 3, 51, '2019-09-09 17:40:24', '2019-09-09 17:40:24'),
(433, 17, 'WastePaper.', 4, 51, '2019-09-09 17:40:24', '2019-09-09 17:40:24'),
(434, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', 4, 51, '2019-09-09 17:40:24', '2019-09-09 17:40:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `califications`
--

CREATE TABLE `califications` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_user` int(11) NOT NULL COMMENT 'foreign key of user table',
  `id_evaluation` int(11) NOT NULL COMMENT 'foreign key of evaluation table',
  `estado_evaluation` int(1) DEFAULT NULL,
  `note` int(2) DEFAULT NULL,
  `corrects` int(2) DEFAULT NULL,
  `no_corrects` int(2) DEFAULT NULL,
  `timer` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `califications`
--

INSERT INTO `califications` (`id`, `id_user`, `id_evaluation`, `estado_evaluation`, `note`, `corrects`, `no_corrects`, `timer`, `created_at`, `updated_at`) VALUES
(14, 9, 4, NULL, NULL, NULL, NULL, NULL, '2019-08-16 19:01:08', '2019-08-16 19:01:08'),
(19, 31, 4, 1, 20, 4, 0, NULL, '2019-08-20 19:36:51', '2019-08-20 19:48:09'),
(20, 30, 4, 1, 10, 2, 2, NULL, '2019-08-20 19:37:56', '2019-08-20 19:47:23'),
(21, 32, 4, 1, 15, 3, 1, NULL, '2019-08-20 19:38:00', '2019-08-20 19:46:55'),
(23, 22, 4, 1, 20, 4, 0, NULL, '2019-08-20 19:38:05', '2019-08-20 19:49:06'),
(26, 29, 4, 1, 15, 3, 1, NULL, '2019-08-20 19:38:30', '2019-08-20 19:49:45'),
(27, 17, 4, 1, 10, 2, 2, NULL, '2019-08-20 19:38:50', '2019-08-20 19:47:52'),
(29, 33, 4, 1, 20, 4, 0, NULL, '2019-08-20 19:38:59', '2019-08-20 19:51:31'),
(30, 36, 4, 1, 15, 3, 1, NULL, '2019-08-20 19:39:12', '2019-08-20 19:47:40'),
(32, 35, 4, 1, 5, 1, 3, NULL, '2019-08-20 19:39:25', '2019-08-20 19:52:03'),
(34, 20, 4, 1, 15, 3, 1, NULL, '2019-08-20 19:39:40', '2019-08-20 19:50:49'),
(38, 25, 4, 1, 20, 4, 0, NULL, '2019-08-20 19:40:15', '2019-08-20 19:52:17'),
(39, 19, 4, 1, 5, 1, 3, NULL, '2019-08-20 19:40:26', '2019-08-20 19:47:52'),
(40, 18, 4, 1, 20, 4, 0, NULL, '2019-08-20 19:41:03', '2019-08-20 19:46:40'),
(41, 27, 4, 1, 5, 1, 3, NULL, '2019-08-20 19:41:14', '2019-08-20 19:47:53'),
(43, 21, 4, 1, 10, 2, 2, NULL, '2019-08-20 19:44:35', '2019-08-20 19:49:12'),
(44, 38, 4, 1, 20, 4, 0, NULL, '2019-08-20 19:45:32', '2019-08-20 19:53:10'),
(45, 34, 4, 1, 20, 4, 0, NULL, '2019-08-20 19:52:50', '2019-08-20 19:53:31'),
(47, 28, 4, 1, 20, 4, 0, NULL, '2019-08-21 19:16:26', '2019-08-26 20:15:24'),
(48, 47, 4, 1, 20, 4, 0, NULL, '2019-08-21 20:07:13', '2019-08-21 20:21:01'),
(50, 55, 4, 1, 20, 4, 0, NULL, '2019-08-21 20:07:21', '2019-08-21 20:21:09'),
(52, 49, 4, 1, 15, 3, 1, NULL, '2019-08-21 20:07:44', '2019-08-21 20:20:59'),
(53, 43, 4, 1, 20, 4, 0, NULL, '2019-08-21 20:08:47', '2019-08-21 20:19:08'),
(55, 53, 4, 1, 20, 4, 0, NULL, '2019-08-21 20:08:54', '2019-08-21 20:18:22'),
(56, 58, 4, 1, 15, 3, 1, NULL, '2019-08-21 20:09:29', '2019-08-21 20:15:04'),
(58, 14, 4, 1, 10, 2, 2, NULL, '2019-08-21 20:09:41', '2019-08-21 20:21:33'),
(60, 51, 4, 1, 15, 3, 1, NULL, '2019-08-21 20:09:57', '2019-08-21 20:21:20'),
(61, 45, 4, 1, 20, 4, 0, NULL, '2019-08-21 20:09:59', '2019-08-21 20:22:14'),
(64, 54, 4, 1, 10, 2, 2, NULL, '2019-08-21 20:10:12', '2019-08-21 20:21:31'),
(65, 15, 4, 1, 10, 2, 2, NULL, '2019-08-21 20:10:24', '2019-08-21 20:21:35'),
(67, 48, 4, 1, 20, 4, 0, NULL, '2019-08-21 20:10:33', '2019-08-21 20:18:54'),
(69, 59, 4, 1, 20, 4, 0, NULL, '2019-08-21 20:11:30', '2019-08-21 20:21:11'),
(71, 50, 4, 1, 20, 4, 0, NULL, '2019-08-21 20:11:46', '2019-08-21 20:24:57'),
(72, 46, 4, 1, 10, 2, 2, NULL, '2019-08-21 20:25:43', '2019-08-21 20:26:33'),
(73, 56, 4, 1, 15, 3, 1, NULL, '2019-08-23 16:33:09', '2019-08-23 16:38:03'),
(74, 11, 4, 1, 20, 4, 0, NULL, '2019-08-23 16:33:17', '2019-08-23 16:44:02'),
(75, 44, 4, 1, 20, 4, 0, NULL, '2019-08-23 16:33:26', '2019-08-23 16:37:49'),
(76, 60, 4, 1, 20, 4, 0, NULL, '2019-08-23 16:37:18', '2019-08-23 16:55:19'),
(77, 62, 4, 1, 10, 2, 2, NULL, '2019-08-23 16:37:53', '2019-08-23 16:50:25'),
(78, 26, 4, 1, 20, 4, 0, NULL, '2019-08-23 16:38:18', '2019-08-23 16:51:58'),
(79, 61, 4, 1, 15, 3, 1, NULL, '2019-08-23 16:39:24', '2019-08-23 16:47:07'),
(80, 16, 4, 1, 15, 3, 1, NULL, '2019-08-23 16:42:16', '2019-08-23 16:47:24'),
(81, 63, 4, 1, 5, 1, 3, NULL, '2019-08-23 16:43:15', '2019-08-23 16:54:07'),
(83, 9, 5, NULL, NULL, NULL, NULL, NULL, '2019-08-25 15:54:59', '2019-08-25 15:54:59'),
(106, 49, 5, 1, 13, 4, 2, NULL, '2019-08-26 17:23:06', '2019-08-26 17:45:10'),
(107, 53, 5, 1, 7, 2, 4, NULL, '2019-08-26 17:23:46', '2019-08-26 17:39:03'),
(108, 44, 5, 1, 17, 5, 1, NULL, '2019-08-26 17:24:47', '2019-08-26 17:43:49'),
(109, 47, 5, 1, 20, 6, 0, NULL, '2019-08-26 17:25:38', '2019-08-26 17:43:16'),
(110, 42, 5, 1, 10, 3, 3, NULL, '2019-08-26 17:26:44', '2019-08-26 17:45:40'),
(111, 46, 5, 1, 10, 3, 3, NULL, '2019-08-26 17:26:47', '2019-08-26 17:45:48'),
(113, 43, 5, 1, 13, 4, 2, NULL, '2019-08-26 17:34:09', '2019-08-26 17:45:39'),
(114, 48, 5, 1, 10, 3, 3, NULL, '2019-08-26 17:36:13', '2019-08-26 17:44:15'),
(115, 55, 5, 1, 17, 5, 1, NULL, '2019-08-26 17:44:04', '2019-08-26 17:45:26'),
(116, 37, 4, 1, 20, 4, 0, NULL, '2019-08-26 20:05:04', '2019-08-26 20:14:10'),
(117, 64, 4, 1, 10, 2, 2, NULL, '2019-08-27 19:35:14', '2019-08-27 19:43:06'),
(118, 23, 4, 1, 15, 3, 1, NULL, '2019-08-27 19:35:31', '2019-08-27 19:49:07'),
(119, 40, 4, 1, 10, 2, 2, NULL, '2019-08-28 14:22:27', '2019-08-28 14:26:27'),
(120, 13, 4, 1, 20, 4, 0, NULL, '2019-08-28 14:24:05', '2019-08-28 14:29:11'),
(121, 65, 4, 1, 15, 3, 1, NULL, '2019-08-28 14:26:09', '2019-08-28 14:32:29'),
(127, 27, 5, 1, 3, 1, 5, NULL, '2019-09-01 21:18:25', '2019-09-02 20:16:42'),
(128, 59, 5, 1, 7, 2, 4, NULL, '2019-09-02 16:34:47', '2019-09-02 16:51:39'),
(129, 61, 5, 1, 10, 3, 3, NULL, '2019-09-02 16:35:41', '2019-09-02 16:58:07'),
(130, 50, 5, 1, 13, 4, 2, NULL, '2019-09-02 16:36:46', '2019-09-02 16:58:27'),
(131, 45, 5, 1, 10, 3, 3, NULL, '2019-09-02 16:37:12', '2019-09-02 17:02:29'),
(132, 42, 4, 1, 20, 4, 0, NULL, '2019-09-02 16:37:59', '2019-09-02 16:51:24'),
(133, 41, 4, 1, 20, 4, 0, NULL, '2019-09-02 16:38:28', '2019-09-02 16:50:39'),
(134, 52, 4, 1, 20, 4, 0, NULL, '2019-09-02 16:38:39', '2019-09-02 16:50:47'),
(135, 15, 5, 1, 20, 6, 0, NULL, '2019-09-02 16:38:47', '2019-09-02 17:02:40'),
(136, 14, 5, 1, 13, 4, 2, NULL, '2019-09-02 16:43:40', '2019-09-02 17:02:22'),
(137, 41, 5, 1, 20, 6, 0, NULL, '2019-09-02 16:51:58', '2019-09-02 17:06:48'),
(138, 52, 5, 1, 20, 6, 0, NULL, '2019-09-02 16:52:16', '2019-09-02 17:06:53'),
(139, 9, 6, NULL, NULL, NULL, NULL, NULL, '2019-09-02 18:01:06', '2019-09-02 18:01:06'),
(140, 21, 5, 1, 7, 2, 4, NULL, '2019-09-02 20:06:14', '2019-09-02 20:16:38'),
(141, 28, 5, 1, 10, 3, 3, NULL, '2019-09-02 20:06:36', '2019-09-02 20:25:03'),
(142, 60, 5, 1, 13, 4, 2, NULL, '2019-09-02 20:07:02', '2019-09-02 20:25:32'),
(143, 38, 5, 1, 10, 3, 3, NULL, '2019-09-02 20:07:03', '2019-09-02 20:16:08'),
(144, 34, 5, 1, 3, 1, 5, NULL, '2019-09-02 20:07:13', '2019-09-02 20:20:07'),
(145, 32, 5, 1, 3, 1, 5, NULL, '2019-09-02 20:07:20', '2019-09-02 20:19:30'),
(146, 30, 5, 1, 7, 2, 4, NULL, '2019-09-02 20:07:23', '2019-09-02 20:17:00'),
(147, 29, 5, 1, 10, 3, 3, NULL, '2019-09-02 20:07:42', '2019-09-02 20:19:21'),
(148, 26, 5, 1, 10, 3, 3, NULL, '2019-09-02 20:08:53', '2019-09-02 20:19:55'),
(149, 18, 5, 1, 10, 3, 3, NULL, '2019-09-02 20:09:05', '2019-09-02 20:19:56'),
(150, 36, 5, 1, 0, 0, 6, NULL, '2019-09-02 20:09:06', '2019-09-02 20:15:10'),
(151, 62, 5, 0, 0, 0, 0, NULL, '2019-09-02 20:09:10', '2019-09-02 20:09:10'),
(152, 64, 5, 1, 13, 4, 2, NULL, '2019-09-02 20:09:18', '2019-09-02 20:20:16'),
(153, 37, 5, 1, 17, 5, 1, NULL, '2019-09-02 20:09:21', '2019-09-02 20:26:06'),
(154, 63, 5, 0, 0, 0, 0, NULL, '2019-09-02 20:09:51', '2019-09-02 20:09:51'),
(155, 22, 5, 1, 10, 3, 3, NULL, '2019-09-02 20:10:14', '2019-09-02 20:19:37'),
(156, 23, 5, 1, 10, 3, 3, NULL, '2019-09-02 20:10:27', '2019-09-02 20:28:11'),
(157, 20, 5, 1, 10, 3, 3, NULL, '2019-09-02 20:11:20', '2019-09-02 20:18:24'),
(158, 81, 6, 0, 0, 0, 0, NULL, '2019-09-04 15:50:32', '2019-09-04 15:50:32'),
(160, 40, 5, 1, 17, 5, 1, NULL, '2019-09-04 19:58:48', '2019-09-04 20:11:29'),
(161, 54, 5, 1, 3, 1, 5, NULL, '2019-09-04 20:04:55', '2019-09-04 20:17:28'),
(162, 56, 5, 1, 17, 5, 1, NULL, '2019-09-09 17:16:49', '2019-09-09 17:31:09'),
(163, 11, 5, 1, 17, 5, 1, NULL, '2019-09-09 17:17:04', '2019-09-09 17:33:08'),
(164, 13, 5, 1, 17, 5, 1, NULL, '2019-09-09 17:19:11', '2019-09-09 17:35:53'),
(165, 65, 5, 1, 13, 4, 2, NULL, '2019-09-09 17:19:20', '2019-09-09 17:35:54'),
(166, 58, 5, 1, 17, 5, 1, NULL, '2019-09-09 17:19:57', '2019-09-09 17:28:06'),
(167, 51, 5, 1, 13, 4, 2, NULL, '2019-09-09 17:24:32', '2019-09-09 17:40:24'),
(168, 7, 6, 0, 0, 0, 0, NULL, '2019-09-17 04:15:13', '2019-09-17 04:15:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_session` int(11) NOT NULL COMMENT 'foreign key of session table',
  `order_of_evaluation` int(2) NOT NULL,
  `title` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `type` enum('Practice','Exam') COLLATE utf8_spanish_ci NOT NULL COMMENT 'types of evaluations',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `evaluations`
--

INSERT INTO `evaluations` (`id`, `id_session`, `order_of_evaluation`, `title`, `type`, `created_at`, `updated_at`) VALUES
(4, 6, 1, 'Music Exam', 'Exam', '2019-08-16 19:01:08', '2019-08-16 19:01:08'),
(5, 7, 1, 'The Garbage Man Exam', 'Exam', '2019-08-25 15:54:59', '2019-08-25 15:54:59'),
(6, 8, 1, 'Crazy about Sports Exam', 'Exam', '2019-09-02 18:01:05', '2019-09-02 18:58:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grades_aux`
--

CREATE TABLE `grades_aux` (
  `id` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grades_aux`
--

INSERT INTO `grades_aux` (`id`, `id_unit`, `id_level`) VALUES
(1, 3, 12),
(5, 3, 13),
(6, 4, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `level_name` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `grade` int(11) NOT NULL,
  `section` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `levels`
--

INSERT INTO `levels` (`id`, `level_name`, `grade`, `section`, `created_at`, `updated_at`) VALUES
(1, 'Secundaria', 1, 'A', '2019-08-06 14:35:40', '2019-08-06 14:35:40'),
(2, 'Secundaria', 1, 'B', '2019-08-06 14:41:15', '2019-08-06 14:41:15'),
(3, 'Secundaria', 1, 'C', '2019-08-06 17:33:25', '2019-08-06 17:33:25'),
(4, 'Secundaria', 2, 'A', '2019-08-06 17:33:36', '2019-08-06 17:33:36'),
(5, 'Secundaria', 2, 'B', '2019-08-06 17:33:47', '2019-08-06 17:33:47'),
(6, 'Secundaria', 2, 'C', '2019-08-06 17:33:58', '2019-08-06 17:33:58'),
(7, 'Secundaria', 3, 'A', '2019-08-06 17:34:11', '2019-08-06 17:34:11'),
(8, 'Secundaria', 3, 'B', '2019-08-06 17:34:24', '2019-08-06 17:34:24'),
(9, 'Secundaria', 3, 'C', '2019-08-06 17:34:36', '2019-08-06 17:34:36'),
(10, 'Secundaria', 4, 'A', '2019-08-12 15:52:56', '2019-08-12 15:52:56'),
(11, 'Secundaria', 4, 'B', '2019-08-12 15:53:10', '2019-08-12 15:53:10'),
(12, 'Secundaria', 5, 'A', '2019-08-12 15:53:24', '2019-08-12 15:53:24'),
(13, 'Secundaria', 5, 'B', '2019-08-12 15:53:46', '2019-08-12 15:53:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels_aux`
--

CREATE TABLE `levels_aux` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `levels_aux`
--

INSERT INTO `levels_aux` (`id`, `id_user`, `id_level`) VALUES
(1, 9, 7),
(2, 9, 8),
(3, 9, 12),
(4, 9, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `minimum_periods`
--

CREATE TABLE `minimum_periods` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_year_learning` int(11) NOT NULL COMMENT 'foreign key of year_learning table',
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `self_period` enum('Mes','Semana','Día') COLLATE utf8_spanish_ci NOT NULL,
  `size_period` smallint(1) NOT NULL,
  `order_period` smallint(1) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `minimum_periods`
--

INSERT INTO `minimum_periods` (`id`, `id_year_learning`, `name`, `self_period`, `size_period`, `order_period`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bimestre', 'Mes', 2, 1, '2019-03-01', '2019-05-31', '2019-08-07 17:22:24', '2019-08-07 17:22:24'),
(2, 1, 'Bimestre', 'Mes', 2, 2, '2019-06-01', '2019-07-31', '2019-08-07 20:04:11', '2019-08-07 20:04:11'),
(3, 1, 'Bimestre', 'Mes', 2, 3, '2019-08-12', '2019-10-12', '2019-08-07 20:05:29', '2019-08-07 20:05:29'),
(4, 1, 'Bimestre', 'Mes', 2, 4, '2019-10-13', '2019-12-13', '2019-08-07 20:06:12', '2019-08-07 20:06:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_question` int(11) NOT NULL COMMENT 'foreign key of question table',
  `option_description` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `some_note` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `order_option` int(2) NOT NULL,
  `is_correct` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`id`, `id_question`, `option_description`, `some_note`, `order_option`, `is_correct`, `created_at`, `updated_at`) VALUES
(26, 9, 'The group plays pop music.', NULL, 1, 0, '2019-08-19 00:23:44', '2019-08-19 00:23:44'),
(27, 9, 'The group plays rock music.', NULL, 2, 1, '2019-08-19 00:23:44', '2019-08-19 00:23:44'),
(28, 9, 'Barry Jameson is a musician since ten years old.', NULL, 3, 0, '2019-08-19 00:23:44', '2019-08-19 00:23:44'),
(29, 9, 'Barry Jameson is an Engineer at The State University.', NULL, 4, 0, '2019-08-19 00:23:45', '2019-08-19 00:23:45'),
(30, 9, 'The Barry\'s wife is a Professor at The State University.', NULL, 5, 0, '2019-08-19 00:23:45', '2019-08-19 00:23:45'),
(31, 10, 'Professor / Harvard University.', NULL, 1, 0, '2019-08-19 16:39:51', '2019-08-19 16:39:51'),
(32, 10, 'Math Professor / University.', NULL, 2, 0, '2019-08-19 16:39:51', '2019-08-19 16:39:51'),
(33, 10, 'Geography Professor / State Institute.', NULL, 3, 0, '2019-08-19 16:39:51', '2019-08-19 16:39:51'),
(34, 10, 'Geography Professor / State University.', NULL, 4, 1, '2019-08-19 16:39:52', '2019-08-19 16:39:52'),
(35, 10, 'Language Professor / Institute.', NULL, 5, 0, '2019-08-19 16:39:52', '2019-08-19 16:39:52'),
(36, 11, 'Lex Benedict', NULL, 1, 0, '2019-08-19 17:50:04', '2019-08-19 17:50:04'),
(37, 11, 'The Institute of Music', NULL, 2, 0, '2019-08-19 17:50:04', '2019-08-19 17:50:04'),
(38, 11, 'The State University', NULL, 3, 0, '2019-08-19 17:50:05', '2019-08-19 17:50:05'),
(39, 11, 'Professor Barry Jameson', NULL, 4, 1, '2019-08-19 17:50:05', '2019-08-19 17:50:05'),
(40, 11, 'WNOW', NULL, 5, 0, '2019-08-19 17:50:05', '2019-08-19 17:50:05'),
(41, 12, 'Barry Jameson is the DJ.', NULL, 1, 0, '2019-08-19 18:07:31', '2019-08-19 18:07:31'),
(42, 12, 'Lex Benedict is the lead singer in the rock band.', NULL, 2, 0, '2019-08-19 18:07:31', '2019-08-19 18:07:31'),
(43, 12, '\"The Institute of Music\" is the name of rock band.', NULL, 3, 1, '2019-08-19 18:07:31', '2019-08-19 18:07:31'),
(44, 12, '\"The State University\" is the name of radio.', NULL, 4, 0, '2019-08-19 18:07:31', '2019-08-19 18:07:31'),
(45, 12, '\"The Institute of Music\" is the first song.', NULL, 5, 0, '2019-08-19 18:07:31', '2019-08-19 18:07:31'),
(46, 13, 'Harry Morgan is just a recycler.', NULL, 1, 0, '2019-08-25 16:39:04', '2019-08-25 16:39:04'),
(47, 13, 'Harry Morgan is a garbage seller.', NULL, 2, 0, '2019-08-25 16:39:04', '2019-08-25 16:39:04'),
(48, 13, 'Harry recycle garbage and he creates works of art.', NULL, 3, 1, '2019-08-25 16:39:04', '2019-08-25 16:39:04'),
(49, 13, 'Harry is a garbage buyer.', NULL, 4, 0, '2019-08-25 16:39:04', '2019-08-25 16:39:04'),
(50, 13, 'Harry collects cigarettes for selling.', NULL, 5, 0, '2019-08-25 16:39:04', '2019-08-25 16:39:04'),
(51, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de motocicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', NULL, 1, 0, '2019-08-25 17:35:44', '2019-08-25 17:35:44'),
(52, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas quebradas, e incluso maquinaria agrícola vieja.', NULL, 2, 1, '2019-08-25 17:35:45', '2019-08-25 17:35:45'),
(53, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de bicicletas, maquinas abiertas, e incluso maquinaria agrícola vieja.', NULL, 3, 0, '2019-08-25 17:35:45', '2019-08-25 18:01:18'),
(54, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de motocicletas, maquinas nuevas, e incluso maquinaria agrícola nueva.', NULL, 4, 0, '2019-08-25 17:35:45', '2019-08-25 17:35:45'),
(55, 14, 'Algunos de sus primeros trabajos fueron hechos de partes de motocicletas, motores nuevos, e incluso maquinaria agrícola vieja.', NULL, 5, 0, '2019-08-25 17:35:45', '2019-08-25 17:35:45'),
(56, 15, '\"Love in the Morning\" is the title of his favorite book.', NULL, 1, 0, '2019-08-25 19:52:48', '2019-08-25 19:52:48'),
(57, 15, '\"Harmony\" is the name of a song.', NULL, 2, 0, '2019-08-25 19:52:48', '2019-08-25 19:52:48'),
(58, 15, '\"Love in the Harmony\" is one of the works of art.', NULL, 3, 0, '2019-08-25 19:52:48', '2019-08-25 19:52:48'),
(59, 15, '\"Harmony\" has been made out of breakfast cereal boxes and newspaper', NULL, 4, 0, '2019-08-25 19:52:48', '2019-08-25 19:52:48'),
(60, 15, '\"Harmony\" is one of the Harry\'s latest collection.', NULL, 5, 1, '2019-08-25 19:52:48', '2019-08-25 19:52:48'),
(61, 16, '\"Harmony\" / empty cigarette boxes.', NULL, 1, 0, '2019-08-25 22:52:19', '2019-08-25 22:52:19'),
(62, 16, 'Harry\'s latest collection / breakfast cereal boxes.', NULL, 2, 0, '2019-08-25 22:52:19', '2019-08-25 22:52:19'),
(63, 16, '\"Harmony\" / breakfast cereal boxes.', NULL, 3, 1, '2019-08-25 22:52:20', '2019-08-25 22:52:20'),
(64, 16, '\"Love in the Harmony\" / boxes.', NULL, 4, 0, '2019-08-25 22:52:20', '2019-08-25 22:52:20'),
(65, 16, 'Boxes / \"Harmony\"', NULL, 5, 0, '2019-08-25 22:52:20', '2019-08-25 22:52:20'),
(66, 17, 'Garbage.', NULL, 1, 0, '2019-08-25 23:07:45', '2019-08-25 23:07:45'),
(67, 17, 'Metals.', NULL, 2, 0, '2019-08-25 23:07:45', '2019-08-25 23:07:45'),
(68, 17, 'Boxes.', NULL, 3, 0, '2019-08-25 23:07:45', '2019-08-25 23:07:45'),
(69, 17, 'WastePaper.', NULL, 4, 1, '2019-08-25 23:07:45', '2019-08-25 23:07:45'),
(70, 17, 'Newspaper.', NULL, 5, 0, '2019-08-25 23:07:46', '2019-08-25 23:07:46'),
(71, 18, 'The Harry\'s works of art is in fan club.', NULL, 1, 0, '2019-08-25 23:26:44', '2019-08-25 23:26:44'),
(72, 18, 'The Harry\'s works of art is in The Plaza Art Gallery.', NULL, 2, 1, '2019-08-25 23:26:45', '2019-08-25 23:26:45'),
(73, 18, 'The Plaza Art Gallery is just one of the Harry\'s works.', NULL, 3, 0, '2019-08-25 23:26:45', '2019-08-25 23:26:45'),
(74, 18, 'Harry isn\'t quickly becoming the \"Champion of Garbage Art\".', NULL, 4, 0, '2019-08-25 23:26:45', '2019-08-25 23:26:45'),
(75, 18, 'Harry Morgan is a person that sells art in Plaza Art Gallery.', NULL, 5, 0, '2019-08-25 23:26:45', '2019-08-25 23:26:45'),
(76, 19, 'Shawn Bradley is a tennis player.', NULL, 1, 0, '2019-09-02 23:29:31', '2019-09-02 23:29:31'),
(77, 19, 'Professor Sanders is a Champion of Basketball.', NULL, 2, 0, '2019-09-02 23:29:31', '2019-09-02 23:29:31'),
(78, 19, 'Len Sanders is a Professor in Wimbledon.', NULL, 3, 0, '2019-09-02 23:29:31', '2019-09-02 23:29:31'),
(79, 19, 'Shawn Bradley is a basketball player.', NULL, 4, 1, '2019-09-02 23:29:31', '2019-09-02 23:29:31'),
(80, 19, 'The Giants Football Stadium is in New York.', NULL, 5, 0, '2019-09-02 23:29:31', '2019-09-02 23:29:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_evaluation` int(11) NOT NULL COMMENT 'foreign key of evaluation table',
  `question_description` text COLLATE utf8_spanish_ci NOT NULL,
  `question_instruction` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `id_evaluation`, `question_description`, `question_instruction`, `created_at`, `updated_at`) VALUES
(9, 4, '<b>Dialog</b><br><br>\r\n\r\n<table>\r\n  <tr>\r\n    <td style=\"width:300px; vertical-align: middle\">\r\n      <img src=\"/uploads/rock.png\">\r\n    </td>\r\n    <td style=\"padding: 0 10px; text-align: justify\">\r\n\r\n<ul>\r\n  <li>\r\n    <b>(DJ):</b> Hello, listeners. This is Lex Benedict on WNOW. I hope you\'re enjoying yourselves this evening. We have some guests with us tonight that all you college students out there should be interested in. They are the members of a hot new rock band called \"The Institute of Music\", and they are all graduates of State University. Their first concert was held las week at the University\'s sciencie auditorium, where they were a great hit with the students. They say that attendance at the concert was higher than at most lectures. Now, let\'s hear the musicians introduce themselves.\r\n  </li>\r\n  <li>\r\n    <b>(Professor):</b> Ok, I\'ll start... I\'m Professor Barry Jameson, and I\'m the lead singer of the band.\r\n  </li>\r\n  <li>\r\n    <b>(DJ):</b> It\'s very unusual to find a geography professor who is also in a rock band. Can you tell us when you started being interested in music?.\r\n  </li>\r\n  <li>\r\n    <b>(Professor):</b> Well, I was given a guitar by my wife when I was accepted as a professor here at State University. I\'ve been playing ever since.\r\n  </li>\r\n  <li>\r\n    <b>(DJ):</b> OK, Let\'s take a break while we listen to your new song, \"Examination Blues\"... and here it is...\r\n  </li>\r\n</ul>\r\n\r\n    </td>\r\n  </tr>\r\n</table>\r\n\r\n    ', 'From the previous dialog, choose the correct answer.', '2019-08-19 00:23:44', '2019-08-19 16:18:27'),
(10, 4, 'From the Dialog in question 1, <b>Barry Jameson is a .............. and he teaches at The ..........</b>', 'Choose the correct answer for the two empty spaces.', '2019-08-19 16:39:51', '2019-08-19 16:41:15'),
(11, 4, 'From the Dialog in the question 1, <b>Who is the lead singer in the rock band?</b>', 'Choose the correct answer.', '2019-08-19 17:50:04', '2019-08-19 17:50:04'),
(12, 4, 'From the Dialog in question 1, <b>What is an affirmative sentence?</b>', 'Choose the correct answer, remember only one answer.', '2019-08-19 18:07:31', '2019-08-19 18:07:31'),
(13, 5, '<b>Reading: (Part 1)</b><br><br>\r\n<table>\r\n<tr>\r\n<td style=\"width:100px\">\r\n<img src=\"/uploads/garbage.png\"/>\r\n</td>\r\n<td style=\"vertical-align: middle; padding: 0 10px; text-align: justify\">\r\nHave you ever thought about the cigarrette packs and food wrappers that people in your city throw away? Harry Morgan has; he collects them. Have you heard of recycling? Well, Harry doesn\'t just recycle; he creates works of art from the things he collects.\r\n</td>\r\n</tr>\r\n\r\n</table>', 'In the first paragraph in the reading, choose the correct answer.', '2019-08-25 16:39:04', '2019-08-26 00:56:06'),
(14, 5, '<b>Reading: (Part 2)</b><br><br>\r\n<table>\r\n<tr>\r\n<td style=\"vertical-align: middle; text-align: justify; padding-right: 10px\">\r\nEver since Harry was a child, he has been interested in making models out of unusual things. Over the years, he has used a variety of materials. \"The good thing about garbage,\" Harry\'s been heard to say, \"is that there\'s always plenty of it\". <b>Some of his earlier works were made from bicycle parts, broken machines, and even old farm equipment</b>. They have been made from every piece of garbage that Harry could get his hands on.\r\n</td>\r\n<td style=\"width: 200px\">\r\n<img src=\"/uploads/parts-garbage.jpg\"/>\r\n</td>\r\n</tr>\r\n</table>', 'In the 2nd paragraph in the reading, choose the correct translate for the phrase in bold.', '2019-08-25 17:35:44', '2019-08-25 23:13:51'),
(15, 5, '<b>Reading: (Part 3)</b><br><br>\r\n<p style=\"text-align: justify\">\r\nHarry\'s latest collection, which is beign exhibited at the Plaza Art Gallery, is even more unusual. He has made sculptures that are built from wastepaper only. One of these, which is called \"Harmony\", is made of empty cigarette packs and matchboxes. Another work, called \"Love in the Morning\", has been made out of breakfast cereal boxes and pieces of old newspaper.\r\n</p>', 'In this paragraph in the reading, choose the correct answer.', '2019-08-25 19:52:48', '2019-08-26 00:56:29'),
(16, 5, 'From the Reading in Question 3: <b>_______________, Is an sculpture made of empty cigarette packs. \"Love in the Morning\" is other made out of pieces of old newspaper and _____________________.</b>', 'Choose the correct words for the white spaces.', '2019-08-25 22:52:19', '2019-08-25 22:52:19'),
(17, 5, 'From the Reading in Question 3: <br><br>\r\n\r\n<ul>\r\n<li><b>Empty Cigarette Packs</b></li>\r\n<li><b>MatchBoxes</b></li>\r\n<li><b>Breakfast Cereal Boxes</b></li>\r\n<li><b>Pieces of old newspaper</b></li>\r\n</ul>\r\n<br>\r\n<p style=\"text-align: justify\"> this is a list of materials called ____________.</p>', 'In the only empty space, what is the word?, choose the correct.', '2019-08-25 23:07:45', '2019-08-26 00:56:58'),
(18, 5, '<b>Reading: (Part 4)</b><br><br>\r\n<p style=\"text-align: justify\">This is hardly what one would call art. Or is it? Why not come and judge for yourself? Visit the Plaza Art Gallery and explore the world of Harry\'s art. <br>Harry is quickly becoming the \"Champion of Garbage Art\", and soon many people may find themselves joining the Harry Morgan fan club.</p>', 'Choose the correct sentence.', '2019-08-25 23:26:44', '2019-08-26 00:57:12'),
(19, 6, '<b>Reading:</b><br></br>\r\n<table>\r\n<tr>\r\n<td style=\"text-align:justify\">\r\nWhy do people love to watch sports? Professor Len Sanders of Georgetown University asks this question in his study, \"People and Sports\". \"We can understand why people like to play sports. It\'s good exercise and a lot of fun\", says Professor Sanders. \"But why do millions of people pay so much money to watch other people play?\"\r\nSports is good  business. A winning team can make millions of dollars. A good athlete or player can make a very large salary. For example, at the Winbledon Tennis Championships, the winner can make more than $500,000. Shawn Bradley is a basketball player for the Philadelphia \'76ers. He makes one of the highest salaries in basketball. He earns about four million dollars every year.<br>\r\nSports fans, the people who whatch sports, often pay a lot of money for tickets to a game. The Giants Football Stadium in New Jersey can hold 76,891 people. Fans get very excited when their team wins.<br>\r\nProfessor Sanders now has the answer to his question: \"People love the excitement of a good game\".\r\n</td>\r\n<td style=\"width:350px\">\r\n<img src=\"/uploads/sports.png\" >\r\n</td>\r\n</tr>\r\n</table>', 'In the reading, choose an affirmative sentence.', '2019-09-02 23:29:31', '2019-09-02 23:40:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `number_school` int(6) NOT NULL,
  `location` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `ugel_dep` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dre_dep` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `format` enum('JEC','JES') COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `schools`
--

INSERT INTO `schools` (`id`, `name`, `number_school`, `location`, `ugel_dep`, `dre_dep`, `format`, `created_at`, `updated_at`) VALUES
(2, 'Micaela Bastidas', 14917, 'Máncora', 'Contralmirante Villar Zorritos', 'Tumbes', 'JEC', '2019-08-05 14:27:24', '2019-08-06 16:31:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_unit` int(11) NOT NULL COMMENT 'foreign key of unit table',
  `title` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `order_of_session` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `id_unit`, `title`, `order_of_session`, `created_at`, `updated_at`) VALUES
(6, 3, 'Music', 1, '2019-08-16 18:59:05', '2019-08-16 18:59:05'),
(7, 3, 'The Garbage Man', 2, '2019-08-25 15:49:27', '2019-08-25 15:49:27'),
(8, 4, 'The People are Crazy about Sports', 3, '2019-09-02 16:19:30', '2019-09-02 16:19:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_minimum_period` int(11) NOT NULL COMMENT 'foreign key of minimum period table',
  `title` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `order_of_unit` int(2) NOT NULL,
  `id_level_support` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `units`
--

INSERT INTO `units` (`id`, `id_minimum_period`, `title`, `order_of_unit`, `id_level_support`, `created_at`, `updated_at`) VALUES
(3, 3, 'Arts and Entertainment', 5, NULL, '2019-08-16 18:47:20', '2019-08-16 18:53:10'),
(4, 3, 'Sports', 4, NULL, '2019-09-02 15:52:01', '2019-09-02 16:09:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `id_school` int(11) DEFAULT NULL COMMENT 'foreign key of school table is not required',
  `id_level` int(11) DEFAULT NULL COMMENT 'foreign key of level table',
  `dni` int(8) NOT NULL COMMENT 'primary key support',
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `role` enum('Student','Teacher','Administrator','') COLLATE utf8_spanish_ci NOT NULL COMMENT 'roles for users',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `id_school`, `id_level`, `dni`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(5, NULL, NULL, 46622539, 'Jhon Felipe Medina Zapata', NULL, '$2y$10$76GB3hCuIkf5lPdUYQ.aX.Zw0qFF2KghquNBWQ0s5GoNKFmXHmy1W', 'Administrator', '2019-08-04 15:05:53', '2019-08-04 15:05:53'),
(6, 2, 8, 76674838, 'María Alejandra Querevalu Pardo', NULL, '$2y$10$9oGJmXwvottNpafdIG2sm.dI4rLAoeX/Q6871fTiNQpVgQJ.Wdo7m', 'Student', '2019-08-06 17:37:42', '2019-08-06 17:39:55'),
(7, 2, 8, 73150395, 'Betsi Siomara Carrasco Hidalgo', NULL, '$2y$10$FX.hJMctxZcNR0wDQgy1MeQxnxIGVEgLueVMNvfrDWoG9epnJtbYy', 'Student', '2019-08-06 17:55:58', '2019-08-06 17:59:41'),
(8, 2, 8, 76127919, 'Jhonatan Enrique Cornejo Flores', NULL, '$2y$10$7ZgAJf5N2g6ieogXAnQRceHCfKZgIh5l56XViH93rtxb2JgL6gvza', 'Student', '2019-08-06 18:06:06', '2019-08-06 18:06:06'),
(9, 2, NULL, 45715103, 'Grecia Mirella Aguilera Barrientos', 'gre_yen06@outlook.es', '$2y$10$YWnZ04SFjq5pi4gApsrYw.1p0XyxhwVDXMj34/OOUWT24/N4P/CVG', 'Teacher', '2019-08-06 18:18:57', '2019-08-06 18:20:28'),
(10, 2, NULL, 71776379, 'Gabriela Dios Chirinos', 'sthef_21dc@hotmail.com', '$2y$10$kcq7uO65gsOtJEuWuW1JKuNG58l2D4P8h7huFXQXvMSwe/J4lQO4a', 'Teacher', '2019-08-06 18:24:46', '2019-08-06 18:24:46'),
(11, 2, 12, 74559709, 'Brayan Jean Pool Aguayo Camacho', NULL, '$2y$10$yQjlmho.xlrUASt6JNcmceFG.0Xgb6B108oIKdUdmNUMq.HqiQuQ6', 'Student', '2019-08-12 17:40:42', '2019-08-12 17:40:42'),
(12, 2, 12, 75832905, 'Edilmer Zacarias Alberca Estrada', NULL, '$2y$10$slFEWwWKgX10eBwCJHf0P.dBcgMrduvaQRfPwF5aqUUhcH5I0MWzS', 'Student', '2019-08-12 21:11:14', '2019-08-12 21:11:14'),
(13, 2, 12, 76224434, 'Pedro Javier Amaya Arca', NULL, '$2y$10$011chjG3.3lah7GASso5iu89DqdUK0Nkyy74nDl2mb58/RnKb4ThK', 'Student', '2019-08-12 21:12:02', '2019-08-12 21:12:02'),
(14, 2, 12, 73479303, 'Ailin Winslet Aniceto Martinez', NULL, '$2y$10$2rYBmJJ0sbglthh70ATe3Oa9yO.J00.fXtVXqYmDtBR7vZK8qLxzO', 'Student', '2019-08-12 21:13:00', '2019-08-12 21:13:00'),
(15, 2, 12, 73222726, 'Milagros Lizbeth Delgado Contreras', NULL, '$2y$10$fADWbgCQaEiRr92ybcCUseX4jtD2ueIF3gsS5sZCxijGevn7UK9Nm', 'Student', '2019-08-12 21:14:00', '2019-08-12 21:14:00'),
(16, 2, 13, 76127918, 'María Elizabeth Aleman Flores', NULL, '$2y$10$.2BC7edGMYoa1dRu90uHQ.VzbxBEoJVyyt5NHqNMNb0UCDjIhiJxm', 'Student', '2019-08-14 17:00:00', '2019-08-14 17:00:00'),
(17, 2, 13, 76627369, 'Abraham Isaac Ancajima Quezada', NULL, '$2y$10$47muY4lSNDD/0D6uxJtDqOUDYhUzJMhh48UJ8rvQW70Ss2zS422cS', 'Student', '2019-08-14 17:00:53', '2019-08-14 17:00:53'),
(18, 2, 13, 73457051, 'Diego Gian Piero Bancayan Purizaca', NULL, '$2y$10$ptyVf3paiBYZ5dxcGRNfd.0gz02NQlif/Nd1RNXKmCLTWyU2yysFu', 'Student', '2019-08-14 17:02:02', '2019-08-14 17:02:02'),
(19, 2, 13, 76041098, 'Jonathan Rafael Clavijo Aponte', NULL, '$2y$10$Q/DFVB.y3Lvna2qUKZfBa.o1wbUunbOW.HL3i1GRvnT6yfQISYdy.', 'Student', '2019-08-14 17:04:53', '2019-08-14 17:04:53'),
(20, 2, 13, 76574182, 'Adriana Lisseth Coronado Cruz', NULL, '$2y$10$9hpltdqpWfnw9xVlsNgQKupOgiVB77v9ytB0hEB8D3l4YorpwF04.', 'Student', '2019-08-14 17:05:53', '2019-08-14 17:05:53'),
(21, 2, 13, 74551542, 'Mercedes Fiorella Eche Ramos', NULL, '$2y$10$MV76mjTFxBlwKadZ3XDbkOKjhypkuc6xS.6yWYwIV65e1s13nQGN6', 'Student', '2019-08-14 17:07:17', '2019-08-14 17:07:17'),
(22, 2, 13, 74822798, 'Carlos Eduardo Macalupu Oballe', NULL, '$2y$10$oDyrJfIRXk3O8SOQaTBcn.tE4SZCcO50h/.hTjt1Y3qN4P5C1d25a', 'Student', '2019-08-14 17:14:50', '2019-08-14 17:14:50'),
(23, 2, 13, 74556196, 'Dayane Yazmin Marquez Sullon', NULL, '$2y$10$2DHXlLeIgGJGeWdT/MD3l.h0grgOJlAMzbCTws0u.Pl/rrnb1u2sG', 'Student', '2019-08-14 17:15:38', '2019-08-14 17:15:38'),
(24, 2, 13, 74557217, 'Luis Fernando Martino Castro', NULL, '$2y$10$ZFIEcdLBHBpqgss8Rw0oOuh314mKo6ZQlzcrYN48ZcNSVY8sXL3QG', 'Student', '2019-08-14 17:16:17', '2019-08-14 17:16:17'),
(25, 2, 13, 61200625, 'Jhon Ivan Quezada Fiestas', NULL, '$2y$10$nRC7DR6usuTzxaVnLw6vceuK6FM6zCWGvErXjvP4E6kjdsI.GlfMO', 'Student', '2019-08-14 17:17:16', '2019-08-14 17:17:16'),
(26, 2, 13, 73465880, 'Kimberly Verónica Ramirez Olivos', NULL, '$2y$10$oD3QqeST5k/Cf8HWoA7JqeCUKzGgF.D.tzqfZ8AIGxjLY7U2kkG8G', 'Student', '2019-08-14 17:18:18', '2019-08-14 17:18:18'),
(27, 2, 13, 73007740, 'Rosita Ximena Reyes Codarlupo', NULL, '$2y$10$dXMWFFuz42pCB3RbyplYr.nYVV4iVc0ySaZZ5K7Etimc7T/ARXt7O', 'Student', '2019-08-14 17:19:15', '2019-08-14 17:19:15'),
(28, 2, 13, 72403138, 'Deyvies Steve Sernaque Cortez', NULL, '$2y$10$Inh..PYYCA06mfm7BRZIXOCc7ItIApd8AUBKfazzm6oocMsrDM7aq', 'Student', '2019-08-14 17:20:14', '2019-08-14 17:20:14'),
(29, 2, 13, 75815458, 'Jorge Luis Hidalgo Meza', NULL, '$2y$10$LmnKylfEpvx5sJ.h0KRuU.A9eTGkrn3SR/N77fT2jjdDlyEBOOJD.', 'Student', '2019-08-20 19:25:09', '2019-08-20 19:25:09'),
(30, 2, 13, 72382366, 'Jose Tomás Velasquez Gómez', NULL, '$2y$10$RxT7AUAtAq7CFCkOvn3l9upzXWKSj2WsXWtRC3E81BV93CI5uOQqO', 'Student', '2019-08-20 19:25:50', '2019-08-20 19:25:50'),
(31, 2, 13, 62751512, 'Fabian Caleb Carreño Castro', NULL, '$2y$10$yABusXqAbpvHIZK0yBe8h.Xzw9GUzE9SnWTPpL40DAQfRIAowWXz2', 'Student', '2019-08-20 19:27:18', '2019-08-20 19:27:18'),
(32, 2, 13, 73460363, 'Martín Alberto Denilson Peña Sandoval', NULL, '$2y$10$dFupYW3UG7lQV6./snpRy.tgDiIbrbGLAY9clUaV419uloqpu34GK', 'Student', '2019-08-20 19:28:12', '2019-08-20 19:28:12'),
(33, 2, 13, 73436614, 'Ruben Anibal Ramirez Ravenna', NULL, '$2y$10$Dw46dRm7BxAFIIfFC3HYqeriaU7o84n58cJdgSRl8ea0DzTx.pvJS', 'Student', '2019-08-20 19:31:36', '2019-08-20 19:31:36'),
(34, 2, 13, 61738694, 'Victor Alberto Cornejo Zapata', NULL, '$2y$10$1OaYQUZtm/S1KgVCMO/I6.VpunguTVtQR2OS10sBKYnsFiBVCXX8W', 'Student', '2019-08-20 19:36:10', '2019-08-20 19:36:10'),
(35, 2, 13, 76802397, 'Karen Elena Luna Diaz', NULL, '$2y$10$TxqRKBB4GjAWaU/KkD5Gi.Ehgduh4xU/UD.fjq5aVJNwAJ60ULhKC', 'Student', '2019-08-20 19:37:30', '2019-08-20 19:37:30'),
(36, 2, 13, 74206503, 'Reynaldo Jesus Valladares Bodero', NULL, '$2y$10$PnJyYxDGR1OOpPxK95XyGOq4ftLixnEOCw1Q8IBDN2Nqndx8hLn4m', 'Student', '2019-08-20 19:38:09', '2019-08-20 19:38:09'),
(37, 2, 13, 77777777, 'Luis Jesus García Silva', NULL, '$2y$10$uwE.MZjCLBT9MgC.7rOBY.pZFzyt13ylTLAquI7ora.fMYelW2ODu', 'Student', '2019-08-20 19:39:32', '2019-08-20 19:39:32'),
(38, 2, 13, 66666666, 'Ingrid Luna Ramos', NULL, '$2y$10$mw2ErM0Qt1yi5EL/myGiDuwul.tdklQ45ktlwBqlObU8YD8aStoxa', 'Student', '2019-08-20 19:40:10', '2019-08-20 19:40:10'),
(39, 2, 12, 74559123, 'Jose Ruben Castillo Ecca', NULL, '$2y$10$O.YLe2B493CCLZAcDQL1QeFId2Rm4GPRs5IfP85Ye95xL7jiY/Hgu', 'Student', '2019-08-21 17:04:31', '2019-08-21 17:04:31'),
(40, 2, 12, 76679032, 'Esmilse Domitila Cruz Lama', NULL, '$2y$10$gq6fJaBm6uctjPKpmb5Do.bybSeQ5QewanHQbBp2sAXxRQNqpNw96', 'Student', '2019-08-21 17:05:41', '2019-08-21 17:05:41'),
(41, 2, 12, 76674934, 'Shirley Johana Fiestas Ramos', NULL, '$2y$10$mxSZDM.l16vezDycKnC1fO2.9zL8e0ez.SkZuXk4uKEvs9jWVqjxa', 'Student', '2019-08-21 17:06:35', '2019-08-21 17:06:35'),
(42, 2, 12, 74558912, 'Ingrid Belen Flores Rivera', NULL, '$2y$10$KYEXCWJlAHyXq3fpxp3E5uKYUg2qDx287YjVWA27KEY/XBLoAmLEq', 'Student', '2019-08-21 17:07:39', '2019-08-21 17:07:39'),
(43, 2, 12, 75599404, 'Kristie Junet Iglesias Olivos', NULL, '$2y$10$IOh9kRAhj2DkXMkqGCCtc.JgvfnpXV.eH3tOJJbCeH80azWJYtJD.', 'Student', '2019-08-21 17:08:30', '2019-08-21 17:08:30'),
(44, 2, 12, 77711589, 'Sol Andrea Iman Maceda', NULL, '$2y$10$knf3wCt6w.FKP.F2MDy13OTWGvKZzm94sFSnrFYTyUryGcrPUzkoW', 'Student', '2019-08-21 17:09:30', '2019-08-21 17:09:30'),
(45, 2, 12, 77041301, 'Yesary Yamilet Lama Morquencho', NULL, '$2y$10$.J33Ow5AUBGUHl3Ye39Rf.UJRsWXS9H70RXXFrnph60isQU.CZBzi', 'Student', '2019-08-21 17:10:44', '2019-08-21 17:10:44'),
(46, 2, 12, 73458308, 'Rosaura Oriana Katherinne Lopez Vargas', NULL, '$2y$10$hr3fENFsS8Mrijh/Vw2kIusDclE0ozgjf12MLy038O9fnfKYNDBPq', 'Student', '2019-08-21 17:11:52', '2019-08-21 17:11:52'),
(47, 2, 12, 75008084, 'Luis Mario Nole Lama', NULL, '$2y$10$yEjOx10.hHq.lf54d3UPG.z.o9UdvYJ1CExJ8WQ7RwVagEHu6kqL6', 'Student', '2019-08-21 17:12:35', '2019-08-21 17:12:35'),
(48, 2, 12, 72469575, 'Jair Gabriel Olivos Maza', NULL, '$2y$10$WE5VfvspF9xtX4JywsJ.eehBwx/YOwkjjMITYVv/Y9GQmWEpIClNu', 'Student', '2019-08-21 17:13:45', '2019-08-21 17:13:45'),
(49, 2, 12, 79299104, 'Wendy Carolina Panta Alama', NULL, '$2y$10$Fru7QcOQwEoywZk/zm1q/uhE7yjg2CTAcWZCHlmUuiZUpbxIAQJq.', 'Student', '2019-08-21 17:14:28', '2019-08-21 17:14:28'),
(50, 2, 12, 73465882, 'Alison Brunela Ruiz Lama', NULL, '$2y$10$EwJYCgfIsr9o.jv9hMpt/ONpeRTGjotvF4BxXd3qc7zAY1mR7jin.', 'Student', '2019-08-21 17:15:32', '2019-08-21 17:15:32'),
(51, 2, 12, 60965177, 'Brandon Pool Salazar Senador', NULL, '$2y$10$X4uy1Psi.kcvC1sE//2tz.HrhbnSKxU2lZUeQpZf0hqitoNRMasbe', 'Student', '2019-08-21 17:16:24', '2019-08-21 17:16:24'),
(52, 2, 12, 76983792, 'Britney Sherlyn Tello Maceda', NULL, '$2y$10$jof5ZghQY7lrQV/jg4f09.x8dKDgEJ6nLKeDKP/jaeWq2683XdB1y', 'Student', '2019-08-21 17:17:49', '2019-08-21 17:17:49'),
(53, 2, 12, 76274920, 'Ana Luz Umbo Valladares', NULL, '$2y$10$ZU5LbPEAuX7hnE5FUvbPuuUhRLHu.Vw2NbA.jSfLil14Ca6J4hexm', 'Student', '2019-08-21 17:18:45', '2019-08-21 17:18:45'),
(54, 2, 12, 71104318, 'Clarita Elizabeth Villegas Valladares', NULL, '$2y$10$q7wlu/s0qTM/EGPkxPAKKO7X1m0D6FItG8Oq7gtRooShPndhD9GqK', 'Student', '2019-08-21 17:19:41', '2019-08-21 17:19:41'),
(55, 2, 12, 75630088, 'Kervin Martin Yenque Panta', NULL, '$2y$10$PaMd.BHMAx1ymw//xp1vMOe0sOsuyv0I0vlwzIPyypU1270ccUvIa', 'Student', '2019-08-21 17:20:35', '2019-08-21 17:20:35'),
(56, 2, 12, 73460379, 'Juan Alberto Yenque Zapata', NULL, '$2y$10$LuJ7k//tNNSgBz/ph05FWuwliH7GbB84q4JviSasPt38aE1hIYSrm', 'Student', '2019-08-21 17:21:15', '2019-08-21 17:21:15'),
(58, 2, 12, 76475894, 'Misael Uziel Zarate Carrasco', NULL, '$2y$10$0V4MUS.B8NezCvQg9b08deMzaY4JlLXMXG76jOoawyuuleMzGGXLy', 'Student', '2019-08-21 17:24:14', '2019-08-21 17:24:14'),
(59, 2, 12, 73150394, 'Elgar Manuel Carrasco Hidalgo', NULL, '$2y$10$zvgVP2U5b8zF0wKS2IbXl.Ch6ilPdN7ET9z4nn/rYDuITYEFXvydO', 'Student', '2019-08-21 20:08:46', '2019-08-21 20:08:46'),
(60, 2, 13, 77012457, 'Anataly Oviedo Benites', NULL, '$2y$10$6D4KKDA07irEVElAhHBaFejtXg/IUB/UINb7/WzSOrbw3XZRnXCfK', 'Student', '2019-08-23 16:31:40', '2019-08-23 16:31:40'),
(61, 2, 12, 30979203, 'Yefferson Gonzalez Romero', NULL, '$2y$10$CGWLc3ijfPGL/ImSdECSQuvw.l3MuMyMRr4XvIWqjniIopKEDV/Gi', 'Student', '2019-08-23 16:33:16', '2019-08-23 16:33:16'),
(62, 2, 13, 88888888, 'Nayely del Pilar Mogollón Zapata', NULL, '$2y$10$JrPBKLJRygbIhi1.ufWM6uTSk.lbxnUNDPDA2OhHJm1jvZvg.YkL6', 'Student', '2019-08-23 16:36:19', '2019-08-23 16:36:19'),
(63, 2, 13, 75815459, 'Miyoshy Abigail Bustamante Meza', NULL, '$2y$10$lHRF.oVptLrWcONdodRMuu0AbtHGuAu6Tc7aTilSQNrUsEk48EO3a', 'Student', '2019-08-23 16:41:24', '2019-08-23 16:41:24'),
(64, 2, 13, 61200672, 'Erickson Sting Suarez Ramirez', NULL, '$2y$10$ZnrBZ0Ulw1.uLPjKr0.bYuFkBAz06b70T4IwJ57gbtaHXM5bMVgPO', 'Student', '2019-08-27 19:34:15', '2019-08-27 19:34:15'),
(65, 2, 12, 74559120, 'Jesus Alberto Placido Villegas', NULL, '$2y$10$.FIh7/tTosACgPDTeIX3vul1jEMYep.tV0QhU22T6k3937iflAGqy', 'Student', '2019-08-28 14:24:49', '2019-08-28 14:24:49'),
(66, 2, 8, 75600212, 'Anghelina Katyussca Alvarez Carrion', NULL, '$2y$10$UjmfDX6iZs7EEst.cdTrzum7GldAYVgVjcqQ61BDFvcO42S/Bbecm', 'Student', '2019-09-02 17:35:42', '2019-09-02 17:35:42'),
(67, 2, 8, 76674937, 'Jimy Martin Farfan Carlin', NULL, '$2y$10$QjVFrO2/wWdeyg52Uu3Gmewf..BLcks8Iuf/qcJNjS3sVFtCZbYTa', 'Student', '2019-09-02 17:36:37', '2019-09-02 17:36:37'),
(68, 2, 8, 76674939, 'Analeska Karolina Farfan Rimaycuna', NULL, '$2y$10$cl7p9Fnr.LRrIReOch9SoOr0tpAUMfeBGlrSAIPCNZf1K6GNi9TkS', 'Student', '2019-09-02 17:37:42', '2019-09-02 17:37:42'),
(69, 2, 8, 75666695, 'Josue Ivan Fiestas Sanjinez', NULL, '$2y$10$qprLLlUdMqn5xbQ9IomxEeR.JuHILkKrX3T8lnAgyQZ5Emby.jKb6', 'Student', '2019-09-02 17:38:31', '2019-09-02 17:38:31'),
(70, 2, 8, 75840623, 'Romina Verenice Jacinto Mogollón', NULL, '$2y$10$PnepQZ/pMri7nx3beX5ZiuFEnzcxwHIlPTwMZ6rNv6M0hzsgHQMIi', 'Student', '2019-09-02 17:39:22', '2019-09-02 17:39:22'),
(71, 2, 8, 76662744, 'Victor Andre Lopez Olaya', NULL, '$2y$10$tmF3gtuIig.TiLGkOIBYquSIZU4mAGoPKr3TTltrYGfS4OOSBTuWS', 'Student', '2019-09-02 17:40:43', '2019-09-02 17:40:43'),
(72, 2, 8, 63293747, 'Francis Alexis Mendoza Ruiz', NULL, '$2y$10$9nGRfHr7vE23LZgVYDWA3.Bz3qRcsQqAQIKaqW7wZJsu3KZf8KJ5G', 'Student', '2019-09-02 17:41:32', '2019-09-02 17:41:32'),
(73, 2, 8, 76550573, 'Carlos Eduardo Mogollón Chipatori', NULL, '$2y$10$ffJxiYUv10MryzUfkTrhquFPC01CYi.7L14L084E0V91E9ycJ8htq', 'Student', '2019-09-02 17:42:31', '2019-09-02 17:42:31'),
(74, 2, 8, 75730291, 'Fabiola Antuane Morocho Paredes', NULL, '$2y$10$SduQ9CiSftyHTJe6v5u3aOmlLensxyQqv2GXM9MQ2U6IPAQWP5j7i', 'Student', '2019-09-02 17:43:43', '2019-09-02 17:43:43'),
(75, 2, 8, 73454163, 'Manuel David Purizaca Fiestas', NULL, '$2y$10$cc2MzwF4s0rw/R2KeBDVjexXaWCAUnErj/NQy2MpsVlACzBuO8rFC', 'Student', '2019-09-02 17:44:50', '2019-09-02 17:44:50'),
(76, 2, 8, 75654119, 'Shirley Jesús Quezada Fiestas', NULL, '$2y$10$1T0VVUkEw6wZUsTXphI3E.jHV7ZEQA./PUYhTJuSOBrfWpf3qlmBq', 'Student', '2019-09-02 17:47:48', '2019-09-02 17:47:48'),
(77, 2, 8, 73458338, 'María Cristina Elizabeth Ramirez Araujo', NULL, '$2y$10$kRQ37AoWaY7GZJnDy6EEa.G10kq34jW/2aS8AIshIWZI3V9giWnwm', 'Student', '2019-09-02 17:49:07', '2019-09-02 17:49:07'),
(78, 2, 8, 75832895, 'Kevin Daniel  Rivas Canales', NULL, '$2y$10$kOunlW6ea59ybGYNqpBJJOfLKuh8YJaJ3tw1FBY9u.MD4SJJ6hSm.', 'Student', '2019-09-02 17:50:34', '2019-09-02 17:50:34'),
(79, 2, 8, 74389935, 'María Kasandra del Pilar Serna del Rosario', NULL, '$2y$10$KJEvvmuQ3v9uzLwe3YK.9u2JbdFTYA.nOEqnFzU44FlL1WuCtqCSS', 'Student', '2019-09-02 17:51:23', '2019-09-02 17:51:23'),
(80, 2, 8, 74559079, 'Franco Ernesto Serna Sandoval', NULL, '$2y$10$CJ5bfc8Wm9G3BcnJRaK4ueQYdN5TYOHg0XmtUeQfJdEhtgilMHine', 'Student', '2019-09-02 17:52:10', '2019-09-02 17:52:10'),
(81, 2, 8, 60448259, 'James Patrick Valverde Farias', NULL, '$2y$10$pzPCd7IDkscVN2.Jr.R3xeq3CYhQ9no46wyMe23Xk5l9yeAvVQqgi', 'Student', '2019-09-02 17:52:53', '2019-09-02 17:52:53'),
(82, 2, 8, 74551530, 'Jeyson Esmith  Zapata Ruiz', NULL, '$2y$10$v.KBOIUnNA0NwS10gZG4bOJhxRvoOKvYYRe.nuS//bAVTykdtlXwO', 'Student', '2019-09-02 17:53:36', '2019-09-02 17:53:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `years_learning`
--

CREATE TABLE `years_learning` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `year` year(4) NOT NULL,
  `year_name` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `years_learning`
--

INSERT INTO `years_learning` (`id`, `year`, `year_name`, `created_at`, `updated_at`) VALUES
(1, 2019, NULL, '2019-08-07 15:50:44', '2019-08-07 15:50:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_question` (`id_question`);

--
-- Indices de la tabla `califications`
--
ALTER TABLE `califications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_evaluation` (`id_evaluation`);

--
-- Indices de la tabla `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_session` (`id_session`);

--
-- Indices de la tabla `grades_aux`
--
ALTER TABLE `grades_aux`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `levels_aux`
--
ALTER TABLE `levels_aux`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `minimum_periods`
--
ALTER TABLE `minimum_periods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_year_learning` (`id_year_learning`);

--
-- Indices de la tabla `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_question` (`id_question`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_evaluation` (`id_evaluation`);

--
-- Indices de la tabla `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indices de la tabla `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_minimum_period` (`id_minimum_period`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_school` (`id_school`),
  ADD KEY `id_level` (`id_level`);

--
-- Indices de la tabla `years_learning`
--
ALTER TABLE `years_learning`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=435;

--
-- AUTO_INCREMENT de la tabla `califications`
--
ALTER TABLE `califications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT de la tabla `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grades_aux`
--
ALTER TABLE `grades_aux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `levels_aux`
--
ALTER TABLE `levels_aux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `minimum_periods`
--
ALTER TABLE `minimum_periods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `years_learning`
--
ALTER TABLE `years_learning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `id_question` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `califications`
--
ALTER TABLE `califications`
  ADD CONSTRAINT `califications_ibfk_1` FOREIGN KEY (`id_evaluation`) REFERENCES `evaluations` (`id`),
  ADD CONSTRAINT `califications_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `id_session` FOREIGN KEY (`id_session`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `minimum_periods`
--
ALTER TABLE `minimum_periods`
  ADD CONSTRAINT `minimum_periods_ibfk_1` FOREIGN KEY (`id_year_learning`) REFERENCES `years_learning` (`id`);

--
-- Filtros para la tabla `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`);

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `id_evaluation` FOREIGN KEY (`id_evaluation`) REFERENCES `evaluations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `id_unit` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`id_minimum_period`) REFERENCES `minimum_periods` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_school`) REFERENCES `schools` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
