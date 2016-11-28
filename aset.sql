-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 03:46 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aset`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_aset`
--

CREATE TABLE IF NOT EXISTS `kategori_aset` (
  `kode_kategori_aset` int(11) NOT NULL,
  `nama_kategori_aset` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_aset`
--

INSERT INTO `kategori_aset` (`kode_kategori_aset`, `nama_kategori_aset`) VALUES
(1, 'Hardware'),
(2, 'Software'),
(3, 'Kendaraan'),
(4, 'Bangunan'),
(5, 'Peralatan Kantor'),
(6, 'Tanah'),
(7, 'Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `master_aset`
--

CREATE TABLE IF NOT EXISTS `master_aset` (
  `kode_aset` varchar(20) NOT NULL,
  `id_aset` int(10) NOT NULL,
  `nama_aset` varchar(30) NOT NULL,
  `pic` varchar(60) NOT NULL,
  `deskripsi_aset` varchar(500) NOT NULL,
  `tanggal_perolehan` date NOT NULL,
  `harga_perolehan` varchar(30) NOT NULL,
  `kode_status_aset` int(10) NOT NULL,
  `kode_kategori_aset` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_aset`
--

INSERT INTO `master_aset` (`kode_aset`, `id_aset`, `nama_aset`, `pic`, `deskripsi_aset`, `tanggal_perolehan`, `harga_perolehan`, `kode_status_aset`, `kode_kategori_aset`) VALUES
('2.2016-10-31', 59, 'Windows 10 Preview', 'Filla', 'Update Windows 8 Bug and other bug fixed', '2015-10-31', '5000000', 3, 1),
('1.2016-10-01', 60, 'Mainboard', 'Dimas', 'AMD Athlon Processor, 16 GB of RAM', '2015-10-03', '1000000', 2, 1),
('1.2016-10-02', 61, 'AMD A10', 'Aino', 'Speed 3.0 GHz', '2016-10-02', '2000000', 1, 1),
('2.2016-10-03', 62, 'Microsoft Visual C++', 'Aino', 'Adding snippets of C++', '2016-10-03', '500000', 2, 2),
('3.2016-10-04', 63, 'Avanza', 'Aino', 'Digunakan untuk operasional pengiriman produk', '2016-10-04', '500000000', 1, 3),
('3.2016-10-05', 64, 'Honda Brio', 'Aino', 'Untuk operasional pegawai', '2016-10-05', '250000000', 1, 3),
('4.2016-10-06', 65, 'Gedung Pusat ', 'Aino', 'Gedung berada di area kawasan jogjakarta', '2016-10-06', '2000000000', 2, 4),
('5.2016-10-08', 66, 'Buku inventaris', 'Fila', 'Digunakan untuk menulis daftar inventaris perusahaan', '2016-10-08', '20000', 1, 5),
('5.2016-10-09', 67, 'Kursi karyawan', 'Dimas', 'Digunakan untuk duduk karyawan', '2016-10-09', '150000', 2, 5),
('2.2016-10-12', 68, 'Linux Slackware', 'Dimas', 'Digunakan untuk development program', '2016-10-12', '0', 2, 2),
('6.2016-12-01', 69, 'Tanah Gedung Cabang', 'Aino', 'Sukabumi Jawa Barat', '2016-12-01', '1000000000', 1, 6),
('2.2016-01-15', 70, 'Windows 7 64 bit', 'Aino', 'DirectX min 6.0', '2016-01-15', '5000000', 2, 1),
('3.2016-05-13', 71, 'Civic', 'Aino', 'Mobil', '2016-05-13', '500000000', 1, 3),
('2.2016-12-31', 72, 'Windows 7 32 bit', 'Aino', 'Development web', '2016-12-31', '2000000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penyusutan_aset`
--

CREATE TABLE IF NOT EXISTS `penyusutan_aset` (
  `kode_penyusutan` int(10) NOT NULL,
  `kode_kategori_aset` int(10) NOT NULL,
  `tanggal_susut` date NOT NULL,
  `harga_susut` varchar(30) NOT NULL,
  `update_at` date NOT NULL,
  `kode_aset` varchar(20) NOT NULL,
  `nama_aset` varchar(30) NOT NULL,
  `pic` varchar(60) NOT NULL,
  `deskripsi_aset` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyusutan_aset`
--

INSERT INTO `penyusutan_aset` (`kode_penyusutan`, `kode_kategori_aset`, `tanggal_susut`, `harga_susut`, `update_at`, `kode_aset`, `nama_aset`, `pic`, `deskripsi_aset`) VALUES
(48, 1, '2020-10-31', '3.92', '2016-11-10', '2.2016-10-31', 'Windows 10 Preview', 'Filla', 'Update Windows 8 Bug and other bug fixed'),
(49, 1, '2019-10-01', '941192', '2016-11-15', '1.2016-10-01', 'Mainboard', 'Dimas', 'AMD Athlon Processor, 16 GB of RAM'),
(50, 1, '2017-10-03', '40000', '2016-11-09', '1.2016-10-02', 'AMD A10', 'Aino', 'Speed 3.0 GHz'),
(51, 2, '2016-10-03', '500000', '0000-00-00', '2.2016-10-03', 'Microsoft Visual C++', 'Aino', 'Adding snippets of C++'),
(52, 1, '2019-10-04', '9604000', '2016-11-14', '3.2016-10-04', 'Avanza', 'Aino', 'Digunakan untuk operasional pengiriman produk'),
(53, 3, '2016-10-05', '250000000', '0000-00-00', '3.2016-10-05', 'Honda Brio', 'Aino', 'Untuk operasional pegawai'),
(54, 4, '2016-10-06', '2000000000', '0000-00-00', '4.2016-10-06', 'Gedung Pusat ', 'Aino', 'Gedung berada di area kawasan jogjakarta'),
(55, 5, '2016-10-08', '20000', '0000-00-00', '5.2016-10-08', 'Buku inventaris', 'Fila', 'Digunakan untuk menulis daftar inventaris perusahaan'),
(56, 5, '2016-10-09', '150000', '0000-00-00', '5.2016-10-09', 'Kursi karyawan', 'Dimas', 'Digunakan untuk duduk karyawan'),
(57, 2, '2016-10-12', '0', '0000-00-00', '2.2016-10-12', 'Linux Slackware', 'Dimas', 'Digunakan untuk development program'),
(58, 6, '2016-12-01', '1000000000', '0000-00-00', '6.2016-12-01', 'Tanah Gedung Cabang', 'Aino', 'Sukabumi Jawa Barat'),
(59, 1, '2018-01-15', '2000', '2016-11-10', '2.2016-01-15', 'Windows 7 64 bit', 'Aino', 'DirectX min 6.0'),
(60, 3, '2016-05-13', '500000000', '0000-00-00', '3.2016-05-13', 'Civic', 'Aino', 'Mobil'),
(61, 2, '2016-12-31', '2000000', '0000-00-00', '2.2016-12-31', 'Windows 7 32 bit', 'Aino', 'Development web');

-- --------------------------------------------------------

--
-- Table structure for table `status_aset`
--

CREATE TABLE IF NOT EXISTS `status_aset` (
  `kode_status_aset` int(10) NOT NULL,
  `nama_status_aset` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_aset`
--

INSERT INTO `status_aset` (`kode_status_aset`, `nama_status_aset`) VALUES
(1, 'Baik'),
(2, 'Sedang'),
(3, 'Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_aset`
--
ALTER TABLE `kategori_aset`
  ADD PRIMARY KEY (`kode_kategori_aset`);

--
-- Indexes for table `master_aset`
--
ALTER TABLE `master_aset`
  ADD PRIMARY KEY (`id_aset`), ADD KEY `kode_status_aset` (`kode_status_aset`), ADD KEY `kode_kategori_aset` (`kode_kategori_aset`);

--
-- Indexes for table `penyusutan_aset`
--
ALTER TABLE `penyusutan_aset`
  ADD PRIMARY KEY (`kode_penyusutan`), ADD KEY `kode_aset` (`kode_aset`);

--
-- Indexes for table `status_aset`
--
ALTER TABLE `status_aset`
  ADD PRIMARY KEY (`kode_status_aset`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_aset`
--
ALTER TABLE `kategori_aset`
  MODIFY `kode_kategori_aset` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `master_aset`
--
ALTER TABLE `master_aset`
  MODIFY `id_aset` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `penyusutan_aset`
--
ALTER TABLE `penyusutan_aset`
  MODIFY `kode_penyusutan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
