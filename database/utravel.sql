-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 13.38
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_post`
--

CREATE TABLE `blog_post` (
  `id_blog_post` int(11) NOT NULL,
  `judul_post` varchar(128) DEFAULT NULL,
  `keterangan_post` longtext DEFAULT NULL,
  `tanggal_post` datetime DEFAULT NULL,
  `author_post` varchar(128) DEFAULT NULL,
  `image_post` varchar(128) DEFAULT NULL,
  `image_detail_post` varchar(128) DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_user` varchar(128) DEFAULT NULL,
  `removed_date` datetime DEFAULT NULL,
  `removed_user` varchar(128) DEFAULT NULL,
  `last_date` datetime DEFAULT NULL,
  `last_user` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog_post`
--

INSERT INTO `blog_post` (`id_blog_post`, `judul_post`, `keterangan_post`, `tanggal_post`, `author_post`, `image_post`, `image_detail_post`, `delete_sts`, `created_date`, `created_user`, `removed_date`, `removed_user`, `last_date`, `last_user`) VALUES
(1, 'Enim id unde qui sed', 'In dolore ad non aut', '1997-11-10 00:00:00', 'Minus atque quidem s', 'image_post_20231031-001739.jpg', NULL, 0, NULL, NULL, NULL, NULL, '2023-10-31 00:17:39', 'Sasa Sartika'),
(2, 'Id fugiat voluptatu', 'Omnis voluptatem te', '2002-07-14 00:00:00', 'Quo nemo cupiditate ', 'image_post_20231031-002145.jpg', NULL, 1, NULL, NULL, '2023-10-31 00:22:13', NULL, '2023-10-31 00:21:45', 'Sasa Sartika'),
(3, 'Monas', 'Modi aut odit illum', '2023-10-31 00:00:00', 'Ea perferendis digni', 'image_post_20231031-002313.jpg', NULL, 0, '2023-10-31 00:23:13', 'Sasa Sartika', NULL, NULL, '2023-10-31 00:44:46', 'Sasa Sartika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(128) DEFAULT NULL,
  `email_customer` varchar(128) DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_user` varchar(128) DEFAULT NULL,
  `removed_date` datetime DEFAULT NULL,
  `removed_user` varchar(128) DEFAULT NULL,
  `last_date` datetime DEFAULT NULL,
  `last_user` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email_customer`, `delete_sts`, `created_date`, `created_user`, `removed_date`, `removed_user`, `last_date`, `last_user`) VALUES
(1, 'Agus Siswanto', 'agus@gmail.com', 0, '2023-11-07 06:56:44', NULL, NULL, NULL, NULL, NULL),
(2, 'Devi', 'devi@gmail.com', 0, '2023-11-08 05:53:18', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `image_detail`
--

CREATE TABLE `image_detail` (
  `id_image_detail` int(11) NOT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `image_detail` varchar(256) DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_user` varchar(128) DEFAULT NULL,
  `removed_date` datetime DEFAULT NULL,
  `removed_user` varchar(128) DEFAULT NULL,
  `last_date` datetime DEFAULT NULL,
  `last_user` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `image_detail`
--

