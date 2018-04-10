-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 09:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel_car`
--

CREATE TABLE `travel_car` (
  `travel_car_id` int(50) NOT NULL,
  `travel_car_person_name` varchar(500) NOT NULL,
  `travel_car_type` varchar(500) DEFAULT NULL,
  `travel_car_pickup` date NOT NULL,
  `travel_car_pickup_time` varchar(250) DEFAULT NULL,
  `travel_car_dropoff` date NOT NULL,
  `travel_car_dropoff_time` varchar(250) DEFAULT NULL,
  `travel_car_pickup_location` varchar(500) NOT NULL,
  `travel_car_dropoff_location` varchar(500) NOT NULL,
  `travel_request_id` int(50) NOT NULL,
  `travel_car_payment_card` varchar(500) DEFAULT NULL,
  `travel_car_totalamount` varchar(250) DEFAULT NULL,
  `travel_car_vendor` varchar(250) DEFAULT NULL,
  `travel_car_comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_car`
--

INSERT INTO `travel_car` (`travel_car_id`, `travel_car_person_name`, `travel_car_type`, `travel_car_pickup`, `travel_car_pickup_time`, `travel_car_dropoff`, `travel_car_dropoff_time`, `travel_car_pickup_location`, `travel_car_dropoff_location`, `travel_request_id`, `travel_car_payment_card`, `travel_car_totalamount`, `travel_car_vendor`, `travel_car_comment`) VALUES
(1, 'Yousuf sir', '', '2017-12-18', '', '2017-12-20', '', 'Houston Street, Fort Worth, TX, United States', 'Maxella Avenue, Marina del Rey, CA, United States', 14, '', '', 'as', 'Middle Size');

-- --------------------------------------------------------

--
-- Table structure for table `travel_flight`
--

CREATE TABLE `travel_flight` (
  `travel_flight_id` int(50) NOT NULL,
  `travel_flight_person_name` varchar(500) NOT NULL,
  `travel_flight_name` varchar(500) DEFAULT NULL,
  `travel_flight_date` date NOT NULL,
  `travel_flight_time` varchar(500) DEFAULT NULL,
  `travel_flight_return_date` date NOT NULL,
  `travel_flight_return_time` varchar(500) DEFAULT NULL,
  `travel_flight_departure_location` varchar(500) NOT NULL,
  `travel_flight_return_location` varchar(500) NOT NULL,
  `travel_request_id` int(50) NOT NULL,
  `travel_flight_no` varchar(500) DEFAULT NULL,
  `travel_flight_confirmation_no` varchar(500) DEFAULT NULL,
  `travel_flight_payment_card` varchar(250) DEFAULT NULL,
  `travel_flight_totalamount` varchar(250) DEFAULT NULL,
  `travel_flight_vendor` varchar(250) DEFAULT NULL,
  `travel_flight_comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_flight`
--

INSERT INTO `travel_flight` (`travel_flight_id`, `travel_flight_person_name`, `travel_flight_name`, `travel_flight_date`, `travel_flight_time`, `travel_flight_return_date`, `travel_flight_return_time`, `travel_flight_departure_location`, `travel_flight_return_location`, `travel_request_id`, `travel_flight_no`, `travel_flight_confirmation_no`, `travel_flight_payment_card`, `travel_flight_totalamount`, `travel_flight_vendor`, `travel_flight_comment`) VALUES
(1, 'Shahbaz', 'PIA', '2018-02-14', '20:00', '2018-02-28', '23:00', 'Karachi', 'Lahore', 14, '12345678', '3456', '2018', '200', 'Someone', 'No Comment');

-- --------------------------------------------------------

--
-- Table structure for table `travel_hotel`
--

CREATE TABLE `travel_hotel` (
  `travel_hotel_id` int(50) NOT NULL,
  `travel_hotel_person_name` varchar(500) NOT NULL,
  `travel_hotel_name` varchar(500) DEFAULT NULL,
  `travel_hotel_checkin` date NOT NULL,
  `travel_hotel_checkout` date NOT NULL,
  `travel_hotel_location` varchar(500) NOT NULL,
  `travel_hotel_room` varchar(50) NOT NULL,
  `travel_request_id` int(50) NOT NULL,
  `travel_hotel_confirmation_no` varchar(500) DEFAULT NULL,
  `travel_hotel_trip_no` varchar(500) DEFAULT NULL,
  `travel_hotel_payment_card` varchar(500) DEFAULT NULL,
  `travel_hotel_totalamount` varchar(250) DEFAULT NULL,
  `travel_hotel_vendor` varchar(250) DEFAULT NULL,
  `travel_hotel_comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_hotel`
--

INSERT INTO `travel_hotel` (`travel_hotel_id`, `travel_hotel_person_name`, `travel_hotel_name`, `travel_hotel_checkin`, `travel_hotel_checkout`, `travel_hotel_location`, `travel_hotel_room`, `travel_request_id`, `travel_hotel_confirmation_no`, `travel_hotel_trip_no`, `travel_hotel_payment_card`, `travel_hotel_totalamount`, `travel_hotel_vendor`, `travel_hotel_comment`) VALUES
(1, 'Bryan Pearl', 'Comfort Inn Rhinelander WI', '2018-02-07', '2018-02-08', 'Rhinelander, WI, United States', '1', 1, '50294319', '171-994-222-66 ', '2002', '$73.97', NULL, ''),
(2, 'Tyler Bramkamp', '', '2017-12-12', '2017-12-14', 'Hampton Inn Pittsburgh-Mcknight Rd/ 15237', '1 Bed', 2, '', '', '', '', 'Huzaifa', 'Hampton Inn Pittsburgh-Mcknight Rd\r\n4575 McKnight Rd, Pittsburgh, PA 15237\r\n'),
(3, '1', 'Americinn Pampa', '2017-12-11', '2017-12-12', 'Pampa, TX, United States', '1 bed non smoke', 3, '118811728', '173-789-742-72 ', '2002', '$66.97', NULL, 'Please book in La Quinta'),
(4, 'Howard Davenport', 'RIT INN AND CONFERENCE CENTER', '2017-12-11', '2017-12-15', 'Henrietta, NY, United States', 'double', 4, '25323413', '172-341-642-66 ', '1251', '	$245.96 ', NULL, ''),
(5, 'Billy R NESBITT Jr', 'Wingate By Wyndham Chesapeake  ', '2017-12-12', '2017-12-15', 'Chesapeake, VA, United States', 'King', 5, '27751735 ', '137-551-163-19 ', '1236', '$174.96', NULL, ''),
(6, 'Bryan Pearl', 'AmericInn - Mankato, MN', '2017-12-11', '2017-12-13', 'Mankato, MN 56001, United States', '1', 6, '143759397994', '5008961706', '2002', '$166.96', NULL, ''),
(7, 'Victor Hinojosa', 'Holiday Inn San Antonio Downtown-Market Square', '2017-12-12', '2017-12-15', 'San Antonio, TX, United States', '1', 7, '60541161', '172-326-012-74 ', '2002', '$179.97', NULL, 'Preferably La Quinta\r\n100 West Cesar Chavez Boulevard\r\nSan Antonio, TX 78204'),
(8, 'Mohammad Moghis', NULL, '2017-12-13', '2017-12-15', 'Lafayette, LA 70503, United States', '1', 8, NULL, NULL, NULL, NULL, NULL, 'Holiday Inn Express In Ambassador Road'),
(9, '1', NULL, '2017-12-12', '2017-12-13', 'Sherman, TX, United States', '1 bed non smoke', 9, NULL, NULL, NULL, NULL, NULL, ''),
(10, 'Michael Morrison', NULL, '2017-12-15', '2017-12-16', 'San Angelo, TX 76903, United States', '1', 10, NULL, NULL, NULL, NULL, NULL, 'Micro tel please'),
(11, 'James H Stokley', NULL, '2017-12-14', '2017-12-16', 'Beckley, WV 25801, United States', 'standard', 11, NULL, NULL, NULL, NULL, NULL, 'Country Inns and Suites 2120 Harper Road, Beckley WV 25801'),
(12, 'Steven Kasper', 'Crowne Plaza Minneapolis International Airport-Mall Of America', '2017-12-11', '2017-12-13', 'Richfield, MN, United States', '02 Room', 12, 'Room 1: 60770068 Room 2: 60770078', '172-366-602-66 ', '2002', '	$298.96', NULL, ''),
(13, 'Gary Bauer', '', '2017-12-11', '2017-12-13', 'Richfield, MN, United States', '1 Room', 13, '', '', '', '', NULL, ''),
(14, 'Yousuf Sir', NULL, '2017-12-18', '2017-12-20', 'Hotel Plaza Boulevard, Orlando, FL, United States', '1', 14, NULL, NULL, NULL, NULL, NULL, 'Urgent Booking');

-- --------------------------------------------------------

--
-- Table structure for table `travel_request`
--

CREATE TABLE `travel_request` (
  `travel_request_id` int(50) NOT NULL,
  `travel_request_refNo` varchar(250) NOT NULL,
  `travel_request_date` date NOT NULL,
  `emp_id` int(50) NOT NULL,
  `status_id` int(50) NOT NULL,
  `travel_request_finalStatusComment` longtext,
  `APP_EMP_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_request`
--

INSERT INTO `travel_request` (`travel_request_id`, `travel_request_refNo`, `travel_request_date`, `emp_id`, `status_id`, `travel_request_finalStatusComment`, `APP_EMP_ID`) VALUES
(1, '79357136', '2017-12-06', 1584, 3, 'Not Availble', 1791),
(2, '08193971', '2017-12-07', 1798, 2, 'Comment\r\n', 1590),
(3, '99705720', '2017-12-08', 1539, 3, 'Not Availble', 1791),
(4, '84683598', '2017-12-10', 1526, 3, 'Not Availble', 1791),
(5, '92632842', '2017-12-10', 1525, 3, 'Not Availble', 1791),
(6, '83193189', '2017-12-11', 1584, 3, 'Not Availble', 1791),
(7, '36065849', '2017-12-11', 1804, 3, 'Not Availble', 1791),
(8, '65711421', '2017-12-11', 1810, 1, NULL, 1810),
(9, '94680371', '2017-12-11', 1539, 1, NULL, 1539),
(10, '12533962', '2017-12-11', 1541, 1, NULL, 1541),
(11, '57913125', '2017-12-11', 1538, 1, NULL, 1538),
(12, '83413529', '2017-12-11', 1551, 3, 'Not Availble', 1791),
(13, '07773623', '2017-12-11', 1551, 4, 'Not Availble', 1791),
(14, '06361034', '2017-02-15', 1590, 1, NULL, 1590),
(15, '28198283', '2017-12-15', 1590, 2, 'qwqw', 1590);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel_car`
--
ALTER TABLE `travel_car`
  ADD PRIMARY KEY (`travel_car_id`);

--
-- Indexes for table `travel_flight`
--
ALTER TABLE `travel_flight`
  ADD PRIMARY KEY (`travel_flight_id`);

--
-- Indexes for table `travel_hotel`
--
ALTER TABLE `travel_hotel`
  ADD PRIMARY KEY (`travel_hotel_id`);

--
-- Indexes for table `travel_request`
--
ALTER TABLE `travel_request`
  ADD PRIMARY KEY (`travel_request_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `APP_EMP_ID` (`APP_EMP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel_car`
--
ALTER TABLE `travel_car`
  MODIFY `travel_car_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travel_flight`
--
ALTER TABLE `travel_flight`
  MODIFY `travel_flight_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travel_hotel`
--
ALTER TABLE `travel_hotel`
  MODIFY `travel_hotel_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `travel_request`
--
ALTER TABLE `travel_request`
  MODIFY `travel_request_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
