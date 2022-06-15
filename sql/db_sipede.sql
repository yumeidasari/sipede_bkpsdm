-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipede`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE `anggaran` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `jml_anggaran` int(11) NOT NULL,
  `jml_realisasi` int(11) DEFAULT NULL,
  `sisa_anggaran` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`id`, `tahun`, `jml_anggaran`, `jml_realisasi`, `sisa_anggaran`, `created_at`, `updated_at`) VALUES
(1, '2021', 50000000, 400000, 49600000, '2021-04-28 02:29:24', '2021-05-05 02:06:24'),
(2, '2020', 4000000, 0, 4000000, '2021-04-28 03:04:03', '2021-04-28 03:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `berkas_laporan_spd`
--

CREATE TABLE `berkas_laporan_spd` (
  `id` int(11) NOT NULL,
  `spd_id` int(11) NOT NULL,
  `scan_nodin` varchar(255) DEFAULT NULL,
  `scan_surattugas` varchar(255) DEFAULT NULL,
  `scan_spd` varchar(255) DEFAULT NULL,
  `scan_tiket` varchar(255) DEFAULT NULL,
  `scan_boarding_pass` varchar(255) DEFAULT NULL,
  `scan_bill_hotel` varchar(255) DEFAULT NULL,
  `scan_laporan_spd` varchar(255) DEFAULT NULL,
  `scan_bill_rapidtest` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas_laporan_spd`
--

