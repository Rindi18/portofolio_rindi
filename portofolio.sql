-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2025 at 11:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id`, `deskripsi`) VALUES
(1, 'Saya adalah mahasiswa Teknik Informatika di Universitas Maritim Raja Ali Haji yang fokus pada desain antarmuka pengguna (UI Design). Saya senang menciptakan tampilan aplikasi yang menarik, fungsional, dan mudah digunakan.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$yTOIi.RTkT/HbW8D7uJac.zZDXYA0uZ.glzLQSoPU9yXO2V7wRUFG');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `nama_aktivitas` varchar(150) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `nama_aktivitas`, `deskripsi`) VALUES
(3, 'Mahasiswa Aktif', 'Saya sekarang aktif sebagai mahasiswa jurusan Teknik Informatika Fakultas Teknik dan Teknologi Kemaritiman Universitas Maritim Raja Ali Haji');

-- --------------------------------------------------------

--
-- Table structure for table `hobi`
--

CREATE TABLE `hobi` (
  `id` int(11) NOT NULL,
  `nama_hobi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hobi`
--

INSERT INTO `hobi` (`id`, `nama_hobi`) VALUES
(4, 'Bernyanyi'),
(5, 'Nonton Film'),
(6, 'Main Game');

-- --------------------------------------------------------

--
-- Table structure for table `kemampuan`
--

CREATE TABLE `kemampuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kemampuan`
--

INSERT INTO `kemampuan` (`id`, `nama`) VALUES
(7, 'capcut'),
(8, 'UI/UX Desain'),
(9, 'Figma'),
(10, 'Microsoft Office'),
(11, 'Assemblr'),
(12, 'Canva');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL,
  `nama_organisasi` varchar(255) DEFAULT NULL,
  `posisi` text DEFAULT NULL,
  `periode` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `nama_organisasi`, `posisi`, `periode`, `gambar`) VALUES
(5, 'Himpunan Mahasiswa Teknik Infrmatika(HMTI)', 'Anggota Divisi Litbang & Pendidikan', '2023', '685f76d101b18.png'),
(6, 'Himpunan Mahasiswa Teknik Infrmatika(HMTI)', 'Sekretaris Divisi Litbang & Pendidikan', '2024', '685f778892012.png');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `tahun_mulai` year(4) DEFAULT NULL,
  `tahun_selesai` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `jenjang`, `nama_sekolah`, `tahun_mulai`, `tahun_selesai`) VALUES
(5, NULL, 'SD N 13 Talamau', NULL, NULL),
(6, NULL, 'MTS Istiqomah', NULL, NULL),
(7, NULL, 'SMK N 01 Talamau', NULL, NULL),
(8, NULL, 'Universitas Maritim Raja Ali Haji (UMRAH)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `deskripsi`, `tahun`, `gambar`) VALUES
(5, 'Saya pernah jadi panitia Mini Bootcamp ', '2024', '685f790b1644c.png'),
(6, 'Saya pernah jadi peserta Mini Bootcamp', '2024', '685f7a2ce65de.png'),
(7, 'Saya pernah jadi panitia Pengenalan Lingkungan Jurusan(PLJ)', NULL, '685f7a771b6c7.png'),
(8, 'Saya pernah jadi panitia Latihan Dasar Kepemimpinan(LDK)', NULL, '685f7af08c04c.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_kontak`
--

CREATE TABLE `pesan_kontak` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan_kontak`
--

INSERT INTO `pesan_kontak` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'rindi', 'marditarindi@gmail.com', 'saya mau pake jasa layanan anda yaitu desain web', '2025-06-27 03:00:16'),
(3, 'annisya awari', 'annisyahariady@gmail.com', 'saya mau mesan web bisa gak?', '2025-06-28 07:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `deskripsi`, `foto`) VALUES
(1, 'Mardita Rindi', 'Desainer visual yang menciptakan pengalaman desain yang bersih, tajam, dan bermakna.\nHitam untuk ketegasan, hijau untuk kehidupan.\nInilah karya saya.', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id` int(11) NOT NULL,
  `nama_proyek` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id`, `nama_proyek`, `deskripsi`, `gambar`) VALUES
(6, 'Website Launa Vista', 'yaitu website hotel/resort berbasis dekstop untuk pemesanan kamar', '685f7cd579b52.png'),
(7, 'Aplikasi Resep Makanan', 'yaitu ini resep makanan mobile menggunakan flutter', '685f7dbad33a6.png'),
(8, 'Desain Web Crazy Fishing', 'Ini adalah proyek desain web ', '685f7eb38e394.png'),
(9, 'AR (Augmented Reality)', 'Ini adalah proyek AR yang jika kita mau melihat flora dan fauna bisa lewat qr', '685f7f527a839.png');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_kontak`
--
ALTER TABLE `pesan_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hobi`
--
ALTER TABLE `hobi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kemampuan`
--
ALTER TABLE `kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesan_kontak`
--
ALTER TABLE `pesan_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
