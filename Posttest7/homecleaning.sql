-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 07.53
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homecleaning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`) VALUES
(1, 'lutfi', 'lutfi', '$2y$10$LAOAdKtHk1fhkgjAxoxSWuB5rIMFKowxwVtggK5JsbosMOwQYUIji'),
(2, 'Atika', 'atika', '$2y$10$ZsJLPj2wqsAOCI6q3B2zC.K6bCuHKsR7QQKUjrtVjeM8l3aEEWc7m');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cleaning`
--

CREATE TABLE `cleaning` (
  `Id_gambar` int(64) NOT NULL,
  `id` int(64) NOT NULL,
  `nama_gambar` varchar(64) NOT NULL,
  `file` varchar(64) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cleaning`
--

INSERT INTO `cleaning` (`Id_gambar`, `id`, `nama_gambar`, `file`, `tanggal`) VALUES
(2, 2, 'logo', 'logo.png', '2022-10-28'),
(5, 5, 'Putri Wahdaniyah Iskandar', 'foto.jpg', '2022-10-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `telpon` varchar(64) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `telpon`, `alamat`, `email`) VALUES
(2, 'ALOHA', '089765432214', 'Damanhuri', 'Lohaa@jnt.com'),
(3, 'ALOHA', '089765432214', 'Damanhuri', 'Lohaa@jnt.com'),
(5, 'Putri Wahdaniyah Iskandar', '089765432214', 'damanhuri', 'putriwahdaniyahiskandar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cleaning`
--
ALTER TABLE `cleaning`
  ADD PRIMARY KEY (`Id_gambar`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cleaning`
--
ALTER TABLE `cleaning`
  MODIFY `Id_gambar` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cleaning`
--
ALTER TABLE `cleaning`
  ADD CONSTRAINT `cleaning_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pendaftar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
