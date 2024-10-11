-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 12:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `224practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `bookingdate` date NOT NULL,
  `stardate` date NOT NULL,
  `enddate` date NOT NULL,
  `bookingfrom` varchar(30) NOT NULL,
  `bookingto` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `deposit` decimal(10,2) NOT NULL,
  `driverid` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `carid`, `bookingdate`, `stardate`, `enddate`, `bookingfrom`, `bookingto`, `userid`, `amount`, `deposit`, `driverid`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-10-11', '2024-10-20', '2024-10-26', 'Rajkot', 'Abu', 1, 29000.00, 9000.00, 2, 1, '2024-10-11 09:39:28', '2024-10-11 09:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `carrepair`
--

CREATE TABLE `carrepair` (
  `repairid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `driverid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `repairstartdate` date NOT NULL,
  `repairenddate` date NOT NULL,
  `repaircost` decimal(10,2) DEFAULT NULL,
  `repairnote` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrepair`
--

INSERT INTO `carrepair` (`repairid`, `carid`, `driverid`, `vendorid`, `repairstartdate`, `repairenddate`, `repaircost`, `repairnote`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, '2024-10-01', '2024-10-05', 19400.00, 'General Service', 1, '2024-10-11 10:05:34', '2024-10-11 10:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carid` int(11) NOT NULL,
  `carnumber` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `modal` varchar(20) NOT NULL,
  `cartype` varchar(20) NOT NULL,
  `makingyear` year(4) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `seating` tinyint(4) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `carnumber`, `brand`, `modal`, `cartype`, `makingyear`, `fuel`, `seating`, `ac`, `status`, `created_at`, `updated_at`) VALUES
