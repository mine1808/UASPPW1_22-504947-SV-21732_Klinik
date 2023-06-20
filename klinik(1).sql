-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 06:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `profile`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin wawa', 'rahasia'),
(2, 'admin1', '78e0d5058803a3d6481b946b5e7a2510', 'admin jasmine', 'rahasia');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `ID_Dokter` varchar(5) NOT NULL,
  `Nama_Dokter` varchar(50) DEFAULT NULL,
  `Spesialisasi` varchar(50) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Nomor_Telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`ID_Dokter`, `Nama_Dokter`, `Spesialisasi`, `Alamat`, `Nomor_Telepon`) VALUES
('DA01', 'Dr. Julia Larasati', 'Anak', 'Jl. Chanbok No. 40', '08213612179'),
('DG01', 'Dr. Talia Cikanita', 'Gigi', 'Jl. Chanbok No. 40', '08189466433'),
('DM01', 'Dr. Bintang Samudra', 'Mata', 'Jl. Chanbok No. 40', '08995232378'),
('DU01', 'Dr. Janu Dodit', 'Umum', 'Jl. Chanbok No. 40', '08142357721'),
('DU02', 'Dr. Alisa Asmara', 'Umum', 'Jl. Chanbok No. 40', '08367654281');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `ID_Jadwal` varchar(5) NOT NULL,
  `ID_Dokter` varchar(5) DEFAULT NULL,
  `Hari` varchar(10) DEFAULT NULL,
  `Jam_Mulai` varchar(8) DEFAULT NULL,
  `Jam_Selesai` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`ID_Jadwal`, `ID_Dokter`, `Hari`, `Jam_Mulai`, `Jam_Selesai`) VALUES
('JA01', 'DA01', 'Selasa', '08:00:00', '13:00:00'),
('JA02', 'DU01', 'Selasa', '14:00:00', '19:00:00'),
('JN01', 'DU01', 'Senin', '09:30:00', '14:30:00'),
('JN02', 'DU02', 'Senin', '15:30:00', '20:30:00'),
('JS01', 'DM01', 'Kamis', '08:00:00', '13:00:00'),
('JS02', 'DU02', 'Kamis', '14:00:00', '19:00:00'),
('JT01', 'DU02', 'Jumat', '09:30:00', '14:30:00'),
('JT02', 'DU01', 'Jumat', '15:30:00', '20:30:00'),
('JU01', 'DG01', 'Rabu', '08:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `ID_Pasien` varchar(5) NOT NULL,
  `Nama_Pasien` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`ID_Pasien`, `Nama_Pasien`, `Tanggal_Lahir`, `Alamat`, `Jenis_Kelamin`) VALUES
('P001', 'Udin Januar', '2018-12-06', 'Jl. Yansan No. 12', 'Laki-Laki'),
('P002', 'Saina Tania', '1999-09-18', 'Jl. Busan No. 18', 'Perempuan'),
('P003', 'Zerfania Hera', '2000-04-11', 'Jl. Seoul No. 04', 'Perempuan'),
('P004', 'Shaka Putradanu', '1995-08-20', 'Jl. Busan No. 18', 'Laki-Laki'),
('P005', 'Jihan Alina', '2000-11-04', 'Jl. Yansan No. 13', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`ID_Dokter`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`ID_Jadwal`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`ID_Pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
