-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 01:22 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbteskantor`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT 0,
  `bahasa` enum('ID','EN') NOT NULL,
  `updater` varchar(32) DEFAULT '-',
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) DEFAULT 'Berita',
  `keywords` text DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori`, `bahasa`, `updater`, `slug_berita`, `judul_berita`, `isi`, `status_berita`, `jenis_berita`, `keywords`, `gambar`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `tanggal_post`, `tanggal_publish`, `tanggal`) VALUES
(8, 18, 0, 'ID', '', 'kegiatan-workshop-penyusunan-resiko-dan-manajemen-resiko', 'Kegiatan Workshop Penyusunan Resiko dan Manajemen Resiko', '<h2>.</h2>\r\n\r\n<h3>&nbsp;</h3>', 'Publish', 'Terupdate', 'Dilaksanakan pada tanggal 9 Juni 2022 di Aula Kecamatan Lowokwaru. Kegiatan ini dihadiri Camat Lowokwaru, Seluruh Lurah Se Kecamatan Lowokwaru, Sekretaris Kelurahan Se Kecamatan Lowokwaru, para Kasie Dan Kasubag Kec Lowokwaru.', '286525054-2825557177750030-5861341821802777243-n-1655999412.jpg', 3, NULL, NULL, '2020-01-16 08:04:58', '2020-01-16 08:01:54', '2022-06-23 15:50:59'),
(9, 18, 0, 'ID', '', 'apel-pagi-di-halaman-depan-balaikota-malang', 'Apel Pagi di Halaman depan Balaikota Malang', '<p>.</p>', 'Publish', 'Terupdate', 'Pada tanggal 13 Juni 2022 Pukul 08.00 di Ikuti oleh Seluruh Kepala OPD, Seluruh Camat dan Lurah Se Kota Malang.\r\nDi Apel Pagi mnjadi perantara Penyampaian dan Arahan Pimpinan kepada seluruh ASN untuk meningkatkan pelayanan kepada masyarakat.', '287201211-558909935848819-3172976490379773088-n-1655999331.jpg', 2, NULL, NULL, '2020-01-16 08:08:16', '2020-01-16 08:07:46', '2022-06-23 15:48:51'),
(18, 18, 0, 'ID', '-', 'sosialisasi-dan-pembentukan-gugus-tugas-kla-untuk-menuju-kecamtan-lowokwaru-ramah-anak-tahun-2022', 'Sosialisasi dan Pembentukan Gugus Tugas KLA Untuk Menuju Kecamtan Lowokwaru Ramah Anak Tahun 2022', '<p>Kota Malang saat ini adalah Kota Layak Anak (KLA) yang berada pada predikat KLA Nindya. Urutannya pada tingkatan : KLA Pratama, KLA Madya, KLA Nindya dan paling tinggi KLA Utama. Hari ini tggal 22 Juni 2022 Kecamatan Lowokwaru Terus Berkolaborasi dengan berbagai elemen dalam mendukung Kota Malang naik tingkat sebagai Kota Layak Anak (KLA) Predikat Utama. Tidak hanya pemerintah, Keikutsertaan dan komitmen masyarakat juga diharapkan dapat mendukung progam Kota Layak Anak ini. Pemerintah Kota Malang berharap Kota Layak Anak tidak hanya menjadi predikat saja, tetapi bisa di implementasikan hingga mewujudkan lingkungan yang nyaman dan aman untuk Anak dan menjadi Kota Ramah Anak.</p>', 'Publish', 'Terupdate', 'Kota Malang saat ini adalah Kota Layak Anak (KLA) yang berada pada predikat KLA Nindya. Urutannya pada tingkatan : KLA Pratama, KLA Madya, KLA Nindya dan paling tinggi KLA Utama.', '288883958-135218959182843-3854943701056552510-n-1655999191.jpg', 1, NULL, NULL, '2020-09-15 23:29:49', '2020-09-15 23:29:03', '2022-06-23 15:46:31'),
(19, 18, 6, 'ID', '-', 'upacara-dalam-memperingati-hut-kota-malang-ke-108th-di-halaman-balaikota-kota-malang', 'Upacara dalam Memperingati HUT kota Malang ke 108th di Halaman Balaikota Kota Malang.', '<p>Hari Jumat 01 April 2022 dilaksanakan Upacara dalam Memperingati HUT kota Malang ke 108th..Bertempat dihalaman Balaikota Kota Malang. Dipimpin Ispektur Upacara Walikota Malang H. SUTIAJI, dan yang terpilih untuk menjadi komandan Upacara kali ini adalah Joao Maria Gomes De Carvalho. SIP,Camat Lowokwaru. upacara kali ini juga dihadiri oleh Wakil Walikota Malang, Ketua beserta Anggota DPRD Kota Malang, Ketua beserta Anggota TP-PKK Kota Malang, Walikota Batu, Perwakilan Bupati Malang, FORKOPIMDA kota malang...Instansi TNI-POLRI,PNS di lingkungan Pemerintah Kota Malang serta Lurah se Kota Malang turut Hadir sebagai pasukan Upacara.<br />\r\nTema HUT Kota Malang yang ke 108th kali ini mengambil Tema KOLABORASI, AKSELERASI &amp; BANGKIT&nbsp;BERSAMA SAMA</p>', 'Publish', 'Berita', 'Upacara dalam Memperingati HUT kota Malang ke 108th di Halaman Balaikota Kota Malang.', '277589347-125948496685324-6894738242622085168-n-1655998013.jpg', NULL, NULL, NULL, '2020-09-15 23:43:00', '2020-09-15 23:41:16', '2022-06-23 15:26:53'),
(28, 18, 8, 'ID', '-', 'pemeriksaan-kesehatan-oleh-baznas-kota-malang-dan-rumah-sehat-baznas-sidoarjo', 'Pemeriksaan Kesehatan oleh BAZNAS Kota Malang dan Rumah Sehat Baznas Sidoarjo', '<p>&nbsp;</p>\r\n\r\n<p>Pemeriksaan Kesehatan oleh BAZNAS Kota Malang dan Rumah Sehat Baznas Sidoarjo,hari Selasa, 29 Maret 2022<br />\r\nbertempat di Kantor Kecamatan Lowokwaru Malang.dengan quota 80 peserta bagi masyarakat sekitar dan PNS dilingkungan Kecamatan Lowokwaru...acara ini<br />\r\nDihadiri oleh BAZNAS kota Malang, Tim Kesehatan BAZNAS Rumah Sehat Kota Sidoarjo,Bpk/Ibu Camat, Lurah, ASN Kecamatan Lowokwaru dan Warga sekitar Kecamatan Lowokwaru</p>', 'Publish', 'Berita', 'Pemeriksaan Kesehatan oleh BAZNAS Kota Malang dan Rumah Sehat Baznas Sidoarjo', '277416848-1203916833753743-1161130680390945456-n-1655998203.jpg', NULL, NULL, NULL, '2022-06-07 03:20:24', '2022-06-07 03:19:12', '2022-06-23 15:30:03'),
(30, 18, 6, 'ID', '-', 'kegiatan-pembersihan-gorong-gorong', 'Kegiatan Pembersihan Gorong-Gorong', '<p>Kegiatan Pembersihan Gorong-Gorong hari ini tanggal 7 Juni 2022 di RT 01 RW 06 Kel. Tunjungsekar oleh Bpk Camat Lowokwaru, Aparatur Kelurahan Tunjungsekar dan Tim Satgas Kecamatan, sebagai antisipasi Banjir saat Hujan dan tidak terjadi penyumbatan di Saluran Air. Mari Kita Jaga Bersama Kebersihan Lingkungan di Sekitar Kita</p>', 'Publish', 'Berita', NULL, '286635307-515732017009673-563249-1655998659.jpg', NULL, NULL, NULL, '2022-06-09 08:53:27', '2022-06-09 08:52:46', '2022-06-23 15:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_kategori_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `judul_galeri` varchar(200) DEFAULT NULL,
  `jenis_galeri` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_kategori_galeri`, `id_user`, `bahasa`, `judul_galeri`, `jenis_galeri`, `isi`, `gambar`, `website`, `hits`, `popup_status`, `urutan`, `status_text`, `tanggal`) VALUES
(15, 4, 18, 'ID', 'Kantor Kecamatan Lowokwaru', 'Homepage', NULL, '1526337-1-1656000396.png', NULL, 11, 'Publish', NULL, 'Tidak', '2022-06-23 16:06:37'),
(17, 4, 18, 'ID', 'Kegiatan Halal Bihalal', 'Homepage', NULL, 'screenshot-111-1-1653978287.png', 'http://keclowokwaru.malangkota.go.id/', 3, 'Publish', NULL, 'Tidak', '2022-06-23 16:02:16'),
(18, 4, 16, 'ID', 'Kota Malang', 'Galeri', NULL, 'img-slider2-1654762715.png', NULL, 2, 'Publish', NULL, 'Tidak', '2022-06-09 08:19:01'),
(19, 4, 16, 'ID', 'Kampung Warna Warni', 'Galeri', NULL, 'img-slider-1654762792.png', NULL, NULL, 'Publish', NULL, 'Tidak', '2022-06-09 08:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `heading`
--

CREATE TABLE `heading` (
  `id_heading` int(11) NOT NULL,
  `id_user` int(11) DEFAULT 0,
  `judul_heading` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `halaman` varchar(255) DEFAULT 'NULL',
  `tanggal` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heading`
--

INSERT INTO `heading` (`id_heading`, `id_user`, `judul_heading`, `keterangan`, `gambar`, `halaman`, `tanggal`) VALUES
(1, 0, 'Berita dan Updates', '<p>Berita dan Updates</p>', 'heading-03-1600256326.jpg', 'Berita', '2020-09-16 11:38:46'),
(2, 0, 'AWS Indonesia', '<p>AWS Indonesia</p>', 'aws-indonesia-1600259598-1655992458.jpg', 'AWS', '2022-06-23 13:54:32'),
(3, 0, 'Halaman Kontak', '<p>Halaman Kontak</p>', 'kontak-1600257025.jpg', 'Kontak', '2020-09-16 11:50:25'),
(4, 0, 'Staff', '<p>Staff</p>', 'board-and-team-300-1600260175.jpg', 'Team', '2022-06-09 07:58:54'),
(5, 0, 'Layanan', '<p>Layanan</p>', 'layanan-1600315713.jpg', 'Layanan', '2022-06-09 02:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `bahasa`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal`) VALUES
(6, 4, 'ID', 'berita', 'Berita', 3, '2020-09-12 21:36:42'),
(8, 4, 'ID', 'updates', 'Updates', 2, '2020-09-12 21:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id_kategori_galeri` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_galeri` varchar(255) NOT NULL,
  `nama_kategori_galeri` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id_kategori_galeri`, `bahasa`, `slug_kategori_galeri`, `nama_kategori_galeri`, `urutan`) VALUES
(4, 'ID', 'kegiatan', 'Kegiatan', 2),
(6, 'ID', 'kegiatan-kampus', 'Kegiatan Kampus', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_staff`
--

CREATE TABLE `kategori_staff` (
  `id_kategori_staff` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_staff` varchar(255) NOT NULL,
  `nama_kategori_staff` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_staff`
--

INSERT INTO `kategori_staff` (`id_kategori_staff`, `bahasa`, `slug_kategori_staff`, `nama_kategori_staff`, `keterangan`, `urutan`) VALUES
(4, 'ID', 'camat-dan-sekretaris-camat', 'Camat dan Sekretaris Camat', NULL, 2),
(6, 'ID', 'tes', 'TES', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `nama_singkat` varchar(200) DEFAULT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `nama_facebook` varchar(255) NOT NULL,
  `nama_twitter` varchar(255) NOT NULL,
  `nama_instagram` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `google_map` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `bahasa`, `namaweb`, `nama_singkat`, `tagline`, `tagline2`, `tentang`, `deskripsi`, `website`, `email`, `email_cadangan`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `metatext`, `facebook`, `twitter`, `instagram`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `singkatan`, `google_map`, `gambar`, `id_user`, `tanggal`) VALUES
(1, 'ID', 'Kecamatan Lowokwaru', 'Kecamatan Lowokwaru', NULL, NULL, '<p>Tujuan</p>\r\n\r\n<ol>\r\n	<li>Mewujudkan aparat Kecamatan/Kelurahan yang bersih dan berwibawa dengan mengutamakan kepentingan dan pelayanan prima masyarakat di dua belas Kelurahan.</li>\r\n	<li>Meningkatkan kemampuan kelembagaan Kecamatan serta Kelurahan dalam upaya perencanaan, monitoring dan pengendalian di bidang pemerintahan, ketentraman dan ketertiban, pemberdayaan masyarakat Kelurahan, kesejahteraan social dan pelayanan umum di wilayah kecamatan</li>\r\n	<li>Meningkatkan penyelenggaraan koordinasi, pembinaan, pengembangan sistem informasi tentang kebijaksanaan dan strategi di bidang pemerintahan, pembangunan serta pelayanan masyarakat di wilayah Kecamatan</li>\r\n</ol>\r\n\r\n<p>Sasaran</p>\r\n\r\n<ol>\r\n	<li>Validasi data dan bahan (monografi) yang meliputi lima bidang: pemerintahan, keamanan, dan ketertiban, pemberdayaan masyarakat Kelurahan, kesejahteraan social, pelayanan umum, sebagai data sekunder di Kelurahan</li>\r\n	<li>Memformulasikan data dan bahan kelima bidang, tugas pokok dan fungsi sebagai data entry (data olahan) bagi perangkat daerah dan instansi vertical.</li>\r\n	<li>Pelaksanaan Registrasi Pertahanan sesuai dengan peruntukan dan ketentuan peraturan perundangan yang berlaku.</li>\r\n	<li>Perumusan pedoman tata kerja, dengan harapan minimal 75 % setiap aparatur di wilayah Kecamatan KECAMATAN mengerti dan memahami tugas dan fungsinya dalam rangka memberikan pelayanan kepada masyarakat</li>\r\n</ol>', NULL, 'http://keclowokwaru.malangkota.go.id/', 'kec-lowokwaru@malangkota.go.id', 'kec-lowokwaru@malangkota.go.id', 'Kantor Kecamatan Lowokwaru\r\nJl. Cengger Ayam I No.12, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '085784786525', NULL, NULL, 'group-54.png', 'logo-kota-malang-color-2-1.png', NULL, 'https://www.facebook.com/profile.php?id=100007392405137', 'https://twitter.com/kec_lowokwaru', 'https://www.instagram.com/kec_lowokwaru/', 'Kecamatan Lowokwaru', 'Kec Lowokwaru', 'Kecamatan Lowokwaru', 'Kecamatan Lowokwaru', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.510040094756!2d112.62830631486428!3d-7.946126994276482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629dca10a6b39%3A0x213706a5287fa019!2sKantor%20Kecamatan%20Lowokwaru!5e0!3m2!1sid!2sid!4v1653360348300!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'screenshot-110.png', 16, '2022-06-09 04:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kategori_staff` int(11) NOT NULL,
  `slug_staff` varchar(255) NOT NULL,
  `nama_staff` varchar(255) NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `status_staff` varchar(20) NOT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `id_user`, `id_kategori_staff`, `slug_staff`, `nama_staff`, `jabatan`, `pendidikan`, `email`, `telepon`, `isi`, `gambar`, `status_staff`, `keywords`, `urutan`, `tanggal`) VALUES
(3, 16, 4, 'joao-maria-gomes-de-carvalho-sip-camat', 'JOAO MARIA GOMES DE CARVALHO, SIP', 'Camat', NULL, NULL, NULL, NULL, 'camat-1654763378.png', 'Ya', NULL, 3, '2022-06-09 08:30:19'),
(7, 4, 6, 'fainta-susilo-negoro-sekretaris-dewan-pengurus', 'Muhammad Soleh', 'Sekretaris Dewan Pengurus', NULL, NULL, NULL, NULL, 'board-anad-team-03-1600000132.png', 'Ya', NULL, 4, '2020-09-13 12:29:04'),
(10, 16, 4, 'hariadi-budhi-handoko-ssos-sekretaris-camat', 'Hariadi Budhi Handoko, S.Sos.', 'Sekretaris Camat', NULL, NULL, NULL, '', 'user1-1654762998.png', 'Ya', NULL, 4, '2022-06-23 16:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `gambar`, `tanggal`) VALUES
(17, 'Admin Kec. Lowokwaru', 'admin@keclowokwaru.go.id', 'admin', 'admin', 'Admin', NULL, '2022-06-23 13:04:30'),
(18, 'Diffa', 'diffaadrian44@gmail.com', 'admindiffa', 'admindiffa', 'Admin', NULL, '2022-06-23 13:06:00'),
(19, 'testing', 'testing@gmail.com', 'testing', 'testing', 'Admin', NULL, '2022-06-23 13:03:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `heading`
--
ALTER TABLE `heading`
  ADD PRIMARY KEY (`id_heading`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id_kategori_galeri`);

--
-- Indexes for table `kategori_staff`
--
ALTER TABLE `kategori_staff`
  ADD PRIMARY KEY (`id_kategori_staff`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `heading`
--
ALTER TABLE `heading`
  MODIFY `id_heading` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id_kategori_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_staff`
--
ALTER TABLE `kategori_staff`
  MODIFY `id_kategori_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