(1, 'GJ-03-AB-9876', 'Toyota', 'Innova', 'MUV', '2022', 'Diesel', 7, 1, 1, '2024-10-11 09:19:39', '2024-10-11 09:19:39'),
(2, 'GJ-03-AB-9176', 'Toyota', 'Corrola', 'Sedan', '2022', 'Petrol', 5, 1, 1, '2024-10-11 09:20:21', '2024-10-11 09:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driverid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` varchar(256) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `drivinglicance` varchar(20) NOT NULL,
  `licancetype` varchar(20) NOT NULL,
  `licanceexpiry` date NOT NULL,
  `adharcard` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driverid`, `fname`, `lname`, `email`, `phone`, `whatsapp`, `address`, `dateofbirth`, `gender`, `photo`, `drivinglicance`, `licancetype`, `licanceexpiry`, `adharcard`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Driver', 'Test User', 'driver1@gmail.com', '9998889990', '9990009990', 'rajkto', '2002-02-02', 'female', 'drivers/user1.jpg', '9990009990', 'Heavy', '2029-01-01', '24856813456891347', 1, '2024-10-11 09:30:53', '2024-10-11 09:30:53'),
(2, 'another ', 'driver', 'sample address', '998877665', '1122928298', 'kalawad road', '2001-01-01', 'male', 'drivers/sample1.jpg', '89987897987', 'LVM', '2028-03-12', '235727834646', 1, '2024-10-11 09:30:53', '2024-10-11 09:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `fueling`
--

CREATE TABLE `fueling` (
  `fuleid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `fueldate` date NOT NULL,
  `driverid` int(11) NOT NULL,
  `fueltype` varchar(20) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fueling`
--

INSERT INTO `fueling` (`fuleid`, `carid`, `vendorid`, `fueldate`, `driverid`, `fueltype`, `quantity`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2024-10-16', 2, 'Diesel', 19.00, 99.78, 1, '2024-10-11 09:52:26', '2024-10-11 09:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insuranceid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `insurancetype` varchar(20) NOT NULL,
  `purchasedate` date NOT NULL,
  `startdate` date NOT NULL,
  `edndate` date NOT NULL,
  `renewdate` date NOT NULL,
  `premium` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insuranceid`, `carid`, `vendorid`, `insurancetype`, `purchasedate`, `startdate`, `edndate`, `renewdate`, `premium`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Full Insurance', '2024-10-01', '2024-10-22', '2025-10-21', '2025-10-01', 19890.00, 1, '2024-10-11 09:58:37', '2024-10-11 09:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewid` int(11) NOT NULL,
  `reviewdate` date NOT NULL,
  `userid` int(11) NOT NULL,
  `bookingid` int(11) NOT NULL,
  `message` varchar(512) NOT NULL,
  `ratting` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewid`, `reviewdate`, `userid`, `bookingid`, `message`, `ratting`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-10-16', 1, 1, 'Nice experience', 5, 1, '2024-10-11 10:10:40', '2024-10-11 10:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` varchar(256) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `drivinglicance` varchar(20) NOT NULL,
  `adharcard` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `phone`, `whatsapp`, `address`, `dateofbirth`, `gender`, `photo`, `drivinglicance`, `adharcard`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bhavya', 'dava', 'bhavya@gmail.com', '9998889990', '9990009990', 'morbi', '2002-02-02', 'male', 'users/bhavya.jpg', '9990009990', '24856813456891347', 1, '2024-10-11 09:26:49', '2024-10-11 09:26:49'),
(2, 'keyur', 'ramani', 'keyur@gmail.com', '998877665', '1122928298', 'rajkto', '2001-01-01', 'male', 'users/keyur.jpg', '89987897987', '235727834646', 1, '2024-10-11 09:26:49', '2024-10-11 09:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendorid` int(11) NOT NULL,
  `vendorname` varchar(30) NOT NULL,
  `supply` varchar(50) NOT NULL,
  `vendoraddress` varchar(128) NOT NULL,
  `vendorcity` varchar(30) NOT NULL,
  `vendorstate` varchar(30) NOT NULL,
  `vendorphoen` varchar(15) NOT NULL,
  `vendoremail` varchar(64) NOT NULL,
  `vendorwhatspp` varchar(20) NOT NULL,
  `vendorstatus` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendorid`, `vendorname`, `supply`, `vendoraddress`, `vendorcity`, `vendorstate`, `vendorphoen`, `vendoremail`, `vendorwhatspp`, `vendorstatus`, `created_at`, `updated_at`) VALUES
(1, 'Jalaram Pertolpump', 'Diesel, Petrol, OIL, Coolent, CNG', 'Kalawad Road Rajkot', 'Rajkot', 'Gujarat', '234523534', 'demo@jalaram.com', '54233453452345', 1, '2024-10-11 09:45:21', '2024-10-11 09:45:21'),
(2, 'Anil Spare Parts', 'Spare Parts', 'Kalawad Road Rajkot', 'Rajkot', 'Gujarat', '234523534', 'demo@jalaram.com', '54233453452345', 1, '2024-10-11 09:46:05', '2024-10-11 09:46:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `fk_carid_cars_bookings` (`carid`),
  ADD KEY `fk_userid_users_bookings` (`userid`),
  ADD KEY `fK_driverid_drivers_bookings` (`driverid`);

--
-- Indexes for table `carrepair`
--
ALTER TABLE `carrepair`
  ADD PRIMARY KEY (`repairid`),
  ADD KEY `fk_carid_cars_repair` (`carid`),
  ADD KEY `fk_vendorid_vendors_repair` (`vendorid`),
  ADD KEY `fk_driverid_drivers_repair` (`driverid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carid`),
  ADD UNIQUE KEY `carnumber` (`carnumber`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `fueling`
--
ALTER TABLE `fueling`
  ADD PRIMARY KEY (`fuleid`),
  ADD KEY `fk_carid_cars_fuleling` (`carid`),
  ADD KEY `fk_vendorid_vendor_fuleling` (`vendorid`),
  ADD KEY `fk_driverid_drivers_fueling` (`driverid`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insuranceid`),
  ADD KEY `fk_carid_cars_insurance` (`carid`),
  ADD KEY `fk_vendorid_vendors_insurance` (`vendorid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `fk_userid_users_review` (`userid`),
  ADD KEY `fk_bookingid_booking_review` (`bookingid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carrepair`
--
ALTER TABLE `carrepair`
  MODIFY `repairid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fueling`
--
ALTER TABLE `fueling`
  MODIFY `fuleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insuranceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fK_driverid_drivers_bookings` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`),
  ADD CONSTRAINT `fk_carid_cars_bookings` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_userid_users_bookings` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `carrepair`
--
ALTER TABLE `carrepair`
  ADD CONSTRAINT `fk_carid_cars_repair` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_driverid_drivers_repair` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`),
  ADD CONSTRAINT `fk_vendorid_vendors_repair` FOREIGN KEY (`vendorid`) REFERENCES `vendors` (`vendorid`);

--
-- Constraints for table `fueling`
--
ALTER TABLE `fueling`
  ADD CONSTRAINT `fk_carid_cars_fuleling` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_driverid_drivers_fueling` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`),
  ADD CONSTRAINT `fk_vendorid_vendor_fuleling` FOREIGN KEY (`vendorid`) REFERENCES `vendors` (`vendorid`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `fk_carid_cars_insurance` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `fk_vendorid_vendors_insurance` FOREIGN KEY (`vendorid`) REFERENCES `vendors` (`vendorid`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_bookingid_booking_review` FOREIGN KEY (`bookingid`) REFERENCES `bookings` (`bookingid`),
  ADD CONSTRAINT `fk_userid_users_review` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
