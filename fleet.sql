-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 06:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fleet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_email_address` varchar(30) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `garage_address` varchar(30) NOT NULL,
  `garage_contact_no` int(11) NOT NULL,
  `garage_logo` varchar(30) NOT NULL,
  `garage_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_email_address`, `admin_name`, `admin_password`, `garage_address`, `garage_contact_no`, `garage_logo`, `garage_name`) VALUES
(1, 'sunimal@gmail.com', 'lakshi', '123', 'Lakmi,Godagedara,Balapitiya', 763472086, '', 'autoMan');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `a_id` int(11) NOT NULL,
  `a_type` enum('Flue','Repair') DEFAULT NULL,
  `Created_by` datetime DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending',
  `mechanic_schedule_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`a_id`, `a_type`, `Created_by`, `cus_id`, `v_id`, `status`, `mechanic_schedule_id`) VALUES
(1, 'Flue', '2021-12-20 15:21:43', 9, 3, 'Pending', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `appointment_id` int(11) NOT NULL,
  `mechanic_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `mechanic_schedule_id` int(11) DEFAULT NULL,
  `appointment_number` int(11) NOT NULL,
  `reason_for_appointment` varchar(100) NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `customer_come_into_garage` enum('No','Yes') NOT NULL,
  `mechanic_comment` varchar(50) NOT NULL,
  `appointment_date` date DEFAULT NULL,
  `comment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`appointment_id`, `mechanic_id`, `customer_id`, `mechanic_schedule_id`, `appointment_number`, `reason_for_appointment`, `appointment_time`, `status`, `customer_come_into_garage`, `mechanic_comment`, `appointment_date`, `comment_status`) VALUES
(1, 1, 1, 1, 1000, 'repair', '17:09:33', 'Cancel', 'Yes', 'done', '2022-01-11', 1),
(2, 1, 2, 1, 1001, 'flue', '02:20:40', 'Booked', 'No', '', '2022-01-12', 1),
(3, 2, 1, 2, 1002, '', '05:30:00', 'Booked', 'No', '', NULL, 1),
(4, 2, NULL, 2, 1003, '', '06:45:00', 'Booked', 'No', '', NULL, 1),
(6, 5, 1, 4, 1004, 'Break down', '05:30:00', 'Booked', 'No', '', NULL, 1),
(7, 4, 1, 5, 1005, 'repair', '05:30:00', 'Booked', 'No', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `c_mobile` varchar(15) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(256) NOT NULL,
  `c_created_date` datetime NOT NULL,
  `c_pwd` varchar(100) DEFAULT NULL,
  `c_isactive` varchar(11) NOT NULL DEFAULT '1',
  `c_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_mobile`, `c_email`, `c_address`, `c_created_date`, `c_pwd`, `c_isactive`, `c_modified_date`) VALUES
(1, 'Lakshi Mendis', '0763472086', 'lakshimendis8923@gmail.com', 'Lakmi, Godagedara, Balapitiya, Sri Lanka, Sri Lanka, 80550', '0000-00-00 00:00:00', 'fcea920f7412b5da7be0cf42b8c93759', '1', '2021-09-21 05:03:16'),
(2, 'saman', '0748548596', 'saman@gmail.com', 'colombo', '2021-09-21 09:14:31', '1234', '1', '2021-09-21 19:14:41'),
(3, 'Lakshi Mendis', '0763472086', 'luckymendis13@gmail.com', 'Lakmi, Godagedara, Balapitiya, Sri Lanka, Sri Lanka, 80550', '0000-00-00 00:00:00', 'fcea920f7412b5da7be0cf42b8c93759', '1', '2022-01-07 05:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_address` varchar(30) NOT NULL,
  `customer_email_address` varchar(30) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `email_verify` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `customer_verification_code` varchar(50) NOT NULL,
  `customer_phone_no` varchar(12) NOT NULL,
  `customer_added_on` datetime NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `customer_image` varchar(60) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `city` varchar(15) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `customer_name`, `customer_address`, `customer_email_address`, `customer_password`, `email_verify`, `customer_verification_code`, `customer_phone_no`, `customer_added_on`, `is_active`, `customer_image`, `status`, `city`, `lat`, `lng`, `otp`) VALUES
