-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 01:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krt`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` varchar(10) NOT NULL,
  `users` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` enum('pcs','kg','paks') NOT NULL,
  `kondisi` enum('baik','rusak') NOT NULL,
  `jumlahsisa` int(11) NOT NULL,
  `keterangan` enum('hilang','pinjam','tersedia') NOT NULL,
  `tempat` enum('sekre','camp','none') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `users`, `nama`, `jumlah`, `satuan`, `kondisi`, `jumlahsisa`, `keterangan`, `tempat`) VALUES
('B0001', 1, 'mousel', 12, 'pcs', 'rusak', 10, 'tersedia', 'sekre'),
('B0002', 1, 'pulpen', 120, 'pcs', 'rusak', 7, 'tersedia', 'camp'),
('B0004', 1, 'bantalass', 12, 'pcs', 'rusak', 9, 'tersedia', 'sekre'),
('B0005', 1, 'sas', 2, 'pcs', 'rusak', 2, 'hilang', 'none'),
('B0006', 1, 'gelas', 1, 'pcs', 'rusak', 1, 'tersedia', 'sekre'),
('B0007', 1, 'buku', 12, 'pcs', 'baik', 9, 'tersedia', 'camp'),
('B0008', 1, 'laptop', 1, 'pcs', 'baik', 1, 'hilang', 'sekre'),
('B0009', 1, 'kabel', 1, 'pcs', 'baik', 1, 'hilang', 'none'),
('B0010', 1, 'sumpit', 1, 'pcs', 'rusak', 1, 'tersedia', 'camp'),
('B0011', 1, 'speaker', 4, 'pcs', 'baik', 2, 'tersedia', 'camp');

-- --------------------------------------------------------

--
-- Table structure for table `barang_hilang`
--

CREATE TABLE `barang_hilang` (
  `id` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` varchar(10) NOT NULL,
  `users` int(11) UNSIGNED NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `isi` text NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `users`, `judul`, `foto`, `isi`, `tgl_buat`, `tgl_update`) VALUES
('BR001', 1, 'Pengumanan jelly', 'asisten.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n', '2017-04-26', '2017-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General Userzsd');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, '1', 'Boominathan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` varchar(10) NOT NULL,
  `users` int(11) UNSIGNED NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_pemakaian` date NOT NULL,
  `status` enum('terima','tolak','menunggu','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `users`, `id_barang`, `nim`, `qty`, `deskripsi`, `tgl_pengajuan`, `tgl_pemakaian`, `status`) VALUES
('P0001', 2, 'B0002', '17.01.3413', 1, 'adsad', '2017-11-02', '2017-11-10', 'terima'),
('P0002', 2, 'B0001', '16.91.3223', 1, 'aSa', '2017-11-02', '2017-11-16', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` varchar(10) NOT NULL,
  `users` int(11) UNSIGNED NOT NULL,
  `pengajuan` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `users`, `pengajuan`, `phone`, `pesan`, `tgl`) VALUES
('S0001', 1, 'P0002', '082328722687', 'sasa', '2017-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `foto`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$qjcDBabhtDz7YVgu6ek3wupO.erm/YPJOTQAUGfbN/7s4gk396nUO', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1509708449, 1, 'admin', 'super', 'karete', '082328722680', 'diki.jpg'),
(2, '::1', 'meigi@amikom.ac.id', '$2y$08$K/zMFPSdKhmV7mpN3IagsukqNgIARdbwYn7BfanP4NX9vmcN99pOu', NULL, 'meigi@amikom.ac.id', NULL, NULL, NULL, NULL, 1492156413, 1509682540, 1, 'meigi', 'valentine', 'KOMA', '082328722681', ''),
(3, '::1', 'titik@gmail.com', '$2y$08$eARzlWKGfYE41fJ1WWNoKuzTIh6rICmIkfd/jrobtcw.G5es9OkSO', NULL, 'titik@gmail.com', NULL, NULL, NULL, NULL, 1492156682, 1492156777, 1, 'titik', 'koma', 'titik', '082328722689', ''),
(4, '::1', 'user@gmail.com', '$2y$08$TSttHSHCSDJ3WEkjns.pGeiJY8sNy7u41wE/aGG5WbW80mtdsFCpy', NULL, 'user@gmail.com', NULL, NULL, NULL, NULL, 1492183826, 1494918142, 1, 'user', 'name', 'koma', '082328722686', ''),
(5, '::1', 'dikih.wibowo@students.amikom.ac.id', '$2y$08$4BbO.98KnBDsuJbD9BRL9u2ogZMGFb/bEjafctPqOg0roMTwPQLjm', NULL, 'dikih.wibowo@students.amikom.ac.id', NULL, 'CBJA6TrlEIxPICOO9u-hXucef61281c7e88db95d', 1493102643, NULL, 1493102633, NULL, 1, 'arif', 'wibowo', 'amc', '082328722899', ''),
(6, '::1', 'hana@gmail.com', '$2y$08$SDTWaM5r8mzVc8tf/y4/gOVcWD9lpTXpRMO.ZSy.hxI.GJ8a13zcC', NULL, 'hana@gmail.com', NULL, NULL, NULL, NULL, 1506096758, 1506096775, 1, 'hana', 'wiyono', 'koma', '082328722687', ''),
(7, '::1', 'amcc@amcc.or.id', '$2y$08$c7Et5VhauD.XOP4Q2AnV7.O8DPcRuOQNbGQ6Qyz4xCbf6c.8mUdQu', NULL, 'amcc@amcc.or.id', NULL, NULL, NULL, NULL, 1506172528, 1506444078, 1, 'amcc', 'dept', 'AMCC', '082328722687', ''),
(8, '::1', 'diah@gmail.com', '$2y$08$Fwh6rbyp3W0QPx1eFdIZK.HwpYkiqVm7UnU2mrMH2YUt6yAYxKwFy', NULL, 'diah@gmail.com', NULL, NULL, NULL, NULL, 1509610096, 1509696975, 1, 'diah', 'anisa', 'uki', '082328722687', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(21, 1, 1),
(22, 1, 2),
(5, 2, 2),
(4, 3, 2),
(7, 4, 2),
(8, 5, 2),
(16, 6, 2),
(17, 7, 2),
(20, 8, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`users`),
  ADD KEY `users_2` (`users`);

--
-- Indexes for table `barang_hilang`
--
ALTER TABLE `barang_hilang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`users`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`users`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`users`),
  ADD KEY `pengajuan` (`pengajuan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `users` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_hilang`
--
ALTER TABLE `barang_hilang`
  ADD CONSTRAINT `barang_hilang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `users_berita` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `users_pengajuan` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sms`
--
ALTER TABLE `sms`
  ADD CONSTRAINT `pengajuan_sms` FOREIGN KEY (`pengajuan`) REFERENCES `pengajuan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_sms` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
