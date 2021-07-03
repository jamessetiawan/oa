-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2021 pada 07.45
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

DROP TABLE IF EXISTS `adm_doc`;
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
(19, 1234, 'Activity_Report_-_March_2021_-_Irwan_Sahrul_Sidik_-_ISM3.docx', '1', '1', '', '2021-06-29 22:10:28', 1),
(20, 1234, 'Activity_Report_-_Februari_2021_-_Irwan_Sahrul_Sidik_-_ISM1.docx', '2', '1', 'oke', '2021-06-29 22:38:59', 1),
(21, 1234, 'RDBMS_Desc2.docx', '3', '2', 'masih salah', '2021-07-01 17:45:04', 1),
(22, 1234, 'RDBMS_Desc1.docx', '4', '1', 'oke', '2021-07-01 17:43:46', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `adm_jenis_doc`
--

DROP TABLE IF EXISTS `adm_jenis_doc`;
CREATE TABLE `adm_jenis_doc` (
  `kd_jenis_doc` int(11) NOT NULL,
  `nama_jenis_doc` varchar(100) NOT NULL,
  `school_year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adm_jenis_doc`
--

INSERT INTO `adm_jenis_doc` (`kd_jenis_doc`, `nama_jenis_doc`, `school_year_id`) VALUES
(1, 'Buku Kerja 1', 1),
(2, 'Buku Kerja 2', 1),
(3, 'Buku Kerja 3', 1),
(4, 'Buku Kerja 4', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `attendence`
--

DROP TABLE IF EXISTS `attendence`;
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
(16, 1234, 1, 2, '11003', '1', 1, 1, '2021-06-13 19:42:32'),
(17, 1234, 1, 1, '11001', '1', 1, 2, '2021-06-25 15:50:01'),
(18, 1234, 1, 1, '11002', '1', 1, 2, '2021-06-25 15:50:01'),
(19, 1234, 1, 1, '11001', '1', 1, 3, '2021-06-25 15:51:05'),
(20, 1234, 1, 1, '11002', '1', 1, 3, '2021-06-25 15:51:05'),
(21, 1234, 1, 1, '11001', '1', 1, 4, '2021-06-25 15:51:27'),
(22, 1234, 1, 1, '11002', '1', 1, 4, '2021-06-25 15:51:27'),
(23, 1234, 1, 1, '11001', '0', 1, 5, '2021-06-25 15:52:38'),
(24, 1234, 1, 1, '11002', '1', 1, 5, '2021-06-25 15:52:38'),
(25, 1234, 1, 1, '11001', '1', 1, 6, '2021-06-28 23:15:16'),
(26, 1234, 1, 1, '11002', '1', 1, 6, '2021-06-28 23:15:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `class_rooms`
--

DROP TABLE IF EXISTS `class_rooms`;
CREATE TABLE `class_rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `class_rooms`
--

INSERT INTO `class_rooms` (`id`, `name`, `capacity`) VALUES
(1, '10 RPL A', 30),
(2, '10 RPL B', 40),
(3, '10 BDP', 37),
(4, '10 APHP A', 37),
(5, '10 APHP B', 37),
(6, '10 TKRO', 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `class_room_subject_teacher`
--

DROP TABLE IF EXISTS `class_room_subject_teacher`;
CREATE TABLE `class_room_subject_teacher` (
  `id` int(11) NOT NULL,
  `class_room_id` int(11) NOT NULL,
  `subject_teacher_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `class_room_subject_teacher`
--

INSERT INTO `class_room_subject_teacher` (`id`, `class_room_id`, `subject_teacher_id`, `day`, `time_start`, `time_end`) VALUES
(1, 1, 1, 1, '08:00:00', '10:00:00'),
(2, 2, 1, 2, '08:00:00', '10:00:00'),
(3, 1, 2, 2, '11:00:00', '12:00:00'),
(5, 2, 2, 3, '08:00:00', '09:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employess`
--

DROP TABLE IF EXISTS `employess`;
CREATE TABLE `employess` (
  `employee_id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bd_place` text NOT NULL,
  `bd_date` date NOT NULL,
  `address` text NOT NULL,
  `education` text NOT NULL,
  `degree` text NOT NULL,
  `university` text NOT NULL,
  `faculty` text NOT NULL,
  `study` text NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `position` varchar(100) NOT NULL,
  `status_pendidik` int(11) NOT NULL DEFAULT 0,
  `status_pns` int(11) NOT NULL DEFAULT 0,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `employess`
--

INSERT INTO `employess` (`employee_id`, `nik`, `name`, `gender`, `bd_place`, `bd_date`, `address`, `education`, `degree`, `university`, `faculty`, `study`, `marital_status`, `phone`, `position`, `status_pendidik`, `status_pns`, `image`) VALUES
(1, '7232832932', 'Hidayat M.Pd. MM', 'laki-laki', 'cianjur', '1987-06-18', 'jl. cijati,cianjur, jabar', ' Magister Manajemen Pendidikan', 'S2', 'Universitas Pasundan', 'fakultas ilmu pendidikan', 'Bahasa Indonesia', 'menikah', '+6287828932', 'Kepala Sekolah', 2, 1, ''),
(2, '1234', 'Irwan S. Sidik M.Kom', 'laki-laki', 'cianjur', '1997-06-19', 'jl. kadupandak,cianjur, jabar', 'Ilmu komputer', 'S2', 'Universitas Nusa Mandiri', 'fakultas ilmu komputer', 'Rekayasa Perangkat Lunak', 'belum menikah', '+6285814429029', 'Kaprod RPL', 2, 1, '829348923je83jieoj923je3.jpg'),
(3, '1235', 'Rahmat Setiawan S.Kom', 'laki-laki', 'cianjur', '1997-09-18', 'jl. cikuya,cianjur, jabar', 'Sistem Informasi', 'S1', 'Universitas Surya Kencana', 'fakultas ilmu komputer', 'Rekayasa Perangkat Lunak', 'belum menikah', '+6285763787823', 'Administrasi Lab RPL', 1, 2, '3998923je83jieoj922878.jpg'),
(4, '1236', 'Rahayu Sri', 'perempuan', 'Cianjur', '2021-07-28', 'Jl. CIjati,CIanjur', 'Ilmu Fisika', 'D4/S1', 'ITB', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Ilmu Fisika', 'Belum Menikah', '081216645866', 'Guru Lab Fisika', 2, 1, '66839b3c6595fae36b1c115fabfc8585.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lessons`
--

INSERT INTO `lessons` (`id`, `name`, `time`) VALUES
(1, 'Rekayasa Perangkat Lunak', 2),
(2, 'Fisika', 1),
(3, 'Kimia', 1),
(4, 'Bahasa Indonesia', 1),
(5, 'Matematika', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `school_year2`
--

DROP TABLE IF EXISTS `school_year2`;
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

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `bd_place` varchar(100) NOT NULL,
  `bd_date` date NOT NULL DEFAULT current_timestamp(),
  `major` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `image` text DEFAULT NULL,
  `class_room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nis`, `name`, `gender`, `bd_place`, `bd_date`, `major`, `address`, `image`, `class_room_id`) VALUES
(1, '11001', 'Irma', 'perempuan', 'cianjur', '2021-06-28', 'Rekayasa Perangkat Lunak', 'jl. siliwangi', '', 1),
(2, '11002', 'Indra', 'laki-laki', 'cianjur', '2021-06-28', 'Rekayasa Perangkat Lunak', 'jl. siliwangi', '', 1),
(3, '11003', 'Anis', 'laki-laki', 'cianjur', '2021-06-28', 'Rekayasa Perangkat Lunak', 'jl. siliwangi', '', 2),
(4, '11004', 'Saugi', 'laki-laki', 'Cianjur', '1999-08-11', 'Rekayasa Perangkat Lunak', 'Cijati', '3aa969897637c3de3ded33df715d3388.png', 2),
(5, '11005', 'Dimas', 'laki-laki', 'Cianjur', '2021-07-20', 'Rekayasa Perangkat Lunak', 'Kadupandak', 'ff0e0870c1de6aeeda8ebdd38cb0fa3b.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subject_teachers`
--

DROP TABLE IF EXISTS `subject_teachers`;
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
(1, 2, 1, 1),
(2, 8, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nik` varchar(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `username`, `email`, `password`, `type`, `status`) VALUES
(0, 'admin', 'Admin', 'admin@gmail.com', '123', 'admin', 1),
(1, '7232832932', 'Hidayat M.Pd. MM', 'kepsek@gmail.com', '123', 'admin', 1),
(2, '1234', 'Irwan Sahrul Sidik M.Kom', 'irwansah@gmail.com', '123', 'guru', 1),
(6, '1235', 'Rahmat Setiawan S.Kom', 'rahmat@gmail.com', '123', 'guru', 1),
(8, '1236', 'Rahayu Sri', 'rahayu@gmail.com', 'smkcjt2021', 'guru', 1);

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
-- Indeks untuk tabel `employess`
--
ALTER TABLE `employess`
  ADD PRIMARY KEY (`employee_id`);

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
  MODIFY `kd_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `adm_jenis_doc`
--
ALTER TABLE `adm_jenis_doc`
  MODIFY `kd_jenis_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `class_rooms`
--
ALTER TABLE `class_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `class_room_subject_teacher`
--
ALTER TABLE `class_room_subject_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `employess`
--
ALTER TABLE `employess`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `subject_teachers`
--
ALTER TABLE `subject_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
