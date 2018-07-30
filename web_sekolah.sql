-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2018 pada 03.28
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`) VALUES
('G097.144.00001', 'Muhamad Nabil', 'L', 'Yogyakarta', '2018-05-01', 'Imam Bonjol'),
('G097.144.00002', 'Ahmad Albar', 'L', 'Semarang', '2018-05-08', 'Jl. Jlamrang'),
('G097.144.00003', 'Muhamad Syafiq', 'L', 'Yogyakarta', '2018-05-01', 'Imam Bonjol'),
('G097.144.00004', 'Indra', 'L', 'Semarang', '2018-05-08', 'Jl. Jlamrang'),
('G097.144.00005', 'Kusmini', 'P', 'Yogyakarta', '2018-05-01', 'Imam Bonjol'),
('G097.144.00006', 'Khadijah', 'P', 'Semarang', '2018-05-08', 'Jl. Jlamrang'),
('G097.144.00007', 'Diana', 'P', 'Yogyakarta', '2018-05-01', 'Imam Bonjol'),
('G097.144.00008', 'Shofia', 'P', 'Semarang', '2018-05-08', 'Jl. Jlamrang'),
('G097.144.00009', 'Sakinah', 'P', 'Yogyakarta', '2018-05-01', 'Imam Bonjol'),
('G097.144.00010', 'Ahmad ', 'L', 'Semarang', '2018-05-08', 'Jl. Jlamrang'),
('G097.144.00011', ' Nabil', 'L', 'Yogyakarta', '2018-05-01', 'Imam Bonjol'),
('G097.144.00012', 'Ali', 'L', 'Semarang', '2018-05-08', 'Jl. Jlamrang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `tahun_ajaran` int(5) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `NIP`, `tahun_ajaran`, `wali_kelas`) VALUES
('S1.111.001', 'G097.144.00001', 2017, 'RPL A'),
('S1.111.002', 'G097.144.00002', 2016, 'RPL B'),
('S1.111.003', 'G097.144.00003', 2015, 'RPL C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `nis` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('siswa','guru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`nis`, `username`, `password`, `level`) VALUES
('G097.144.00001', 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru'),
('S017.111.00001', 'nabil', '070aa66550916626673f492bdbdb655f', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` varchar(5) NOT NULL,
  `nm_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nm_mapel`) VALUES
('M001', 'Matematika'),
('M002', 'Ilmu Pengetahuan Alam'),
('M003', 'Ilmu Pengetahuan Sosial'),
('M004', 'Fisika'),
('M005', 'Kimia'),
('M006', 'Bahasa Indonesia'),
('M007', 'Bahasa Inggris'),
('M008', 'Bahasa Jawa'),
('M009', 'Pendidikan Kewarganegaraan'),
('M010', 'Agama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `kd_kelas` varchar(15) DEFAULT NULL,
  `kd_mapel` varchar(15) DEFAULT NULL,
  `kd_ulangan` varchar(15) DEFAULT NULL,
  `kd_tugas` varchar(15) DEFAULT NULL,
  `UTS` double NOT NULL,
  `UAS` double NOT NULL,
  `nilai_akhir` double NOT NULL,
  `tahun_ajaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nis`, `kd_kelas`, `kd_mapel`, `kd_ulangan`, `kd_tugas`, `UTS`, `UAS`, `nilai_akhir`, `tahun_ajaran`) VALUES
(2, 'S017.111.00001', 'S1.111.001', 'M001', 'S017.111.00001', 'S017.111.00001', 80, 90, 46, 2017),
(3, 'S017.111.00001', 'S1.111.001', 'M002', 'S017.111.00001', 'S017.111.00001', 90, 70, 50, 2017),
(8, 'S017.111.00002', 'S1.111.001', 'M002', 'S017.111.00002', 'S017.111.00002', 2, 70, 50, 2017),
(9, 'S017.111.00004', 'S1.111.002', 'M002', 'S017.111.00004', 'S017.111.00004', 80, 90, 46, 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `tahun_angkatan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `tahun_angkatan`) VALUES
('S017.111.00001', 'Muhamad Nabil Munawar', 'L', 'Pekalongan', '2016-07-11', 'Jl. Imam Bonjol Kecandran Salatiga', 2017),
('S017.111.00002', 'Ahmad Albar', 'L', 'Semarang', '2018-05-08', 'Jl. Kartini No 9', 2017),
('S017.111.00003', 'Siti Kusbini', 'P', 'Yogyakarta', '2018-05-08', 'Jl. Pandanaran', 2017),
('S017.111.00004', 'Siti Karyanti', 'P', 'Yogyakarta', '0000-00-00', 'Jl. Pandanaran', 2017),
('S017.111.00005', 'Indah Dwi Safitri', 'P', 'Jakarta', '2018-05-07', 'Jl. Imam Bonjol Semarang', 2017),
('S017.111.00006', 'Indah Safitri', 'P', 'Jakarta', '2018-03-07', 'Jl. Semarang', 2017),
('S017.111.00007', 'Muhamad Syafiq', 'L', 'Yogyakarta', '0000-00-00', 'Jl. Pandanaran', 2017),
('S017.111.00008', 'Muhamad Ali', 'L', 'Jakarta', '2018-03-07', 'Jl. Semarang', 2017),
('S017.111.00009', 'Ali Syauqi', 'L', 'Yogyakarta', '0000-00-00', 'Jl. Pandanaran', 2017),
('S017.111.00010', 'Rahmad Abadi', 'L', 'Jakarta', '2018-03-07', 'Jl. Semarang', 2017),
('S017.111.00011', 'Yanto', 'L', 'Yogyakarta', '0000-00-00', 'Jl. Pandanaran', 2017),
('S017.111.00012', 'Indah ', 'P', 'Jakarta', '2018-03-07', 'Jl. Semarang', 2017),
('S017.111.00013', 'Siti ', 'P', 'Yogyakarta', '0000-00-00', 'Jl. Pandanaran', 2017),
('S017.111.00014', ' Safitri', 'P', 'Jakarta', '2018-03-07', 'Jl. Semarang', 2017),
('S017.111.00015', ' Karyanti', 'P', 'Yogyakarta', '0000-00-00', 'Jl. Pandanaran', 2017),
('S017.111.00016', 'Indah Putri', 'P', 'Jakarta', '2018-03-07', 'Jl. Semarang', 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `kd_tugas` varchar(15) NOT NULL,
  `nm_tugas` varchar(30) NOT NULL,
  `nilai_tugas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `kd_tugas`, `nm_tugas`, `nilai_tugas`) VALUES
(13, 'S017.111.00001', 'M001', 90),
(15, 'S017.111.00001', 'M002', 80),
(16, 'S017.111.00002', 'M002', 89),
(17, 'S017.111.00004', 'M002', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulangan`
--

CREATE TABLE `ulangan` (
  `id` int(11) NOT NULL,
  `kd_ulangan` varchar(15) NOT NULL,
  `nm_ulangan` varchar(30) NOT NULL,
  `nilai_ulangan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ulangan`
--

INSERT INTO `ulangan` (`id`, `kd_ulangan`, `nm_ulangan`, `nilai_ulangan`) VALUES
(11, 'S017.111.00001', 'M001', 90),
(13, 'S017.111.00001', 'M002', 90),
(14, 'S017.111.00002', 'M002', 23),
(15, 'S017.111.00004', 'M002', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ulangan`
--
ALTER TABLE `ulangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `ulangan`
--
ALTER TABLE `ulangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
