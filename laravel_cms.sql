-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2019 às 22:17
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `aln_id` int(4) NOT NULL,
  `aln_nome` varchar(199) DEFAULT NULL,
  `aln_celular` varchar(199) DEFAULT NULL,
  `aln_telefone` varchar(199) DEFAULT NULL,
  `aln_cpf` varchar(199) DEFAULT NULL,
  `aln_email` varchar(199) DEFAULT NULL,
  `aln_senha` varchar(199) DEFAULT NULL,
  `aln_endereco` varchar(199) DEFAULT NULL,
  `aln_numero` varchar(199) DEFAULT NULL,
  `aln_bairro` varchar(199) DEFAULT NULL,
  `aln_cep` varchar(199) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dia_da_semama`
--

CREATE TABLE `dia_da_semama` (
  `dds_id` int(4) NOT NULL,
  `dds_nome` varchar(199) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dia_da_semama`
--

INSERT INTO `dia_da_semama` (`dds_id`, `dds_nome`) VALUES
(1, 'SEGUNDA-FEIRA'),
(2, 'TERÇA-FEIRA'),
(3, 'QUARTA-FEIRA'),
(4, 'QUINTA-FEIRA'),
(5, 'SEXTA-FEIRA'),
(6, 'SABADO'),
(7, 'DOMINGO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editavel`
--

CREATE TABLE `editavel` (
  `id` int(11) NOT NULL,
  `campo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(142, '2014_10_12_000000_create_users_table', 1),
(143, '2014_10_12_100000_create_password_resets_table', 1),
(144, '2019_03_05_175932_create_posts_table', 1),
(145, '2019_03_05_181229_add_is_admin_column_to_posts_tables', 1),
(146, '2019_03_05_233515_create_editavel_table', 1),
(147, '2019_03_24_143654_add_deleted_at_column_to_posts_table', 1),
(148, '2019_04_03_162036_create_professores_table', 1),
(149, '2019_04_05_005744_create_teachers_table', 1),
(150, '2019_04_12_012538_add_path_column_to_posts', 1),
(151, '2019_04_15_022556_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `prf_id` bigint(20) UNSIGNED NOT NULL,
  `prf_nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_senha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prf_cep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas_centro`
--

CREATE TABLE `reservas_centro` (
  `rsc_id` int(4) NOT NULL,
  `rsc_horario` varchar(199) DEFAULT NULL,
  `rsc_professor` varchar(199) DEFAULT NULL,
  `rsc_instrumento` varchar(199) DEFAULT NULL,
  `rsc_tipo_reserva` varchar(199) DEFAULT NULL,
  `rsc_aluno` varchar(199) DEFAULT NULL,
  `rsc_sala` varchar(199) DEFAULT NULL,
  `rsc_mensalidade` int(6) DEFAULT NULL,
  `dds_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas_centro`
--

INSERT INTO `reservas_centro` (`rsc_id`, `rsc_horario`, `rsc_professor`, `rsc_instrumento`, `rsc_tipo_reserva`, `rsc_aluno`, `rsc_sala`, `rsc_mensalidade`, `dds_id`) VALUES
(1, '8:00 as 9:00', 'dsd', 'Violino', 'Matriculados', 'Jose, Elias, Miltom, Alex', 'SALA 1', 360, 1),
(2, '9:00 as 10:00', ' RAFA', 'dsd', 'xzxzxz', NULL, NULL, NULL, 1),
(3, '10:00 as 11:00', 'xcxcxcxc', 'cxcxc', 'dsdsd', NULL, NULL, NULL, 1),
(4, '11:00 as 12:00', 'Jeremias', 'dsd', NULL, NULL, ' ', 180, 1),
(5, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, '13:00 as 14:00', 'Maria', NULL, NULL, NULL, NULL, 120, 1),
(7, '14:00 as 15:00', 'ddfsfsdf', NULL, NULL, NULL, NULL, 0, 1),
(8, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, '17:00 as 18:00', 'Jose', NULL, NULL, NULL, NULL, 90, 1),
(11, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, '8:00 as 9:00', NULL, NULL, ' ', ' ', NULL, 10, 2),
(16, '9:00 as 10:00', 'ds', NULL, NULL, NULL, NULL, NULL, 2),
(17, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(18, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(19, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(20, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(21, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(22, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(23, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(24, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(25, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(26, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(27, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(28, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(29, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, 120, 3),
(30, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(31, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(32, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(33, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(34, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(35, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(36, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(37, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(38, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(39, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(40, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(41, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(42, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(43, '8:00 as 9:00', 'Manuel', NULL, NULL, NULL, ' ', NULL, 4),
(44, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(45, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(46, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(47, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, 240, 4),
(48, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(49, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(50, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(51, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(52, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(53, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(54, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(55, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(56, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(57, '8:00 as 9:00', 'Ma', NULL, NULL, NULL, NULL, 240, 5),
(58, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(59, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(60, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(61, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(62, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, 480, 5),
(63, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(64, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(65, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(66, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(67, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(68, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(69, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(70, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(71, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, 90, 6),
(72, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(73, '10:00 as 11:00', NULL, NULL, ' ', NULL, NULL, 180, 6),
(74, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(75, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, 120, 6),
(76, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(77, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(78, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(79, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(80, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(81, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(82, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, 120, 6),
(83, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(84, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas_morumbi`
--

CREATE TABLE `reservas_morumbi` (
  `rsm_id` int(4) NOT NULL,
  `rsm_horario` varchar(199) DEFAULT NULL,
  `rsm_professor` varchar(199) DEFAULT NULL,
  `rsm_instrumento` varchar(199) DEFAULT NULL,
  `rsm_tipo_reserva` varchar(199) DEFAULT NULL,
  `rsm_aluno` varchar(199) DEFAULT NULL,
  `rsm_sala` varchar(199) DEFAULT NULL,
  `rsm_mensalidade` int(6) DEFAULT NULL,
  `dds_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas_morumbi`
--

INSERT INTO `reservas_morumbi` (`rsm_id`, `rsm_horario`, `rsm_professor`, `rsm_instrumento`, `rsm_tipo_reserva`, `rsm_aluno`, `rsm_sala`, `rsm_mensalidade`, `dds_id`) VALUES
(1, '8:00 as 9:00', 'ddsafdf', ' dsadas', NULL, NULL, NULL, NULL, 1),
(2, '9:00 as 10:00', NULL, '112', NULL, NULL, NULL, NULL, 1),
(3, '10:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(16, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(17, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(18, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(19, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(20, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(21, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(22, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(23, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(24, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(25, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(26, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(27, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(28, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(29, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(30, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(31, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(32, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(33, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(34, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(35, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(36, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(37, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(38, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(39, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(40, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(41, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(42, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(43, '8:00 as 9:00', 'Manuel', NULL, NULL, NULL, NULL, NULL, 4),
(44, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(45, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(46, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(47, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(48, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(49, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(50, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(51, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(52, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(53, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(54, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(55, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(56, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(57, '8:00 as 9:00', 'manu', NULL, NULL, NULL, NULL, NULL, 5),
(58, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(59, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(60, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(61, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(62, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(63, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(64, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(65, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(66, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(67, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(68, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(69, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(70, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(71, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(72, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(73, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(74, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(75, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(76, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(77, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(78, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(79, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(80, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(81, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(82, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(83, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(84, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas_pub`
--

CREATE TABLE `reservas_pub` (
  `rsp_id` int(4) NOT NULL,
  `rsp_horario` varchar(199) DEFAULT NULL,
  `rsp_professor` varchar(199) DEFAULT NULL,
  `rsp_instrumento` varchar(199) DEFAULT NULL,
  `rsp_tipo_reserva` varchar(199) DEFAULT NULL,
  `rsp_aluno` varchar(199) DEFAULT NULL,
  `rsp_sala` varchar(199) DEFAULT NULL,
  `rsp_mensalidade` int(6) DEFAULT NULL,
  `dds_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas_pub`
--

INSERT INTO `reservas_pub` (`rsp_id`, `rsp_horario`, `rsp_professor`, `rsp_instrumento`, `rsp_tipo_reserva`, `rsp_aluno`, `rsp_sala`, `rsp_mensalidade`, `dds_id`) VALUES
(1, '8:00 as 9:00', 'Jeremias', 'Acordeon', 'Matriculado', NULL, NULL, NULL, 1),
(2, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(16, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(17, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(18, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(19, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(20, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(21, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(22, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(23, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(24, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(25, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(26, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(27, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(28, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(29, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(30, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(31, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(32, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(33, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(34, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(35, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(36, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(37, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(38, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(39, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(40, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(41, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(42, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 3),
(43, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(44, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(45, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(46, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(47, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(48, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(49, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(50, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(51, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(52, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(53, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(54, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(55, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(56, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(57, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(58, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(59, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(60, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(61, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(62, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(63, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(64, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(65, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(66, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(67, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(68, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(69, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(70, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 5),
(71, '8:00 as 9:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(72, '9:00 as 10:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(73, '10:00 as 11:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(74, '11:00 as 12:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(75, '12:00 as 13:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(76, '13:00 as 14:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(77, '14:00 as 15:00', NULL, NULL, NULL, NULL, NULL, 0, 6),
(78, '15:00 as 16:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(79, '16:00 as 17:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(80, '17:00 as 18:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(81, '18:00 as 19:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(82, '19:00 as 20:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(83, '20:00 as 21:00', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(84, '21:00 as 22:00', NULL, NULL, NULL, NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tcr_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tcr_cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tcr_telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tcr_cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tcr_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tcr_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tcr_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tcr_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tcr_neighborhood` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tcr_zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neighborhood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `cpf`, `cell_phone`, `telephone`, `address`, `number`, `neighborhood`, `zip_code`, `code_user`, `manager_id`, `teacher_id`, `student_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'IVAN REIS', 'Administrador', 'hertzsystemsjc@gmail.com', '123456', '321654', '321', 'Rua Madrigal Roberto Tavares de Afonso Pena', '123', 'bairro', '789789', 'HZ007', NULL, NULL, NULL, NULL, '$2y$10$U6GIzRgQ0O87vBaC0AHFUul53wHOAiNmdN8vGQkkAG04xclOCELFC', NULL, '2019-05-13 05:50:25', '2019-05-13 05:50:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`aln_id`);

--
-- Indexes for table `dia_da_semama`
--
ALTER TABLE `dia_da_semama`
  ADD PRIMARY KEY (`dds_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`prf_id`);

--
-- Indexes for table `reservas_centro`
--
ALTER TABLE `reservas_centro`
  ADD PRIMARY KEY (`rsc_id`),
  ADD KEY `fk_dia_da_semama` (`dds_id`);

--
-- Indexes for table `reservas_morumbi`
--
ALTER TABLE `reservas_morumbi`
  ADD PRIMARY KEY (`rsm_id`),
  ADD KEY `fk2_dia_da_semama` (`dds_id`);

--
-- Indexes for table `reservas_pub`
--
ALTER TABLE `reservas_pub`
  ADD PRIMARY KEY (`rsp_id`),
  ADD KEY `fk3_dia_da_semama` (`dds_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `prf_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `reservas_centro`
--
ALTER TABLE `reservas_centro`
  ADD CONSTRAINT `fk_dia_da_semama` FOREIGN KEY (`dds_id`) REFERENCES `dia_da_semama` (`dds_id`);

--
-- Limitadores para a tabela `reservas_morumbi`
--
ALTER TABLE `reservas_morumbi`
  ADD CONSTRAINT `fk2_dia_da_semama` FOREIGN KEY (`dds_id`) REFERENCES `dia_da_semama` (`dds_id`);

--
-- Limitadores para a tabela `reservas_pub`
--
ALTER TABLE `reservas_pub`
  ADD CONSTRAINT `fk3_dia_da_semama` FOREIGN KEY (`dds_id`) REFERENCES `dia_da_semama` (`dds_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