INSERT INTO `image_detail` (`id_image_detail`, `id_wisata`, `image_detail`, `delete_sts`, `created_date`, `created_user`, `removed_date`, `removed_user`, `last_date`, `last_user`) VALUES
(1, 10, 'gambar_wisata_detail1_20231126-164251.jpg', 0, '2023-11-26 16:42:51', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(2, 10, 'gambar_wisata_detail2_20231126-164251.jpg', 0, '2023-11-26 16:42:51', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(3, 10, 'gambar_wisata_detail3_20231126-164251.jpg', 0, '2023-11-26 16:42:51', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(4, 11, 'gambar_wisata_detail1_20231126-170422.jpg', 0, '2023-11-26 17:04:22', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(5, 11, 'gambar_wisata_detail2_20231126-170422.jpg', 0, '2023-11-26 17:04:22', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(6, 11, 'gambar_wisata_detail3_20231126-170422.jpg', 0, '2023-11-26 17:04:22', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(7, 12, 'gambar_wisata_detail1_20231126-171033.jpg', 0, '2023-11-26 17:10:33', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(8, 13, 'gambar_wisata_detail1_20231126-171624.jpg', 0, '2023-11-26 17:16:24', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(9, 13, 'gambar_wisata_detail2_20231126-171624.jpg', 0, '2023-11-26 17:16:24', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(10, 13, 'gambar_wisata_detail3_20231126-171624.jpg', 0, '2023-11-26 17:16:24', 'Sasa Sartika', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `star_wisata`
--

CREATE TABLE `star_wisata` (
  `id_star_wisata` int(11) NOT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `bintang_wisata` int(11) DEFAULT NULL,
  `ulasan_wisata` longtext DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_user` varchar(128) DEFAULT NULL,
  `removed_date` datetime DEFAULT NULL,
  `removed_user` varchar(128) DEFAULT NULL,
  `last_date` datetime DEFAULT NULL,
  `last_user` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `star_wisata`
--

INSERT INTO `star_wisata` (`id_star_wisata`, `id_wisata`, `id_customer`, `bintang_wisata`, `ulasan_wisata`, `delete_sts`, `created_date`, `created_user`, `removed_date`, `removed_user`, `last_date`, `last_user`) VALUES
(1, 8, 1, 4, 'Utravel adalah penyelamat! Saya sekarang bisa merencanakan liburan saya tanpa stres finansial. Sistem pencariannya sangat efisien, dan saya mendapatkan penawaran luar biasa. Sangat direkomendasikan!', 0, '2023-11-07 06:56:44', NULL, NULL, NULL, NULL, NULL),
(2, 8, 2, 5, 'Utravel sangat membantu', 0, '2023-11-08 05:53:18', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `gender` varchar(128) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `tgl_lahir`, `gender`, `phone`, `username`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Sasa Sartika', '1997-10-01 03:28:07', 'Perempuan', '08569856565', 'sasa', 'sasa@gmail.com', '$2y$10$1Y5ALImDUmwS.kCBQGzUeeo//N2l/rECscqfPRxLuLHnkzbYXNlia', 1, 1, '2023-10-24 22:28:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(12, 2, 3),
(13, 1, 3),
(16, 2, 7),
(17, 2, 8),
(18, 2, 6),
(19, 2, 9),
(22, 2, 11),
(23, 2, 12),
(24, 2, 13),
(25, 2, 1),
(27, 2, 15),
(28, 2, 16),
(29, 2, 17),
(30, 2, 18),
(31, 4, 19),
(32, 4, 20),
(33, 4, 21),
(34, 4, 22),
(35, 4, 23),
(36, 3, 24),
(37, 3, 25),
(38, 3, 26),
(39, 3, 27),
(40, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_has_sub_menu`
--

CREATE TABLE `user_has_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `status_sub` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_has_sub_menu`
--

INSERT INTO `user_has_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `status_sub`, `date_created`) VALUES
(4, 3, 'Menu Management', '-', 'fal fa-fw fa-bars', 1, 0, '2022-08-02 20:30:48'),
(10, 5, 'Pendataan UMKM', 'pendataanumkm/cpendataanumkm', 'fal fa-fw fa-barcode', 1, 1, '2023-04-07 13:45:56'),
(11, 6, 'Pengujian', 'naivebayes/datauji', 'fal fa-fw fa-pen', 1, 1, '2023-04-08 14:13:58'),
(12, 6, 'Calon', 'naivebayes/datacalon', 'fal fa-fw fa-profile', 1, 1, '2023-04-10 09:23:34'),
(13, 7, 'Dataset', 'c45/dataset', 'fal fa-fw fa-list', 1, 1, '2023-06-10 10:54:01'),
(14, 7, 'Init', 'c45/init', 'fal fa-fw fa-book', 1, 1, '2023-06-10 10:54:37'),
(15, 7, 'Prediction', 'c45/prediction', 'fal fa-fw fa-pen', 1, 1, '2023-06-10 10:55:24'),
(16, 8, 'Enkripsi', 'md4', 'fal fa-fw fa-pen', 1, 1, '2023-07-03 13:24:50'),
(19, 9, 'Beasiswa', 'beasiswa', 'fal fa-fw fa-book', 1, 1, '2023-09-11 07:40:06'),
(24, 10, 'Presensi Peserta', 'presensi', 'fal fa-fw fa-user', 1, 1, '2023-10-10 04:38:27'),
(27, 3, 'Role', 'admin/role', 'fal fa-fw fa-users', 1, 1, '2023-10-16 05:41:33'),
(28, 3, 'User Management', 'admin/user', 'fal fa-fw fa-user-plus', 1, 1, '2023-10-16 05:43:19'),
(29, 1, 'Dashboard', 'admin', 'fal fa-fw fa-dashboard', 1, 1, '2023-10-16 05:49:56'),
(32, 13, 'Pengaturan', 'pengaturan', 'fal fa-fw fa-wrench', 1, 1, '2023-10-16 06:11:57'),
(33, 12, 'Kelola Administrator', 'kelolaadmin', 'fal fa-fw fa-unlock-alt', 1, 1, '2023-10-16 06:16:09'),
(34, 13, 'Pengaturan Presensi', 'pengaturanpresensi', 'fal fa-fw fa-wrench', 1, 1, '2023-10-17 00:17:26'),
(35, 19, 'Dashboard', 'pesertamagang', 'fal fa-fw fa-dashboard', 1, 1, '2023-10-22 16:32:17'),
(36, 20, 'Presensi Peserta', 'presensipeserta', 'fal fa-fw fa-check', 1, 1, '2023-10-22 17:11:47'),
(37, 21, 'Riwayat Presensi Peserta', 'riwayatpresensipeserta', 'fal fa-fw fa-book', 1, 1, '2023-10-22 17:13:36'),
(38, 22, 'Kegiatan Harian Peserta', 'kegiatan', '', 1, 1, '2023-10-22 19:53:29'),
(39, 23, 'Nilai Akhir Peserta', 'nilaiakhirpeserta', 'fal fa-fw fa-book', 1, 1, '2023-10-22 21:31:50'),
(45, 3, 'Data Wisata', 'masterwisata', 'fal fa-fw ion-plane', 1, 1, '2023-10-28 22:19:57'),
(46, 3, 'Data Customer', 'mastercustomer', 'fal fa-fw ion-android-user-menu', 1, 1, '2023-10-28 22:20:57'),
(47, 3, 'Data Blog Post', 'masterblogpost', 'fal fa-fw fa-fighter-jet', 1, 1, '2023-10-30 23:41:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `menu_nama` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `menu_nama`, `date_created`) VALUES
(1, 'Admin', 'Dashboard', '2022-06-14 00:00:00'),
(2, 'User', 'User', '2022-06-14 00:00:00'),
(3, 'Master', 'Data Master', '2023-10-10 22:56:42'),
(12, 'administrator', 'Kelola Administrator', '2023-10-10 22:57:10'),
(14, 'auth/logout', 'Keluar', '2023-10-10 22:58:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Customer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `has_sub_menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `has_sub_menu_id`, `title`, `url`, `icon`, `is_active`, `date_created`) VALUES
(1, 1, 4, 'Menu Management (Level 1)', 'master/menulevel1', 'fal fa-fw fa-folder', 1, '2022-07-06 00:00:00'),
(2, 1, 4, 'Submenu Management (Level 2)', 'master/menulevel2', 'fal fa-fw fa-folder-open', 1, '2022-07-06 00:00:00'),
(3, 1, 4, 'Submenu Management (Level 3)', 'master/menulevel3', 'fal fa-fw fa-folder-open', 1, '2022-07-06 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `token` varchar(256) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(128) DEFAULT NULL,
  `singkatan_wisata` varchar(128) DEFAULT NULL,
  `lokasi_wisata` varchar(128) DEFAULT NULL,
  `alamat_wisata` longtext DEFAULT NULL,
  `keterangan_wisata` longtext DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `link_lokasi_wisata` longtext DEFAULT NULL,
  `souvenir_wisata` longtext DEFAULT NULL,
  `tempat_makan` longtext DEFAULT NULL,
  `gambar_wisata` varchar(128) DEFAULT NULL,
  `gambar_wisata_detail` varchar(128) DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_user` varchar(126) DEFAULT NULL,
  `removed_date` datetime DEFAULT NULL,
  `removed_user` varchar(126) DEFAULT NULL,
  `last_date` datetime DEFAULT NULL,
  `last_user` varchar(126) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `singkatan_wisata`, `lokasi_wisata`, `alamat_wisata`, `keterangan_wisata`, `harga_tiket`, `link_lokasi_wisata`, `souvenir_wisata`, `tempat_makan`, `gambar_wisata`, `gambar_wisata_detail`, `delete_sts`, `created_date`, `created_user`, `removed_date`, `removed_user`, `last_date`, `last_user`) VALUES
(1, 'Monumen Nasional', 'Monas', 'Jakarta', 'RT.5/RW.2, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110', NULL, 50000, '0', '1. Gelang\r\n2. Kalung', '1. Monas\r\n2. Monas', 'gambar_wisata_20231029-072313.jpg', 'gambar_wisata_detail_20231029-072313.jpg', 0, '2023-10-29 07:23:13', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(2, 'In ex labore enim do', 'Voluptatem Sint eli', 'Corporis minim in el', 'Non enim assumenda v', NULL, 10000, 'Eveniet cillum dolo', 'Voluptas odit tempor', 'Ea delectus pariatu', 'gambar_wisata_20231029-073317.jpg', 'gambar_wisata_detail_20231029-073317.jpeg', 0, '2023-10-29 07:33:17', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(3, 'Perspiciatis suscip', 'Quia ut quo ex in no', 'Dolorem eius ipsam v', 'RT.5/RW.2, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110', 'Hasil kode ini dikenal sebagai non-breaking space atau spasi tetap karena mencegah pemisahan baris pada lokasi penempatan kode. [1]\nSebagai contoh, tikkan Halo &nbsp; semuanya! untuk menyisipkan spasi tambahan di antara kata \"Halo\" dan \"semuanya!\"\nNamun, bagaimana jika Anda ingin menambah spasi lagi di antara kedua kata tersebut? Untuk memberikan dua spasi di antara kata-kata, Anda bisa menggunakan Halo&nbsp; semuanya!\nPerhatikan bahwa tidak ada spasi di antara kata \"Halo\" dan tag spasi tetap.\nJika Anda ingin memberikan tiga spasi di antara kata, Anda bisa menggunakan Halo &nbsp; semuanya!. Kali ini, ada spasi biasa sebelum dan setelah tag spasi tetap. Karena spasi biasa dipisahkan oleh tag spasi tetap, hasilnya ada tiga spasi pada HTML.', 100000, 'https://maps.app.goo.gl/ejM2X4VMTL7yoVsN6', '1. Gelang\n2. Cincin\n3. Boneka', 'Error omnis vel quo ', 'gambar_wisata_20231029-074349.jpg', NULL, 0, '2023-10-29 07:43:49', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(4, 'Cupidatat error sunt', 'Maxime dolorem dolor', 'Dolorem aut explicab', 'Qui qui et veniam v', 'Quo laboris reprehen', 30000, 'Libero labore perfer', 'Necessitatibus quos ', '<p>1. Kuliner 1</p>\r\n<p>2. Kuliner 2</p>\r\n<p>3. Kuliner 3</p>', 'gambar_wisata_20231029-082405.jpeg', NULL, 0, '2023-10-29 08:24:05', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(5, 'awdwa', 'awd', 'adaw', 'dwad', 'dwad', 222, 'adw', 'dwad', '<p>daw</p>\r\n<p>dwada</p>\r\n<p>awdd</p>', 'gambar_wisata_20231029-083102.jpg', NULL, 1, '2023-10-29 08:31:02', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(6, 'dwad', 'dd', 'fwf', 'ff', '<p>awd</p>\r\n<p>adw</p>', 2353, 'fw', '<p>aaa</p>\r\n<p>aa</p>', '<p>bb</p>\r\n<p>bb</p>\r\n<p>bb</p>', 'gambar_wisata_20231029-083146.jpg', NULL, 1, '2023-10-29 08:31:46', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(7, 'Taman Mini Indonesia Indah', 'TMII', 'Jakarta', 'Jl. Taman Mini Indonesia Indah, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820', '<p>Taman yang memamerkan budaya &amp; alam Indonesia melalui museum, taman, &amp; replika pemandangan terkenal.</p>', 200000, 'https://maps.app.goo.gl/virFHr7H58HPYiEt6', '<p>1. Tas</p>\r\n<p>2. Boneka</p>\r\n<p>3. Gelang</p>', '<p>1. Kuliner 1</p>\r\n<p>2. Kuliner 2</p>\r\n<p>3. Kuliner 3</p>', 'gambar_wisata_20231029-093354.jpeg', NULL, 0, '2023-10-29 09:33:54', 'Sasa Sartika', NULL, NULL, '2023-10-29 09:49:57', 'Sasa Sartika'),
(8, 'Taman Mini Indonesia Indah', 'TMII', 'Jakarta', 'Jl. Taman Mini Indonesia Indah, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820', '<p>Taman yang memamerkan budaya &amp; alam Indonesia melalui museum, taman, &amp; replika pemandangan terkenal.</p>', 50000, 'https://maps.app.goo.gl/8woqaJ44UE7T5qvE7', '<p>1. Tas</p>\r\n<p>2. Boneka</p>', '<p>1. Kuliner 1</p>\r\n<p>2. Kuliner 2</p>', 'gambar_wisata_20231029-213828.jpeg', NULL, 0, '2023-10-29 21:38:28', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(9, 'Ragunan', '', 'Jakarta', 'Jl. Harsono RM. No. 1, Ragunan, Pasar Minggu, Jakarta Selatan 12550 Indonesia.', '<p>Ragunan dikenal karena Kebun Binatang Ragunan, yaitu taman hutan hujan besar dengan pusat primata, gajah, dan harimau Sumatra, serta jalan setapak teduh yang populer di kalangan para pelari. Di dekatnya, terdapat Taman Anggrek Ragunan yang merupakan area terbuka hijau publik dengan taman anggrek. Pilihan bersantap di area ini meliputi gerai piza dan kedai ramen, serta tempat makan lokal bernuansa santai yang menyajikan nasi goreng kambing dan sambal lele.</p>', 4000, 'https://maps.app.goo.gl/jEEWaRJPC57sqCQS7', '<p>1. Tas</p>\r\n<p>2. Boneka</p>', '<p>1.&nbsp;Pusat Jajan&nbsp;<em>Kuliner</em>&nbsp;Kampung Kandang</p>\r\n<p>2.&nbsp;<em>Warung</em>&nbsp;Betawi H Apen</p>', 'gambar_wisata_20231108-061051.jpg', NULL, 0, '2023-11-08 06:10:51', 'Sasa Sartika', NULL, NULL, NULL, NULL),
(10, 'Sea World Indonesia', 'Sea World', 'Jakarta', 'Jl. Lodan timur No.7, RT.14/RW.10, Ancol, Kec. Pademangan, Jkt Utara, Daerah Khusus Ibukota Jakarta 14430', '<p>SeaWorld Ancol juga ditulis Sea World Ancol adalah sebuah oceanarium yang terdapat di dalam Taman Impian Jaya Ancol. SeaWorld Ancol didirikan dengan konsep dasar negara maritim yang secara geografis lebih banyak terdiri dari perairan daripada daratan. Pada tanggal 2 Oktober, 1992.</p>', 80000, 'https://maps.app.goo.gl/w5WfZ1dhxhcSwC2w8', '<p>1. Tas</p>\r\n<p>2. Kaos</p>', '<p>1. Makanan 1</p>\r\n<p>2. Makanan 2</p>', 'gambar_wisata_20231126-164251.jpg', NULL, 1, '2023-11-26 16:42:51', 'Sasa Sartika', '2023-11-26 17:08:26', NULL, NULL, NULL),
(11, 'Eu commodo mollit do', 'Possimus harum dese', 'Qui iste officia non', 'Et nihil aspernatur ', '<p>Irure deserunt exped.</p>', 33, 'Placeat minim maxim', '<p>Qui magnam et invent.</p>', '<p>Ullam et sunt aperia.</p>', 'gambar_wisata_20231126-170422.jpg', NULL, 1, '2023-11-26 17:04:22', 'Sasa Sartika', '2023-11-26 17:08:08', NULL, NULL, NULL),
(12, 'Sea World Indonesia', 'Sea World', 'Jakarta', 'Jl. Lodan timur No.7, RT.14/RW.10, Ancol, Kec. Pademangan, Jkt Utara, Daerah Khusus Ibukota Jakarta 14430', '<p>SeaWorld Ancol juga ditulis Sea World Ancol adalah sebuah oceanarium yang terdapat di dalam Taman Impian Jaya Ancol. SeaWorld Ancol didirikan dengan konsep dasar negara maritim yang secara geografis lebih banyak terdiri dari perairan daripada daratan. Pada tanggal 2 Oktober, 1992.</p>', 80000, 'https://maps.app.goo.gl/4xJmY152BeQdHiea7', '<p>1. Kaos</p>\r\n<p>2. TAs</p>', '<p>1. Makanan 1</p>\r\n<p>2. Makanan 2</p>', 'gambar_wisata_20231126-171033.jpg', NULL, 1, '2023-11-26 17:10:33', 'Sasa Sartika', '2023-11-26 17:13:57', NULL, NULL, NULL),
(13, 'Sea World Indonesia', 'Sea World', 'Jakarta', 'Jl. Lodan timur No.7, RT.14/RW.10, Ancol, Kec. Pademangan, Jkt Utara, Daerah Khusus Ibukota Jakarta 14430', '<p>SeaWorld Ancol juga ditulis Sea World Ancol adalah sebuah oceanarium yang terdapat di dalam Taman Impian Jaya Ancol. SeaWorld Ancol didirikan dengan konsep dasar negara maritim yang secara geografis lebih banyak terdiri dari perairan daripada daratan. Pada tanggal 2 Oktober, 1992.</p>', 80000, 'https://maps.app.goo.gl/4xJmY152BeQdHiea7', '<p>1. Baju</p>\r\n<p>2. Kaos</p>\r\n<p>3. Tas</p>', '<p>1. Makanan 1</p>\r\n<p>2. Makanan 2</p>', 'gambar_wisata_20231126-171624.jpg', NULL, 0, '2023-11-26 17:16:24', 'Sasa Sartika', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id_blog_post`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `image_detail`
--
ALTER TABLE `image_detail`
  ADD PRIMARY KEY (`id_image_detail`);

--
-- Indeks untuk tabel `star_wisata`
--
ALTER TABLE `star_wisata`
  ADD PRIMARY KEY (`id_star_wisata`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_has_sub_menu`
--
ALTER TABLE `user_has_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id_blog_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `image_detail`
--
ALTER TABLE `image_detail`
  MODIFY `id_image_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `star_wisata`
--
ALTER TABLE `star_wisata`
  MODIFY `id_star_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user_has_sub_menu`
--
ALTER TABLE `user_has_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
