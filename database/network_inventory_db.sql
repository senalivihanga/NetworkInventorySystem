-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2026 at 07:20 AM
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
-- Database: `network_inventory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_name` varchar(100) DEFAULT NULL,
  `device_type` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `serial_number` varchar(50) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_name`, `device_type`, `brand`, `model`, `ip_address`, `location`, `status`, `serial_number`, `purchase_date`, `warranty_status`) VALUES
(1, 'R1', 'Router', 'wireless', 'R002', '192.168.1.1', 'School Network', 'Active', NULL, NULL, NULL),
(2, 'S1', 'Router', 'Wired', 'S001', '192.168.1.2', 'School Network', 'Inactive', NULL, NULL, NULL),
(3, 'Core Router', 'Router', 'Cisco', 'ISR 4451', '192.168.1.1', 'Server Room', 'Active', 'CISCO-RT-001', '2023-01-10', 'Valid'),
(4, 'Office Switch', 'Switch', 'TP-Link', 'TL-SG1024', '192.168.1.2', 'Office Floor', 'Active', 'TPL-SW-1024', '2022-11-15', 'Valid'),
(5, 'WiFi Access Point', 'Access Point', 'Ubiquiti', 'UAP-AC-LR', '192.168.1.3', 'Lobby', 'Active', 'UBI-AP-900', '2023-03-20', 'Valid'),
(6, 'Backup Server', 'Server', 'Dell', 'PowerEdge R740', '192.168.1.10', 'Data Center', 'Maintenance', 'DELL-SRV-740', '2021-09-05', 'Expired'),
(7, 'Firewall Device', 'Firewall', 'Fortinet', 'FortiGate 60F', '192.168.1.254', 'Server Room', 'Active', 'FORT-FW-60F', '2023-05-12', 'Valid'),
(8, 'Printer Device', 'Printer', 'HP', 'LaserJet Pro M404', '192.168.1.20', 'Accounts Dept', 'Inactive', 'HP-PR-404', '2020-06-18', 'Expired'),
(9, 'CCTV Controller', 'Security', 'Hikvision', 'DS-7608', '192.168.1.30', 'Security Room', 'Active', 'HIK-CC-7608', '2022-12-01', 'Valid'),
(10, 'Network Storage', 'NAS', 'Synology', 'DS920+', '192.168.1.40', 'Data Center', 'Active', 'SYN-NAS-920', '2023-07-22', 'Valid'),
(11, 'Edge Router', 'Router', 'MikroTik', 'RB4011', '192.168.1.5', 'Branch Office', 'Active', 'MIK-RB-4011', '2022-08-30', 'Valid'),
(12, 'Test Device', 'Switch', 'Cisco', 'Catalyst 2960', '192.168.1.50', 'Lab', 'Inactive', 'CISCO-SW-2960', '2021-02-14', 'Expired');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