INSERT INTO `berkas_laporan_spd` (`id`, `spd_id`, `scan_nodin`, `scan_surattugas`, `scan_spd`, `scan_tiket`, `scan_boarding_pass`, `scan_bill_hotel`, `scan_laporan_spd`, `scan_bill_rapidtest`, `created_at`, `updated_at`) VALUES
(4, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 07:01:59', '2021-04-26 07:01:59'),
(5, 6, 'berkas//VlXBsvdgMEExOArGhACyO30vc5GR7ZSU1EFXSDYW.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-27 03:29:34', '2021-05-05 11:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `hys_rincian_biaya`
--

CREATE TABLE `hys_rincian_biaya` (
  `id` int(11) NOT NULL,
  `ref_rincian_biaya_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `spd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hys_rincian_biaya`
--

INSERT INTO `hys_rincian_biaya` (`id`, `ref_rincian_biaya_id`, `jumlah`, `keterangan`, `created_at`, `updated_at`, `spd_id`) VALUES
(5, 3, 400000, 'taksi jalan', '2021-04-28 03:06:39', '2021-04-28 03:06:39', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kuitansi`
--

CREATE TABLE `kuitansi` (
  `id` int(11) NOT NULL,
  `kui_spd_id` int(11) NOT NULL,
  `sudah_terima_dari` text,
  `untuk_pembayaran` text,
  `jumlah` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuitansi`
--

INSERT INTO `kuitansi` (`id`, `kui_spd_id`, `sudah_terima_dari`, `untuk_pembayaran`, `jumlah`, `created_at`, `updated_at`) VALUES
(2, 6, 'Bendahara', 'Biaya Perjalanan Dinas', 400000, '2021-04-27 08:05:00', '2021-05-05 02:06:14');

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
-- Table structure for table `ms_golongan`
--

CREATE TABLE `ms_golongan` (
  `id` int(11) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_golongan`
--

INSERT INTO `ms_golongan` (`id`, `golongan`, `pangkat`, `created_at`, `updated_at`) VALUES
(1, 'II A', 'Pengatur Muda', '2021-04-06 01:27:10', '2021-04-06 01:27:10'),
(2, 'III B', 'Penata Muda Tingkat 1', '2021-04-12 07:21:10', '2021-04-12 07:21:10'),
(3, 'III C', 'Penata', '2021-04-12 07:21:16', '2021-04-12 07:21:16'),
(4, 'III A', 'Penata Muda', '2021-04-12 07:21:21', '2021-04-12 07:21:21'),
(5, 'I A', 'Juru Muda', '2021-04-14 03:41:42', '2021-04-14 03:41:42'),
(6, 'I B', 'Juru Muda Tingkat 1', '2021-04-14 03:43:44', '2021-04-14 03:43:44'),
(7, 'I C', 'Juru', '2021-04-14 03:43:53', '2021-04-14 03:43:53'),
(8, 'I D', 'Juru Tingkat 1', '2021-04-14 03:44:04', '2021-04-14 03:44:04'),
(9, 'II B', 'Pengatur Muda Tingkat 1', '2021-04-14 03:44:38', '2021-04-14 03:44:38'),
(10, 'II C', 'Pengatur', '2021-04-14 03:44:48', '2021-04-14 03:44:48'),
(11, 'II D', 'Pengatur Tingkat 1', '2021-04-14 03:45:04', '2021-04-14 03:45:04'),
(12, 'III D', 'Penata Tingkat 1', '2021-04-14 03:45:32', '2021-04-14 03:45:32'),
(13, 'IV A', 'Pembina', '2021-04-14 03:45:43', '2021-04-14 03:45:43'),
(14, 'IV B', 'Pembina Tingkat 1', '2021-04-14 03:45:54', '2021-04-14 03:45:54'),
(15, 'IV C', 'Pembina Utama Muda', '2021-04-14 03:46:49', '2021-04-14 03:46:49'),
(16, 'IV D', 'Pembina Utama Madya', '2021-04-14 03:47:05', '2021-04-14 03:47:05'),
(17, 'IV E', 'Pembina Utama', '2021-04-14 03:47:17', '2021-04-14 03:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `ms_jabatan`
--

CREATE TABLE `ms_jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_jabatan`
--

INSERT INTO `ms_jabatan` (`id`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Badan Kepegawaian dan Pengembangan Sumber Daya Manusia', '2021-04-05 08:02:53', '2021-05-03 04:21:53'),
(2, 'Kasubbag Umum dan Kepegawaian', '2021-04-12 07:20:40', '2021-04-12 07:20:40'),
(3, 'Staff', '2021-04-12 07:20:58', '2021-04-12 07:20:58'),
(4, 'Pengadministrasi Umum', '2021-05-03 04:23:54', '2021-05-03 04:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `ms_opd`
--

CREATE TABLE `ms_opd` (
  `id` int(11) NOT NULL,
  `nama_opd` varchar(255) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_opd`
--

INSERT INTO `ms_opd` (`id`, `nama_opd`, `kode`, `created_at`, `updated_at`) VALUES
(4, 'Badan Kepegawaian  dan Pengelolaan Sumbar Daya Manusia', NULL, '2021-04-26 02:41:36', '2021-04-26 02:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `ms_pegawai`
--

CREATE TABLE `ms_pegawai` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `golongan_id` int(11) NOT NULL,
  `pangkat_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_pegawai`
--

INSERT INTO `ms_pegawai` (`id`, `nama_pegawai`, `nip`, `jabatan_id`, `golongan_id`, `pangkat_id`, `created_at`, `updated_at`) VALUES
(5, 'Pegawai 1', '198812302020122001', 1, 13, NULL, '2021-04-23 22:25:27', '2021-04-23 22:25:27'),
(6, 'Pegawai 2', '198812302020122001', 3, 1, NULL, '2021-04-27 16:04:04', '2021-04-27 16:04:04'),
(7, 'Pegawai 5', '198812302020122005', 3, 1, NULL, '2021-04-27 04:22:43', '2021-04-27 04:22:43'),
(8, 'Kepala Dinas', '198812302020122005', 1, 13, NULL, '2021-05-03 04:22:39', '2021-05-03 04:22:39'),
(9, 'Kasubbag Umum', '198812302020122001', 2, 3, NULL, '2021-05-03 04:23:08', '2021-05-03 04:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `nota_dinas`
--

CREATE TABLE `nota_dinas` (
  `id` int(11) NOT NULL,
  `nd_kepada` varchar(255) NOT NULL,
  `nd_dari` varchar(255) NOT NULL,
  `nd_tgl_nodin` datetime NOT NULL,
  `nd_nomor` varchar(255) NOT NULL,
  `nd_lampiran` varchar(255) NOT NULL,
  `nd_perihal` text NOT NULL,
  `nd_kalimat_pembuka` text NOT NULL,
  `nd_pegawai_id` int(11) NOT NULL,
  `nd_kalimat_penutup` text NOT NULL,
  `nd_penanda_tangan_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota_dinas`
--

INSERT INTO `nota_dinas` (`id`, `nd_kepada`, `nd_dari`, `nd_tgl_nodin`, `nd_nomor`, `nd_lampiran`, `nd_perihal`, `nd_kalimat_pembuka`, `nd_pegawai_id`, `nd_kalimat_penutup`, `nd_penanda_tangan_id`, `created_at`, `updated_at`) VALUES
(1, 'Kepala BKPSDM', 'Sekretaris BKPSDM', '2021-04-08 00:00:00', '800/1/BKPSDM/I/2021', '1 (Satu) Berkas', 'Mohon persetujuan dan rekomendasi perjalanan dinas luar daerah', 'Sehubungan dengan Surat dari Kepala Dinas Perpustakaan Kabupaten Belitung Timur Nomor: 045/377/DISPUS/2021 tanggal 4 April 2021 perihal Keikutsertaan Magang SIKD dan Nomor ..., dengan ini dimohon agar kiranya Bapak dapat memberikan izin dan menerbitkan Surat Tugas Luar Daerah ke Jakarta dan Banten selama 6 (enam) hari dari tanggal 03 November s/d 08 November untuk pegawai atas nama:', 1, 'Demikian disampaikan, atas perhatian dan perkenan Bapak diucapkan terima kasih.', 1, '2021-04-08 02:46:01', '2021-04-08 02:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `ref_alat_transportasi`
--

CREATE TABLE `ref_alat_transportasi` (
  `id` int(11) NOT NULL,
  `alat_transportasi` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_alat_transportasi`
--

INSERT INTO `ref_alat_transportasi` (`id`, `alat_transportasi`, `created_at`, `updated_at`) VALUES
(1, 'Pesawat', '2021-04-14 04:30:39', '2021-04-14 04:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kota`
--

CREATE TABLE `ref_kota` (
  `id` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_kota`
--

INSERT INTO `ref_kota` (`id`, `nama_kota`, `created_at`, `updated_at`) VALUES
(2, 'Jakarta', '2021-04-26 08:02:08', '2021-04-26 08:02:08'),
(3, 'Bandung', '2021-04-27 07:58:34', '2021-04-27 07:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `ref_rincian_biaya`
--

CREATE TABLE `ref_rincian_biaya` (
  `id` int(11) NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_rincian_biaya`
--

INSERT INTO `ref_rincian_biaya` (`id`, `biaya`, `created_at`, `updated_at`) VALUES
(1, 'Uang Harian', '2021-04-15 03:54:02', '2021-04-15 03:54:02'),
(2, 'Biaya Transportasi', '2021-04-20 03:49:17', '2021-04-20 03:49:17'),
(3, 'Biaya Taksi', '2021-04-28 03:06:19', '2021-04-28 03:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `surat_perjalanan_dinas`
--

CREATE TABLE `surat_perjalanan_dinas` (
  `id` int(11) NOT NULL,
  `spd_opd_id` int(11) DEFAULT NULL,
  `spd_lembar_ke` varchar(255) NOT NULL,
  `spd_kode` varchar(255) NOT NULL,
  `spd_nomor` varchar(255) NOT NULL,
  `spd_ppk_id` int(11) NOT NULL,
  `spd_pegawai_id` int(11) NOT NULL,
  `spd_maksud` varchar(255) NOT NULL,
  `spd_transportasi_id` int(11) NOT NULL,
  `spd_tempat_berangkat` varchar(255) NOT NULL,
  `spd_kota_tujuan_id` int(11) NOT NULL,
  `spd_surattugas_id` int(11) NOT NULL,
  `spd_anggaran_id` varchar(255) DEFAULT NULL,
  `spd_ket` varchar(255) DEFAULT NULL,
  `spd_status` int(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_perjalanan_dinas`
--

INSERT INTO `surat_perjalanan_dinas` (`id`, `spd_opd_id`, `spd_lembar_ke`, `spd_kode`, `spd_nomor`, `spd_ppk_id`, `spd_pegawai_id`, `spd_maksud`, `spd_transportasi_id`, `spd_tempat_berangkat`, `spd_kota_tujuan_id`, `spd_surattugas_id`, `spd_anggaran_id`, `spd_ket`, `spd_status`, `created_at`, `updated_at`) VALUES
(6, NULL, '1', '0', '7', 5, 7, 'rtyt', 1, 'xyz', 3, 7, 'DPA', NULL, 1, '2021-04-27 08:01:36', '2021-05-04 07:38:40'),
(7, NULL, '1', '0', 'df45555/566665', 6, 7, 'fdsgfg', 1, 'Manggar', 2, 6, 'DPA', NULL, 2, '2021-04-27 15:51:19', '2021-04-29 02:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id` int(11) NOT NULL,
  `st_nomor` varchar(255) NOT NULL,
  `st_dasar_penugasan` varchar(255) NOT NULL,
  `st_pegawai_id_tujuan` int(11) NOT NULL,
  `st_alasan_penugasan` varchar(255) NOT NULL,
  `st_lama_tugas` int(11) NOT NULL,
  `st_tgl_awal` date NOT NULL,
  `st_tgl_akhir` datetime NOT NULL,
  `st_tempat_penetapan` varchar(255) NOT NULL,
  `st_tgl_penetapan` datetime NOT NULL,
  `st_penanda_tangan_id` int(11) NOT NULL,
  `st_status` int(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_tugas`
--

INSERT INTO `surat_tugas` (`id`, `st_nomor`, `st_dasar_penugasan`, `st_pegawai_id_tujuan`, `st_alasan_penugasan`, `st_lama_tugas`, `st_tgl_awal`, `st_tgl_akhir`, `st_tempat_penetapan`, `st_tgl_penetapan`, `st_penanda_tangan_id`, `st_status`, `created_at`, `updated_at`) VALUES
(6, '090/ST/03/2021', 'Nota Dinas Kepala Bidang Pengembangan Kompetensi dan Penilaian Kinerja Aparatur Nomor: 800/002/BKPSDM/II/2021 Tanggal 24 Maret 2021', 5, 'Dinas dalam rangka mengikuti rapat persiapan pelaksanaan kegiatan pelatihan dasar CPNS se-Provinsi kepulauan Bangka Belitung Tahun 2021', 3, '2021-04-26', '2021-04-28 00:00:00', 'Manggar', '2021-04-26 00:00:00', 6, 2, '2021-04-26 07:01:59', '2021-04-28 08:10:53'),
(7, '123243', 'Pelatihan rutin', 5, 'Dinas dalam rangka mengikuti rapat persiapan pelaksanaan kegiatan pelatihan dasar CPNS se-Provinsi kepulauan Bangka Belitung Tahun 2021', 3, '2021-06-01', '2021-06-03 00:00:00', 'Manggar', '2021-04-27 00:00:00', 6, 0, '2021-04-27 03:29:34', '2021-05-05 02:51:58'),
(8, 'daaagfg675674', 'agfdgdf', 5, 'fgsdg', 3, '2021-05-21', '2021-05-24 00:00:00', 'Manggar', '2021-05-21 00:00:00', 8, 0, '2021-05-05 10:35:19', '2021-05-05 10:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('PU','KUK','PPK','ADMIN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$oqYt4z51BtQ8PjWgktfxduz.hJhSV3HYPZzaWlYNns7gQ9OzAQbUS', NULL, 'ADMIN', 5, '2021-04-26 21:31:24', '2021-04-30 00:49:21'),
(2, 'pengadministrasi umum', 'pu@gmail.com', NULL, '$2y$10$oqYt4z51BtQ8PjWgktfxduz.hJhSV3HYPZzaWlYNns7gQ9OzAQbUS', NULL, 'PU', 5, '2021-04-26 14:31:24', '2021-04-26 14:31:24'),
(3, 'kasubbag umum', 'kuk@gmail.com', NULL, '$2y$10$oqYt4z51BtQ8PjWgktfxduz.hJhSV3HYPZzaWlYNns7gQ9OzAQbUS', NULL, 'KUK', 7, '2021-04-26 14:31:24', '2021-05-02 21:17:15'),
(4, 'pejabat pembuat komitmen', 'ppk@gmail.com', NULL, '$2y$10$age4joHYXcEzv0k7AYeblugWVSg/6L4WYbVL6nEuorWRXsdYwLfaK', NULL, 'PPK', 5, '2021-04-30 00:58:35', '2021-04-30 00:58:35'),
(5, 'pejabat pembuat komitmen 2', 'ppk2@gmail.com', NULL, '$2y$10$hHtEkNs8EgWs.rwWBG03JOOFBxDW6bYEczIw0E3VhU5OE6MulzPW6', NULL, 'PPK', 6, '2021-04-30 01:02:00', '2021-05-05 08:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas_laporan_spd`
--
ALTER TABLE `berkas_laporan_spd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hys_rincian_biaya`
--
ALTER TABLE `hys_rincian_biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuitansi`
--
ALTER TABLE `kuitansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_golongan`
--
ALTER TABLE `ms_golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_jabatan`
--
ALTER TABLE `ms_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_opd`
--
ALTER TABLE `ms_opd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_pegawai`
--
ALTER TABLE `ms_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota_dinas`
--
ALTER TABLE `nota_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_alat_transportasi`
--
ALTER TABLE `ref_alat_transportasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_kota`
--
ALTER TABLE `ref_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_rincian_biaya`
--
ALTER TABLE `ref_rincian_biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_perjalanan_dinas`
--
ALTER TABLE `surat_perjalanan_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggaran`
--
ALTER TABLE `anggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berkas_laporan_spd`
--
ALTER TABLE `berkas_laporan_spd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hys_rincian_biaya`
--
ALTER TABLE `hys_rincian_biaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kuitansi`
--
ALTER TABLE `kuitansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ms_golongan`
--
ALTER TABLE `ms_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ms_jabatan`
--
ALTER TABLE `ms_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ms_opd`
--
ALTER TABLE `ms_opd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ms_pegawai`
--
ALTER TABLE `ms_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nota_dinas`
--
ALTER TABLE `nota_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_alat_transportasi`
--
ALTER TABLE `ref_alat_transportasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_kota`
--
ALTER TABLE `ref_kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ref_rincian_biaya`
--
ALTER TABLE `ref_rincian_biaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_perjalanan_dinas`
--
ALTER TABLE `surat_perjalanan_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
