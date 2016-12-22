-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2016 at 12:20 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE IF NOT EXISTS `arsip` (
  `id_arsip` int(10) NOT NULL AUTO_INCREMENT,
  `tgl_kegiatan` date NOT NULL,
  `subjek` varchar(128) NOT NULL,
  `tempat` text NOT NULL,
  `tgl_kelola` datetime NOT NULL,
  `arsip_show` int(1) NOT NULL DEFAULT '1' COMMENT '1= show, 0 hide',
  `userId` int(11) NOT NULL,
  `evaluasi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_arsip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5509 ;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `tgl_kegiatan`, `subjek`, `tempat`, `tgl_kelola`, `arsip_show`, `userId`, `evaluasi`, `id_kategori`) VALUES
(5449, '2015-05-22', 'jjjjjjjjjj', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5450, '2015-05-25', 'senin', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5451, '2015-05-25', 'teh kotak', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5452, '2015-05-25', 'rar', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5453, '2015-05-25', 'pdf', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5455, '2015-05-25', 'er', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5457, '2015-05-25', 'www', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5459, '2015-05-25', 'rrrrrrrrr', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5461, '2015-05-25', 'adsf', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5462, '2015-05-25', 'adsf', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5464, '2015-05-26', 'word', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5465, '2015-05-27', 'bola', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5466, '2015-05-27', 'halo bola', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5467, '2015-05-29', 'hai', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5468, '2015-05-29', 'hotspot', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5469, '2015-05-29', 'ters', '', '2015-05-29 14:34:38', 0, 6, '', 0),
(5470, '2015-05-29', 'kkkk', '', '2015-05-29 14:37:43', 0, 6, '', 0),
(5471, '2015-05-29', 'banyak', '', '2015-05-29 15:16:19', 0, 6, '', 0),
(5472, '2015-05-29', 'banyak', '', '2015-05-29 15:18:41', 0, 6, '', 0),
(5473, '2015-05-29', 'ewwwwwwwwwrtf', '', '2015-05-29 15:19:49', 0, 6, '', 0),
(5474, '2015-05-29', 'ewwwwwwwwwrtf', '', '2015-05-29 15:23:33', 0, 6, '', 0),
(5475, '2015-05-29', 'ewwwwwwwwwrtf', '', '2015-05-29 15:24:42', 0, 6, '', 0),
(5476, '2015-05-29', 'ewwwwwwwwwrtf', '', '2015-05-29 15:25:16', 0, 6, '', 0),
(5477, '2015-05-29', 'mmmmm', '', '2015-05-29 15:26:14', 0, 6, '', 0),
(5478, '2015-05-29', 'mmmmm', '', '2015-05-29 15:26:37', 0, 6, '', 0),
(5479, '2015-05-29', 'mmmm', '', '2015-05-29 15:26:49', 0, 6, '', 0),
(5480, '2015-05-29', 'mmmm', '', '2015-05-29 15:27:16', 0, 6, '', 0),
(5481, '2015-05-29', 'mmmmmn', '', '2015-05-29 15:27:43', 0, 6, '', 0),
(5482, '2015-05-29', 'aaaaasdpf', '', '2015-05-29 15:29:32', 0, 6, '', 0),
(5483, '2015-05-29', 'aaaaasdpf', '', '2015-05-29 15:29:57', 0, 6, '', 0),
(5484, '2015-05-29', 'yat', '', '2015-05-29 15:30:31', 0, 6, '', 0),
(5485, '2015-05-29', 'yat', '', '2015-05-29 15:33:06', 0, 6, '', 0),
(5486, '2015-05-29', 'yat', '', '2015-05-29 15:52:01', 0, 6, '', 0),
(5487, '2016-12-07', '0', '', '2015-05-29 15:52:31', 0, 6, '', 0),
(5488, '2015-05-29', 'yat', '', '2015-05-29 15:52:45', 0, 6, '', 0),
(5489, '2015-05-29', 'mad', '', '2015-05-29 15:57:16', 0, 6, '', 0),
(5490, '2015-05-29', 'mad', '', '2015-05-29 16:03:51', 0, 6, '', 0),
(5491, '2016-12-07', '0', '', '2015-05-29 16:04:15', 0, 6, '', 0),
(5492, '2016-12-01', '', '', '2015-05-29 16:04:38', 0, 6, '', 0),
(5493, '2016-12-22', 'test', 'pampam', '2016-12-22 20:00:34', 0, 22, '', 0),
(5494, '2016-12-14', 'Pelatihan Situs Website', 'Ballroom hotel santika', '2016-12-23 06:02:01', 1, 22, '', 0),
(5495, '2016-12-20', 'Review Kegiatan Pelatihan Website', 'Ruang Rapat 2', '2016-12-23 06:03:02', 1, 22, '', 0),
(5496, '2016-11-29', 'Meeting Pelatihan Website', 'Ruang Rapat 2', '2016-12-23 06:04:10', 1, 22, '', 0),
(5497, '2016-10-10', 'Meeting Progress Report Website', 'Ruang Rapat 2', '2016-12-23 06:06:06', 1, 22, '', 0),
(5498, '2016-09-07', 'Persiapan Dies Natalis', 'Ruang Rapat 1', '2016-12-23 06:06:53', 1, 22, '', 0),
(5499, '2016-09-21', 'Dies Natalis ke 67', 'Kantor', '2016-12-23 06:07:35', 1, 22, '', 0),
(5500, '2016-08-18', 'Perayaan kemerdekaan RI', 'Kantor', '2016-12-23 06:08:27', 1, 22, '', 0),
(5501, '2016-07-12', 'Meeting triwulan ke-2', 'Ruang Rapat 1', '2016-12-23 06:09:50', 1, 22, '', 0),
(5502, '2016-06-08', 'Pembendahan tata letak ruang kerja', 'ruang kerja', '2016-12-23 06:11:00', 1, 22, '', 0),
(5503, '2016-06-22', 'Reparasi alat-alat kerja', 'kantor', '2016-12-23 06:13:10', 1, 22, '', 0),
(5504, '2016-04-21', 'Peringatan hari kartini', 'kantor', '2016-12-23 06:14:15', 1, 22, '', 0),
(5505, '2016-02-17', 'Meeting triwulan pertama', 'Ruang Rapat 1', '2016-12-23 06:14:56', 1, 22, '', 0),
(5506, '2016-02-29', 'Persiapan Meeting Triwulan Pertama', 'Ruang Rapat 2', '2016-12-23 06:15:44', 1, 22, '', 0),
(5507, '2016-03-30', 'Tindak lanjut Meeting Triwulan Pertama', 'Ruang Rapat 2', '2016-12-23 06:16:40', 1, 22, '', 0),
(5508, '2016-01-13', 'Pengadaan sistem arsip', 'Kantor', '2016-12-23 06:17:15', 1, 22, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iuser`
--

CREATE TABLE IF NOT EXISTS `iuser` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userNama` varchar(20) NOT NULL,
  `userNamaLengkap` varchar(30) NOT NULL,
  `userPass` text NOT NULL,
  `userAktif` tinyint(1) NOT NULL,
  `userLevel` enum('administrator','pengelola') NOT NULL,
  `userNIP` int(20) DEFAULT NULL,
  `userLastLogin` date NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userNama` (`userNama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `iuser`
--

INSERT INTO `iuser` (`userId`, `userNama`, `userNamaLengkap`, `userPass`, `userAktif`, `userLevel`, `userNIP`, `userLastLogin`) VALUES
(6, 'vuji', 'vujiii', '697fc71e04dc841f0499244cb58c35d2', 1, 'administrator', 342343242, '2015-05-31'),
(21, 'perpus', 'perpus', '23bfcee1c3023b2677bc60509a17c778', 1, 'pengelola', 34857297, '2015-05-31'),
(22, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'administrator', 2147483647, '2016-12-23'),
(23, 'cicim', 'cicim', '7395fb2423bdb40c478911b041cde86f', 1, 'pengelola', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kagori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE IF NOT EXISTS `lampiran` (
  `id_lampiran` int(11) NOT NULL AUTO_INCREMENT,
  `id_arsip` int(10) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  PRIMARY KEY (`id_lampiran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id_lampiran`, `id_arsip`, `nama_file`) VALUES
(1, 0, '4-Graf-BeberapaGrafKhusus2.pdf'),
(2, 0, '6-MasalahLintasanTerpendek.pdf'),
(3, 0, '10-MenulisDasarTeori.pdf'),
(4, 0, 'multiple_file_upload.rar'),
(5, 0, 'multiple_file_upload.zip'),
(6, 0, 'multiple_file_upload.rar'),
(7, 0, '6-MasalahLintasanTerpendek.pdf'),
(8, 0, ''),
(9, 0, 'laporankegiatan.pdf'),
(10, 0, 'doc16-html-id (1).zip'),
(11, 0, 'multiple_file_upload.rar'),
(12, 0, 'dompdf-master.zip'),
(13, 0, 'multiple_file_upload.rar'),
(14, 0, ''),
(15, 0, 'multiple_file_upload.zip'),
(16, 0, 'multiple_file_upload.zip'),
(17, 0, 'APPLICATION FORM - BD SCHOLARSHIP 2014-2015 (1).doc'),
(18, 0, 'LOGIKA_MATEMATIKA_BAGIAN_I.docx'),
(19, 5466, '[Form]_ASEAN-Korea_Youth_Square.xlsx'),
(20, 5467, 'Sudut_Bagian_I_(N)_01052015.docx'),
(21, 5468, 'Lingkaran3.docx.docx'),
(22, 5469, 'bBe_ntuk_Pangkat,_Akar_dan_Logaritma_(1).docx'),
(23, 5470, 'S2-2014-286718-chapter5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE IF NOT EXISTS `riwayat` (
  `id_riwayat` int(11) NOT NULL AUTO_INCREMENT,
  `id_arsip` int(10) NOT NULL,
  `userId` int(11) NOT NULL,
  `tgl_edit` date NOT NULL,
  PRIMARY KEY (`id_riwayat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
