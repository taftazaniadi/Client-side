-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 05:34 PM
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
  `satuan` enum('pcs','kg','paks','pasang','dus','lembar','eksemplar') NOT NULL,
  `keterangan` enum('pinjam','tersedia') NOT NULL,
  `tempat` enum('sekre','camp') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `users`, `nama`, `jumlah`, `satuan`, `keterangan`, `tempat`) VALUES
('B0032', 1, 'Monitor', 1, 'pcs', 'tersedia', 'camp'),
('B0033', 1, 'Printer HP Deskjet 2545 ', 1, 'pcs', 'tersedia', 'sekre'),
('B0034', 1, 'Kipas Angin Panasonic', 1, 'pcs', 'tersedia', 'sekre'),
('B0035', 1, 'Gelas Bening', 6, 'pcs', 'tersedia', 'camp'),
('B0036', 1, 'Galon Aqua', 1, 'pcs', 'tersedia', 'sekre'),
('B0037', 1, 'Tong Sampah', 1, 'pcs', 'tersedia', 'sekre'),
('B0038', 1, 'Personal Computer Dual Core Intel 2.4 Ghz', 1, 'pcs', 'tersedia', 'sekre'),
('B0039', 1, 'Stella Pengharum ruangan', 1, 'pcs', 'tersedia', 'sekre'),
('B0040', 1, 'Speaker', 1, 'pcs', 'tersedia', 'sekre'),
('B0041', 1, 'CPU', 2, 'pcs', 'tersedia', 'sekre'),
('B0042', 1, 'Mouse Logitech', 1, 'pcs', 'tersedia', 'sekre'),
('B0043', 1, 'Dispenser', 1, 'pcs', 'tersedia', 'sekre'),
('B0044', 1, 'Gelas kaca 100 ml', 6, 'pcs', 'tersedia', 'sekre'),
('B0045', 1, 'Keyboard USB Logitech', 2, 'pcs', 'tersedia', 'sekre'),
('B0046', 1, 'Kursi busa biru', 3, 'pcs', 'tersedia', 'sekre'),
('B0047', 1, 'Roll Kabel panjang 5 meter', 7, 'pcs', 'tersedia', 'sekre'),
('B0048', 1, 'Kaki X-banner', 47, 'pcs', 'tersedia', 'sekre'),
('B0049', 1, 'Cermin', 1, 'pcs', 'tersedia', 'sekre'),
('B0050', 1, 'Papan tulis (white board) 120x180 cm', 1, 'pcs', 'tersedia', 'sekre'),
('B0051', 1, 'Frame foto', 4, 'pcs', 'tersedia', 'sekre'),
('B0052', 1, 'Papan mading', 1, 'pcs', 'tersedia', 'sekre'),
('B0053', 1, 'Loker barang', 1, 'pcs', 'tersedia', 'sekre'),
('B0054', 1, 'Meja komputer', 1, 'pcs', 'tersedia', 'sekre'),
('B0055', 1, 'Meja biasa', 4, 'pcs', 'tersedia', 'sekre'),
('B0056', 1, 'Tempat gelas', 1, 'pcs', 'tersedia', 'sekre'),
('B0057', 1, 'sapu lantai', 1, 'pcs', 'tersedia', 'sekre'),
('B0058', 1, 'Toples', 2, 'pcs', 'tersedia', 'sekre'),
('B0059', 1, 'Rak sepatu', 3, 'pcs', 'tersedia', 'sekre'),
('B0060', 1, 'Carter', 2, 'pcs', 'tersedia', 'sekre'),
('B0061', 1, 'Gunting', 3, 'pcs', 'tersedia', 'sekre'),
('B0062', 1, 'Kuas Kecil', 1, 'pcs', 'tersedia', 'sekre'),
('B0063', 1, 'Rautan', 1, 'pcs', 'tersedia', 'sekre'),
('B0064', 1, 'Spidol hitam', 5, 'pcs', 'tersedia', 'sekre'),
('B0065', 1, 'Stepler', 2, 'pcs', 'tersedia', 'sekre'),
('B0066', 1, 'Tipe-X', 1, 'pcs', 'tersedia', 'sekre'),
('B0067', 1, 'Stabilo', 1, 'pcs', 'tersedia', 'sekre'),
('B0068', 1, 'Bolpoint', 12, 'pcs', 'tersedia', 'sekre'),
('B0069', 1, 'Penghapus Pencil', 1, 'pcs', 'tersedia', 'sekre'),
('B0070', 1, 'Baterai ABC aa', 1, 'pcs', 'tersedia', 'sekre'),
('B0071', 1, 'Obeng', 1, 'pcs', 'tersedia', 'sekre'),
('B0072', 1, 'Besi X-banner', 12, 'pcs', 'tersedia', 'sekre'),
('B0073', 1, 'Terminal KNG ARDE UTICON 4 LB', 1, 'pcs', 'tersedia', 'sekre'),
('B0074', 1, 'Terminal KNG ARDE UTICON 3 LB', 1, 'pcs', 'tersedia', 'sekre'),
('B0075', 1, 'Steker ARDE UTICON 828', 1, 'pcs', 'tersedia', 'sekre'),
('B0076', 1, 'Kabel NYM 2 x 1.5 Super Sonic/CM', 1, 'pcs', 'tersedia', 'sekre'),
('B0077', 1, 'Sandal Swallow', 2, 'pasang', 'tersedia', 'sekre'),
('B0078', 1, 'Kemoceng', 1, 'pcs', 'tersedia', 'sekre'),
('B0079', 1, 'Mukena', 2, 'pcs', 'tersedia', 'sekre'),
('B0080', 1, 'Sajadah', 2, 'pcs', 'tersedia', 'sekre'),
('B0081', 1, 'Binder clip besar', 7, 'pcs', 'tersedia', 'sekre'),
('B0082', 1, 'Nampan', 1, 'pcs', 'tersedia', 'sekre'),
('B0083', 1, 'Stamping Ink', 2, 'pcs', 'tersedia', 'sekre'),
('B0084', 1, 'LAN tester', 1, 'pcs', 'tersedia', 'sekre'),
('B0085', 1, 'Konektor RJ 45', 2, 'dus', 'tersedia', 'sekre'),
('B0086', 1, 'Kabel LAN Cat 5 10 m', 1, 'pcs', 'tersedia', 'sekre'),
('B0087', 1, 'Tang krimping', 1, 'pcs', 'tersedia', 'sekre'),
('B0088', 1, 'Taplax', 1, 'pcs', 'tersedia', 'sekre'),
('B0089', 1, 'Map Interx Clips', 1, 'pcs', 'tersedia', 'sekre'),
('B0090', 1, 'Monitor CLD Benq', 2, 'pcs', 'tersedia', 'sekre'),
('B0091', 1, 'Ember Kecil', 1, 'pcs', 'tersedia', 'sekre'),
('B0092', 1, 'Karpet Biru', 1, 'pcs', 'tersedia', 'sekre'),
('B0093', 1, 'Tempat Pensil', 1, 'pcs', 'tersedia', 'sekre'),
('B0094', 1, 'Rak', 2, 'pcs', 'tersedia', 'camp'),
('B0095', 1, 'sapu lantai kain', 2, 'pcs', 'tersedia', 'camp'),
('B0096', 1, 'Galon Universal', 3, 'pcs', 'tersedia', 'camp'),
('B0097', 1, 'Dispenser Sanex', 1, 'pcs', 'tersedia', 'camp'),
('B0098', 1, 'Tiker', 2, 'pcs', 'tersedia', 'camp'),
('B0099', 1, 'Mikrotik Router Board', 1, 'pcs', 'tersedia', 'camp'),
('B0100', 1, 'TV Tunner', 1, 'pcs', 'tersedia', 'camp'),
('B0101', 1, 'HP Nokia Xperia X2', 1, 'pcs', 'tersedia', 'camp'),
('B0102', 1, 'Printer Epson L200', 1, 'pcs', 'tersedia', 'camp'),
('B0103', 1, 'Staples GW 10', 2, 'pcs', 'tersedia', 'camp'),
('B0104', 1, 'Helm Ink Hitam', 1, 'pcs', 'tersedia', 'camp'),
('B0105', 1, 'Printer T11', 1, 'pcs', 'tersedia', 'camp'),
('B0106', 1, 'Radio Pemancar FM', 1, 'pcs', 'tersedia', 'camp'),
('B0107', 1, 'Modem Speedy', 1, 'pcs', 'tersedia', 'camp'),
('B0108', 1, 'USB Wifi tp-link', 3, 'pcs', 'tersedia', 'camp'),
('B0109', 1, 'ADSL modem Linksys', 1, 'pcs', 'tersedia', 'camp'),
('B0110', 1, 'AP linksys', 1, 'pcs', 'tersedia', 'camp'),
('B0111', 1, 'Antena Kaleng', 1, 'pcs', 'tersedia', 'camp'),
('B0112', 1, 'Kunci Inggris Kecil', 1, 'pcs', 'tersedia', 'camp'),
('B0113', 1, 'Arduino Uno + Kabel', 1, 'pcs', 'tersedia', 'camp'),
('B0114', 1, 'Relay 2ch', 1, 'pcs', 'tersedia', 'camp'),
('B0115', 1, 'Sensor prr', 1, 'pcs', 'tersedia', 'camp'),
('B0116', 1, 'Sensor Ping/Ultrasonic', 1, 'pcs', 'tersedia', 'camp'),
('B0117', 1, 'Resistor 10K', 10, 'pcs', 'tersedia', 'camp'),
('B0118', 1, 'Stempel AMCC', 6, 'pcs', 'tersedia', 'camp');

