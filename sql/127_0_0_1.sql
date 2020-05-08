-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2019-06-14 02:06:23
-- 服务器版本： 5.7.24
-- PHP 版本： 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `homework`
--
CREATE DATABASE IF NOT EXISTS `homework` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `homework`;

-- --------------------------------------------------------

--
-- 表的结构 `20161221`
--

DROP TABLE IF EXISTS `20161221`;
CREATE TABLE IF NOT EXISTS `20161221` (
  `course_id` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `20161221`
--

INSERT INTO `20161221` (`course_id`) VALUES
('2');

-- --------------------------------------------------------

--
-- 表的结构 `20161222`
--

DROP TABLE IF EXISTS `20161222`;
CREATE TABLE IF NOT EXISTS `20161222` (
  `course_id` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `20161223`
--

DROP TABLE IF EXISTS `20161223`;
CREATE TABLE IF NOT EXISTS `20161223` (
  `course_id` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `20161224`
--

DROP TABLE IF EXISTS `20161224`;
CREATE TABLE IF NOT EXISTS `20161224` (
  `course_id` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `20161224`
--

INSERT INTO `20161224` (`course_id`) VALUES
('3');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(5) NOT NULL,
  `course_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
('1', '高等数学'),
('3', '计算机网络'),
('4', 'C++程序设计'),
('5', '物联网应用技术'),
('6', '数字逻辑');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stu_grade` varchar(4) NOT NULL,
  `stu_id` varchar(8) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  `stu_sex` varchar(20) NOT NULL,
  `stu_college` varchar(20) NOT NULL,
  `stu_class` varchar(20) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`stu_grade`, `stu_id`, `stu_name`, `stu_sex`, `stu_college`, `stu_class`) VALUES
('2016', '20161222', '张三', '女', '计算机', '物联网'),
('2016', '20161221', '常磊', '男', '计算机', '物联网'),
('2016', '20161224', '魏英杰', '男', '计算机', '物联网');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `identity` varchar(20) NOT NULL DEFAULT 'student',
  PRIMARY KEY (`username`),
  UNIQUE KEY `phonenum` (`phonenum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `passwd`, `phonenum`, `identity`) VALUES
('root', 'root', '', 'root'),
('20161224', '123456', '20161224', 'student'),
('20161223', '20161223', '20161223', 'student'),
('20161222', '20161222', '20161222', 'student'),
('20161221', '20161221', '20161221', 'student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
