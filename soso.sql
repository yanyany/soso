-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-04 16:21:30
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soso`
--

-- --------------------------------------------------------

--
-- 表的结构 `s_migrations`
--

CREATE TABLE IF NOT EXISTS `s_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `s_migrations`
--

INSERT INTO `s_migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- 表的结构 `s_password_resets`
--

CREATE TABLE IF NOT EXISTS `s_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `s_users`
--

CREATE TABLE IF NOT EXISTS `s_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `s_users`
--

INSERT INTO `s_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Lexus Bauch', 'kip.friesen@example.com', '$2y$10$/V1wjpLVcOdpmSoCH/Xnq.teGBsqbH8p74AbkbPgnn8u1jO2MKVcu', 'p0oc0ydrhP', '2017-10-14 22:11:24', '2017-10-14 22:11:24'),
(2, 'Mr. Adam Bailey', 'josephine81@example.net', '$2y$10$ZOr1PLxbmo6mJaPebSpUaeNWfAqPTzr9Eu/crd4Fpzob8JtuqKD16', 'EoHHuBFj8Z', '2017-10-14 22:11:24', '2017-10-14 22:11:24'),
(3, 'aa', '18311161659@163.com', '$2y$10$tKqy/yjPWKLRvx.48TUsPuzqmrxhsknsZf9xNMvX2o62Vqn588ns2', '3cDar8WrFfOZRMhHpPhZmYGnXtHkiQElDO2UJkQNzUktI5RMYUcwYxUkrOPC', '2017-10-14 22:12:56', '2017-10-14 22:13:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
