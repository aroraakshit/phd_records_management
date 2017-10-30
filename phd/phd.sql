-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 12:14 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phd`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `coordinator_fid` int(11) NOT NULL,
  `credits` float NOT NULL,
  `semcode` varchar(10) NOT NULL,
  `department` varchar(4) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `coordinator_fid`, `credits`, `semcode`, `department`, `class`) VALUES
(1, 'Database Management Systems', 2, 4, '1516ODDSEM', 'COE', 'UGCO'),
(2, 'Analysis and Design of Algorithms', 4, 4, '1516ODDSEM', 'COE', 'UGCO'),
(3, 'Computer Graphics', 5, 4, '1516ODDSEM', 'COE', 'UGCO'),
(4, 'Linux Apache MySQL PHP', 6, 4, '1516ODDSEM', 'COE', 'UGCO');

-- --------------------------------------------------------

--
-- Table structure for table `doc_comm`
--

CREATE TABLE IF NOT EXISTS `doc_comm` (
  `pno` int(11) NOT NULL,
  `chairman_fid` int(11) NOT NULL,
  `supervisor_1_fid` int(11) NOT NULL,
  `supervisor_2_fid` int(11) DEFAULT NULL,
  `inside_1_fid` int(11) NOT NULL,
  `inside_2_fid` int(11) NOT NULL,
  `outside_fid` int(11) NOT NULL,
  `other_dept_fid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_comm`
--

INSERT INTO `doc_comm` (`pno`, `chairman_fid`, `supervisor_1_fid`, `supervisor_2_fid`, `inside_1_fid`, `inside_2_fid`, `outside_fid`, `other_dept_fid`) VALUES
(1, 1, 2, NULL, 0, 0, 0, 0),
(2, 2, 3, 5, 1, 5, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(11) NOT NULL,
  `department` varchar(4) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `r_int` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `faculty_code` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `department`, `fname`, `email`, `designation`, `r_int`, `url`, `dob`, `phone`, `faculty_code`) VALUES
(1, 'COE', 'Dr. Deepak Garg', 'dgarg@thapar.edu', 'Associate Professor & Head', 'Machine Learning and Data Analytics, Algorithms and Data Structures, Data Mining and Pattern Discovery', 'www.gdeepak.com', '0000-00-00', '0', 'DG'),
(2, 'COE', 'Dr. Parteek Bhatia', 'parteek.bhatia@thapar.edu', 'Assistant Professor', 'Natural Language Processing, Information Systems, Computing Methodologies', 'https://sites.google.com/site/parteekbhatia/', '0000-00-00', '0', 'PBH'),
(3, 'COE', 'Harkiran Kaur', 'harkiran.kaur@thapar.edu', 'Lecturer', 'Information systems, Web Semantics, Human-centered computing', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=437:ms-harkiran-kaur', '0000-00-00', '0', 'HK'),
(4, 'COE', 'Tarunpreet Bhatia', 'tarunpreet@thapar.edu', 'Lecturer', 'Wireless Networks, Sensor Networks, Network Routing and Security', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=440:ms-tarunpreet-bhatia', '0000-00-00', '0', 'TBH'),
(5, 'COE', 'Dr. Sushma Jain', 'sjain@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Network architectures, Network protocols and Network algorithms', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=237:dr-sushma-jain', '0000-00-00', '0', 'SJ'),
(6, 'COE', 'Ashish Girdhar', 'ashish.girdhar@thapar.edu', 'Lecturer', 'Data Structure, Soft Computing', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=504:ashish-girdhar', '0000-00-00', '0', 'AG'),
(7, 'COE', 'Dr. Shivani Goel', 'shivani@thapar.edu', 'Assistant Professor', 'Artificial Intelligence, Algorithms, Software Engineering and Software Reuse', 'http://thapar.edu/index.php/computer-science-engineering/faculty?pid=151&sid=233:dr-shivani-goel', '0000-00-00', '0', 'SGO'),
(9, 'COE', 'Karamjeet Kaur Cheema', 'karamjeet@thapar.edu', 'Assistant Professor', 'Machine LEarning', 'http://www.me.com', '2013-10-28', '7696051994', 'KJK');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sno` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `_id` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `role`, `_id`, `password`, `full_name`, `phone`, `email`) VALUES
(2, 'admin', 'akshit', '$1$sa5.FC/.$5mbA2ZielWm5uOkkhy7ZA0', 'Akshit Arora', '+917696061995', ''),
(3, 'student', '1000000002', '$1$Nb0.Sy/.$OvuFgBs2Q03pJ6eduasB70', 'Akshit Arora', '', ''),
(4, 'faculty', 'KJK', '$1$mm..1E3.$eiSyEJZAUZyYFI.h9ienQ/', 'Karamjeet Kaur Cheema', '7696051994', 'karamjeet@thapar.edu'),
(7, 'admin', 'ankit', '$1$K9/.LZ4.$hSFHp/G4dCKyOBa9Lm.zz.', 'ankit goyal', '8769604995', 'ankit@thapar.edu'),
(8, 'admin', 'abhinav', '$1$ka3.d...$E5grU9yN5OdZ9kIX/y2QQ1', 'Abhinav Garg', '9988121169', 'abhinav_garg01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `outside_faculty`
--

CREATE TABLE IF NOT EXISTS `outside_faculty` (
  `ofid` int(11) NOT NULL,
  `ofname` varchar(100) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `ofemail` varchar(300) DEFAULT NULL,
  `ofphone` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outside_faculty`
--

INSERT INTO `outside_faculty` (`ofid`, `ofname`, `institute`, `designation`, `ofemail`, `ofphone`) VALUES
(3, 'Dr. Sanjay Sharma', '', '', NULL, NULL),
(4, 'Dr. Kulbir Singh', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `sno` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `sno` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `semcode` varchar(7) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `research_book`
--

CREATE TABLE IF NOT EXISTS `research_book` (
  `rid` int(11) NOT NULL,
  `chapter_title` varchar(500) NOT NULL,
  `authors` varchar(500) NOT NULL,
  `publisher` varchar(600) NOT NULL,
  `page_numbers` varchar(10) NOT NULL,
  `book_publish_year` int(5) NOT NULL,
  `book_isbn` int(14) NOT NULL,
  `sid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `research_conference`
--

CREATE TABLE IF NOT EXISTS `research_conference` (
  `rid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `people` varchar(500) NOT NULL,
  `conference_name` varchar(300) NOT NULL,
  `conference_date` date NOT NULL,
  `conference_location` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `research_journal`
--

CREATE TABLE IF NOT EXISTS `research_journal` (
  `rid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `authors` varchar(500) NOT NULL,
  `journal_name` varchar(300) NOT NULL,
  `journal_volume` int(11) NOT NULL,
  `journal_no` int(11) NOT NULL,
  `publish_date` date NOT NULL,
  `journal_pages` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `sid` int(11) NOT NULL,
  `journal_impact` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semcode` varchar(11) NOT NULL,
  `year` int(4) NOT NULL,
  `odd` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semcode`, `year`, `odd`) VALUES
('1516ODDSEM', 2015, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE IF NOT EXISTS `slots` (
  `slid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sl_date` date NOT NULL,
  `sl_stime` time NOT NULL,
  `sl_etime` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slid`, `timestamp`, `sl_date`, `sl_stime`, `sl_etime`) VALUES
(1, '2015-10-05 16:54:53', '2015-10-21', '12:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `regno` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `full_part` varchar(5) NOT NULL,
  `status` varchar(300) NOT NULL,
  `sdob` date NOT NULL,
  `semail` varchar(100) NOT NULL,
  `sbranch` varchar(4) DEFAULT NULL,
  `sdoa` date NOT NULL,
  `sdurb` date NOT NULL,
  `sthesis` varchar(500) NOT NULL,
  `sphone` varchar(200) NOT NULL,
  `comm_id` int(11) NOT NULL,
  `slid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `timestamp`, `regno`, `sname`, `full_part`, `status`, `sdob`, `semail`, `sbranch`, `sdoa`, `sdurb`, `sthesis`, `sphone`, `comm_id`, `slid`) VALUES
(1, '2015-10-05 16:59:26', 2147483647, 'Pradeep Arora', '', '', '1989-08-05', 'Engg.pardeeparora@gmail.com', 'COE', '2010-08-01', '2012-04-27', 'Mobile Agent Based Regression Test Case Generation', '988838670', 1, 1),
(2, '2015-10-05 17:02:30', 950903030, 'Kirti Wanjale', '', '', '1989-07-21', 'kwanjale@yahoo.com', 'COE', '2010-06-05', '2010-10-20', 'Design of framework for Intelligent Particle Filter Based CBIR System', '955293391', 1, 1),
(4, '2015-10-14 08:01:04', 1000000002, 'Akshit Arora', 'full', 'Coursework', '2013-10-29', 'akshitarora@gmail.com', 'ECE', '2013-11-30', '2013-10-29', 'Mobile Netowrk', '1000000005', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stu_course`
--

CREATE TABLE IF NOT EXISTS `stu_course` (
  `SrNo` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_course`
--

INSERT INTO `stu_course` (`SrNo`, `sno`, `cid`) VALUES
(1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `doc_comm`
--
ALTER TABLE `doc_comm`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`), ADD UNIQUE KEY `faculty_code` (`faculty_code`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `outside_faculty`
--
ALTER TABLE `outside_faculty`
  ADD PRIMARY KEY (`ofid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`sno`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `research_book`
--
ALTER TABLE `research_book`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `research_conference`
--
ALTER TABLE `research_conference`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `research_journal`
--
ALTER TABLE `research_journal`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semcode`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`), ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `stu_course`
--
ALTER TABLE `stu_course`
  ADD PRIMARY KEY (`SrNo`), ADD UNIQUE KEY `sno` (`sno`,`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doc_comm`
--
ALTER TABLE `doc_comm`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `outside_faculty`
--
ALTER TABLE `outside_faculty`
  MODIFY `ofid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `research_conference`
--
ALTER TABLE `research_conference`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `research_journal`
--
ALTER TABLE `research_journal`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stu_course`
--
ALTER TABLE `stu_course`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
