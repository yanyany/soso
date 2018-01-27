-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-01-27 05:44:20
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `so`
--

-- --------------------------------------------------------

--
-- 表的结构 `s_company`
--

CREATE TABLE IF NOT EXISTS `s_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(100) NOT NULL COMMENT '手机号',
  `email` varchar(200) NOT NULL COMMENT '邮箱地址',
  `password` varchar(200) NOT NULL COMMENT '密码',
  `nature` int(11) NOT NULL COMMENT '1 民营 2国企',
  `company_name` varchar(200) NOT NULL COMMENT '公司名称',
  `certificateNum` varchar(200) NOT NULL COMMENT '组织机构码',
  `sex` int(11) NOT NULL COMMENT '1男 2女',
  `corporation` varchar(200) NOT NULL COMMENT '联系人',
  `address` varchar(200) NOT NULL COMMENT '地址',
  `type` int(11) NOT NULL COMMENT '1 个人 2公司 3 学校',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='公司' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `s_company`
--

INSERT INTO `s_company` (`id`, `phone`, `email`, `password`, `nature`, `company_name`, `certificateNum`, `sex`, `corporation`, `address`, `type`) VALUES
(2, '18311161659', '18311161659@163.com', '14e1b600b1fd579f47433b88e8d85291', 1, 'SO简历', '123456789', 1, '1', '河北/邯郸市/丛台区', 2);

-- --------------------------------------------------------

--
-- 表的结构 `s_login`
--

CREATE TABLE IF NOT EXISTS `s_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginIp` varchar(30) NOT NULL COMMENT '登录ip',
  `loginTime` varchar(50) NOT NULL COMMENT '登录时间',
  `userId` varchar(10) NOT NULL COMMENT '用户id',
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户登录记录' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `s_login`
--

INSERT INTO `s_login` (`id`, `loginIp`, `loginTime`, `userId`, `name`) VALUES
(1, '::1', '1507715159', '1', 'yyy'),
(2, '::1', '1507715976', '1', ''),
(3, '::1', '1507944619', '1', '');

-- --------------------------------------------------------

--
-- 表的结构 `s_user`
--

CREATE TABLE IF NOT EXISTS `s_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(50) NOT NULL COMMENT '手机号',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `email` varchar(150) NOT NULL COMMENT '邮箱',
  `status` int(11) NOT NULL COMMENT '1启用 2停用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='后台用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `s_user`
--

INSERT INTO `s_user` (`id`, `phone`, `password`, `email`, `status`) VALUES
(1, '18311161659', 'e10adc3949ba59abbe56e057f20f883e', '18311161659@163.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
