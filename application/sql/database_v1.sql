-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 04, 2015 at 08:41 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TeamW`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_access`
--

CREATE TABLE `admission_access` (
  `form_id` varchar(55) NOT NULL,
  `form_index` int(1) NOT NULL,
  `ACT` tinyint(1) DEFAULT NULL,
  `LELTS` tinyint(1) DEFAULT NULL,
  `GED` tinyint(1) DEFAULT NULL,
  `SAT` tinyint(1) DEFAULT NULL,
  `LSAT` tinyint(1) DEFAULT NULL,
  `MILLERS` tinyint(1) DEFAULT NULL,
  `GRE` tinyint(1) DEFAULT NULL,
  `MCAT` tinyint(1) DEFAULT NULL,
  `RPAX` tinyint(1) DEFAULT NULL,
  `GMAT` tinyint(1) DEFAULT NULL,
  `AP` tinyint(1) DEFAULT NULL,
  `PLA-MU` tinyint(1) DEFAULT NULL,
  `TOEFL` tinyint(1) DEFAULT NULL,
  `CLEP` tinyint(1) DEFAULT NULL,
  `BASE` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `username` varchar(55) NOT NULL,
  `password_hash` varchar(55) NOT NULL,
  `salt` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`username`, `password_hash`, `salt`) VALUES
('admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `financial_access`
--

CREATE TABLE `financial_access` (
  `form_id` varchar(55) NOT NULL,
  `form_index` int(1) NOT NULL,
  `general_inquiry` tinyint(1) NOT NULL,
  `cash_group_post` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `financial_aid_access`
--

CREATE TABLE `financial_aid_access` (
  `form_id` varchar(55) NOT NULL,
  `form_index` int(1) NOT NULL,
  `fa_cash` tinyint(1) DEFAULT NULL,
  `fa_non_financial_aid_stuff` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_approval`
--

CREATE TABLE `form_approval` (
  `form_id` varchar(55) NOT NULL,
  `approval_id` varchar(55) NOT NULL,
  `header_name` varchar(55) NOT NULL,
  `Dean_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_prepare`
--

CREATE TABLE `form_prepare` (
  `empid` int(15) DEFAULT NULL,
  `form_id` varchar(55) NOT NULL DEFAULT '',
  `request_type` int(1) NOT NULL,
  `ferpa_score` int(11) NOT NULL,
  `request_form` int(1) NOT NULL,
  `academic_level` varchar(5) NOT NULL,
  `approval_id` varchar(55) NOT NULL,
  `curr_former` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration_info`
--

CREATE TABLE `registration_info` (
  `regis_organization` varchar(55) NOT NULL,
  `regis_id` int(10) NOT NULL,
  `regis_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regis_anthentication`
--

CREATE TABLE `regis_anthentication` (
  `regis_name` varchar(55) NOT NULL,
  `password_hash` varchar(55) NOT NULL,
  `salt` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserved_access`
--

CREATE TABLE `reserved_access` (
  `form_id` varchar(55) NOT NULL,
  `form_index` int(1) NOT NULL,
  `immunization_view` tinyint(1) DEFAULT NULL,
  `transfer_credit_admission` tinyint(1) DEFAULT NULL,
  `relationships` tinyint(1) DEFAULT NULL,
  `student_groups` tinyint(1) DEFAULT NULL,
  `accommodate` tinyint(1) DEFAULT NULL,
  `support_staff` tinyint(1) DEFAULT NULL,
  `advance_standing_report` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `form_id` varchar(55) NOT NULL,
  `approval_id` varchar(55) NOT NULL,
  `approval` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_record_access`
--

CREATE TABLE `student_record_access` (
  `form_id` varchar(55) NOT NULL,
  `form_index` int(1) NOT NULL,
  `basic_inquiry` tinyint(1) NOT NULL,
  `advanced_inquiry` tinyint(1) NOT NULL,
  `3Cs` tinyint(1) NOT NULL,
  `advisor_update` tinyint(1) NOT NULL,
  `department_SOC_update` tinyint(1) NOT NULL,
  `service_indicators` tinyint(1) NOT NULL,
  `student_group_view` tinyint(1) NOT NULL,
  `view_study_list` tinyint(1) NOT NULL,
  `registrar_enrollment` tinyint(1) NOT NULL,
  `advisor_student_center` tinyint(1) NOT NULL,
  `class_permission` tinyint(1) NOT NULL,
  `class_permission_view` tinyint(1) NOT NULL,
  `class_roster` tinyint(1) NOT NULL,
  `block_enrollment` tinyint(1) NOT NULL,
  `report_manager` tinyint(1) NOT NULL,
  `self_service_advisor` tinyint(1) NOT NULL,
  `fiscal_officer` tinyint(1) NOT NULL,
  `academic_advising_profile` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `username` varchar(55) NOT NULL,
  `empid` int(15) NOT NULL,
  `title` varchar(55) NOT NULL,
  `organization` varchar(55) NOT NULL,
  `pawprint` varchar(6) NOT NULL,
  `address` varchar(55) NOT NULL,
  `phone_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`username`, `empid`, `title`, `organization`, `pawprint`, `address`, `phone_num`) VALUES
('admin', 12345678, 'student', 'computer science', 'twn64', '2900 old 63 s', '2147483647'),
('admin', 12345678, 'student', 'CS/IT', 'twn64', '2900 old 63 s', '2147483647'),
('admin', 12345678, 'student', 'CS/IT', 'twn64', '2900 old 63 s', '5553336666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_access`
--
ALTER TABLE `admission_access`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `financial_access`
--
ALTER TABLE `financial_access`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `financial_aid_access`
--
ALTER TABLE `financial_aid_access`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `form_prepare`
--
ALTER TABLE `form_prepare`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `reserved_access`
--
ALTER TABLE `reserved_access`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `student_record_access`
--
ALTER TABLE `student_record_access`
  ADD PRIMARY KEY (`form_id`);
