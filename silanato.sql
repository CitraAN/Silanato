-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2022 at 08:11 PM
-- Server version: 10.2.44-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galx2916_lapas2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `dasaruu`
--

CREATE TABLE `dasaruu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dasaruu`
--

INSERT INTO `dasaruu` (`id`, `deskripsi`, `file`, `created_at`, `updated_at`) VALUES
(5, 'uu no 12 tahun 1995', '29587uu no 12 tahun 1995.pdf', '2022-09-14 07:01:37', '2022-09-14 07:01:37'),
(6, 'permenkumhan no.18 tahun 2019', '44471permenkumhan no.18 tahun 2019.pdf', '2022-09-14 07:01:53', '2022-09-14 07:01:53'),
(7, 'PERMENKUMHAM-3-2018', '56199PERMENKUMHAM-3-2018.pdf', '2022-09-14 07:02:06', '2022-09-14 07:02:06'),
(8, 'permenkumham no.24 tahun 2021', '67825permenkumham no.24 tahun 2021.pdf', '2022-09-14 07:02:18', '2022-09-14 07:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wbp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_kunjungan` date NOT NULL,
  `jam_kunjungan` time NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `nama`, `nik`, `alamat`, `no_hp`, `hubungan`, `nama_wbp`, `jadwal_kunjungan`, `jam_kunjungan`, `jk`, `file_id`, `foto`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'user', '321', 'indonesia', '9878766', 'sdaa', 'sdas', '2022-09-05', '17:26:00', 'Laki-laki', 'parangtritis.jpg', 'pandawa.jpeg', NULL, 'data nik dan ktp tak sesuai', '2022-09-12 03:28:07', '2022-09-16 01:31:15'),
