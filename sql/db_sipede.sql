-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 03:24 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `berkas_laporan_spd`
--

CREATE TABLE `berkas_laporan_spd` (
  `id` int(11) NOT NULL,
  `surattugas_id` int(11) NOT NULL,
  `scan_nodin` varchar(255) DEFAULT NULL,
  `scan_surattugas` varchar(255) DEFAULT NULL,
  `scan_spd` varchar(255) DEFAULT NULL,
  `scan_tiket` varchar(255) DEFAULT NULL,
  `scan_boarding_pass` varchar(255) DEFAULT NULL,
  `scan_bill_hotel` varchar(255) DEFAULT NULL,
  `scan_laporan_spd` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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
  `role` enum('PU','KUK','PPK') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$oqYt4z51BtQ8PjWgktfxduz.hJhSV3HYPZzaWlYNns7gQ9OzAQbUS', NULL, 'PPK', '2021-04-26 21:31:24', '2021-04-26 21:31:24'),
(2, 'pengadministrasi umum', 'pu@gmail.com', NULL, '$2y$10$oqYt4z51BtQ8PjWgktfxduz.hJhSV3HYPZzaWlYNns7gQ9OzAQbUS', NULL, 'PU', '2021-04-26 14:31:24', '2021-04-26 14:31:24'),
(3, 'kasubbag umum', 'kuk@gmail.com', NULL, '$2y$10$oqYt4z51BtQ8PjWgktfxduz.hJhSV3HYPZzaWlYNns7gQ9OzAQbUS', NULL, 'KUK', '2021-04-26 14:31:24', '2021-04-26 14:31:24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_opd`
--
ALTER TABLE `ms_opd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ms_pegawai`
--
ALTER TABLE `ms_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

