-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2021 pada 16.48
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rusunawa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama`, `username`, `password`) VALUES
('Administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_kamar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_kamar` (
`gedung` varchar(1)
,`lantai` varchar(5)
,`no_kamar` varchar(5)
,`status` varchar(30)
,`total_biaya` decimal(51,0)
,`total_bayar` decimal(63,0)
,`piutang` decimal(64,0)
,`jml_penghuni` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_pembayaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_pembayaran` (
`id_pembayaran` int(10)
,`id_penghuni` int(5)
,`no_kamar` varchar(10)
,`nama` varchar(200)
,`nim` varchar(50)
,`tgl_bayar` varchar(10)
,`biaya` int(30)
,`bayar` bigint(20)
,`ket` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_penghuni`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_penghuni` (
`id` int(10)
,`no_kamar` varchar(10)
,`nama` varchar(200)
,`nim` varchar(50)
,`id_prodi` int(10)
,`nama_prodi` varchar(100)
,`id_fakultas` int(10)
,`nama_fakultas` varchar(50)
,`tempat_lahir` varchar(100)
,`tgl_lahir` varchar(50)
,`agama` varchar(50)
,`alamat` varchar(200)
,`no` varchar(30)
,`nama_ortu` varchar(200)
,`pekerjaan_ortu` varchar(100)
,`alamat_ortu` varchar(200)
,`no_ortu` varchar(30)
,`tgl_masuk` varchar(10)
,`tgl_keluar` varchar(10)
,`kategori` varchar(20)
,`isi_kamar` int(1)
,`status` varchar(20)
,`biaya` int(30)
,`bayar` decimal(41,0)
,`piutang` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(10) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Fakultas Ekonomika dan Bisnis'),
(2, 'Fakultas Hukum'),
(3, 'Fakultas Ilmu Budaya'),
(4, 'Fakultas Ilmu Sosial dan Ilmu Politik'),
(5, 'Fakultas Kedokteran'),
(6, 'Fakultas Kesehatan Masyarakat'),
(7, 'Fakultas Perikanan dan Ilmu Kelautan'),
(8, 'Fakultas Peternakan dan Pertanian'),
(9, 'Fakultas Sains dan Matematika'),
(10, 'Fakultas Teknik'),
(11, 'Fakultas Psikologi'),
(12, 'Sekolah Vokasi'),
(13, 'Sekolah Pascasarjana'),
(99, 'Politeknik Pekerjaan Umum'),
(999, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `gedung` varchar(1) NOT NULL,
  `nama_gedung` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`gedung`, `nama_gedung`) VALUES
('A', 'Gedung A'),
('B', 'Gedung B'),
('C', 'Gedung C'),
('D', 'Gedung D'),
('E', 'Gedung E'),
('F', 'Gedung F');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `gedung` varchar(2) NOT NULL,
  `lantai` varchar(5) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`gedung`, `lantai`, `harga`) VALUES
('A', 'A2', 500000),
('A', 'A3', 500000),
('A', 'A4', 500000),
('B', 'B1', 1000000),
('B', 'B2', 700000),
('B', 'B3', 700000),
('B', 'B4', 700000),
('C', 'C2', 700000),
('C', 'C2_AC', 1500000),
('C', 'C3', 700000),
('C', 'C4', 700000),
('D', 'D1', 1250000),
('D', 'D2', 700000),
('D', 'D3', 700000),
('D', 'D4', 700000),
('E', 'E1', 1000000),
('E', 'E2', 900000),
('E', 'E3', 800000),
('E', 'E4', 750000),
('E', 'E5', 700000);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `harga_per_kamar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `harga_per_kamar` (
`no_kamar` varchar(5)
,`harga` bigint(20)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `gedung` varchar(1) NOT NULL,
  `lantai` varchar(5) NOT NULL,
  `no_kamar` varchar(5) NOT NULL,
  `id_tipe` int(2) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`gedung`, `lantai`, `no_kamar`, `id_tipe`, `status`) VALUES
('A', 'A2', 'A2.01', 7, 'kosong'),
('A', 'A2', 'A2.02', 7, 'kosong'),
('A', 'A2', 'A2.03', 7, 'kosong'),
('A', 'A2', 'A2.04', 7, 'kosong'),
('A', 'A2', 'A2.05', 7, 'kosong'),
('A', 'A2', 'A2.06', 7, 'kosong'),
('A', 'A2', 'A2.07', 7, 'kosong'),
('A', 'A2', 'A2.08', 7, 'kosong'),
('A', 'A2', 'A2.09', 7, 'kosong'),
('A', 'A2', 'A2.10', 7, 'kosong'),
('A', 'A2', 'A2.11', 7, 'kosong'),
('A', 'A2', 'A2.12', 7, 'kosong'),
('A', 'A2', 'A2.13', 7, 'kosong'),
('A', 'A2', 'A2.14', 7, 'kosong'),
('A', 'A2', 'A2.15', 7, 'kosong'),
('A', 'A2', 'A2.16', 7, 'kosong'),
('A', 'A2', 'A2.17', 7, 'kosong'),
('A', 'A2', 'A2.18', 7, 'kosong'),
('A', 'A2', 'A2.19', 7, 'kosong'),
('A', 'A2', 'A2.20', 7, 'kosong'),
('A', 'A2', 'A2.21', 7, 'kosong'),
('A', 'A2', 'A2.22', 7, 'kosong'),
('A', 'A2', 'A2.23', 7, 'kosong'),
('A', 'A2', 'A2.24', 7, 'kosong'),
('A', 'A2', 'A2.25', 7, 'kosong'),
('A', 'A2', 'A2.26', 7, 'kosong'),
('A', 'A2', 'A2.27', 7, 'kosong'),
('A', 'A2', 'A2.28', 7, 'kosong'),
('A', 'A3', 'A3.01', 7, 'kosong'),
('A', 'A3', 'A3.02', 7, 'kosong'),
('A', 'A3', 'A3.03', 7, 'kosong'),
('A', 'A3', 'A3.04', 7, 'kosong'),
('A', 'A3', 'A3.05', 7, 'kosong'),
('A', 'A3', 'A3.06', 7, 'kosong'),
('A', 'A3', 'A3.07', 7, 'kosong'),
('A', 'A3', 'A3.08', 7, 'kosong'),
('A', 'A3', 'A3.09', 7, 'kosong'),
('A', 'A3', 'A3.10', 7, 'kosong'),
('A', 'A3', 'A3.11', 7, 'kosong'),
('A', 'A3', 'A3.12', 7, 'kosong'),
('A', 'A3', 'A3.13', 7, 'kosong'),
('A', 'A3', 'A3.14', 7, 'kosong'),
('A', 'A3', 'A3.15', 7, 'kosong'),
('A', 'A3', 'A3.16', 7, 'kosong'),
('A', 'A3', 'A3.17', 7, 'kosong'),
('A', 'A3', 'A3.18', 7, 'kosong'),
('A', 'A3', 'A3.19', 7, 'kosong'),
('A', 'A3', 'A3.20', 7, 'kosong'),
('A', 'A3', 'A3.21', 7, 'kosong'),
('A', 'A3', 'A3.22', 7, 'kosong'),
('A', 'A3', 'A3.23', 7, 'kosong'),
('A', 'A3', 'A3.24', 7, 'kosong'),
('A', 'A3', 'A3.25', 7, 'kosong'),
('A', 'A3', 'A3.26', 7, 'kosong'),
('A', 'A3', 'A3.27', 7, 'kosong'),
('A', 'A3', 'A3.28', 7, 'kosong'),
('A', 'A4', 'A4.01', 7, 'kosong'),
('A', 'A4', 'A4.02', 7, 'kosong'),
('A', 'A4', 'A4.03', 7, 'kosong'),
('A', 'A4', 'A4.04', 7, 'kosong'),
('A', 'A4', 'A4.05', 7, 'kosong'),
('A', 'A4', 'A4.06', 7, 'kosong'),
('A', 'A4', 'A4.07', 7, 'kosong'),
('A', 'A4', 'A4.08', 7, 'kosong'),
('A', 'A4', 'A4.09', 7, 'kosong'),
('A', 'A4', 'A4.10', 7, 'kosong'),
('A', 'A4', 'A4.11', 7, 'kosong'),
('A', 'A4', 'A4.12', 7, 'kosong'),
('A', 'A4', 'A4.13', 7, 'kosong'),
('A', 'A4', 'A4.14', 7, 'kosong'),
('A', 'A4', 'A4.15', 7, 'kosong'),
('A', 'A4', 'A4.16', 7, 'kosong'),
('A', 'A4', 'A4.17', 7, 'kosong'),
('A', 'A4', 'A4.18', 7, 'kosong'),
('A', 'A4', 'A4.19', 7, 'kosong'),
('A', 'A4', 'A4.20', 7, 'kosong'),
('A', 'A4', 'A4.21', 7, 'kosong'),
('A', 'A4', 'A4.22', 7, 'kosong'),
('A', 'A4', 'A4.23', 7, 'kosong'),
('A', 'A4', 'A4.24', 7, 'kosong'),
('A', 'A4', 'A4.25', 7, 'kosong'),
('A', 'A4', 'A4.26', 7, 'kosong'),
('A', 'A4', 'A4.27', 7, 'kosong'),
('A', 'A4', 'A4.28', 7, 'kosong'),
('B', 'B2', 'B2.01', 6, 'kosong'),
('B', 'B2', 'B2.02', 6, 'kosong'),
('B', 'B2', 'B2.03', 6, 'kosong'),
('B', 'B2', 'B2.04', 6, 'kosong'),
('B', 'B2', 'B2.05', 6, 'kosong'),
('B', 'B2', 'B2.06', 6, 'kosong'),
('B', 'B2', 'B2.07', 6, 'kosong'),
('B', 'B2', 'B2.08', 6, 'kosong'),
('B', 'B2', 'B2.09', 6, 'kosong'),
('B', 'B2', 'B2.10', 6, 'kosong'),
('B', 'B2', 'B2.11', 6, 'kosong'),
('B', 'B2', 'B2.12', 6, 'kosong'),
('B', 'B2', 'B2.13', 6, 'kosong'),
('B', 'B2', 'B2.14', 6, 'kosong'),
('B', 'B2', 'B2.15', 6, 'kosong'),
('B', 'B2', 'B2.16', 6, 'kosong'),
('B', 'B2', 'B2.17', 6, 'kosong'),
('B', 'B2', 'B2.18', 6, 'kosong'),
('B', 'B2', 'B2.19', 6, 'kosong'),
('B', 'B2', 'B2.20', 6, 'kosong'),
('B', 'B2', 'B2.21', 6, 'kosong'),
('B', 'B2', 'B2.22', 6, 'kosong'),
('B', 'B2', 'B2.23', 6, 'kosong'),
('B', 'B2', 'B2.24', 6, 'kosong'),
('B', 'B2', 'B2.25', 6, 'kosong'),
('B', 'B2', 'B2.26', 6, 'kosong'),
('B', 'B2', 'B2.27', 6, 'kosong'),
('B', 'B2', 'B2.28', 6, 'kosong'),
('B', 'B2', 'B2.29', 6, 'kosong'),
('B', 'B2', 'B2.30', 6, 'kosong'),
('B', 'B2', 'B2.31', 6, 'kosong'),
('B', 'B2', 'B2.32', 6, 'kosong'),
('B', 'B3', 'B3.01', 6, 'kosong'),
('B', 'B3', 'B3.02', 6, 'kosong'),
('B', 'B3', 'B3.03', 6, 'kosong'),
('B', 'B3', 'B3.04', 6, 'kosong'),
('B', 'B3', 'B3.05', 6, 'kosong'),
('B', 'B3', 'B3.06', 6, 'kosong'),
('B', 'B3', 'B3.07', 6, 'kosong'),
('B', 'B3', 'B3.08', 6, 'kosong'),
('B', 'B3', 'B3.09', 6, 'kosong'),
('B', 'B3', 'B3.10', 6, 'kosong'),
('B', 'B3', 'B3.11', 6, 'kosong'),
('B', 'B3', 'B3.12', 6, 'kosong'),
('B', 'B3', 'B3.13', 6, 'kosong'),
('B', 'B3', 'B3.14', 6, 'kosong'),
('B', 'B3', 'B3.15', 6, 'kosong'),
('B', 'B3', 'B3.16', 6, 'kosong'),
('B', 'B3', 'B3.17', 6, 'kosong'),
('B', 'B3', 'B3.18', 6, 'kosong'),
('B', 'B3', 'B3.19', 6, 'kosong'),
('B', 'B3', 'B3.20', 6, 'kosong'),
('B', 'B3', 'B3.21', 6, 'kosong'),
('B', 'B3', 'B3.22', 6, 'kosong'),
('B', 'B3', 'B3.23', 6, 'kosong'),
('B', 'B3', 'B3.24', 6, 'kosong'),
('B', 'B3', 'B3.25', 6, 'kosong'),
('B', 'B3', 'B3.26', 6, 'kosong'),
('B', 'B3', 'B3.27', 6, 'kosong'),
('B', 'B3', 'B3.28', 6, 'kosong'),
('B', 'B3', 'B3.29', 6, 'kosong'),
('B', 'B3', 'B3.30', 6, 'kosong'),
('B', 'B3', 'B3.31', 6, 'kosong'),
('B', 'B3', 'B3.32', 6, 'kosong'),
('B', 'B4', 'B4.01', 6, 'kosong'),
('B', 'B4', 'B4.02', 6, 'kosong'),
('B', 'B4', 'B4.03', 6, 'kosong'),
('B', 'B4', 'B4.04', 6, 'kosong'),
('B', 'B4', 'B4.05', 6, 'kosong'),
('B', 'B4', 'B4.06', 6, 'kosong'),
('B', 'B4', 'B4.07', 6, 'kosong'),
('B', 'B4', 'B4.08', 6, 'kosong'),
('B', 'B4', 'B4.09', 6, 'kosong'),
('B', 'B4', 'B4.10', 6, 'kosong'),
('B', 'B4', 'B4.11', 6, 'kosong'),
('B', 'B4', 'B4.12', 6, 'kosong'),
('B', 'B4', 'B4.13', 6, 'kosong'),
('B', 'B4', 'B4.14', 6, 'kosong'),
('B', 'B4', 'B4.15', 6, 'kosong'),
('B', 'B4', 'B4.16', 6, 'kosong'),
('B', 'B4', 'B4.17', 6, 'kosong'),
('B', 'B4', 'B4.18', 6, 'kosong'),
('B', 'B4', 'B4.19', 6, 'kosong'),
('B', 'B4', 'B4.20', 6, 'kosong'),
('B', 'B4', 'B4.21', 6, 'kosong'),
('B', 'B4', 'B4.22', 6, 'kosong'),
('B', 'B4', 'B4.23', 6, 'kosong'),
('B', 'B4', 'B4.24', 6, 'kosong'),
('B', 'B4', 'B4.25', 6, 'kosong'),
('B', 'B4', 'B4.26', 6, 'kosong'),
('B', 'B4', 'B4.27', 6, 'kosong'),
('B', 'B4', 'B4.28', 6, 'kosong'),
('B', 'B4', 'B4.29', 6, 'kosong'),
('B', 'B4', 'B4.30', 6, 'kosong'),
('B', 'B4', 'B4.31', 6, 'kosong'),
('B', 'B4', 'B4.32', 6, 'kosong'),
('C', 'C1', 'C1.01', 9, 'kosong'),
('C', 'C1', 'C1.02', 9, 'kosong'),
('C', 'C1', 'C1.03', 9, 'kosong'),
('C', 'C1', 'C1.04', 9, 'kosong'),
('C', 'C1', 'C1.05', 9, 'kosong'),
('C', 'C2_AC', 'C2.01', 8, 'kosong'),
('C', 'C2_AC', 'C2.02', 8, 'kosong'),
('C', 'C2_AC', 'C2.03', 8, 'kosong'),
('C', 'C2_AC', 'C2.04', 8, 'kosong'),
('C', 'C2_AC', 'C2.05', 8, 'kosong'),
('C', 'C2_AC', 'C2.06', 8, 'kosong'),
('C', 'C2_AC', 'C2.07', 8, 'kosong'),
('C', 'C2_AC', 'C2.08', 8, 'kosong'),
('C', 'C2', 'C2.09', 6, 'kosong'),
('C', 'C2', 'C2.10', 6, 'kosong'),
('C', 'C2', 'C2.11', 6, 'kosong'),
('C', 'C2', 'C2.12', 6, 'kosong'),
('C', 'C2', 'C2.13', 6, 'kosong'),
('C', 'C2', 'C2.14', 6, 'kosong'),
('C', 'C2', 'C2.15', 6, 'kosong'),
('C', 'C2', 'C2.16', 6, 'kosong'),
('C', 'C2', 'C2.17', 6, 'kosong'),
('C', 'C2', 'C2.18', 6, 'kosong'),
('C', 'C2', 'C2.19', 6, 'kosong'),
('C', 'C2', 'C2.20', 6, 'kosong'),
('C', 'C2', 'C2.21', 6, 'kosong'),
('C', 'C2', 'C2.22', 6, 'kosong'),
('C', 'C2', 'C2.23', 6, 'kosong'),
('C', 'C2', 'C2.24', 6, 'kosong'),
('C', 'C2', 'C2.25', 6, 'kosong'),
('C', 'C2', 'C2.26', 6, 'kosong'),
('C', 'C2', 'C2.27', 6, 'kosong'),
('C', 'C2', 'C2.28', 6, 'kosong'),
('C', 'C2', 'C2.29', 6, 'kosong'),
('C', 'C2', 'C2.30', 6, 'kosong'),
('C', 'C2', 'C2.31', 6, 'kosong'),
('C', 'C2', 'C2.32', 6, 'kosong'),
('C', 'C3', 'C3.01', 6, 'kosong'),
('C', 'C3', 'C3.02', 6, 'kosong'),
('C', 'C3', 'C3.03', 6, 'kosong'),
('C', 'C3', 'C3.04', 6, 'kosong'),
('C', 'C3', 'C3.05', 6, 'kosong'),
('C', 'C3', 'C3.06', 6, 'kosong'),
('C', 'C3', 'C3.07', 6, 'kosong'),
('C', 'C3', 'C3.08', 6, 'kosong'),
('C', 'C3', 'C3.09', 6, 'kosong'),
('C', 'C3', 'C3.10', 6, 'kosong'),
('C', 'C3', 'C3.11', 6, 'kosong'),
('C', 'C3', 'C3.12', 6, 'kosong'),
('C', 'C3', 'C3.13', 6, 'kosong'),
('C', 'C3', 'C3.14', 6, 'kosong'),
('C', 'C3', 'C3.15', 6, 'kosong'),
('C', 'C3', 'C3.16', 6, 'kosong'),
('C', 'C3', 'C3.17', 6, 'kosong'),
('C', 'C3', 'C3.18', 6, 'kosong'),
('C', 'C3', 'C3.19', 6, 'kosong'),
('C', 'C3', 'C3.20', 6, 'kosong'),
('C', 'C3', 'C3.21', 6, 'kosong'),
('C', 'C3', 'C3.22', 6, 'kosong'),
('C', 'C3', 'C3.23', 6, 'kosong'),
('C', 'C3', 'C3.24', 6, 'kosong'),
('C', 'C3', 'C3.25', 6, 'kosong'),
('C', 'C3', 'C3.26', 6, 'kosong'),
('C', 'C3', 'C3.27', 6, 'kosong'),
('C', 'C3', 'C3.28', 6, 'kosong'),
('C', 'C3', 'C3.29', 6, 'kosong'),
('C', 'C3', 'C3.30', 6, 'kosong'),
('C', 'C3', 'C3.31', 6, 'kosong'),
('C', 'C3', 'C3.32', 6, 'kosong'),
('C', 'C4', 'C4.01', 6, 'kosong'),
('C', 'C4', 'C4.02', 6, 'kosong'),
('C', 'C4', 'C4.03', 6, 'kosong'),
('C', 'C4', 'C4.04', 6, 'kosong'),
('C', 'C4', 'C4.05', 6, 'kosong'),
('C', 'C4', 'C4.06', 6, 'kosong'),
('C', 'C4', 'C4.07', 6, 'kosong'),
('C', 'C4', 'C4.08', 6, 'kosong'),
('C', 'C4', 'C4.09', 6, 'kosong'),
('C', 'C4', 'C4.10', 6, 'kosong'),
('C', 'C4', 'C4.11', 6, 'kosong'),
('C', 'C4', 'C4.12', 6, 'kosong'),
('C', 'C4', 'C4.13', 6, 'kosong'),
('C', 'C4', 'C4.14', 6, 'kosong'),
('C', 'C4', 'C4.15', 6, 'kosong'),
('C', 'C4', 'C4.16', 6, 'kosong'),
('C', 'C4', 'C4.17', 6, 'kosong'),
('C', 'C4', 'C4.18', 6, 'kosong'),
('C', 'C4', 'C4.19', 6, 'kosong'),
('C', 'C4', 'C4.20', 6, 'kosong'),
('C', 'C4', 'C4.21', 6, 'kosong'),
('C', 'C4', 'C4.22', 6, 'kosong'),
('C', 'C4', 'C4.23', 6, 'kosong'),
('C', 'C4', 'C4.24', 6, 'kosong'),
('C', 'C4', 'C4.25', 6, 'kosong'),
('C', 'C4', 'C4.26', 6, 'kosong'),
('C', 'C4', 'C4.27', 6, 'kosong'),
('C', 'C4', 'C4.28', 6, 'kosong'),
('C', 'C4', 'C4.29', 6, 'kosong'),
('C', 'C4', 'C4.30', 6, 'kosong'),
('C', 'C4', 'C4.31', 6, 'kosong'),
('C', 'C4', 'C4.32', 6, 'kosong'),
('D', 'D1', 'D1.01', 9, 'kosong'),
('D', 'D1', 'D1.02', 9, 'kosong'),
('D', 'D1', 'D1.03', 9, 'kosong'),
('D', 'D1', 'D1.04', 9, 'kosong'),
('D', 'D1', 'D1.05', 9, 'kosong'),
('D', 'D1', 'D1.06', 9, 'kosong'),
('D', 'D1', 'D1.07', 9, 'kosong'),
('D', 'D2', 'D2.01', 6, 'kosong'),
('D', 'D2', 'D2.02', 6, 'kosong'),
('D', 'D2', 'D2.03', 6, 'kosong'),
('D', 'D2', 'D2.04', 6, 'kosong'),
('D', 'D2', 'D2.05', 6, 'kosong'),
('D', 'D2', 'D2.06', 6, 'kosong'),
('D', 'D2', 'D2.07', 6, 'kosong'),
('D', 'D2', 'D2.08', 6, 'kosong'),
('D', 'D2', 'D2.09', 6, 'kosong'),
('D', 'D2', 'D2.10', 6, 'kosong'),
('D', 'D2', 'D2.11', 6, 'kosong'),
('D', 'D2', 'D2.12', 6, 'kosong'),
('D', 'D2', 'D2.13', 6, 'kosong'),
('D', 'D2', 'D2.14', 6, 'kosong'),
('D', 'D2', 'D2.15', 6, 'kosong'),
('D', 'D2', 'D2.16', 6, 'kosong'),
('D', 'D2', 'D2.17', 6, 'kosong'),
('D', 'D2', 'D2.18', 6, 'kosong'),
('D', 'D2', 'D2.19', 6, 'kosong'),
('D', 'D2', 'D2.20', 6, 'kosong'),
('D', 'D2', 'D2.21', 6, 'kosong'),
('D', 'D2', 'D2.22', 6, 'kosong'),
('D', 'D2', 'D2.23', 6, 'kosong'),
('D', 'D2', 'D2.24', 6, 'kosong'),
('D', 'D2', 'D2.25', 6, 'kosong'),
('D', 'D2', 'D2.26', 6, 'kosong'),
('D', 'D2', 'D2.27', 6, 'kosong'),
('D', 'D2', 'D2.28', 6, 'kosong'),
('D', 'D2', 'D2.29', 6, 'kosong'),
('D', 'D2', 'D2.30', 6, 'kosong'),
('D', 'D2', 'D2.31', 6, 'kosong'),
('D', 'D2', 'D2.32', 6, 'kosong'),
('D', 'D3', 'D3.01', 6, 'kosong'),
('D', 'D3', 'D3.02', 6, 'kosong'),
('D', 'D3', 'D3.03', 6, 'kosong'),
('D', 'D3', 'D3.04', 6, 'kosong'),
('D', 'D3', 'D3.05', 6, 'kosong'),
('D', 'D3', 'D3.06', 6, 'kosong'),
('D', 'D3', 'D3.07', 6, 'kosong'),
('D', 'D3', 'D3.08', 6, 'kosong'),
('D', 'D3', 'D3.09', 6, 'kosong'),
('D', 'D3', 'D3.10', 6, 'kosong'),
('D', 'D3', 'D3.11', 6, 'kosong'),
('D', 'D3', 'D3.12', 6, 'kosong'),
('D', 'D3', 'D3.13', 6, 'kosong'),
('D', 'D3', 'D3.14', 6, 'kosong'),
('D', 'D3', 'D3.15', 6, 'kosong'),
('D', 'D3', 'D3.16', 6, 'kosong'),
('D', 'D3', 'D3.17', 6, 'kosong'),
('D', 'D3', 'D3.18', 6, 'kosong'),
('D', 'D3', 'D3.19', 6, 'kosong'),
('D', 'D3', 'D3.20', 6, 'kosong'),
('D', 'D3', 'D3.21', 6, 'kosong'),
('D', 'D3', 'D3.22', 6, 'kosong'),
('D', 'D3', 'D3.23', 6, 'kosong'),
('D', 'D3', 'D3.24', 6, 'kosong'),
('D', 'D3', 'D3.25', 6, 'kosong'),
('D', 'D3', 'D3.26', 6, 'kosong'),
('D', 'D3', 'D3.27', 6, 'kosong'),
('D', 'D3', 'D3.28', 6, 'kosong'),
('D', 'D3', 'D3.29', 6, 'kosong'),
('D', 'D3', 'D3.30', 6, 'kosong'),
('D', 'D3', 'D3.31', 6, 'kosong'),
('D', 'D3', 'D3.32', 6, 'kosong'),
('D', 'D4', 'D4.01', 6, 'kosong'),
('D', 'D4', 'D4.02', 6, 'kosong'),
('D', 'D4', 'D4.03', 6, 'kosong'),
('D', 'D4', 'D4.04', 6, 'kosong'),
('D', 'D4', 'D4.05', 6, 'kosong'),
('D', 'D4', 'D4.06', 6, 'kosong'),
('D', 'D4', 'D4.07', 6, 'kosong'),
('D', 'D4', 'D4.08', 6, 'kosong'),
('D', 'D4', 'D4.09', 6, 'kosong'),
('D', 'D4', 'D4.10', 6, 'kosong'),
('D', 'D4', 'D4.11', 6, 'kosong'),
('D', 'D4', 'D4.12', 6, 'kosong'),
('D', 'D4', 'D4.13', 6, 'kosong'),
('D', 'D4', 'D4.14', 6, 'kosong'),
('D', 'D4', 'D4.15', 6, 'kosong'),
('D', 'D4', 'D4.16', 6, 'kosong'),
('D', 'D4', 'D4.17', 6, 'kosong'),
('D', 'D4', 'D4.18', 6, 'kosong'),
('D', 'D4', 'D4.19', 6, 'kosong'),
('D', 'D4', 'D4.20', 6, 'kosong'),
('D', 'D4', 'D4.21', 6, 'kosong'),
('D', 'D4', 'D4.22', 6, 'kosong'),
('D', 'D4', 'D4.23', 6, 'kosong'),
('D', 'D4', 'D4.24', 6, 'kosong'),
('D', 'D4', 'D4.25', 6, 'kosong'),
('D', 'D4', 'D4.26', 6, 'kosong'),
('D', 'D4', 'D4.27', 6, 'kosong'),
('D', 'D4', 'D4.28', 6, 'kosong'),
('D', 'D4', 'D4.29', 6, 'kosong'),
('D', 'D4', 'D4.30', 6, 'kosong'),
('D', 'D4', 'D4.31', 6, 'kosong'),
('D', 'D4', 'D4.32', 6, 'kosong'),
('E', 'E1', 'E1.01', 1, 'kosong'),
('E', 'E1', 'E1.02', 1, 'kosong'),
('E', 'E1', 'E1.03', 1, 'kosong'),
('E', 'E1', 'E1.04', 1, 'kosong'),
('E', 'E1', 'E1.05', 1, 'kosong'),
('E', 'E1', 'E1.06', 1, 'kosong'),
('E', 'E1', 'E1.07', 1, 'kosong'),
('E', 'E1', 'E1.08', 1, 'kosong'),
('E', 'E1', 'E1.09', 1, 'kosong'),
('E', 'E1', 'E1.10', 1, 'kosong'),
('E', 'E1', 'E1.11', 1, 'kosong'),
('E', 'E1', 'E1.12', 1, 'kosong'),
('E', 'E1', 'E1.13', 1, 'kosong'),
('E', 'E1', 'E1.14', 1, 'kosong'),
('E', 'E1', 'E1.15', 1, 'kosong'),
('E', 'E1', 'E1.16', 1, 'kosong'),
('E', 'E1', 'E1.17', 1, 'kosong'),
('E', 'E1', 'E1.18', 1, 'kosong'),
('E', 'E1', 'E1.19', 1, 'kosong'),
('E', 'E2', 'E2.01', 2, 'kosong'),
('E', 'E2', 'E2.02', 2, 'kosong'),
('E', 'E2', 'E2.03', 2, 'kosong'),
('E', 'E2', 'E2.04', 2, 'kosong'),
('E', 'E2', 'E2.05', 2, 'kosong'),
('E', 'E2', 'E2.06', 2, 'kosong'),
('E', 'E2', 'E2.07', 2, 'kosong'),
('E', 'E2', 'E2.08', 2, 'kosong'),
('E', 'E2', 'E2.09', 2, 'kosong'),
('E', 'E2', 'E2.10', 2, 'kosong'),
('E', 'E2', 'E2.11', 2, 'kosong'),
('E', 'E2', 'E2.12', 2, 'kosong'),
('E', 'E2', 'E2.13', 2, 'kosong'),
('E', 'E2', 'E2.14', 2, 'kosong'),
('E', 'E2', 'E2.15', 2, 'kosong'),
('E', 'E2', 'E2.16', 2, 'kosong'),
('E', 'E2', 'E2.17', 2, 'kosong'),
('E', 'E2', 'E2.18', 2, 'kosong'),
('E', 'E2', 'E2.20', 2, 'kosong'),
('E', 'E2', 'E2.21', 2, 'kosong'),
('E', 'E2', 'E2.22', 2, 'kosong'),
('E', 'E2', 'E2.23', 2, 'kosong'),
('E', 'E2', 'E2.24', 2, 'kosong'),
('E', 'E3', 'E3.01', 3, 'kosong'),
('E', 'E3', 'E3.02', 3, 'kosong'),
('E', 'E3', 'E3.03', 3, 'kosong'),
('E', 'E3', 'E3.04', 3, 'kosong'),
('E', 'E3', 'E3.05', 3, 'kosong'),
('E', 'E3', 'E3.06', 3, 'kosong'),
('E', 'E3', 'E3.07', 3, 'kosong'),
('E', 'E3', 'E3.08', 3, 'kosong'),
('E', 'E3', 'E3.09', 3, 'kosong'),
('E', 'E3', 'E3.10', 3, 'kosong'),
('E', 'E3', 'E3.11', 3, 'kosong'),
('E', 'E3', 'E3.12', 3, 'kosong'),
('E', 'E3', 'E3.13', 3, 'kosong'),
('E', 'E3', 'E3.14', 3, 'kosong'),
('E', 'E3', 'E3.15', 3, 'kosong'),
('E', 'E3', 'E3.16', 3, 'kosong'),
('E', 'E3', 'E3.17', 3, 'kosong'),
('E', 'E3', 'E3.18', 3, 'kosong'),
('E', 'E3', 'E3.19', 3, 'kosong'),
('E', 'E3', 'E3.20', 3, 'kosong'),
('E', 'E3', 'E3.21', 3, 'kosong'),
('E', 'E3', 'E3.22', 3, 'kosong'),
('E', 'E3', 'E3.23', 3, 'kosong'),
('E', 'E3', 'E3.24', 3, 'kosong'),
('E', 'E4', 'E4.01', 4, 'kosong'),
('E', 'E4', 'E4.02', 4, 'kosong'),
('E', 'E4', 'E4.03', 4, 'kosong'),
('E', 'E4', 'E4.04', 4, 'kosong'),
('E', 'E4', 'E4.05', 4, 'kosong'),
('E', 'E4', 'E4.06', 4, 'kosong'),
('E', 'E4', 'E4.07', 4, 'kosong'),
('E', 'E4', 'E4.08', 4, 'kosong'),
('E', 'E4', 'E4.09', 4, 'kosong'),
('E', 'E4', 'E4.10', 4, 'kosong'),
('E', 'E4', 'E4.11', 4, 'kosong'),
('E', 'E4', 'E4.12', 4, 'kosong'),
('E', 'E4', 'E4.13', 4, 'kosong'),
('E', 'E4', 'E4.14', 4, 'kosong'),
('E', 'E4', 'E4.15', 4, 'kosong'),
('E', 'E4', 'E4.16', 4, 'kosong'),
('E', 'E4', 'E4.17', 4, 'kosong'),
('E', 'E4', 'E4.18', 4, 'kosong'),
('E', 'E4', 'E4.19', 4, 'kosong'),
('E', 'E4', 'E4.20', 4, 'kosong'),
('E', 'E4', 'E4.21', 4, 'kosong'),
('E', 'E4', 'E4.22', 4, 'kosong'),
('E', 'E4', 'E4.23', 4, 'kosong'),
('E', 'E4', 'E4.24', 4, 'kosong'),
('E', 'E5', 'E5.01', 5, 'kosong'),
('E', 'E5', 'E5.02', 5, 'kosong'),
('E', 'E5', 'E5.03', 5, 'kosong'),
('E', 'E5', 'E5.04', 5, 'kosong'),
('E', 'E5', 'E5.05', 5, 'kosong'),
('E', 'E5', 'E5.06', 5, 'kosong'),
('E', 'E5', 'E5.07', 5, 'kosong'),
('E', 'E5', 'E5.08', 5, 'kosong'),
('E', 'E5', 'E5.09', 5, 'kosong'),
('E', 'E5', 'E5.10', 5, 'kosong'),
('E', 'E5', 'E5.11', 5, 'kosong'),
('E', 'E5', 'E5.12', 5, 'kosong'),
('E', 'E5', 'E5.13', 5, 'kosong'),
('E', 'E5', 'E5.14', 5, 'kosong'),
('E', 'E5', 'E5.15', 5, 'kosong'),
('E', 'E5', 'E5.16', 5, 'kosong'),
('E', 'E5', 'E5.17', 5, 'kosong'),
('E', 'E5', 'E5.18', 5, 'kosong'),
('E', 'E5', 'E5.19', 5, 'kosong'),
('E', 'E5', 'E5.20', 5, 'kosong'),
('E', 'E5', 'E5.21', 5, 'kosong'),
('E', 'E5', 'E5.22', 5, 'kosong'),
('E', 'E5', 'E5.23', 5, 'kosong'),
('E', 'E5', 'E5.24', 5, 'kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id_pembayaran` int(10) NOT NULL,
  `id_penghuni` int(5) NOT NULL,
  `nim2` varchar(50) NOT NULL,
  `tgl_bayar` varchar(10) NOT NULL,
  `bayar` bigint(20) NOT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni`
--

CREATE TABLE `penghuni` (
  `id` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_kamar` varchar(10) DEFAULT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `id_fakultas` int(10) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no` varchar(30) NOT NULL,
  `nama_ortu` varchar(200) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL,
  `alamat_ortu` varchar(200) NOT NULL,
  `no_ortu` varchar(30) NOT NULL,
  `tgl_masuk` varchar(10) NOT NULL,
  `tgl_keluar` varchar(10) NOT NULL,
  `masa_huni` int(10) DEFAULT NULL,
  `kategori` varchar(20) NOT NULL,
  `biaya` int(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `isi_kamar` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_fakultas` int(2) NOT NULL,
  `id_prodi` int(5) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_fakultas`, `id_prodi`, `nama_prodi`) VALUES
(1, 101, 'S1 Manajemen'),
(1, 102, 'S1 Akuntansi'),
(1, 103, 'S1 Ekonomi'),
(1, 104, 'S1 Ekonomi Islam'),
(1, 105, 'S1 Kelas Internasional'),
(2, 201, 'S1 Hukum'),
(3, 301, 'S1 Sastra Inggris'),
(3, 302, 'S1 Sastra Indonesia'),
(3, 303, 'S1 Sejarah'),
(3, 304, 'S1 Ilmu Perpustakaan'),
(3, 305, 'S1 Bahasa dan Kebudayaan Jepang'),
(3, 306, 'S1 Antropologi Sosial'),
(4, 401, 'S1 Administrasi Bisnis'),
(4, 402, 'S1 Administrasi Publik'),
(4, 403, 'S1 Hubungan Internasional'),
(4, 404, 'S1 Ilmu Komunikasi'),
(4, 405, 'S1 Ilmu Pemerintahan'),
(5, 501, 'S1 Kedokteran'),
(5, 502, 'S1 Kedokteran Gigi'),
(5, 503, 'S1 Gizi'),
(5, 504, 'S1 Keperawatan'),
(6, 601, 'S1 Kesehatan Masyarakat'),
(7, 701, 'S1 Akuakultur'),
(7, 702, 'S1 Manajemen Sumber Daya Perairan'),
(7, 703, 'S1 Perikanan Tangkap'),
(7, 704, 'S1 Teknologi Hasil Perikanan'),
(7, 705, 'S1 Oseanografi'),
(7, 706, 'S1 Ilmu Kelautan'),
(8, 801, 'S1 Peternakan'),
(8, 802, 'S1 Agribisnis'),
(8, 803, 'S1 Agroekoteknologi'),
(8, 804, 'S1 Teknologi Pangan'),
(9, 901, 'S1 Matematika'),
(9, 902, 'S1 Kimia'),
(9, 903, 'S1 Fisika'),
(9, 904, 'S1 Biologi'),
(9, 905, 'S1 Statistika'),
(9, 906, 'S1 Informatika'),
(9, 907, 'S1 Bioteknologi'),
(10, 1001, 'S1 Teknik Arsitektur'),
(10, 1002, 'S1 Teknik Komputer'),
(10, 1003, 'S1 Teknik Perencanaan Wilayah dan Kota'),
(10, 1004, 'S1 Teknik Elektro'),
(10, 1005, 'S1 Teknik Geodesi'),
(10, 1006, 'S1 Teknik Geologi'),
(10, 1007, 'S1 Teknik Industri'),
(10, 1008, 'S1 Teknik Kimia'),
(10, 1009, 'S1 Teknik Lingkungan'),
(10, 1010, 'S1 Teknik Mesin'),
(10, 1011, 'S1 Teknik Perkapalan'),
(10, 1012, 'S1 Teknik Sipil'),
(11, 1101, 'S1 Psikologi'),
(12, 1201, 'D4 Teknologi Rekayasa Kimia Industri'),
(12, 1202, 'D4 Teknologi Rekayasa Otomasi'),
(12, 1203, 'D4 Rekayasa Perancangan Mekanik'),
(12, 1204, 'D4 Teknologi Rekayasa Konstruksi Perkapalan'),
(12, 1205, 'D4 Teknik Listrik Industri'),
(12, 1206, 'D3 Teknologi Kimia'),
(12, 1207, 'D3 Teknologi Elektronika'),
(12, 1208, 'D3 Teknologi Mesin'),
(12, 1209, 'D3 Teknologi Perancangan dan Konstruksi Kapal'),
(12, 1210, 'D3 Teknologi Instrumentasi'),
(12, 1211, 'D4 Perencanaan Tata Ruang dan Pertanahan'),
(12, 1212, 'D4 Teknik Infrastruktur Sipil dan Perancangan Arsitektur'),
(12, 1213, 'D3 Teknologi Sipil'),
(12, 1214, 'D3 Perencanaan Tata Ruang Wilayah dan Kota'),
(12, 1215, 'D3 Gambar Arsitektur'),
(12, 1216, 'D3 Administrasi Pertanahan'),
(12, 1217, 'D4 Akuntansi Perpajakan'),
(12, 1218, 'D4 Manajemen dan Administrasi Logistik'),
(12, 1219, 'D3 Manajemen'),
(12, 1220, 'D3 Administrasi Pajak'),
(12, 1221, 'D3 Akuntansi'),
(12, 1222, 'D3 Usaha Budidaya Ternak'),
(12, 1223, 'D3 Manajemen Pemasaran'),
(12, 1224, 'D3 Keuangan Publik'),
(12, 1225, 'D3 Hubungan Masyarakat'),
(12, 1226, 'D3 Administrasi Perkantoran'),
(12, 1227, 'D4 Bahasa Asing dan Terapan'),
(12, 1228, 'D4 Informasi dan Humas'),
(12, 1229, 'D3 Perpustakaan dan Informasi'),
(12, 1230, 'D3 Kearsipan'),
(12, 1231, 'D3 Bahasa Inggris'),
(12, 1232, 'D3 Bahasa Jepang'),
(13, 1301, 'Doktor Ilmu Lingkungan'),
(13, 1302, 'Magister Ilmu Lingkungan'),
(13, 1303, 'Magister Epidemiologi'),
(13, 1304, 'Magister Sistem Informasi'),
(13, 1305, 'Magister Energi'),
(99, 9901, 'Teknik Konstruksi Bangunan Air [PPU]'),
(99, 9902, 'Teknik Konstruksi Jalan dan Jembatan [PPU]'),
(99, 9903, 'Teknik Konstruksi Bangunan Gedung [PPU]'),
(9999, 9999, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int(2) NOT NULL,
  `tipe_kamar` varchar(10) NOT NULL,
  `harga` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `tipe_kamar`, `harga`) VALUES
(1, 'Deluxe 1', 1000000),
(2, 'Deluxe 2', 900000),
(3, 'Deluxe 3', 800000),
(4, 'Deluxe 4', 750000),
(5, 'Deluxe 5A', 700000),
(6, 'Deluxe 5B', 700000),
(7, 'Standard', 500000),
(8, 'VIP AC', 1500000),
(9, 'VIP Non AC', 1250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_kamar`
--
DROP TABLE IF EXISTS `detail_kamar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_kamar`  AS SELECT `kamar`.`gedung` AS `gedung`, `kamar`.`lantai` AS `lantai`, `kamar`.`no_kamar` AS `no_kamar`, `kamar`.`status` AS `status`, sum(`keuangan_penghuni`.`biaya`) AS `total_biaya`, sum(`keuangan_penghuni`.`bayar`) AS `total_bayar`, coalesce(sum(`keuangan_penghuni`.`biaya`),0) - coalesce(sum(`keuangan_penghuni`.`bayar`),0) AS `piutang`, count(`keuangan_penghuni`.`id`) AS `jml_penghuni` FROM (`kamar` left join (select `penghuni`.`id` AS `id`,`penghuni`.`no_kamar` AS `no_kamar`,`penghuni`.`biaya` AS `biaya`,sum(`keuangan`.`bayar`) AS `bayar` from (`penghuni` left join `keuangan` on(`keuangan`.`id_penghuni` = `penghuni`.`id`)) where `penghuni`.`status` = 'Penghuni' group by `penghuni`.`id`) `keuangan_penghuni` on(`kamar`.`no_kamar` = `keuangan_penghuni`.`no_kamar`)) GROUP BY `kamar`.`no_kamar` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_pembayaran`
--
DROP TABLE IF EXISTS `detail_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_pembayaran`  AS SELECT `keuangan`.`id_pembayaran` AS `id_pembayaran`, `keuangan`.`id_penghuni` AS `id_penghuni`, `penghuni`.`no_kamar` AS `no_kamar`, `penghuni`.`nama` AS `nama`, `penghuni`.`nim` AS `nim`, `keuangan`.`tgl_bayar` AS `tgl_bayar`, `penghuni`.`biaya` AS `biaya`, `keuangan`.`bayar` AS `bayar`, `keuangan`.`ket` AS `ket` FROM (`penghuni` join `keuangan` on(`penghuni`.`id` = `keuangan`.`id_penghuni`)) ORDER BY str_to_date(`keuangan`.`tgl_bayar`,'%d-%m-%Y') DESC, `keuangan`.`id_pembayaran` DESC ;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_penghuni`
--
DROP TABLE IF EXISTS `detail_penghuni`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_penghuni`  AS SELECT `penghuni`.`id` AS `id`, `penghuni`.`no_kamar` AS `no_kamar`, `penghuni`.`nama` AS `nama`, `penghuni`.`nim` AS `nim`, `penghuni`.`id_prodi` AS `id_prodi`, `prodi`.`nama_prodi` AS `nama_prodi`, `penghuni`.`id_fakultas` AS `id_fakultas`, `fakultas`.`nama_fakultas` AS `nama_fakultas`, `penghuni`.`tempat_lahir` AS `tempat_lahir`, `penghuni`.`tgl_lahir` AS `tgl_lahir`, `penghuni`.`agama` AS `agama`, `penghuni`.`alamat` AS `alamat`, `penghuni`.`no` AS `no`, `penghuni`.`nama_ortu` AS `nama_ortu`, `penghuni`.`pekerjaan_ortu` AS `pekerjaan_ortu`, `penghuni`.`alamat_ortu` AS `alamat_ortu`, `penghuni`.`no_ortu` AS `no_ortu`, `penghuni`.`tgl_masuk` AS `tgl_masuk`, `penghuni`.`tgl_keluar` AS `tgl_keluar`, `penghuni`.`kategori` AS `kategori`, `penghuni`.`isi_kamar` AS `isi_kamar`, `penghuni`.`status` AS `status`, `penghuni`.`biaya` AS `biaya`, sum(`keuangan`.`bayar`) AS `bayar`, `penghuni`.`biaya`- coalesce(sum(`keuangan`.`bayar`),0) AS `piutang` FROM (((`penghuni` join `prodi` on(`penghuni`.`id_prodi` = `prodi`.`id_prodi`)) join `fakultas` on(`penghuni`.`id_fakultas` = `fakultas`.`id_fakultas`)) left join `keuangan` on(`penghuni`.`id` = `keuangan`.`id_penghuni`)) GROUP BY `penghuni`.`id` ORDER BY `penghuni`.`no_kamar` ASC ;

-- --------------------------------------------------------

--
-- Struktur untuk view `harga_per_kamar`
--
DROP TABLE IF EXISTS `harga_per_kamar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_per_kamar`  AS SELECT `k`.`no_kamar` AS `no_kamar`, `h`.`harga` AS `harga` FROM (`kamar` `k` join `harga` `h` on(`k`.`lantai` = `h`.`lantai`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`gedung`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`lantai`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`),
  ADD KEY `fk_gedung` (`gedung`),
  ADD KEY `fk_tipe` (`id_tipe`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_pembayaran` (`id_penghuni`);

--
-- Indeks untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=550;

--
-- AUTO_INCREMENT untuk tabel `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `fk_gedung` FOREIGN KEY (`gedung`) REFERENCES `gedung` (`gedung`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tipe` FOREIGN KEY (`id_tipe`) REFERENCES `tipe` (`id_tipe`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `fk_pembayaran` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Event
--
CREATE DEFINER=`root`@`localhost` EVENT `event cek status harian` ON SCHEDULE EVERY 1 DAY STARTS '2020-02-23 00:00:00' ENDS '2030-02-22 00:00:00' ON COMPLETION PRESERVE ENABLE DO BEGIN

UPDATE kamar AS a, penghuni AS b
SET a.status = 
(
	CASE 
        WHEN a.status = 'terisi2' THEN 'terisi1'
        WHEN a.status = 'terisi1' THEN 'kosong'
    	WHEN a.status = 'sendiri' THEN 'kosong'
    END
),
b.status = 'Eks-Penghuni'
WHERE (STR_TO_DATE(b.tgl_keluar, '%d-%m-%Y') <= CURDATE()) AND (a.no_kamar=b.no_kamar)  AND (b.status='Penghuni');

UPDATE kamar AS a, detail_kamar as c
SET a.status = 'kosong'
WHERE a.no_kamar=c.no_kamar AND c.status!='kosong' AND c.jml_penghuni=0;

END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
