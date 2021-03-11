-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2021 pada 05.14
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi_laporan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nik`, `nama`, `isi_laporan`, `gambar`, `tgl_pengaduan`, `status`) VALUES
(73, '908', 'Abdul Majid Iskandar', 'assalamualikum wr wb\r\ndisini saya akan memebrikan laporan tentang penebangan liar yang marak di kp bolang, karena ditakutkan akan  menngganggu ekosistrm dan mengganggu keberlangsungan mahkhluk hidup dan bisa mngakibatkan longsor dikemudian hari', 'gambar/20022021094324monsters-cute-alien-friendly-social-media-doodle-vector-line-art-monster-set-objects-symbols-theme-97777241.jpg', '2021-02-20', 'selesai'),
(85, '908', 'Abdul Majid Iskandar', 'assalamualaikum wr wb\r\ndisni saya ingin melkukan pengaduan prihal jalan yang rusak di kp.bolang, padahal jalan tersebut merupakan jalan utama dan juga akses masyarakat ntuk melakukan berbagai kegiatan ', 'gambar/27022021035003jln-nasional-pandeglang.jpg', '2021-02-27', 'selesai'),
(86, '8337254', 'Abdul Majid Iskandar', 'jalan berlubang di sekitaran desa', 'gambar/0103202117232245.-contoh-mind-mapping-1-537x445.jpg', '2021-03-01', 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telepon`, `level`) VALUES
(1, 'admin', 'admin', 'admin', '2334243', 'admin'),
(2, 'petugas', 'petugas', 'petugas', '23234', 'petugas'),
(17, 'Obi Suryana', 'surya', 'obi', '0886733082', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggapan` text NOT NULL,
  `tgl_tanggapan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `id_petugas`, `tanggapan`, `tgl_tanggapan`) VALUES
(2, 72, 13, 'terimaksih atas pengaduan anda', '2021-02-20'),
(3, 73, 13, 'waalaikumsalam sebelumnya terimakasih abdul majid atas laporan yang telah anda sampaikanuntuk kelanjutannya nanti pihak desa akan meninjau ke lokasi', '2021-02-20'),
(7, 85, 1, 'terima kasih atas pengaduan yang telah anda kirimkan\r\nkami akan menindak lanjuti pengaduan anda', '2021-03-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `telp` int(13) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `username`, `password`, `telp`, `foto`, `alamat`) VALUES
(13, 908, 'Abdul Majid Iskandar', 'majid', '123', 123, 'gambar/user.png', ''),
(15, 230302, 'A Majid', 'majid', 'majid', 2147483647, 'gambar/user.png', ''),
(17, 888272, 'Abdul Majid Iskandar', 'abdul', '123', 83325462, 'gambar/user.png', ''),
(18, 678632, 'Abdul Majid Iskandar', 'abdul', '12345', 2147483647, 'gambar/user.png', ''),
(19, 8337254, 'Abdul Majid Iskandar', 'majid', '12345', 8363527, 'gambar/user.png', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
