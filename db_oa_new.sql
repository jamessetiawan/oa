-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 16.07
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_oa_new`
--
CREATE DATABASE IF NOT EXISTS `db_oa_new` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_oa_new`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `adm_doc`
--

CREATE TABLE `adm_doc` (
  `kd_doc` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `upload_doc` varchar(100) NOT NULL,
  `kd_jenis_doc` varchar(20) NOT NULL,
  `st_doc` varchar(20) NOT NULL,
  `note_doc` text NOT NULL,
  `waktu_doc` datetime NOT NULL,
  `school_year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adm_doc`
--

INSERT INTO `adm_doc` (`kd_doc`, `nik`, `upload_doc`, `kd_jenis_doc`, `st_doc`, `note_doc`, `waktu_doc`, `school_year_id`) VALUES
(15, 1234, 'IDAM_HRIS_SIAD_ProgressReport.zip', '1', '0', '', '2021-06-13 04:51:38', 1),
(16, 1234, 'Report_2021.zip', '2', '2', 'blum', '2021-06-13 04:51:42', 1),
(17, 1234, 'Salin_dari_(TSEL-UIM)_DataGathering_v1_1_(1)-1.xlsx', '3', '1', 'acc', '2021-06-13 04:52:00', 1),
(18, 1234, 'Vendor_master_data_Jan_11_2021.XLSX', '4', '2', 'blum', '2021-06-13 04:53:53', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `adm_jenis_doc`
--

CREATE TABLE `adm_jenis_doc` (
  `kd_jenis_doc` int(11) NOT NULL,
  `nama_jenis_doc` varchar(100) NOT NULL,
  `school_year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adm_jenis_doc`
--

INSERT INTO `adm_jenis_doc` (`kd_jenis_doc`, `nama_jenis_doc`, `school_year_id`) VALUES
(1, 'buku 1', 1),
(2, 'buku 2', 1),
(3, 'buku 3', 1),
(4, 'buku 4', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject_teacher_id` int(11) NOT NULL,
  `class_room_id` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `attendence` varchar(50) NOT NULL,
  `school_year_id` int(11) NOT NULL,
  `pert` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `attendence`
--

INSERT INTO `attendence` (`id`, `user_id`, `subject_teacher_id`, `class_room_id`, `nis`, `attendence`, `school_year_id`, `pert`, `waktu`) VALUES
(14, 1234, 1, 1, '11001', '1', 1, 1, '2021-06-13 19:39:50'),
(15, 1234, 1, 1, '11002', '1', 1, 1, '2021-06-13 19:39:50'),
(16, 1234, 1, 2, '11003', '1', 1, 1, '2021-06-13 19:42:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `class_rooms`
--

CREATE TABLE `class_rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `class_rooms`
--

INSERT INTO `class_rooms` (`id`, `name`, `capacity`) VALUES
(1, 'RPL A', 30),
(2, 'RPL B', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `class_room_subject_teacher`
--

CREATE TABLE `class_room_subject_teacher` (
  `id` int(11) NOT NULL,
  `class_room_id` int(11) NOT NULL,
  `subject_teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `class_room_subject_teacher`
--

INSERT INTO `class_room_subject_teacher` (`id`, `class_room_id`, `subject_teacher_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lessons`
--

INSERT INTO `lessons` (`id`, `name`) VALUES
(1, 'RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `school_year2`
--

CREATE TABLE `school_year2` (
  `id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `school_year2`
--

INSERT INTO `school_year2` (`id`, `first`, `year`, `status`) VALUES
(1, '2021', 2021, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `class_room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nis`, `name`, `gender`, `class_room_id`) VALUES
(1, '11001', 'Irma', 'perempuan', 1),
(2, '11002', 'Indra', 'laki-laki', 1),
(3, '11003', 'Anis', 'laki-laki', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subject_teachers`
--

CREATE TABLE `subject_teachers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `school_year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subject_teachers`
--

INSERT INTO `subject_teachers` (`id`, `user_id`, `lesson_id`, `school_year_id`) VALUES
(1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nik` varchar(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `name`, `email`, `password`, `status`) VALUES
(1, '7232832932', 'Admin Sekolah', 'admin.com', '123', 1),
(2, '1234', 'irwan', '1234', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adm_doc`
--
ALTER TABLE `adm_doc`
  ADD PRIMARY KEY (`kd_doc`);

--
-- Indeks untuk tabel `adm_jenis_doc`
--
ALTER TABLE `adm_jenis_doc`
  ADD PRIMARY KEY (`kd_jenis_doc`);

--
-- Indeks untuk tabel `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `class_rooms`
--
ALTER TABLE `class_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `class_room_subject_teacher`
--
ALTER TABLE `class_room_subject_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `school_year2`
--
ALTER TABLE `school_year2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subject_teachers`
--
ALTER TABLE `subject_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adm_doc`
--
ALTER TABLE `adm_doc`
  MODIFY `kd_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `adm_jenis_doc`
--
ALTER TABLE `adm_jenis_doc`
  MODIFY `kd_jenis_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `class_rooms`
--
ALTER TABLE `class_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `class_room_subject_teacher`
--
ALTER TABLE `class_room_subject_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
