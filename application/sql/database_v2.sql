SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


drop table if exists emp_user_info;
drop table if exists admin_user_info;
drop table if exists tech_user_info;
drop table if exists prepare_form;
drop table if exists form_info;
drop table if exists admission_access;
drop table if exists financial_access;
drop table if exists financial_aid_access;
drop table if exists reserved_access;
drop table if exists student_record_access;
drop table if exists application;

--
-- Database: `TeamW`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_user_info`
--

CREATE TABLE `emp_user_info` (
  `pawprint` varchar(10) PRIMARY KEY NOT NULL,
  `username` varchar(55) NOT NULL,
  `empiid` int(15) NOT NULL,
  `title` varchar(55) NOT NULL,
  `organization` varchar(55) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(55) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_info`
--

CREATE TABLE `admin_user_info` (
  `pawprint` varchar(10) PRIMARY KEY NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(55) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `tech_user_info`
--

CREATE TABLE `tech_user_info` (
  `pawprint` varchar(10) PRIMARY KEY NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(55) NOT NULL
);


-- --------------------------------------------------------

--
-- Table structure for table `form_info`
--

CREATE TABLE `form_info` (
  `form_id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `pawprint` varchar(10) REFERENCES emp_user_info(pawprint),
  `app_id` int NOT NULL,
  `create_date` date,
  `approved_date` date,
  `admin_approved_pawprint` varchar(10) REFERENCES admin_user_info(pawprint),
  `approved` boolean NOT NULL DEFAULT 0
);

-- --------------------------------------------------------

--
-- Table structure for table `prepare_form`
--

CREATE TABLE `prepare_form` (
  `form_id` int REFERENCES form_info(form_id),
  PRIMARY KEY (form_id),
  `request_status` int(1) NOT NULL,
  `student_worker` int(1) NOT NULL,
  `if_cur_staff` int(1) NOT NULL,
  `ref_name` varchar(30) NOT NULL,
  `ref_pos` varchar(30) NOT NULL,
  `ref_pawprint` varchar(10) NOT NULL,
  `ref_empiid` int(15) NOT NULL,
  `ferpa_score` int(11) NOT NULL,
  `access_type` int(5) NOT NULL,
  `academic_career` int NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `admission_access`
--

CREATE TABLE `admission_access` (
  `form_id` int REFERENCES form_info(form_id),
  PRIMARY KEY (form_id),
  `act` tinyint(1) DEFAULT NULL,
  `lelts` tinyint(1) DEFAULT NULL,
  `ged` tinyint(1) DEFAULT NULL,
  `sat` tinyint(1) DEFAULT NULL,
  `lsat` tinyint(1) DEFAULT NULL,
  `millers` tinyint(1) DEFAULT NULL,
  `gre` tinyint(1) DEFAULT NULL,
  `mcat` tinyint(1) DEFAULT NULL,
  `rpax` tinyint(1) DEFAULT NULL,
  `gmat` tinyint(1) DEFAULT NULL,
  `ap` tinyint(1) DEFAULT NULL,
  `pla-mu` tinyint(1) DEFAULT NULL,
  `tofel` tinyint(1) DEFAULT NULL,
  `clep` tinyint(1) DEFAULT NULL,
  `base` tinyint(1) DEFAULT NULL
);


-- --------------------------------------------------------

--
-- Table structure for table `financial_access`
--

CREATE TABLE `financial_access` (
  `form_id` int REFERENCES form_info(form_id),
  PRIMARY KEY (`form_id`),
  `general_inquiry` tinyint(1) NOT NULL,
  `cash_group_post` tinyint(1) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `financial_aid_access`
--

CREATE TABLE `financial_aid_access` (
  `form_id` int REFERENCES form_info(form_id),
  PRIMARY KEY (`form_id`),
  `fa_cash` tinyint(1) DEFAULT NULL,
  `fa_non_financial_aid_stuff` tinyint(1) DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `reserved_access`
--

CREATE TABLE `reserved_access` (
  `form_id` int REFERENCES form_info(form_id),
  PRIMARY KEY (`form_id`),
  `immunization_view` tinyint(1) DEFAULT NULL,
  `transfer_credit_admission` tinyint(1) DEFAULT NULL,
  `relationships` tinyint(1) DEFAULT NULL,
  `student_groups` tinyint(1) DEFAULT NULL,
  `accommodate` tinyint(1) DEFAULT NULL,
  `support_staff` tinyint(1) DEFAULT NULL,
  `advance_standing_report` tinyint(1) DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `student_record_access`
--

CREATE TABLE `student_record_access` (
  `form_id` int REFERENCES form_info(form_id),
  PRIMARY KEY (`form_id`),
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
);



-- --------------------------------------------------------

--
-- Dumping data
--

INSERT INTO `tech_user_info` (`pawprint`, `username`, `email`, `password`, `salt`) VALUES
('cwcf34', 'Cody Cameron', 'cwcf34@mail.missouri.edu', '123321', '123'),
('twn64', 'Tianbo Wang', 'twn64@mail.missouri.edu', '123321', '123');

-- INSERT INTO `emp_user_info` (`pawprint`, `username`, `empiid`, `title`, `organization`, `address`, `phone_num`, `password`, `salt`) VALUES
-- ('cwcf34', 'Cody Cameron', 'cwcf34@mail.missouri.edu', '123321', '123'),
-- ('twn64', 'Tianbo Wang', 'twn64@mail.missouri.edu', '123321', '123');






