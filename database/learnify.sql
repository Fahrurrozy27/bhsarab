-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2020 pada 13.06
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnify`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(64) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(0, 'admin', '$2y$10$EX0L5MeIQldpkCuTZW.mjujTaj.Yy20IW0GOluecU/c.es.9r6E5.', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` int(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_mapel` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `email`, `nama_guru`, `password`, `nama_mapel`) VALUES
(92093, '34@com.com', 'Ust Assas', '$2y$10$2y.GiucFApAlR1fNiybNy.Cfg8gbD8kIAlRYmAPBT0gB8I5mW6tnq', 'Bahasa Arab 3'),
(1234578, '33@com.com', 'Ust Assasudin', '$2y$10$Jz0osFmWtzldU7qvyAhpWO/A1GVqP1KXdyZbzvCCJsDACT3aTWyGC', 'Bahasa Arab 2'),
(123123123, 'cok@cok.com', 'Rozy', '$2y$10$EQARNSnb9A6rg/xMF7VxserYJTuowQB7y3UPFhRgDq1/eWhX4j8AC', 'Bahasa Arab'),
(2147483647, '2@com.com', 'Ustadz Muhammad Asasuddin', '$2y$10$x5rBKlvzNX.VQTK1TqM/AuzeBqFC5Hivfjksp4u/RR9Wkhl6P6wjy', 'Bahasa Arab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(255) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(128) CHARACTER SET latin1 NOT NULL,
  `nama_mapel` varchar(128) CHARACTER SET latin1 NOT NULL,
  `video` varchar(255) CHARACTER SET latin1 NOT NULL,
  `deskripsi` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `kelas` varchar(128) CHARACTER SET latin1 NOT NULL,
  `nama_bab` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'b'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `nama_guru`, `nama_mapel`, `video`, `deskripsi`, `kelas`, `nama_bab`, `status`) VALUES
(80, 'Ust Assas', 'Bahasa Arab 3', 'Untitled_design2.mp4', 'BELAJAR BAHASA ARAB BAGIAN 3', 'XII', NULL, 'b'),
(81, 'Ust Assasudin', 'Bahasa Arab 2', 'Untitled_design3.mp4', 'BELAJAR MATERI BAHASA ARAB 2', 'XI', NULL, 'b'),
(82, 'Ustadz Muhammad Asasuddin', 'Bahasa Arab', 'https://www.youtube.com/embed/oc4hAdOEcSs', 'ISIM ISYARAH LIL QORIB ??? - Mengenal isim isyarah dalam bentuk jumlah ismiyah\r\n\r\nMenggunakan isim isyarah untuk menunjuk benda mati mudzakkar dekat\r\nMenggunakan Isim Isyarah untuk menunjuk hewan mudzakkar dekat\r\nMenyusun kalimat sempurna dengan isim isyarah\r\nMenguasai (hafal, mengetahui artinya, mampu menulis) kosakata yang ditunjuk isim isyarah', 'X', NULL, 'b'),
(89, 'Ustadz Muhammad Asasuddin', 'Bahasa Arab', 'https://www.youtube.com/embed/sMei5bZu4GU', 'TEST', 'X', NULL, 'b'),
(90, 'Ustadz Muhammad Asasuddin', 'Bahasa Arab', 'https://www.youtube.com/embed/AhnQzpmVYEU', 'anda akan mempelajari tentang materi 1 2 3 4', 'X', 'BAB 1, tentang isim ', 's'),
(91, 'Ustadz Muhammad Asasuddin', 'Bahasa Arab', 'https://www.youtube.com/embed/F4ksbUBtkkc', 'Fail adalah', 'X', 'BAB 2, Tentang Isim ', 'b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `password`, `email`, `image`, `is_active`, `date_created`) VALUES
(47, 'rozy', '$2y$10$bRiwqYw5.b0BOBYOdXOeZuSj/vztHjfN41kWSzNFO4rOLOa/9TUDG', 'rozy@rozy.com', 'default.jpg', 1, 1593062213);

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
