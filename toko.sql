-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2017 at 11:04 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `merk`, `tipe`, `harga`, `foto`) VALUES
(60, 'Xiaomi', 'Redmi Note 2', 2100000, 'XiaomiRedmi_Note_2.jpg'),
(61, 'Xiaomi', 'Redmi 3', 1900000, 'XiaomiRedmi_3.jpg'),
(62, 'Xiaomi', 'Redmi Note 2', 1900000, 'XiaomiRedmi_Note_2.jpg'),
(63, 'Xiaomi', 'Mi Max', 2700000, 'XiaomiMi_Max.jpg'),
(64, 'Meizu', 'm3 note', 1800000, 'Meizum3_note.jpg'),
(65, 'Nokia', '3315', 1000000, 'Nokia3315.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idmember` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` char(10) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Dedi Irawan', 'irawand07@gmail.com', 'irawand07', 'b00a50c448238a71ed479f81fa4d9066'),
(4, 'paijo', 'irawand07@gmail.com', 'irawand07w', 'b94be67917fb395eda3fe7c1c89117f5'),
(5, 'sss', 'irawand07@gmail.com', 'irawand07s', 'b00a50c448238a71ed479f81fa4d9066'),
(6, 'adaasd', 'irawand07@gmail.com', 'sfffsdf', 'b00a50c448238a71ed479f81fa4d9066'),
(7, 'sdfsd', 'irawand07@gmail.com', 'sdgsgd', '65933273f5249da19f01ae920ccebe9e'),
(9, 'sdfsd', 'irawand07@gmail.com', 'wrwrewer', 'a32124e63c3171805ab0c7d29f911013'),
(10, 'asdhdsa', 'irawand07@gmail.com', 'ad,h,sd', '337569d291dc64f40990fb292a1414dd');

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `idbarang` int(11) NOT NULL,
  `layar` float DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  `prosesor` varchar(20) DEFAULT NULL,
  `ram` int(2) DEFAULT NULL,
  `internal` int(2) DEFAULT NULL,
  `kamblk` int(2) DEFAULT NULL,
  `kamdpn` int(2) DEFAULT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesifikasi`
--

INSERT INTO `spesifikasi` (`idbarang`, `layar`, `os`, `prosesor`, `ram`, `internal`, `kamblk`, `kamdpn`, `deskripsi`) VALUES
(60, 0, '', '', 0, 0, 0, 0, ''),
(61, 5, 'Android OS, v5.1 (Lo', 'Qualcomm MSM8939v2 S', 2, 16, 13, 5, ''),
(62, 5, 'Android OS, v5.0 (Lo', 'Mediatek MT6795 Heli', 2, 16, 13, 5, ''),
(63, 6, 'Android OS, v6.0 (Ma', 'Qualcomm MSM8956 Sna', 3, 32, 16, 5, ''),
(64, 5, 'Android OS, v5.1 (Lo', 'Mediatek MT6755 Heli', 2, 16, 13, 5, ''),
(65, 2, '', '', 0, 0, 0, 0, 'sdgsdgsdg\r\nsgsgsdgsdg\r\ngssgsdgs\r\nsgsgdsdg\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD UNIQUE KEY `idbarang` (`idbarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD CONSTRAINT `fk_spesifikasi_barang` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