(2, 'alfa', '321', 'indonesia', '1123456', 'sdaa', 'sdas', '2022-09-13', '17:30:00', 'Laki-laki', 'parangtritis.jpg', 'pandawa.jpeg', 1, '', '2022-09-12 03:30:28', '2022-09-12 07:20:30'),
(3, 'Alfa hardiyansyah', '321', 'jl di panjaitan IT TELKOM', '1123456', 'sdaa', 'sdas', '2022-09-11', '17:53:00', 'Laki-laki', 'gedungsate.jpg', 'bulusarung.jpg', 1, '', '2022-09-12 03:54:02', '2022-09-12 07:27:16'),
(4, 'tes', '456', 'al@tes.vom', '9238', 'skdjf', 'jkshdf', '2022-09-16', '20:30:00', 'Laki-laki', 'bulusarung.jpg', 'pandawa.jpeg', 1, '', '2022-09-15 06:30:50', '2022-09-15 06:31:09'),
(5, 'lsjdska', '23', 'sljdf', '23', 'ksdjfsk', 'ksjd', '2022-09-28', '00:21:00', 'Laki-laki', 'suzune-cote-1021x580.png', 'suzune-horikita-classroom-of-the-elite-4k-wallpaper-3840x2160-12.jpg', NULL, NULL, '2022-09-27 10:21:54', '2022-09-27 10:21:54'),
(6, 'Satria Arief Supraharyadi', '3182773901283', 'Jl.alunalun', '0813729749', 'istri dan anak', 'tono', '2022-10-03', '09:16:00', 'Laki-laki', 'baturaden.jpg', 'baturaden.jpg', NULL, NULL, '2022-09-27 17:45:18', '2022-09-27 17:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_09_123427_tentang', 1),
(6, '2022_09_09_123530_dasar_uu', 1),
(7, '2022_09_09_123548_kunjungan', 1),
(8, '2022_09_09_123642_panduan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

CREATE TABLE `panduan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panduan`
--

INSERT INTO `panduan` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Panduan Aplikasi', '<p><img src=\"https://github.com/alfast456/asset/blob/main/SILANATO%201.png?raw=true\" style=\"width: 125px; height: 125px;\">Aplikasi SILANATO adalah sebuah aplikasi yang   diciptakan oleh Lapas Narkotika kelas IIB Purwokerto dalam membantu melayani urusan kepegawaian di Lapas Narkotika Kelas IIB Purwokerto. Aplikasi ini di kembangkan untuk membantu layanan pengunjungan di Lapas Narkotika ini.</p><p>Aplikasi ini berisi beberapa menu untuk memenuhi kebutuhan pelayanan publik melalui online. Di dalam aplikasi “Silanato” terdapat menu seperti layanan kunjungan, menu informasi, menu media sosial, menu layanan lokasi, menu panduan, dan menu WBS (Whistle Blowing System).  Pada bagian pojok kiri dashboard terdapat navbar yang berisi rincian profil dari aplikasi layanan ini, pengguna juga dianjurkan untuk mengisi kelengkapan data yang dibutuhkan untuk dapat memakai aplikasi layanan ini.</p><p><br></p><p>Berikut ini adalah panduan dalam memakai layanan “Silanato” :</p><ol><li>Panduan untuk pemakaian aplikasi Silanato yang pertama adalah user diwajibkan mendownload aplikasi tersedia di playstore, setelah itu user diwajibkan untuk membuat akun pada aplikasi dengan mendaftarkan email dan password. User hanya dapat memakai layanan pada aplikasi dengan melakukan Login agar dapat masuk ke dalam aplikasinya dan bagi pengunjung yang belum terdaftar diharuskan untuk melakukan registrasi terlebih dahulu dengan memasukkan Nama Lengkap, Email dan Kata sandi, lalu dilanjutkan untuk melakukan login.</li><li>Pada Dashboard menu sendiri terdapat menu - menu yang bisa user gunakan untuk memenuhi kebutuhan pelayanan user dan juga terdapat navbar pada pojok kiri atas yang terdapat fitur Detail profil, Ubah password, Tentang dan logout dari aplikasi. User bisa mengetahui detail profil user dan juga user dapat mengganti password akun dan terdapat juga fitur Tentang aplikasi tersebut.</li><li>Pada menu “Kunjungan” user bisa melakukan booking kunjungan kepada WBP yang ingin dikunjungi dengan syarat yang sudah ditentukan dan user wajib mengisikan form yang sudah tersedia. Untuk proses verifikasi, user dimohon menunggu sampai proses selesai dan untuk mengetahui form yang diajukan user diterima atau ditolak oleh pihak lapas user nantinya akan diberitahukan lewat chat whatsapp ataupun email yang sudah user masukkan didalam form tersebut.</li><li>Untuk menu “Informasi” bisa digunakan untuk mengetahui informasi tentang visi, misi, tata nilai dan moto Lapas Narkotika IIB Purwokerto dan terdapat juga informasi tentang undang-undang yang berlaku.</li><li>Pada menu “Media Sosial” user bisa mengetahui dan mengikuti media kabar terkini tentang Lapas Narkotika IIB Purwokerto.</li><li>Terdapat juga fitur menu “Lokasi” yang bisa digunakan user untuk mengetahui lokasi dari Lapas Narkotika IIB Purwokerto.</li><li>Kemudian ada fitur menu “Panduan” dimana di menu tersebut dijelaskan tentang panduan aplikasi dan panduan kunjungan.</li><li>Terakhir ada fitur menu “ WBS (Whistle Blowing System” menu ini digunakan untuk melaporkan segala kegiatan yang berindikasi pelanggaran di lingkungan Kementrian Hukum dan Ham RI.</li></ol><p><br></p>', NULL, '2022-09-14 06:54:38'),
(2, 'Panduan Kunjungan', '<center><p><img src=\"https://github.com/alfast456/asset/blob/main/kunjungan.png?raw=true\" style=\"width: 100%;\"></p><p><b>Tata Cara Kunjungan Tatap Muka</b></p><p>“Setiap Warga Binaan hanya dapat mendapatkan kesempatan menerima kunjungan tatap muka 1 kali dalam 1 minggu dan maksimal 2 orang pengunjung”</p><p><b>Waktu Pelaksanaan</b></p><p>Hari Senin - Rabu</p><p>jam 09.00 WIB - 11.00 WIB</p><p><br></p><p>Durasi Waktu&nbsp;</p><p>15 menit</p><p><br></p><p>Ketentuan</p><p>Memakai Masker</p><p>Berpakaian Sopan</p><p></p><p>Tidak Membawa Barang Terlarang</p><p><b>Persyaratan Kunjungan</b></p><ol><li style=\"\">Kartu Identitas (KTP, KK)</li><li style=\"\">Keluarga Inti (Ayah, Ibu, Suami, Istri, Anak, Kakak, Adik)</li><li style=\"\">Untuk Suami/Istri yang belum tercantum di KK dapat membuktikan dengan Buku Nikah</li><li style=\"\">Surat Keterangan dari pihak penahan (apabila warga binaan masih berstatus tahanan)</li><li style=\"\">Telah mendapatkan Vaksin ke-3 dibuktikan dengan aplikasi peduli Lindungi/Sertifikat Vaksin.</li><li style=\"\">Bagi pengunjung apabila belum mendapat Vaksin ke-3 wajib menunjukan Rapid/Swab dengan hasil Negatif</li></ol><p><br></p></center>', NULL, '2022-09-14 07:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wongbalap27@gmail.com', '$2y$10$bhV2ES8I0sTxmxVSZd/sr.9JOk4MkyYAvVHVVWkb7fRo4OX6XT6Oa', '2022-09-15 18:29:11'),
('andikathoriq47@gmail.com', '$2y$10$qDnQHq4NbX5.QvuTBUuMOOa/cGC8rplKpQSVOA4FhL7u/xgO8ghKi', '2022-09-26 19:55:56'),
('adminlapas@gmail.com', '$2y$10$LJ6G3aSAbFGmb1cJQKccauyM0uADRa/J67XhVL/sIZSlgiRvK.OBu', '2022-09-27 17:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '<p></p><center><b>VISI</b></center><p></p><p></p><center>\"Masyarakat Memperoleh Kepastian Hukum\"</center><p></p><p></p><center><b>MISI</b></center><p></p><center>1. Mewujudkan peraturan perundang-undangan&nbsp;<span style=\"font-size: 1rem; text-align: left;\">yang berkualitas.</span></center><center><center style=\"\">2. Mewujudkan pelayanan hukum yang berkualitas.</center><center style=\"\">3. Mewujudkan penegakan hukum yang berkualitas.</center><center style=\"\">4. Mewujudkan penghormatan, pemenuhan dan<span style=\"font-size: 1rem; text-align: left;\">&nbsp;perlindungan Hak Asasi Manusia.</span></center><center style=\"\">5. Mewujudkan layanan manajemen administrasi&nbsp;<span style=\"font-size: 1rem; text-align: left;\">Kementrian Hukum dan Hak Asasi Manusia dan</span></center><center style=\"\">6. Mewujudkan aparatur Kementrian Hukum dan<span style=\"font-size: 1rem; text-align: left;\">&nbsp;Hak Asasi Manusia yang propesional dan berintegritas</span></center><div><br></div><div><b>TATA NILAI</b></div><div><div style=\"\">Kementrian Hukum dan HAM menjunjung&nbsp;<span style=\"font-size: 1rem; text-align: left;\">tata nilai kami “<b>P-A-S-T-I</b>”</span></div><div style=\"\"><img src=\"https://github.com/alfast456/asset/blob/main/logo_tata_nilai-removebg-preview.png?raw=true\" style=\"width: 327px;\"><span style=\"font-size: 1rem; text-align: left;\"><br></span></div><ol><li><span style=\"text-align: left;\">Profesional : Aparatur Kementerian Hukum dan HAM adalah aparat yang bekerja keras untuk mencapai tujuan organisasi melalui penguasaan bidang tugasnya, menjunjung tinggi etika dan integirtas profesi</span></li><li><span style=\"text-align: left;\">Akuntabel : Setiap kegiatan dalam rangka penyelenggaraan pemerintah dapat dipertanggungjawabkan kepada masyarakat sesuai dengan ketentuan atau peraturan yang berlaku.</span></li><li><span style=\"text-align: left;\">Sinergi<span style=\"white-space:pre\">	</span>: Komitmen untuk membangun dan memastikan hubungan kerjasama yang produktif serta kemitraan yang harmonis dengan para pemangku kepentingan untuk menemukan dan melaksanakan solusi terbaik, bermanfaat, dan berkualitas.</span></li><li><span style=\"text-align: left;\">Transparan : Kementerian Hukum dan HAM menjamin akses atau kebebasan bagi setiap orang untuk memperoleh informasi tentang penyelenggaraan pemerintahan, yakni informasi tentang kebijakan, proses pembuatan dan pelaksanaannya, serta hasil-hasil yang dicapai.</span></li><li><span style=\"text-align: left;\">Inovatif : Kementerian Hukum dan HAM mendukung kreatifitas dan mengembangkan inisiatif untuk selalu melakukan pembaharuan dalam penyelenggaraan tugas dan fungsinya.</span></li></ol><p><span style=\"text-align: left;\"><b>MOTTO</b></span></p><p>Lembaga Pemasyarakatan Kelas II B Purwoketo memiliki motto BERTEMAN “<b>Bersih - Tertib - Aman - Nyaman</b>”<span style=\"text-align: left;\"><br></span></p></div></center>', NULL, '2022-09-14 06:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `foto`, `nik`, `nama`, `jk`, `email`, `email_verified_at`, `password`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `alamat`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, '123', 'Admin', NULL, 'adminlapas@gmail.com', NULL, '$2y$10$zWycXAhncZVBBQddNfHM6ugQb/3.OESlhXX.YTSDUQAJUN.JcAN0y', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(2, 'parangtritis.jpg', '321', 'User', 'Laki-laki', 'user@gmail.com', NULL, '$2y$10$ZMNlkHIQ07xXfrh1trSKHe/SMfRrEpKieFjzy1E8mvnjGuMICg/E.', 'wonosobo', '2022-09-12', '0989878', 'dfssdfsdf', 0, NULL, NULL, '2022-09-12 06:26:08'),
(5, NULL, NULL, 'Ga', NULL, 'Arradhiyasetyo@gmail.com', NULL, '$2y$10$8UTCvL284DjreNWN3NmzD.GmfCW/8cdzljCM30PbVMmdnCo/dmT/K', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-14 23:48:03', '2022-09-14 23:48:03'),
(6, NULL, NULL, 'Andika Thoriq Tegar Setiaji', NULL, 'andikathoriq47@gmail.com', NULL, '$2y$10$hBG1WJZdW0bpjoyQN/ySiuyfXEtdR6MJ/xh/tgDC204MV4I2L83/e', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-14 23:49:47', '2022-09-14 23:49:47'),
(7, NULL, NULL, 'alfa', NULL, 'alvarosetia12@gmail.com', NULL, '$2y$10$YcrlXKpHa70J3uB.n1jK1O5KQIpmOk/WlEs2JPZ5zgc/j3AEqUt8O', NULL, NULL, NULL, NULL, NULL, 'rNwlq0YmIl7uxAaXxVNoomFyvopvMOgxrTzG0tQgyAQT7eNCymaJMQqFNXoC', '2022-09-15 07:04:03', '2022-09-26 22:01:17'),
(8, NULL, NULL, 'ye', NULL, 'untung@gmail.com', NULL, '$2y$10$FdBlGB0n/lb27gUmXr0HkOYWoRiJt/.qcAdv9pZ1i/LOwhPN2Xo2W', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 18:12:23', '2022-09-15 18:12:23'),
(9, NULL, NULL, 'Al mahesha loro sae', NULL, 'wongbalap27@gmail.com', NULL, '$2y$10$oAWVQzQlFd4nV0dnZd4mnez8nfbfnYd3.lp/PKPF/Jf8bUkCu8UmS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 18:26:52', '2022-09-15 18:26:52'),
(10, NULL, NULL, 'Hisyam', NULL, 'hisam.setiawan@gmail.com', NULL, '$2y$10$w6R3dnpTBdYTqnv2VfytMeyr1hY0YJM1m2LRbSW4zXfXCO/ON1nVG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-22 05:48:56', '2022-09-22 05:48:56'),
(11, NULL, NULL, 'Al mahesha loro sae', NULL, 'almahesa60@gmail.com', NULL, '$2y$10$IYbF9A0iLP8Q//izatClaelycOMdhs0XM/2sjdFl.W6NZYdhzzlPW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-23 09:56:11', '2022-09-23 09:56:11'),
(12, NULL, NULL, 'tres', NULL, 'tes@gmail.com', NULL, '$2y$10$Wejj3HdeGKu35qghoUcFhOIOpBJIXymLA7y6QugXiM5El11Zij98C', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-26 20:02:53', '2022-09-26 20:02:53'),
(13, NULL, NULL, 'Satria Arief Supraharyadi', NULL, 'satriaariefs06@gmail.com', NULL, '$2y$10$AfExM4SxZSwFMnop.QPom.Hxro32FMdTH98qT1NuvueWWjScj1c96', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-27 17:42:09', '2022-09-27 17:42:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dasaruu`
--
ALTER TABLE `dasaruu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dasaruu`
--
ALTER TABLE `dasaruu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `panduan`
--
ALTER TABLE `panduan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
