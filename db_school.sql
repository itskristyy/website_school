-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2026 at 04:08 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int NOT NULL,
  `nama_alumni` text NOT NULL,
  `alumni_jurusan` text NOT NULL,
  `tahun_lulus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `nama_alumni`, `alumni_jurusan`, `tahun_lulus`) VALUES
(13, 'Ahmad Fauzi', 'PPLG', '2022'),
(14, 'Siti Nurhaliza', 'TKJ', '2021'),
(15, 'Budi Santoso', 'KULINER', '2023'),
(16, 'Dewi Lestari', 'PPLG', '2020'),
(17, 'Rizki Pratama', 'TKJ', '2022'),
(18, 'Putri Ayu Wulandari', 'KULINER', '2021'),
(19, 'Andi Firmansyah', 'AP', '2023'),
(20, 'Nur Aini', 'TKJ', '2020'),
(21, 'Fajar Ramadhan', 'TO', '2022'),
(22, 'Indah Permatasari', 'NKPI', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int NOT NULL,
  `judul_berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `url_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `kategori_berita` enum('prestasi','pengumuman','artikel','fasilitas','lainnya') DEFAULT NULL,
  `link_berita` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `url_image`, `deskripsi_berita`, `kategori_berita`, `link_berita`, `created_at`, `updated_at`) VALUES
(3, 'Tim Skanifo berhasil meraih predikat Juara Umum setelah memenangkan 5 medali emas di berbagai bidang keahlian teknologi dan industri', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE6JgfK0Rmpovtz__MWSnk7JoW01kjzCo7F_PX0tWhVg&s=10', 'Tim Skanifo berhasil meraih predikat Juara Umum setelah memenangkan 5 medali emas di berbagai bidang keahlian teknologi dan industri', 'prestasi', '', '2026-07-20 17:00:00', '2026-07-20 17:00:00'),
(5, 'Juara Umum Lomba Kompetensi Siswa (LKS) Tingkat Provinsi 2024', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYqcvxQD3gxDMPOBCMY2lauCi2KLOt5dFFc3Dd5FwxkQ&s=10', 'sdafdsf', 'prestasi', 'https://www.google.com/imgres?q=Kejuaraan&imgurl=https%3A%2F%2Fpbsi.id%2Fwp-content%2Fuploads%2F2024%2F01%2FBNIKEJURNAS2023_PodiumTTA_PBSI.jpg&imgrefurl=https%3A%2F%2Fpbsi.id%2F2024%2F01%2F05%2Fbni-kejuaraan-nasional-pbsi-2023-zaki-jadi-yang-terbaik-di-tunggal-putra-taruna%2F&docid=6On4Y74obXPC0M&tbnid=Fm0WaekfPSnVMM&vet=12ahUKEwist6uQl-OVAxXia2wGHR1jNngQnPAOegQIMBAA..i&w=2160&h=1440&hcb=2&ved=2ahUKEwist6uQl-OVAxXia2wGHR1jNngQnPAOegQIMBAA', '2026-07-20 17:00:00', '2026-07-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guestbook`
--

CREATE TABLE `tb_guestbook` (
  `id_message` int NOT NULL,
  `email` varchar(400) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `message` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createdAt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_guestbook`
--

INSERT INTO `tb_guestbook` (`id_message`, `email`, `nama`, `message`, `createdAt`) VALUES
(1, 'nabilapipp@gmail.com', 'Name Test', 'I may be slow to respond.', '1784212270'),
(2, 'nabilapipp@gmail.com', 'Name Test', 'dfsdfsdf', '21-07-2026');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int NOT NULL,
  `nama_guru` text NOT NULL,
  `nip` bigint NOT NULL,
  `guru_jurusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `nip`, `guru_jurusan`) VALUES
(1, 'Hoho', 123564, 'TJKT'),
(3, 'Drs. Slamet Riyadi', 196501012000, 'PPLG'),
(4, 'Sri Wahyuni, S.Pd', 197203152001, 'TJKT'),
(5, 'Bambang Sutrisno, S.Kom', 198006202005, 'TO'),
(6, 'Endang Kusuma, M.Pd', 197511102003, 'PPLG'),
(7, 'Agus Setiawan, S.T', 198209052006, 'TJKT'),
(8, 'Rina Marlina, S.Kom', 198311172007, 'AP'),
(9, 'Hendra Wijaya, S.Pd', 197908302004, 'PPLG'),
(10, 'Yuli Astuti, S.Kom', 198605122008, 'TJKT'),
(11, 'Dedi Kurniawan, S.T', 198411252007, 'NKPI'),
(12, 'Wati Susanti, S.Pd', 197704182002, 'PPLG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int NOT NULL,
  `nama_siswa` text NOT NULL,
  `nipd` bigint NOT NULL,
  `siswa_jurusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `nipd`, `siswa_jurusan`) VALUES
(1, 'dsfsdf', 7357, 'PPLG'),
(3, 'Rafi Ardiansyah', 2223010001, 'PPLG'),
(4, 'Nabila Putri', 2223010002, 'TJKT'),
(5, 'Fikri Maulana', 2223010003, 'TO'),
(6, 'Ayu Anggraini', 2223010004, 'PPLG'),
(7, 'Bagus Prasetyo', 2223010005, 'TJKT'),
(8, 'Citra Dewi', 2223010006, 'AP'),
(9, 'Dimas Saputra', 2223010007, 'PPLG'),
(10, 'Eka Wulandari', 2223010008, 'TJKT'),
(11, 'Farhan Hidayat', 2223010009, 'NKPI'),
(12, 'Gita Ramadhani', 2223010010, 'PPLG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int NOT NULL,
  `username` varchar(400) NOT NULL,
  `nip` int NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `nip`, `password`) VALUES
(2, 'user_admin', 2222, 'd1409daeabf2dcb44e45a7e02bce4cde'),
(3, 'Owner', 12345, '14ad8545791733bbf3b7cbee5b02c8d1'),
(4, 'admin_loe', 123564, '77e2edcc9b40441200e31dc57dbb8829'),
(5, 'admin', 132456, '21232f297a57a5a743894a0e4a801fc3'),
(6, 'admin_apipp', 231564, '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_guestbook`
--
ALTER TABLE `tb_guestbook`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_guestbook`
--
ALTER TABLE `tb_guestbook`
  MODIFY `id_message` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