-- --------------------------------------------------------

--
-- Table structure for table `barang_hilang`
--

CREATE TABLE `barang_hilang` (
  `id` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `hilang_baik` int(5) NOT NULL,
  `hilang_rusak` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_hilang`
--

INSERT INTO `barang_hilang` (`id`, `id_barang`, `jumlah`, `hilang_baik`, `hilang_rusak`, `tanggal`) VALUES
('H0008', 'B0036', 1, 1, 0, '2017-12-18'),
('H0009', 'B0037', 1, 1, 0, '2017-12-18');

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
('BR002', 1, 'Sejarah terbentuknya UKM AMCC', 'amcc-logo.png', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; AMCC merupakan UKM yang bergerak dalam bidang keilmuan. Seketariat AMCC beralamat di Gedung BSC Lantai 2 Universitas Amikom Yogyakarta jalan Ring Road Utara Sleman, Yogyakarta. Sedangkan untuk Camp AMCC beralamat di jalan plosokuning raya No. 88, Minomartani, Ngaglik, Sleman, Yogyakarta. AMCC secara resmi menjadi UKM pada tanggal 6 Mei 1996.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; AMCC memiliki visi <em>&ldquo;The Best IT Organization &nbsp;in Jogja&rdquo;. </em>AMCC dalam melaksanakan visi dan misinya terdiri dari beberapa departemen diantaranya adalah Departemen Kerumahtanggan, Departemen IT, Departemen PSDM, Departemen Kewirausahaan. Setiap departemen memiliki tugas dan fungsi yang berbeda. Departemen Kerumahtanggan AMCC bertugas mengurus inventaris barang dan melayani peminjaman barang dari UKM lain di Universitas Amikom Yogyakarta.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AMCC yang merupakan UKM bidang keilmuan, terdiri dari 4 divisi yaitu, divisi <em>web programming,</em> divisi <em>computer network</em>, divisi <em>desktop programing</em>, dan divisi <em>hardware software</em>. AMCC secara rutin melaksanakan pelatihan kepada member AMCC baik pelatihan mingguan maupun pelatihan tahunan seperti <em>Introduction To Computer</em> kepada mahasiswa baru Universitas Amikom Yogyakarta sebelum memasuki perkuliahan.</p>\r\n\r\n<p>&nbsp; .</p>\r\n', '2017-12-25', '2017-12-25'),
('BR003', 1, 'Pelatihan Perdana AMCC 2017', 'pelatihan amcc.jpg', '<p>Halo gans/sist , udah ngga sabar ya buat ketemu kaka kaka emes dari AMCC? Nah buat kalian yang udah ngga sabar , pelatihan perdana untuk member baru AMCC 2017 akan di laksanakan pada</p>\r\n\r\n<p>Haloo.. gan/sist member baru AMCC , udah ngga sabar ya buat pelatihannya?</p>\r\n\r\n<p>Nah, ada kabar baik nih pelatihan perdana kita bakal diadain pada :</p>\r\n\r\n<p>tanggal :&nbsp;<strong>Sabtu, 24 November 2017</strong></p>\r\n\r\n<p>waktu :&nbsp;<strong>Sesi 1 = 13.00</strong>&nbsp;<strong>Sesi 2 = 15.00</strong></p>\r\n\r\n<p>tempat :&nbsp;<strong>V.4.1 - V.4.8</strong></p>\r\n\r\n<p>Jangan lupa bawa laptop temen temen untuk installasi software yang dibutuhkan. Untuk pembagain kelasnya bisa dilihat di</p>\r\n\r\n<p><a href=\"https://s.id/kelasmember\">https://s.id/kelasmember</a></p>\r\n\r\n<p>Untuk poster bisa dilihat disini ya temen-teman</p>\r\n\r\n<p><a href=\"https://www.instagram.com/p/Bby48pYAopG/?taken-by=amccamikom\">https://www.instagram.com/p/Bby48pYAopG/?taken-by=amccamikom</a></p>\r\n\r\n<p><strong><em>AMCC learning by doing learning by teaching.</em></strong></p>\r\n', '2017-12-25', '2017-12-25'),
('BR004', 1, 'Pengumuman Calon Pengurus AMCC 2017/2018', 'pengumuman pengurus.jpg', '<p>Assalamu&#39;alaikum Wr. Wb.</p>\r\n\r\n<p>Selamat malam gaes! Berikut kami sampaikan nama-nama kader yang telah lolos seleksi wawancara pada hari Rabu, 2 Agustus 2018.</p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>No.</th>\r\n			<th>Nama</th>\r\n			<th>NIM</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Ali Rahmat Ismail</td>\r\n			<td>16.61.0087</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Niko Mufrida</td>\r\n			<td>16.62.0078</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>Devry Kawiryan</td>\r\n			<td>16.62.0090</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>Bobby Candera Lim</td>\r\n			<td>16.11.0248</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>Rheza Hanif Malik Fajar</td>\r\n			<td>16.11.0357</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>Zakaria Noviansyah</td>\r\n			<td>16.12.9520</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7</td>\r\n			<td>Rahmadi Fandu Prassetia</td>\r\n			<td>16.11.0741</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8</td>\r\n			<td>Gunawan Wibisono</td>\r\n			<td>16.11.0189</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9</td>\r\n			<td>Muhammad Taptazani Adi</td>\r\n			<td>16.12.8983</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10</td>\r\n			<td>Yogi Yulianto</td>\r\n			<td>16.11.0172</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>Maya Ika Afrianada</td>\r\n			<td>16.02.9412</td>\r\n		</tr>\r\n		<tr>\r\n			<td>12</td>\r\n			<td>Murti Retno Dewi</td>\r\n			<td>16.02.9470</td>\r\n		</tr>\r\n		<tr>\r\n			<td>13</td>\r\n			<td>Dwi Subekti Yuni Fatimah</td>\r\n			<td>16.02.9458</td>\r\n		</tr>\r\n		<tr>\r\n			<td>14</td>\r\n			<td>Faradillah Nurul Hikmah</td>\r\n			<td>16.02.9447</td>\r\n		</tr>\r\n		<tr>\r\n			<td>15</td>\r\n			<td>Hanif Aisyah</td>\r\n			<td>16.11.0625</td>\r\n		</tr>\r\n		<tr>\r\n			<td>16</td>\r\n			<td>David Rigan</td>\r\n			<td>15.11.9382</td>\r\n		</tr>\r\n		<tr>\r\n			<td>17</td>\r\n			<td>Muhamad Rahmat Jatnika</td>\r\n			<td>15.11.9237</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Kami ucapkan selamat untuk teman-teman Kader yang lolos menjadi&nbsp;<strong>Calon Pengurus AMCC periode 2017/2018</strong>. Agenda selanjutnya adalah&nbsp;<em>briefing</em>&nbsp;rangkaian kegiatan LDKMO yang akan dilaksanakan pada:<br />\r\nHari:&nbsp;<strong>Minggu, 6 Agustus 2017</strong><br />\r\nWaktu:&nbsp;<strong>pukul 10.00 WIB</strong><br />\r\nTempat:&nbsp;<strong>Basecamp AMCC</strong></p>\r\n\r\n<p>Dan untuk teman-teman Kader yang belum lolos, tetap semangat dan jangan berkecil hati karena masih banyak kesempatan di lain waktu maupun tempat. Kami dari AMCC tetap terbuka bagi teman-teman yang masih ingin belajar bersama, menambah relasi, pun sekadar berdiskusi ringan tentang apa saja. Jangan sungkan, kontak saja. :)</p>\r\n\r\n<hr />\r\n<p><strong>AMCC</strong></p>\r\n\r\n<p><em>&quot;Learning by Doing, Learning by Teaching.&quot;</em></p>\r\n', '2017-12-25', '2017-12-25'),
('BR005', 1, 'Serunya LDKMO AMCC 2018', 'LKD_MO.jpg', '<p>Latihan Dasar Kepemimpinan dan Manajemen Organisasi (LDKMO) adalah kegiatan rutin tahunan yang diselenggarakan oleh AMCC (Amikom Computer Club) Universitas Amikom Yogyakarta sebagai bentuk pembekalan bagi para Kader yang akan menjadi Pengurus AMCC. Acara tahun ini mengambil tema&nbsp;<strong><em>&ldquo;Disrupsi untuk Mencapai Visi&rdquo;</em></strong>. Diselenggarakan pada tanggal 10-13 Agustus 2017 di Universitas Amikom Yogyakarta dan Bumi Perkemahan Sinolewah, Cangkringan, Sleman Yogyakarta.</p>\r\n\r\n<p>Kegiatan ini bertujuan untuk membentuk pribadi berkualitas yang memiliki sikap mental, tanggungjawab, kepedulian terhadap sesama, loyalitas, dan kemampuan berinovasi mengikuti perkembangan dunia IT baik di lingkup universitas maupun di lingkup yang lebih luas.</p>\r\n\r\n<p>LDKMO tahun ini berjalan lancar dengan diikuti oleh 22 peserta yang aktif dan antusias mengkuti rangkaian acara yang telah disusun oleh panitia. Adapun kegiatan yang dilaksanakan antara lain materi Manajemen Organisasi dan Kepemimpinan oleh Bapak Melwin Syafrizal S.Kom., M.Eng,&nbsp;<em>sharing session</em>&nbsp;bersama Alumni AMCC,&nbsp;<em>brainstorming</em>, game, Malam Kreativitas, dan masih banyak yang lainnya.</p>\r\n\r\n<p>Dari LDKMO AMCC 2017 ini diharapkan, Kader AMCC dapat menyerap ilmu yang telah diberikan dan bisa mengimplementasikannya pada masa kepengurusan AMCC periode selanjutnya.</p>\r\n\r\n<hr />\r\n<p><strong>AMCC</strong></p>\r\n\r\n<p><em>&ldquo;Learning by Doing, Learning by Teaching.&rdquo;</em></p>\r\n', '2018-01-12', '2018-01-12'),
('BR006', 1, 'AGS (AMCC Goes ti School) 2018', 'ags.jpg', '<p>Kegiatan AMCC GOES to SCHOOL 2017 (AGS) AMCC GOES to SCHOOL merupakan kegiatan pengabdian masyarakat UKM AMCC. Tema kegiatan ini&nbsp;<strong><em>Share IT and Get IT More</em></strong>.Karena kegiatan ini bertujuan memberikan pengetahuan / pengenalan siswa-siswi tentang IT khususnya pembuatan game android. Kegiatan AGS 2017 diselenggarakan pada :</p>\r\n\r\n<ul>\r\n	<li>Hari / Tanggal : Kamis, 26 Januari 2017</li>\r\n	<li>Pukul : 08.00 &ndash; 13.00 WIB</li>\r\n	<li>Tempat : SMK MUHAMMADIYAH 3 WATES.</li>\r\n</ul>\r\n\r\n<p>Kegiatan AGS di SMK Muh 3 Wates berupa pelatihan pembuatan game android untuk kelas X dan XI jurusan multimedia dan teknik komputer jaringan. Siswa &ndash; siswi sangat antusias mengikuti pelatihan yang diberikan. Semoga dalam kegiatan pengabdian masyarakat ini bisa berkelanjutan dan memberikan manfaat yang baik untuk kedepannya.</p>\r\n', '2018-01-12', '2018-01-12'),
('BR007', 1, 'Pengurus AMCC meraih juara 2 ajang ICSW 2017', 'juara 2.jpg', '<p>Juara di raih oleh dikih arif wibowo selaku anggota departemen IT AMCC periode 2017/2018. ICSW merupakan ajang tahunan yang diadakan oleh Universitas Islam Indonesia untuk meningkatkan skill dan kreativitas mahasiswa dalam bidang Informatika. ajang ini dilakukan beberapa tahap sebelum akhirnya dipilih 5 peserta terbaik dari seluruh perguruan tinggi di Jogja dan Jateng. kompetisi ICSW diadakan selama 2 hari di Fakultas MIPA Universitas Islam Indonesia.</p>\r\n', '2018-01-12', '2018-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `details_barang`
--

CREATE TABLE `details_barang` (
  `id` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `baik` int(5) NOT NULL,
  `rusak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details_barang`
--

INSERT INTO `details_barang` (`id`, `id_barang`, `baik`, `rusak`) VALUES
('D0011', 'B0032', 1, 0),
('D0012', 'B0033', 1, 0),
('D0013', 'B0034', 1, 0),
('D0014', 'B0035', 6, 0),
('D0015', 'B0036', 1, 0),
('D0016', 'B0037', 1, 0),
('D0017', 'B0038', 0, 1),
('D0018', 'B0039', 0, 1),
('D0019', 'B0040', 1, 0),
('D0020', 'B0041', 2, 0),
('D0021', 'B0042', 1, 0),
('D0022', 'B0043', 1, 0),
('D0023', 'B0044', 6, 0),
('D0024', 'B0045', 2, 0),
('D0025', 'B0046', 3, 0),
('D0026', 'B0047', 7, 0),
('D0027', 'B0048', 44, 3),
('D0028', 'B0049', 1, 0),
('D0029', 'B0050', 1, 0),
('D0030', 'B0051', 4, 0),
('D0031', 'B0052', 1, 0),
('D0032', 'B0053', 1, 0),
('D0033', 'B0054', 1, 0),
('D0034', 'B0055', 4, 0),
('D0035', 'B0056', 1, 0),
('D0036', 'B0057', 1, 0),
('D0037', 'B0058', 2, 0),
('D0038', 'B0059', 3, 0),
('D0039', 'B0060', 2, 0),
('D0040', 'B0061', 3, 0),
('D0041', 'B0062', 1, 0),
('D0042', 'B0063', 1, 0),
('D0043', 'B0064', 5, 0),
('D0044', 'B0065', 2, 0),
('D0045', 'B0066', 1, 0),
('D0046', 'B0067', 1, 0),
('D0047', 'B0068', 12, 0),
('D0048', 'B0069', 1, 0),
('D0049', 'B0070', 1, 0),
('D0050', 'B0071', 1, 0),
('D0051', 'B0072', 12, 0),
('D0052', 'B0073', 1, 0),
('D0053', 'B0074', 1, 0),
('D0054', 'B0075', 1, 0),
('D0055', 'B0076', 0, 0),
('D0056', 'B0077', 2, 0),
('D0057', 'B0078', 1, 0),
('D0058', 'B0079', 2, 0),
('D0059', 'B0080', 2, 0),
('D0060', 'B0081', 7, 0),
('D0061', 'B0082', 1, 0),
('D0062', 'B0083', 2, 0),
('D0063', 'B0084', 1, 0),
('D0064', 'B0085', 2, 0),
('D0065', 'B0086', 1, 0),
('D0066', 'B0087', 1, 0),
('D0067', 'B0088', 1, 0),
('D0068', 'B0089', 1, 0),
('D0069', 'B0090', 2, 0),
('D0070', 'B0091', 1, 0),
('D0071', 'B0092', 1, 0),
('D0072', 'B0093', 1, 0),
('D0073', 'B0094', 2, 0),
('D0074', 'B0095', 2, 0),
('D0075', 'B0096', 3, 0),
('D0076', 'B0097', 1, 0),
('D0077', 'B0098', 2, 0),
('D0078', 'B0099', 1, 0),
('D0079', 'B0100', 1, 0),
('D0080', 'B0101', 1, 0),
('D0081', 'B0102', 1, 0),
('D0082', 'B0103', 2, 0),
('D0083', 'B0104', 1, 0),
('D0084', 'B0105', 1, 0),
('D0085', 'B0106', 1, 0),
('D0086', 'B0107', 1, 0),
('D0087', 'B0108', 3, 0),
('D0088', 'B0109', 1, 0),
('D0089', 'B0110', 1, 0),
('D0090', 'B0111', 1, 0),
('D0091', 'B0112', 1, 0),
('D0092', 'B0113', 1, 0),
('D0093', 'B0114', 1, 0),
('D0094', 'B0115', 1, 0),
('D0095', 'B0116', 1, 0),
('D0096', 'B0117', 10, 0),
('D0097', 'B0118', 6, 0);

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
  `surat` text NOT NULL,
  `status` enum('terima','tolak','menunggu','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `users`, `id_barang`, `nim`, `qty`, `deskripsi`, `tgl_pengajuan`, `tgl_pemakaian`, `surat`, `status`) VALUES
('P0001', 9, 'B0117', '15.02.1332', 5, 'sssasas', '2018-01-11', '2018-01-11', 'juara 2.jpg', 'tolak');

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
(1, '127.0.0.1', 'administrator', '$2y$08$qjcDBabhtDz7YVgu6ek3wupO.erm/YPJOTQAUGfbN/7s4gk396nUO', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1515770431, 1, 'admin', 'adminstrator', 'Dept KRT', '082328722681', 'download.png'),
(2, '::1', 'meigi@amikom.ac.id', '$2y$08$K/zMFPSdKhmV7mpN3IagsukqNgIARdbwYn7BfanP4NX9vmcN99pOu', NULL, 'meigi@amikom.ac.id', NULL, NULL, NULL, NULL, 1492156413, 1509682540, 1, 'meigi', 'valentine', 'KOMA', '082328722681', ''),
(3, '::1', 'koma', '$2y$08$eARzlWKGfYE41fJ1WWNoKuzTIh6rICmIkfd/jrobtcw.G5es9OkSO', NULL, 'qulbunsalim@gmail.com', '94d26d262867d7713f0402b5ead26a126ac0dd78', NULL, NULL, NULL, 1492156682, 1492156777, 0, 'qolbun', 'salim', 'titik', '082328722689', ''),
(4, '::1', 'user@gmail.com', '$2y$08$TSttHSHCSDJ3WEkjns.pGeiJY8sNy7u41wE/aGG5WbW80mtdsFCpy', NULL, 'user@gmail.com', NULL, NULL, NULL, NULL, 1492183826, 1494918142, 1, 'user', 'name', 'koma', '082328722686', ''),
(5, '::1', 'dikih.wibowo@students.amikom.ac.id', '$2y$08$4BbO.98KnBDsuJbD9BRL9u2ogZMGFb/bEjafctPqOg0roMTwPQLjm', NULL, 'dikih.wibowo@students.amikom.ac.id', NULL, 'CBJA6TrlEIxPICOO9u-hXucef61281c7e88db95d', 1493102643, NULL, 1493102633, NULL, 1, 'arif', 'wibowo', 'amc', '082328722899', ''),
(6, '::1', 'hana@gmail.com', '$2y$08$SDTWaM5r8mzVc8tf/y4/gOVcWD9lpTXpRMO.ZSy.hxI.GJ8a13zcC', NULL, 'hana@gmail.com', NULL, NULL, NULL, NULL, 1506096758, 1506096775, 1, 'hana', 'wiyono', 'koma', '082328722687', ''),
(7, '::1', 'amcc@amcc.or.id', '$2y$08$c7Et5VhauD.XOP4Q2AnV7.O8DPcRuOQNbGQ6Qyz4xCbf6c.8mUdQu', NULL, 'amcc@amcc.or.id', NULL, NULL, NULL, NULL, 1506172528, 1506444078, 1, 'amcc', 'dept', 'AMCC', '082328722687', ''),
(8, '::1', 'diah@gmail.com', '$2y$08$Fwh6rbyp3W0QPx1eFdIZK.HwpYkiqVm7UnU2mrMH2YUt6yAYxKwFy', NULL, 'diah@gmail.com', NULL, NULL, NULL, NULL, 1509610096, 1514211795, 1, 'diah', 'anisa', 'uki', '082328722687', 'bida  dari.jpg'),
(9, '::1', 'dikiharifwi@gmail.com', '$2y$08$rQck8/eKpiSybAIXVZ3zSeqclm30iFCyoYja9ONtr89U8Qbd7q6zG', NULL, 'dikiharifwi@gmail.com', NULL, NULL, NULL, NULL, 1515686753, 1515769834, 1, 'arif', 'wibowo ', 'amcc oke', '082328722687', '');

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
(31, 1, 1),
(5, 2, 2),
(4, 3, 2),
(7, 4, 2),
(8, 5, 1),
(16, 6, 2),
(17, 7, 2),
(20, 8, 2),
(23, 9, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`users`);

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
-- Indexes for table `details_barang`
--
ALTER TABLE `details_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
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
-- Constraints for table `details_barang`
--
ALTER TABLE `details_barang`
  ADD CONSTRAINT `id_details` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
