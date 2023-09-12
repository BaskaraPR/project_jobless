-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2023 pada 16.49
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobless`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(255) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `emai_admin` varchar(255) NOT NULL,
  `notelp` int(255) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `joblist`
--

CREATE TABLE `joblist` (
  `id_job` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('available','taken') NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `joblist`
--

INSERT INTO `joblist` (`id_job`, `nama`, `status`, `uploader`, `location`, `revenue`) VALUES
(1, 'Buruh Pabrik', 'available', 'Boss Putih', 'ladang kapas purwodadi', 2000),
(2, 'Make Envelope', 'available', 'post company', 'malang', 20000),
(3, 'Translator', 'available', 'english corp', 'malang', 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobtaken`
--

CREATE TABLE `jobtaken` (
  `id_taken` int(30) NOT NULL,
  `id_job` int(255) NOT NULL,
  `id_calon` int(255) NOT NULL,
  `status` enum('pending','finished') NOT NULL,
  `revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id_user` int(11) NOT NULL,
  `id_job` int(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` int(255) NOT NULL,
  `CV` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id_user`, `id_job`, `nama_user`, `alamat`, `no_telp`, `CV`) VALUES
(0, 0, 'miku hatsune', 'ngawi', 8989898, 0x686f6e6579746f6173742e706e67),
(0, 0, 'ambatukam', 'ngawi', 8989898, 0x50726f66696c2e706e67);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`id_job`);

--
-- Indeks untuk tabel `jobtaken`
--
ALTER TABLE `jobtaken`
  ADD PRIMARY KEY (`id_taken`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `joblist`
--
ALTER TABLE `joblist`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jobtaken`
--
ALTER TABLE `jobtaken`
  MODIFY `id_taken` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
