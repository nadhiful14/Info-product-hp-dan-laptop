-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 04:19 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `handphone`
--

CREATE TABLE `handphone` (
  `id` int(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `cpu` varchar(40) NOT NULL,
  `gpu` varchar(40) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `storage` varchar(40) NOT NULL,
  `kamera` varchar(200) NOT NULL,
  `kamera_depan` varchar(200) NOT NULL,
  `os` varchar(40) NOT NULL,
  `rom` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `fitur` varchar(200) NOT NULL,
  `layar` varchar(200) NOT NULL,
  `baterai` varchar(40) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handphone`
--

INSERT INTO `handphone` (`id`, `nama`, `cpu`, `gpu`, `ram`, `storage`, `kamera`, `kamera_depan`, `os`, `rom`, `gambar`, `fitur`, `layar`, `baterai`, `harga`) VALUES
(1, 'Xiaomi Redmi Note 5', 'Snapdragon 636', 'Adreno 509', '1 GB', '64 GB', 'Dual kamera, 12 megapiksel (f/1.9, 1.4 micron) + 5 megapiksel (f/2.0, 1.12 micron)', '13 megapiksel AI dan LED Flash', 'Android 8.0 (Oreo)', 'MIUI 9', 'note5.jpg', 'a:2:{i:0;s:11:\"Fingerprint\";i:1;s:13:\"Accelerometer\";}', '2,5D IPS LCD 5.99', '4000 mAh', '2.499.000'),
(2, 'Xiaomi Redmi Note 4X', 'Snapdragon 625', 'Adreno 506', '3 GB', '32 GB', '13 MP (f/2.0, 1.12Âµm), PDAF, dual-LED dual-tone flash. 1080p@30fps, 720p@120fps', '5 MP, f/2.0, 1080p', 'Android Nougat 7.0', '0', '5b422ac218214.png', 'a:5:{i:0;s:11:\"Fingerprint\";i:1;s:13:\"Accelerometer\";i:2;s:8:\"Gyroscop\";i:3;s:9:\"Proximity\";i:4;s:7:\"Compass\";}', 'IPS LCD 5.5 inches 1080 x 1920 pixels, 16:9 ratio (~401 ppi density)', 'Non-removable Li-Po 4100 mAh battery', '2.000.000'),
(3, 'Asus Zenfone Max Pro M1', 'Snapdragon 636', 'Adreno 509', '4 GB', '64 GB', '12 MP & 8 MP, Phase Detection Autofocus, Dual LED Flash', '8 MP, EIS', 'Android v8.0 OREO', '0', '5b422bfaa9218.png', 'a:5:{i:0;s:11:\"Fingerprint\";i:1;s:13:\"Accelerometer\";i:2;s:8:\"Gyroscop\";i:3;s:9:\"Proximity\";i:4;s:7:\"Compass\";}', 'IPS Capasitive 6,0 Inchi, Ratio 18:9 1080 x 2160 pixel, ~402ppi', '5000 mAh', '2.700.000'),
(4, 'Asus Zenfone 3 ZE552KL', 'Snapdragon 625', 'Adreno 506', '4 GB', '64 GB', 'Kamera Utama 16 MP, laser/phase detection autofocus, OIS, EIS, dual-LED (dual tone) flash', '8 MP', 'OS Android v 6.0 Marsmallow', '0', '5b422eacea7a0.jpg', 'a:5:{i:0;s:11:\"Fingerprint\";i:1;s:13:\"Accelerometer\";i:2;s:8:\"Gyroscop\";i:3;s:9:\"Proximity\";i:4;s:7:\"Compass\";}', '5.5 Super IPS LCD capacitive Resolusi 1080 x 1920 pixels', '3000 mAh', '2.800.000');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `cpu` varchar(40) NOT NULL,
  `gpu` varchar(40) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `hdd` varchar(40) NOT NULL,
  `harga` varchar(40) NOT NULL,
  `layar` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `os` char(20) NOT NULL,
  `konektifitas` varchar(1000) NOT NULL,
  `baterai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `nama`, `cpu`, `gpu`, `ram`, `hdd`, `harga`, `layar`, `gambar`, `os`, `konektifitas`, `baterai`) VALUES
(2, 'Asus FX553VD', 'Core i7-7700HQ', 'NVIDIA GTX 1050', '8', '1 TB', '12.299.000', '16', 'fx553vd.jpg', 'Windows 8', 'a:2:{i:0;s:4:\"Wifi\";i:1;s:9:\"Bluetooth\";}', ''),
(3, 'HP 14-bp058TX', 'Core i5-7200U', 'AMD Radeon 630', '8', '1 TB + 128 SSD', '8.899.000', '14', 'hp_bp058.jpg', 'Windows 10', 'a:2:{i:0;s:4:\"Wifi\";i:1;s:9:\"Bluetooth\";}', '3-cell'),
(4, 'Lenovo IP100-14IBD', 'Core i3 5005U', 'NVIDIA GT 920M', '2', '500 GB', '4.199.000', '14', 'ip100-14ibd.jpg', 'Windows 8', 'a:2:{i:0;s:4:\"Wifi\";i:1;s:9:\"Bluetooth\";}', '3-cell'),
(5, 'Lenovo ThinkPad T450', 'Core i5 2.3 GHz', 'Intel HD Graphics 5500', '8', 'SSD Drive 512 GB', '18.000.000', '14.1? (1920×1080 pixel)', 'ThinkPad-T450.jpg', 'Windows 8', 'a:2:{i:0;s:4:\"Wifi\";i:1;s:9:\"Bluetooth\";}', '4-cell'),
(13, 'Acer Aspire E5-475G ', 'Core i5 7200U', 'Nvidia GeForce GTX940 MX ', '4', '1 TB + 128 SSD', '7.200.000', '12 inch  Resolusi 1366 x 768', '5b3b97351ba3e.jpg', 'Windows 10', 'a:2:{i:0;s:4:\"Wifi\";i:1;s:9:\"Bluetooth\";}', '-'),
(16, 'Acer 15 â€“ G9-592G', 'Coreâ„¢ i7-6700HQ', 'nVidia GeForce GTX 970M', '2', '128GB SSD + 1TB HDD', '27.000.000', '15.6 Inch (1920 x 1080)', '5b421ab0894dc.jpg', 'Windows 10', 'a:2:{i:0;s:4:\"Wifi\";i:1;s:9:\"Bluetooth\";}', '3000 mAh'),
(17, 'LAPTOP', 'i7', 'NVIDIA', '64 GB', '20', '1', '12 inch  Resolusi 1366 x 768', '5b46cbf577e0d.jpg', 'Windows 10', 'a:1:{i:0;s:9:\"Bluetooth\";}', '9090');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(4) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'iful', 'iful', 'iful@gmail.com'),
(3, 'qolby', '123', 'qolby@yahoo.com'),
(6, 'ddfd', '123', 'gfsg'),
(7, 'Nadhiful', '123', 'nadhiful46@gmail.com'),
(8, 'Nadhiful Qolby', '12', 'nadhiful@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handphone`
--
ALTER TABLE `handphone`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
