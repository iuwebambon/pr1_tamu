-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2021 pada 15.01
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `no_identitas` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`no_identitas`, `nama`, `alamat`, `pekerjaan`, `agama`, `keperluan`, `jenis_kelamin`, `no_telepon`, `tanggal`) VALUES
('201871080', 'Claudio Andre Thenu', 'Ambon', 'Pelajar', 'Kristen', 'Belajar', 'Laki-laki', '081243559932', '2021-10-29'),
('201971060', 'Marthin Alfreinsco Salakory', 'Ambon', 'Developer', 'Kristen', 'Belajar', 'Laki-laki', '081318812027', '2021-10-15'),
('cxz', 'zcx', 'cz', 'cxz', 'cxz', 'cxz', 'Perempuan', 'cxz', '2021-10-27'),
('ok', 'd', 'd', 'c', 'x', 'c', 'Laki-laki', 'c', '2021-10-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `foto`) VALUES
('IUWebAmbon', 'ADMIN', 'admin', 'admin', 'fotoprofile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`no_identitas`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