(1, 'lakshi mendis', 'galle', 'luckymendis13@gmail.com', '1234567', 'Yes', '', '0763472086', '2022-01-11 17:06:51', 1, '', 'Active', '', '', '', 0),
(2, 'sunil', 'colombo', 'sunil@gmail.com', '123', 'Yes', '', '074521032', '2022-01-11 21:15:15', 1, '', 'Active', '', '', '', 0),
(3, 'renuka', 'J274+34 Kalutara, Sri Lanka', 'renu@gmail.com', '123', 'Yes', '', '0343245856', '0000-00-00 00:00:00', 1, '219969.png', 'Active', 'Kalutara', '6.612696122905826', '80.00529310183443', 0),
(4, 'Lakshi Mendis', '', 'lakshimendis8923@gmail.com', '123', 'No', '43ee0db292632d28852f17b2676b8cfa', '0763472086', '2022-01-21 09:01:59', 1, '', 'Active', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_mobile` varchar(15) NOT NULL,
  `d_address` varchar(250) NOT NULL,
  `d_age` int(11) NOT NULL,
  `d_licenseno` varchar(100) NOT NULL,
  `d_license_expdate` date NOT NULL,
  `d_total_exp` int(11) NOT NULL,
  `d_doj` date NOT NULL,
  `d_ref` varchar(256) DEFAULT NULL,
  `d_is_active` int(11) NOT NULL DEFAULT 1,
  `d_created_by` varchar(100) NOT NULL,
  `d_created_date` datetime NOT NULL,
  `d_modified_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_id` int(11) DEFAULT NULL,
  `password` varchar(15) NOT NULL,
  `d_image` text NOT NULL,
  `d_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`d_id`, `d_name`, `d_mobile`, `d_address`, `d_age`, `d_licenseno`, `d_license_expdate`, `d_total_exp`, `d_doj`, `d_ref`, `d_is_active`, `d_created_by`, `d_created_date`, `d_modified_date`, `m_id`, `password`, `d_image`, `d_email`) VALUES
