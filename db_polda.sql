-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 07:10 PM
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
-- Database: `db_polda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_laprekom`
--

CREATE TABLE `tb_laprekom` (
  `id_laprekom` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pangkat` varchar(128) NOT NULL,
  `nrpnip` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kesatuan` varchar(20) NOT NULL,
  `ket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `nrpnip` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `nrpnip`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(13, '111111', '$2y$10$rt8At/IgGvKkKJ09WxXlvuTbX/6GUASzlGxuGLeN33Pm5Ww20taVi', 1, 1, 1616393792),
(14, '19990416', '$2y$10$X1nJcTUA65OcJbGEAqwowOJGMJtccHnaygPlv.kIfSrcz/T/dr0Ba', 2, 1, 1622215623),
(15, '160499', '$2y$10$/8stpzbHLY4AUH3dPikvJOFhIXUfSSfdc3KBbUCVC1TqmDrrXwiLm', 2, 1, 1622309592);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekom`
--

CREATE TABLE `tb_rekom` (
  `id_rekom` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pangkat` varchar(128) NOT NULL,
  `nrpnip` varchar(20) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `kesatuan` enum('Polda Bengkulu','Polres Bengkulu','Polres Bengkulu Tengah','Polres Bengkulu Selatan','Polres Bengkulu Utara','Polres Kepahiyang','Polres Rejang Lebong','Polres Muko-Muko','Polres Kaur','Polres Lebong') NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `namapasangan` varchar(128) NOT NULL,
  `ttlpasangan` date NOT NULL,
  `pekerjaanpasangan` varchar(128) NOT NULL,
  `agamapasangan` enum('Islam','Protestan','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `alamatpasangan` varchar(256) NOT NULL,
  `srtpengantar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nrpnip` varchar(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pangkat` varchar(128) NOT NULL,
  `kesatuan` enum('Polda Bengkulu','Polres Bengkulu','Polres Bengkulu Tengah','Polres Bengkulu Selatan','Polres Bengkulu Utara','Polres Kepahiyang','Polres Rejang Lebong','Polres Muko-Muko','Polres Kaur','Polres Lebong') NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nrpnip`, `nama`, `pangkat`, `kesatuan`, `email`, `password`) VALUES
(11, '111111', 'admin', 'admin', 'Polda Bengkulu', 'admin@gmail.com', '$2y$10$lTQf/bu45ITMZf5Z.elsROiBpEaseia2mVl8aT8jK5bahT/ah20V2'),
(12, '19990416', 'bujank', 'penata', 'Polda Bengkulu', 'bujank@gmail.com', '$2y$10$y9oFZ8umYtEz5uVnSKKreuSWc9TMgsz9Myb68pt2x/nzIgigPiyFW'),
(13, '160499', 'NISA', 'JENDRAL', 'Polda Bengkulu', 'nisacans@gmail.com', '$2y$10$FsRZ2An4/Rdf9NMs4YuGCurSfWTZiKs70Yx.nHvRdBKAthm6RKZ4e');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_laprekom`
--
ALTER TABLE `tb_laprekom`
  ADD PRIMARY KEY (`id_laprekom`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_rekom`
--
ALTER TABLE `tb_rekom`
  ADD PRIMARY KEY (`id_rekom`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_laprekom`
--
ALTER TABLE `tb_laprekom`
  MODIFY `id_laprekom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_rekom`
--
ALTER TABLE `tb_rekom`
  MODIFY `id_rekom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
