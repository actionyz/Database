-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-13 02:58:38
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- 表的结构 `classroom`
--

CREATE TABLE IF NOT EXISTS `classroom` (
  `classid` varchar(20) NOT NULL COMMENT '教室号',
  `charnum` int(11) NOT NULL COMMENT '位子数目',
  `repair` int(11) NOT NULL COMMENT '是否保修',
  `buildid` int(11) NOT NULL COMMENT '教学楼号',
  `floor` int(11) NOT NULL COMMENT '楼层',
  `use` int(11) NOT NULL COMMENT '是否被占用',
  `reason` varchar(50) NOT NULL COMMENT '报修原因'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `classroom`
--

INSERT INTO `classroom` (`classid`, `charnum`, `repair`, `buildid`, `floor`, `use`, `reason`) VALUES
('1304', 50, 0, 1, 3, 1, 'gate'),
('1301', 50, 0, 1, 3, 1, 'lamp'),
('1302', 40, 0, 1, 3, 1, 'gate'),
('1303', 60, 0, 1, 3, 1, 'reas'),
('1201', 60, 0, 1, 2, 1, 'ddon'),
('1202', 50, 0, 1, 2, 0, ''),
('1203', 30, 0, 1, 2, 0, ''),
('1204', 30, 0, 1, 2, 1, 'ffff');

-- --------------------------------------------------------

--
-- 表的结构 `classtime`
--

CREATE TABLE IF NOT EXISTS `classtime` (
  `lesson` varchar(30) NOT NULL COMMENT '课次',
  `begin` varchar(30) NOT NULL DEFAULT '' COMMENT '开始时间',
  `end` varchar(30) NOT NULL COMMENT '结束时间'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='课次表';

--
-- 转存表中的数据 `classtime`
--

INSERT INTO `classtime` (`lesson`, `begin`, `end`) VALUES
('12', '8:00', '9:40'),
('relax', '9:40', '10:10'),
('34', '10:10', '11:50');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `majorid` varchar(20) NOT NULL COMMENT '专业号',
  `courseid` varchar(20) NOT NULL COMMENT '课程号',
  `date` varchar(20) NOT NULL COMMENT '星期',
  `classid` varchar(20) NOT NULL COMMENT '教室号',
  `begintime` varchar(20) NOT NULL COMMENT '课程开始时间',
  `endtime` varchar(20) NOT NULL COMMENT '课程结束时间'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`majorid`, `courseid`, `date`, `classid`, `begintime`, `endtime`) VALUES
('QS14', 'c1', 'Monday', '1304', '8:00', '9:40'),
('QS14', 'c2', 'Monday', '1304', '10:10', '11:50'),
('QS14', 'c2', 'Tuesday', '1304', '8:00', '9:40'),
('QS14', 'c3', 'Tuesday', '1204', '9:40', '11:50'),
('WG14', 'c1', 'Tuesday', '1203', '8:00', '9:40'),
('WG14', 'c3', 'Tuesday', '1204', '14:30', '16:10'),
('JK13', 'c4', 'Friday', '1304', '8:00', '9:40'),
('JK14', '', '', '', '', ''),
('JK14', 'c5', 'Friday', '1203', '8:00', '18:40'),
('JK13', 'c3', 'Friday', '1204', '8:00', '19:30'),
('JK13', 'c1', 'Friday', '1202', '18:40', '21:30'),
('QS13', 'c4', 'Saturday', '1202', '00:10', '10:00');

-- --------------------------------------------------------

--
-- 表的结构 `major`
--

CREATE TABLE IF NOT EXISTS `major` (
  `majorid` varchar(20) NOT NULL COMMENT '专业号',
  `majorname` varchar(30) NOT NULL COMMENT '专业名',
  `number` int(11) NOT NULL COMMENT '人数',
  `academy` int(11) NOT NULL COMMENT '学院',
  `battalion` int(11) NOT NULL COMMENT '营'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `major`
--

INSERT INTO `major` (`majorid`, `majorname`, `number`, `academy`, `battalion`) VALUES
('QS14', 'experimental class', 19, 4, 4),
('QS13', 'experimental class', 19, 4, 4),
('QS15', 'experimental class', 19, 4, 4),
('WG14', 'network', 50, 4, 2),
('WG13', 'network', 50, 4, 2),
('JK13', 'computer', 24, 4, 1),
('JK14', 'computer', 30, 4, 1);

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `classid` varchar(20) NOT NULL COMMENT '教室号',
  `date` varchar(20) NOT NULL COMMENT '星期',
  `reason` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '预定原因',
  `occupier` varchar(20) NOT NULL COMMENT '申请人',
  `begintime` varchar(20) NOT NULL,
  `endtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`classid`, `date`, `reason`, `occupier`, `begintime`, `endtime`) VALUES
('1304', 'Friday', 'meeting', 'gzj', '19:00', '21:00'),
('1203', 'Friday', 'meeting', 'yz', '20:00', '21:30'),
('1203', 'Monday', '', '', '', ''),
('1304', 'Wednesday', 'meeting', 'hdihih', '8:00', '12:00'),
('1301', 'Wednesday', '开会', 'fff', '8:00', '12:00'),
('1301', 'Friday', '开会', '', '9:00', '22:00');

-- --------------------------------------------------------

--
-- 表的结构 `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `courseid` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '课程号',
  `coursename` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '课程名'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `syllabus`
--

INSERT INTO `syllabus` (`courseid`, `coursename`) VALUES
('c1', '计算机网络'),
('c2', '离散数学'),
('c3', '图论'),
('c4', '数据库'),
('c5', '操作系统'),
('c6', '逆向工程'),
('c7', '漏洞挖掘');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(20) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `pass` varchar(40) NOT NULL COMMENT '密码',
  `identity` varchar(20) NOT NULL COMMENT '身份类型',
  `section` varchar(30) NOT NULL COMMENT '单位'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `username`, `pass`, `identity`, `section`) VALUES
('8071988033', 'YangZhe', '666666', 'cadre', 'train'),
('3', '3', '3', '3', '3'),
('4', '4', '4', '4', '4'),
('3', '3', '3', '??', '?????');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