(1, 'Nimal Silva', '0741452863', 'Galle', 25, '100025', '2022-02-10', 2, '2021-09-23', 'test', 1, '1', '2021-09-23 07:41:15', '2021-09-23 17:41:10', NULL, '1234', '03.jpg', 'nimal@gmail.com'),
(2, 'Sunil Perera', '0754857412', 'Colombo', 32, '0001425', '2021-11-05', 1, '2021-06-08', 'test 2', 0, '1', '2021-09-24 10:45:03', '2021-09-23 17:53:37', NULL, '456', '02.jpg', 'sunil@gmail.com'),
(3, 'sunith', '0763472086', 'galle', 20, '1230', '2022-01-06', 2, '0000-11-30', '', 0, '1', '2021-09-25 07:08:41', '2021-09-25 04:14:05', NULL, '123', 'comments-01.jpg', 'sunith@gmail.com'),
(4, 'sirimal', '0752412365', 'colombo', 35, '12452', '2021-12-17', 1, '2021-09-25', 'test', 1, '1', '2021-09-25 07:10:28', '2021-09-25 05:11:17', NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `et_id` int(11) NOT NULL,
  `et_name` varchar(256) NOT NULL,
  `et_subject` varchar(100) NOT NULL,
  `et_body` longtext NOT NULL,
  `et_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`et_id`, `et_name`, `et_subject`, `et_body`, `et_created_date`) VALUES
(1, 'booking', 'Booking Confirmation - VMS', '<p>Dear Customer,<p>\r\n\r\n<p>Thank you for choosing VMS<p>\r\n\r\n<p>We look forward to welcoming you to strat trip.<p>\r\n\r\n<p>{{bookingdetails}}<p>\r\n\r\n<p>Our professional and friendly staff are committed to ensuring your travel is both enjoyable and comfortable.<p>\r\n\r\n<p>Should you have any requests prior to your travel, please do not hesitate to contact us and we will endeavor to assist you whenever possible.<p>', '2020-07-30 19:47:12'),
(2, 'tracking', 'Trip Tracking - VMS', '<p>Dear Customer,</p>\r\n\r\n<p>Please use below url to track trip live location.</p>\r\n\r\n<p>URL : {{url}}<p>', '2020-07-30 20:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `v_fuel_id` int(10) NOT NULL,
  `v_id` int(100) NOT NULL,
  `v_fuel_quantity` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_odometerreading` varchar(100) DEFAULT NULL,
  `v_fuelprice` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_fuelfilldate` date NOT NULL,
  `v_fueladdedby` varchar(100) NOT NULL,
  `v_fuelcomments` varchar(256) NOT NULL,
  `v_created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `id` int(11) NOT NULL,
  `garage_name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `description` varchar(30) NOT NULL,
  `garage_image` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garage`
--

INSERT INTO `garage` (`id`, `garage_name`, `email`, `address`, `password`, `phone_no`, `description`, `garage_image`, `status`) VALUES
(1, 'Auto Service', 'nimal@gmail.com', 'Kalutara', '1234', 741458965, 'test 1', 'service/03.jpg', '1'),
(2, 'service', 'saman@gmail.com', 'galle', '123', 741258415, 'tset', '01.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `geofences`
--

CREATE TABLE `geofences` (
  `geo_id` int(11) NOT NULL,
  `geo_name` varchar(128) NOT NULL,
  `geo_description` varchar(128) DEFAULT NULL,
  `geo_area` varchar(4096) NOT NULL,
  `geo_vehicles` varchar(256) NOT NULL,
  `geo_createddate` datetime NOT NULL DEFAULT current_timestamp(),
  `geo_modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geofences`
--

INSERT INTO `geofences` (`geo_id`, `geo_name`, `geo_description`, `geo_area`, `geo_vehicles`, `geo_createddate`, `geo_modifieddate`) VALUES
(1, 'Garage', 'All garagae near by galle', 'undefined', '1', '2021-09-24 20:11:26', '0000-00-00 00:00:00'),
(2, 'Nearest customer', 'test1', 'undefined', '1', '2021-09-25 02:42:22', '0000-00-00 00:00:00'),
(3, 'Saman', 'Mechanc', 'undefined', '2', '2021-10-14 22:40:18', '0000-00-00 00:00:00'),
(5, 'Mechanic', 'Galle', 'undefined', '3,2', '2022-01-09 12:05:53', '0000-00-00 00:00:00'),
(6, 'test2', 'sd', 'undefined', '3', '2022-01-13 21:05:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `geofence_events`
--

CREATE TABLE `geofence_events` (
  `ge_id` int(11) NOT NULL,
  `ge_v_id` varchar(11) NOT NULL,
  `ge_geo_id` varchar(11) NOT NULL,
  `ge_event` varchar(256) NOT NULL,
  `ge_timestamp` varchar(100) NOT NULL,
  `ge_created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `incomeexpense`
--

CREATE TABLE `incomeexpense` (
  `ie_id` int(11) NOT NULL,
  `ie_v_id` varchar(100) NOT NULL,
  `ie_date` date NOT NULL,
  `ie_type` varchar(100) NOT NULL,
  `ie_description` varchar(256) NOT NULL,
  `ie_amount` int(100) NOT NULL,
  `ie_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `ie_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incomeexpense`
--

INSERT INTO `incomeexpense` (`ie_id`, `ie_v_id`, `ie_date`, `ie_type`, `ie_description`, `ie_amount`, `ie_created_date`, `ie_modified_date`) VALUES
(1, '1', '2021-12-15', 'income', 'test', 1500, '2021-12-15 03:50:23', '2021-12-15 02:50:40'),
(2, '1', '2022-01-14', 'income', 'payment from trip and done', 2000, '2022-01-14 00:00:00', '2022-01-14 17:42:46'),
(3, '4', '2022-01-14', 'income', 'payment from trip and payment', 1500, '2022-01-14 00:00:00', '2022-01-14 19:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `u_username` varchar(250) NOT NULL,
  `u_password` varchar(250) NOT NULL,
  `u_isactive` varchar(100) NOT NULL DEFAULT '1',
  `u_email` varchar(256) NOT NULL,
  `u_created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `u_name`, `u_username`, `u_password`, `u_isactive`, `u_email`, `u_created_date`) VALUES
(1, 'lakshi', 'luckymendis13@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1', 'luckymendis13@gmail.com', '2021-12-15 08:18:12'),
(2, 'Customer', 'Nimal', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'nimal@gmail.com', '2021-09-21 03:54:22'),
(3, 'saman', 'saman', 'fcea920f7412b5da7be0cf42b8c93759', '1', 'lakshimendis8923@gmail.com', '2021-09-21 04:02:49'),
(7, 'lak', 'lak', '1234', '1', 'lak@gmail.com', '2021-12-14 19:56:03'),
(8, 'lak', 'lak', '1234', '1', 'lak@gmail.com', '2021-12-14 19:56:03'),
(9, 'lakshi', 'lakshi', '855b91ce6266aeaf69090e9ee89991c5', '0', 'luckymendis13@gmail.com', '2022-01-14 02:36:54'),
(10, 'Lakshi Mendis', 'Lakshi', 'fcea920f7412b5da7be0cf42b8c93759', '1', 'lakshimendis8923@gmail.com', '2022-01-14 02:37:55'),
(11, 'Lakshi Mendis', 'Lakshi', 'fcea920f7412b5da7be0cf42b8c93759', '1', 'e1841086@bit.mrt.ac.lk', '2022-01-14 02:41:47'),
(12, 'sama', 'sama@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'sama@gmail.com', '2022-01-14 23:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `login_roles`
--

CREATE TABLE `login_roles` (
  `lr_id` int(11) NOT NULL,
  `lr_u_id` int(11) NOT NULL,
  `lr_vech_list` int(11) NOT NULL DEFAULT 0,
  `lr_vech_list_view` int(11) NOT NULL DEFAULT 0,
  `lr_vech_list_edit` int(11) NOT NULL DEFAULT 0,
  `lr_vech_add` int(11) NOT NULL DEFAULT 0,
  `lr_vech_group` int(11) NOT NULL DEFAULT 0,
  `lr_vech_group_add` int(11) NOT NULL DEFAULT 0,
  `lr_vech_group_action` int(11) NOT NULL DEFAULT 0,
  `lr_drivers_list` int(11) NOT NULL DEFAULT 0,
  `lr_drivers_list_edit` int(11) NOT NULL DEFAULT 0,
  `lr_drivers_add` int(11) NOT NULL DEFAULT 0,
  `lr_trips_list` int(11) NOT NULL DEFAULT 0,
  `lr_trips_list_edit` int(11) NOT NULL DEFAULT 0,
  `lr_trips_add` int(11) NOT NULL DEFAULT 0,
  `lr_cust_list` int(11) NOT NULL DEFAULT 0,
  `lr_cust_edit` int(11) NOT NULL DEFAULT 0,
  `lr_cust_add` int(11) NOT NULL DEFAULT 0,
  `lr_fuel_list` int(11) NOT NULL DEFAULT 0,
  `lr_fuel_edit` int(11) NOT NULL DEFAULT 0,
  `lr_fuel_add` int(11) NOT NULL DEFAULT 0,
  `lr_reminder_list` int(11) NOT NULL DEFAULT 0,
  `lr_reminder_delete` int(11) NOT NULL DEFAULT 0,
  `lr_reminder_add` int(11) NOT NULL DEFAULT 0,
  `lr_ie_list` int(11) NOT NULL DEFAULT 0,
  `lr_ie_edit` int(11) NOT NULL DEFAULT 0,
  `lr_ie_add` int(11) NOT NULL DEFAULT 0,
  `lr_tracking` int(11) NOT NULL DEFAULT 0,
  `lr_liveloc` int(11) NOT NULL DEFAULT 0,
  `lr_geofence_add` int(11) NOT NULL DEFAULT 0,
  `lr_geofence_list` int(11) NOT NULL DEFAULT 0,
  `lr_geofence_delete` int(11) NOT NULL DEFAULT 0,
  `lr_geofence_events` int(11) NOT NULL DEFAULT 0,
  `lr_reports` int(11) NOT NULL DEFAULT 0,
  `lr_settings` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_roles`
--

INSERT INTO `login_roles` (`lr_id`, `lr_u_id`, `lr_vech_list`, `lr_vech_list_view`, `lr_vech_list_edit`, `lr_vech_add`, `lr_vech_group`, `lr_vech_group_add`, `lr_vech_group_action`, `lr_drivers_list`, `lr_drivers_list_edit`, `lr_drivers_add`, `lr_trips_list`, `lr_trips_list_edit`, `lr_trips_add`, `lr_cust_list`, `lr_cust_edit`, `lr_cust_add`, `lr_fuel_list`, `lr_fuel_edit`, `lr_fuel_add`, `lr_reminder_list`, `lr_reminder_delete`, `lr_reminder_add`, `lr_ie_list`, `lr_ie_edit`, `lr_ie_add`, `lr_tracking`, `lr_liveloc`, `lr_geofence_add`, `lr_geofence_list`, `lr_geofence_delete`, `lr_geofence_events`, `lr_reports`, `lr_settings`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 2, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1),
(5, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1),
(6, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1),
(7, 12, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `mechanic_image` text CHARACTER SET latin1 NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`Id`, `first_name`, `last_name`, `email`, `address`, `password`, `phone_no`, `description`, `mechanic_image`, `status`) VALUES
(1, 'Kamal', '', 'kamal@gmail.com', 'Galle', '123', 715423650, 0, '01.jpg', ''),
(3, 'Nimal', '', 'nimal@gmail.com', 'Colombo', '1234', 784784523, 0, '03.jpg', ''),
(4, 'Sunil', '', 'sunil@gmail.com', 'Colombo', '1234', 741258963, 0, '02.jpg', ''),
(7, 'sunith', 'silva', 'sunith@gmail.com', 'panadura', '123', 763472086, 0, '05.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_schedule_table`
--

CREATE TABLE `mechanic_schedule_table` (
  `mechanic_schedule_id` int(11) NOT NULL,
  `mechanic_schedule_date` date DEFAULT NULL,
  `mechanic_schedule_day` varchar(50) DEFAULT NULL,
  `mechanic_schedule_start_time` varchar(20) DEFAULT NULL,
  `mechanic_schedule_end_time` varchar(20) DEFAULT NULL,
  `mechanic_schedule_status` enum('Active','Inactive') DEFAULT 'Active',
  `mechanic_id` int(11) DEFAULT NULL,
  `average_consulting_time` int(5) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic_schedule_table`
--

INSERT INTO `mechanic_schedule_table` (`mechanic_schedule_id`, `mechanic_schedule_date`, `mechanic_schedule_day`, `mechanic_schedule_start_time`, `mechanic_schedule_end_time`, `mechanic_schedule_status`, `mechanic_id`, `average_consulting_time`, `user_id`) VALUES
(0, '2022-01-14', 'Friday', '10:00', '17:20', 'Active', 4, 75, NULL),
(1, '2022-01-14', 'Monday - Friday', '18:00', '18:00', 'Active', 1, 55, 4),
(2, '2022-01-12', 'Monday - Friday', '9.00 AM', '5.00 PM', 'Active', 2, 65, NULL),
(4, '2022-01-14', 'Monday - Friday', '05:00', '06:00', 'Active', 5, 75, NULL),
(5, '2022-01-15', 'Monday - Friday', '8.30 AM', '5.00 PM', 'Active', 4, 10, NULL),
(6, '2021-12-31', 'Tuesday - Saturday', '9.30', '15.30', 'Active', 5, 40, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_table`
--

CREATE TABLE `mechanic_table` (
  `mechanic_id` int(11) NOT NULL,
  `mechanic_name` varchar(30) NOT NULL,
  `mechanic_address` varchar(50) NOT NULL,
  `mechanic_email_address` varchar(50) NOT NULL,
  `mechanic_password` varchar(30) NOT NULL,
  `mechanic_phone_no` varchar(12) NOT NULL,
  `mechanic_profile_image` varchar(30) NOT NULL,
  `mechanic_status` enum('Active','Inactive') NOT NULL,
  `mechanic_lat` varchar(50) NOT NULL,
  `mechanic_long` varchar(50) NOT NULL,
  `mechanic_describtion` varchar(150) NOT NULL,
  `mechanic_added_on` datetime NOT NULL,
  `city` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic_table`
--

INSERT INTO `mechanic_table` (`mechanic_id`, `mechanic_name`, `mechanic_address`, `mechanic_email_address`, `mechanic_password`, `mechanic_phone_no`, `mechanic_profile_image`, `mechanic_status`, `mechanic_lat`, `mechanic_long`, `mechanic_describtion`, `mechanic_added_on`, `city`, `role`) VALUES
(1, 'Lakshi', 'galle', 'luckymendis13@gmail.com', '1234567', '0752145541', '../images/102984393.jpg', 'Active', '', '', 'test', '2022-01-11 17:08:28', '', ''),
(2, 'Sirimal Perera', 'Moratuwa', 'sirimal@gmail.com', '123', '0112412503', '../images/1289212662.jpg', 'Active', '', '', 'test', '2022-01-11 22:30:47', '', ''),
(3, 'Sunimal Silva', 'Panadura', 'suni@gmail.com', '12345', '0741523685', '', 'Active', '', '', '', '2021-12-30 19:34:29', '', ''),
(4, 'SRI Kumar', 'Kandy', 'siri@gmail.com', '1234', '0752548563', '', 'Active', '', '', 'If you need more details please contact me', '2021-11-10 19:34:29', '', ''),
(5, 'Manel', 'JPCP+C9 Dambagahamada, Sri Lanka', 'luckymendis13@gmail.com', '1234567', '0784152630', '', 'Active', '7.621088421628831', '80.73588392214693', 'tset', '2021-12-08 20:58:05', 'Matale', 'Garage'),
(6, 'Nimli Garage', '5', 'nimali@gmail.com', '1230', '0715423650', '06.jpg', 'Active', '7.027221654280223', '81.18632337527193', 'testmn,JN', '0000-00-00 00:00:00', 'Galle', 'Garage'),
(7, 'kamal', 'galle', 'luckymendis13@gmail.com', '1234567', '0763472086', '06.jpg', 'Active', '6.083128045933946', '80.45573255495943', 'tetssss', '0000-00-00 00:00:00', 'Balapitiya', 'mechanic');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `n_id` int(11) NOT NULL,
  `n_subject` varchar(256) NOT NULL,
  `n_message` varchar(256) DEFAULT NULL,
  `n_is_read` int(11) NOT NULL DEFAULT 0,
  `n_created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `v_id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `altitude` double DEFAULT NULL,
  `speed` double DEFAULT NULL,
  `bearing` double DEFAULT NULL,
  `accuracy` int(11) DEFAULT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `r_id` int(11) NOT NULL,
  `r_v_id` varchar(11) NOT NULL,
  `r_date` date NOT NULL,
  `r_message` varchar(256) NOT NULL,
  `r_isread` varchar(11) NOT NULL DEFAULT '0',
  `r_created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`r_id`, `r_v_id`, `r_date`, `r_message`, `r_isread`, `r_created_date`) VALUES
(2, '1', '2021-12-20', 'test', '0', '2021-12-20 12:28:28'),
(3, '3', '2022-01-10', 'test', '0', '2022-01-09 06:37:59'),
(4, '2', '2022-01-15', 'want to payment', '1', '2022-01-15 00:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `s_id` int(11) NOT NULL,
  `s_companyname` varchar(100) DEFAULT NULL,
  `s_address` varchar(100) DEFAULT NULL,
  `s_inovice_prefix` varchar(100) NOT NULL,
  `s_logo` varchar(100) NOT NULL,
  `s_price_prefix` varchar(100) NOT NULL,
  `s_inovice_termsandcondition` varchar(256) NOT NULL,
  `s_inovice_servicename` varchar(100) NOT NULL,
  `s_googel_api_key` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`s_id`, `s_companyname`, `s_address`, `s_inovice_prefix`, `s_logo`, `s_price_prefix`, `s_inovice_termsandcondition`, `s_inovice_servicename`, `s_googel_api_key`) VALUES
(1, 'autoMan', 'Lakmi,Godagedara,Balapitiya', 'TEST', '', 'Rs', 'Sample invoice terms and condition..Please change it in settings page............                                                                                                                                                                               ', 'Vehicle Booking', 'AIzaSyDE8aB6dRwjXeFv5K19_3ZvThdX7RurR1Q');

-- --------------------------------------------------------

--
-- Table structure for table `settings_smtp`
--

CREATE TABLE `settings_smtp` (
  `smtp_host` varchar(100) NOT NULL,
  `smtp_auth` varchar(100) NOT NULL,
  `smtp_uname` varchar(100) NOT NULL,
  `smtp_pwd` varchar(100) NOT NULL,
  `smtp_issecure` varchar(100) NOT NULL,
  `smtp_port` varchar(100) NOT NULL,
  `smtp_emailfrom` varchar(100) NOT NULL,
  `smtp_replyto` varchar(100) NOT NULL,
  `smtp_createddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` text NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(10,8) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `owner_name` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `image` text NOT NULL,
  `description` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shop_name`, `address`, `city`, `latitude`, `longitude`, `phone_no`, `email`, `owner_name`, `password`, `image`, `description`, `status`) VALUES
(1, 'nimal service', 'lakmi,godagedara,balapitiya', 'galle', '0.00000000', '0.00000000', 745852369, '', '', '', '', '', ''),
(2, 'ww', 'www', 'de', '0.00000000', '0.00000000', 0, '', '', '', '', '', ''),
(3, '', '722V+R68, Ambalangoda, Sri Lan', 'Galle', '6.25243036', '80.04374525', 0, '', '', '', '12.jpg', '', ''),
(4, '', 'C.P De Silva Mw, Sri Lanka', 'Galle', '6.31249228', '80.05473158', 0, '', '', '', '', '', ''),
(5, 'Nimal service', '4 B40, Balapitiya, Sri Lanka', 'Galle', '6.27427186', '80.04374525', 784582369, 'nimal@gmail.com', 'Nimal', '123', '12.jpg', 'shop 1', ''),
(6, 'siripala garage', 'Unnamed Road, Sri Lanka', 'Galle', '6.35616931', '80.45573255', 123, 'siripala@gmail.com', 'siripala', '1234567', '02.png', 'test4', ''),
(7, 'sunith shop ser', '219 High Level Rd, Hanwella, S', 'Colombo', '6.90726446', '80.09867689', 752586412, 'sunith@gmail.com', 'sunith', '123', '03.jpg', 'test 5', ''),
(8, '', '5', 'Galle', '6.08312805', '80.20854017', 0, 'luckymendis13@gmail.com', '', '1234', '03.jpg', 'test', ''),
(9, '', '', '', '0.00000000', '0.00000000', 0, 'luckymendis13@gmail.com', '', '1234567', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `star_rating`
--

CREATE TABLE `star_rating` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` smallint(6) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `t_id` int(11) NOT NULL,
  `t_customer_id` varchar(11) NOT NULL,
  `t_vechicle` varchar(100) NOT NULL,
  `t_type` varchar(100) NOT NULL,
  `t_driver` varchar(100) NOT NULL,
  `t_start_date` date NOT NULL,
  `t_end_date` date NOT NULL,
  `t_trip_fromlocation` varchar(100) NOT NULL,
  `t_trip_tolocation` varchar(100) NOT NULL,
  `t_trip_fromlat` varchar(100) DEFAULT NULL,
  `t_trip_fromlog` varchar(100) DEFAULT NULL,
  `t_trip_tolat` varchar(100) DEFAULT NULL,
  `t_trip_tolog` varchar(100) NOT NULL,
  `t_totaldistance` varchar(100) NOT NULL,
  `t_trip_amount` varchar(100) NOT NULL DEFAULT '0',
  `t_trip_status` varchar(50) NOT NULL DEFAULT 'OnGoing',
  `t_trackingcode` varchar(100) DEFAULT NULL,
  `t_created_by` varchar(100) NOT NULL,
  `t_created_date` datetime NOT NULL,
  `t_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`t_id`, `t_customer_id`, `t_vechicle`, `t_type`, `t_driver`, `t_start_date`, `t_end_date`, `t_trip_fromlocation`, `t_trip_tolocation`, `t_trip_fromlat`, `t_trip_fromlog`, `t_trip_tolat`, `t_trip_tolog`, `t_totaldistance`, `t_trip_amount`, `t_trip_status`, `t_trackingcode`, `t_created_by`, `t_created_date`, `t_modified_date`) VALUES
(1, '1', '1', 'Fuel', '0', '2021-09-22', '0000-00-00', 'Galle, Sri Lanka', 'Colombo, Sri Lanka', '6.0535185', '80.2209773', '6.9270786', '79.861243', '105', '0', 'yettoconfirm', '614968794a5d9', '1', '2021-09-21 07:06:38', '2021-09-21 19:39:05'),
(2, '1', '1', 'singletrip', '2', '2021-09-25', '2021-09-26', 'Galle, Sri Lanka', '', '1', '1', '1', '1', '', '6000', 'completed', '614dd3119488d', '1', '2021-09-25 07:12:05', '2021-09-25 05:12:26'),
(3, '1', '1', 'repair', '1', '2021-12-13', '2021-12-14', 'Galle', '', '1', '1', '1', '1', '', '6000', 'yettostart', '61b8ba13b0a96', '3', '2021-12-14 06:40:44', '2021-12-14 17:41:03'),
(4, '1', '4', 'repair', '3', '2021-12-20', '2021-12-22', 'Colombo, Sri Lanka', '', '6.9270786', '79.861243', '1', '1', '', '2000', 'completed', '61c07cbabb200', '1', '2021-12-20 01:32:33', '2021-12-20 12:53:14'),
(5, '3', '2', 'repair', '1', '2022-01-07', '1900-11-02', 'Galle, Sri Lanka', 'Colombo, Sri Lanka', '1', '1', '1', '1', '105', '1000', 'ongoing', '61d7ccb98074f', '1', '2022-01-07 06:19:33', '2022-01-07 05:19:40'),
(6, '2', '1', 'repair', '1', '2022-01-14', '2022-01-17', 'Panadura, Sri Lanka', '', '1', '1', '1', '1', '', '2000', 'completed', '61e1b5e6e2e0a', '1', '2022-01-14 08:32:23', '2022-01-14 19:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `trip_payments`
--

CREATE TABLE `trip_payments` (
  `tp_id` int(11) NOT NULL,
  `tp_trip_id` int(11) NOT NULL,
  `tp_v_id` int(11) NOT NULL,
  `tp_amount` int(100) NOT NULL,
  `tp_notes` varchar(256) DEFAULT NULL,
  `tp_created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `confirm_password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `description` varchar(40) NOT NULL,
  `image` text NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  `created_by` datetime DEFAULT NULL,
  `u_isactive` varchar(10) NOT NULL DEFAULT '1',
  `customer_verification_code` varchar(100) DEFAULT NULL,
  `email_verify` enum('No','Yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `user_id`, `address`, `password`, `confirm_password`, `email`, `description`, `image`, `lat`, `lng`, `city`, `phone_no`, `role`, `created_by`, `u_isactive`, `customer_verification_code`, `email_verify`) VALUES
('Sunil Silva', 1, '5', '1234', '1234', 'luckymendis13@gmail.com', 'test1', '03.jpg', '6.219666403656761', '80.10966321902193', 'Galle', 715423650, '', '2021-12-15 19:47:54', '1', NULL, 'No'),
('saman', 4, '27b Aruppola Watta Rd, Kandy 20000, Sri Lanka', '123', '123', 'saman@gmail.com', 'test', '05.jpg', '7.310632868855564', '80.64250013308443', 'Kandy', 741256396, 'Mechanic', '2021-12-08 19:48:15', '1', NULL, 'No'),
('Sri Garage', 6, 'F83W+Q7 Kataragama, Sri Lanka', '123', '123', 'sri@gmail.com', 'High quality', '04.jpg', '6.454429022174992', '81.34562513308443', 'Moneragala', 741523658, 'Garage', '2021-12-07 19:48:24', '1', NULL, 'Yes'),
('kamal perera', 9, '2 B348, Bodhirajapura, Sri Lanka', '123', '123', 'kamal@gmail.com', '', 'specialist-use.png', '7.98572162308364', '79.87895032839693', 'Puttalam', 714523652, 'Customer', '2021-12-13 19:48:29', '1', 'b1f3f8409f7687072adb1f1b7c22d4b0', 'Yes'),
('Nirmal Perera', 14, '33 Siri Dhamma Mawatha, Colombo 01000, Sri Lanka', '1234', '1234', 'ceylinco@gmail.com', 'test4', '03.jpg', '6.923624064121794', '79.87345716433443', 'Colombo', 112654120, 'Mechanic', '2021-12-05 19:48:33', '1', NULL, 'No'),
('Ceylinco Life', 21, '50 J. E. Gunasekara Ave, Colombo 01000, Sri Lanka', '1234', '1234', 'celinco@gmail.com', 'test4', 'download.jpg', '6.923624064121794', '79.86796400027193', 'Colombo', 112525632, 'Insurance', '2021-12-02 19:48:38', '1', NULL, 'No'),
('sunith shop service', 22, 'F8MR+X5 Kurunegala, Sri Lanka', '123', '', 'sunith@gmail.com', 'test1', '01.jpg', '7.484950868261822', '80.34037610964693', 'Kurunegala', 2147483647, 'Shop', '2021-12-19 19:48:45', '1', NULL, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `v_id` int(10) NOT NULL,
  `v_registration_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `v_model` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_chassis_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_engine_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_manufactured_by` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_type` varchar(100) NOT NULL,
  `v_color` varchar(100) NOT NULL,
  `v_mileageperlitre` varchar(100) NOT NULL,
  `v_is_active` int(10) NOT NULL DEFAULT 1,
  `v_group` int(11) NOT NULL,
  `v_reg_exp_date` varchar(100) NOT NULL,
  `v_api_url` varchar(100) NOT NULL,
  `v_api_username` varchar(100) NOT NULL,
  `v_api_password` varchar(100) NOT NULL,
  `v_created_by` varchar(100) NOT NULL,
  `v_created_date` datetime NOT NULL,
  `v_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`v_id`, `v_registration_no`, `v_name`, `v_model`, `v_chassis_no`, `v_engine_no`, `v_manufactured_by`, `v_type`, `v_color`, `v_mileageperlitre`, `v_is_active`, `v_group`, `v_reg_exp_date`, `v_api_url`, `v_api_username`, `v_api_password`, `v_created_by`, `v_created_date`, `v_modified_date`, `u_id`) VALUES
(1, '001', 'Toyota', '002', 'G001', '1245', 'Japan', 'CAR', '#F399EB', '', 1, 1, '2021-09-30', 'http://localhost/api', '001', '219756', '1', '2021-09-21 07:05:50', '2021-09-21 05:06:30', 0),
(2, '10023', 'fit', '07412', '0123', '523', 'Toyota', 'CAR', '#F33134', '', 1, 1, '2021-10-21', 'http://localhost/api', '10023', '394781', '1', '2021-09-25 07:05:58', '2021-09-25 05:06:57', 0),
(3, '1223', 'Aqua', '1256', '1245', '12456', 'Toyota', 'CAR', '#120B11', '', 1, 1, '2021-12-02', 'http://localhost/api', '1223', '734869', '1', '2021-09-25 07:07:11', '2021-09-25 05:08:05', 0),
(4, 'E14852', 'Toyota', 'A14', '22', '11', 'Toyota', 'CAR', '#060D03', '', 0, 1, '2022-01-03', 'http://localhost/api', 'E14852', '235614', '2', '2021-12-01 02:01:30', '2021-12-01 01:01:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_group`
--

CREATE TABLE `vehicle_group` (
  `gr_id` int(11) NOT NULL,
  `gr_name` varchar(256) NOT NULL,
  `gr_desc` varchar(256) NOT NULL,
  `gr_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_group`
--

INSERT INTO `vehicle_group` (`gr_id`, `gr_name`, `gr_desc`, `gr_created_date`) VALUES
(1, 'Lakshi', 'test', '2021-09-21 05:05:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `v_id` (`v_id`),
  ADD KEY `mechanic_schedule_id` (`mechanic_schedule_id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `mechanic_id` (`mechanic_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `mechanic_schedule_id` (`mechanic_schedule_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`et_id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`v_fuel_id`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geofences`
--
ALTER TABLE `geofences`
  ADD PRIMARY KEY (`geo_id`);

--
-- Indexes for table `geofence_events`
--
ALTER TABLE `geofence_events`
  ADD PRIMARY KEY (`ge_id`);

--
-- Indexes for table `incomeexpense`
--
ALTER TABLE `incomeexpense`
  ADD PRIMARY KEY (`ie_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `login_roles`
--
ALTER TABLE `login_roles`
  ADD PRIMARY KEY (`lr_id`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mechanic_schedule_table`
--
ALTER TABLE `mechanic_schedule_table`
  ADD PRIMARY KEY (`mechanic_schedule_id`),
  ADD KEY `User_id` (`user_id`),
  ADD KEY `mechanic_id` (`mechanic_id`);

--
-- Indexes for table `mechanic_table`
--
ALTER TABLE `mechanic_table`
  ADD PRIMARY KEY (`mechanic_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_user_id` (`v_id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `star_rating`
--
ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`product_id`,`user_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `trip_payments`
--
ALTER TABLE `trip_payments`
  ADD PRIMARY KEY (`tp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `vehicle_group`
--
ALTER TABLE `vehicle_group`
  ADD PRIMARY KEY (`gr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `et_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `v_fuel_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geofences`
--
ALTER TABLE `geofences`
  MODIFY `geo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `geofence_events`
--
ALTER TABLE `geofence_events`
  MODIFY `ge_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomeexpense`
--
ALTER TABLE `incomeexpense`
  MODIFY `ie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_roles`
--
ALTER TABLE `login_roles`
  MODIFY `lr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mechanic_table`
--
ALTER TABLE `mechanic_table`
  MODIFY `mechanic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trip_payments`
--
ALTER TABLE `trip_payments`
  MODIFY `tp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_group`
--
ALTER TABLE `vehicle_group`
  MODIFY `gr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `user` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`v_id`) REFERENCES `vehicles` (`v_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`mechanic_schedule_id`) REFERENCES `mechanic_schedule_table` (`mechanic_schedule_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD CONSTRAINT `appointment_table_ibfk_1` FOREIGN KEY (`mechanic_id`) REFERENCES `mechanic_table` (`mechanic_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_table_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer_table` (`customer_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_table_ibfk_3` FOREIGN KEY (`mechanic_schedule_id`) REFERENCES `mechanic_schedule_table` (`mechanic_schedule_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `mechanic` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `mechanic_schedule_table`
--
ALTER TABLE `mechanic_schedule_table`
  ADD CONSTRAINT `mechanic_schedule_table_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `mechanic_schedule_table_ibfk_2` FOREIGN KEY (`mechanic_id`) REFERENCES `mechanic_table` (`mechanic_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
