-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2021 pada 18.42
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fenestram`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_jenis`
--

CREATE TABLE `anggota_jenis` (
  `id_jenis_anggota` int(11) NOT NULL,
  `jenis_anggota` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `anggota_jenis`
--

INSERT INTO `anggota_jenis` (`id_jenis_anggota`, `jenis_anggota`) VALUES
(1, 'Pelajar'),
(2, 'Mahasiswa'),
(3, 'Umum'),
(4, 'Peneliti'),
(5, 'Karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_user`
--

CREATE TABLE `catatan_user` (
  `id_catatan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `jadwal_baca` date DEFAULT NULL,
  `judul_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catatan_user`
--

INSERT INTO `catatan_user` (`id_catatan`, `id_user`, `tanggal`, `jadwal_baca`, `judul_buku`) VALUES
(15, 6, '2021-06-15 13:13:53', '0000-00-00', 'Matahari'),
(16, 2, '2021-06-15 16:17:59', '0000-00-00', 'Bulan'),
(18, 2, '2021-06-15 16:40:36', '2021-06-24', 'Matahari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gender`
--

CREATE TABLE `gender` (
  `id_gender` int(11) NOT NULL,
  `gender` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `gender`
--

INSERT INTO `gender` (`id_gender`, `gender`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobi`
--

CREATE TABLE `hobi` (
  `id_hobi` int(11) NOT NULL,
  `hobi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `hobi`
--

INSERT INTO `hobi` (`id_hobi`, `hobi`) VALUES
(1, 'Membaca'),
(2, 'Menyanyi'),
(3, 'Menonton Film'),
(4, 'Menulis'),
(5, 'Menari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Kediri'),
(2, 'Jember'),
(3, 'Blitar'),
(4, 'Tulungagung'),
(5, 'Jakarta'),
(6, 'Trenggalek'),
(7, 'Jombang'),
(8, 'Pasuruan'),
(9, 'Banyuwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(1, 'Mahasiswa'),
(2, 'Pelajar'),
(3, 'Pegawai Swasta'),
(4, 'Pegawai Negeri'),
(5, 'Wiraswasta'),
(6, 'Guru'),
(7, 'Dosen'),
(8, 'Peneliti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(255) NOT NULL,
  `nomor_identitas` bigint(255) DEFAULT NULL,
  `nama_panggilan` varchar(60) DEFAULT NULL,
  `id_kota` int(5) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_hp` bigint(12) DEFAULT NULL,
  `id_hobi` varchar(10) DEFAULT NULL,
  `id_jenis_kelamin` int(2) NOT NULL,
  `id_jenis_anggota` int(2) NOT NULL,
  `id_status_perkawinan` int(2) DEFAULT NULL,
  `id_pekerjaan` int(2) NOT NULL,
  `alamat_tinggal` varchar(60) NOT NULL,
  `id_kota_tinggal` int(5) NOT NULL,
  `id_provinsi_tinggal` int(5) NOT NULL,
  `nama_institusi` varchar(60) DEFAULT NULL,
  `alamat_institusi` varchar(255) DEFAULT NULL,
  `id_kota_institusi` int(5) DEFAULT NULL,
  `id_provinsi_institusi` int(5) DEFAULT NULL,
  `kelas` int(10) DEFAULT NULL,
  `jurusan` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `nomor_identitas`, `nama_panggilan`, `id_kota`, `tanggal_lahir`, `nomor_hp`, `id_hobi`, `id_jenis_kelamin`, `id_jenis_anggota`, `id_status_perkawinan`, `id_pekerjaan`, `alamat_tinggal`, `id_kota_tinggal`, `id_provinsi_tinggal`, `nama_institusi`, `alamat_institusi`, `id_kota_institusi`, `id_provinsi_institusi`, `kelas`, `jurusan`) VALUES
(15, 192410103000, 'Ibnu', 3, '2020-06-14', 85122123456, '1', 1, 2, 0, 1, 'Jalan Gurame', 3, 1, 'Univ Jember', 'Jalan Kalimantan', 2, 1, 1, 'SI'),
(16, 192410103000, 'Fitri', 3, '1999-01-21', 85122123456, '1', 2, 3, 2, 5, 'Jalan Bali', 3, 1, 'Blitar', 'Jalan Kalimantan', 2, 1, 1, 'SI'),
(17, 55555, 'Panggilan', 3, '2021-06-15', 12345, '1,4,5', 2, 2, 2, 1, 'DDD', 2, 5, 'Univ Jember', 'FFF', 4, 4, 56, '12'),
(18, 55555, 'Panggilan', 3, '2021-06-15', 12345, '1,4,5', 2, 2, 2, 1, 'DDD', 2, 5, 'Univ Jember', 'FFF', 4, 4, 56, '12'),
(19, 55555, 'Panggilan', 3, '2021-06-15', 12345, '1,4,5', 2, 2, 2, 1, 'DDD', 2, 5, 'Univ Jember', 'FFF', 4, 4, 56, '12'),
(20, 55555, 'Panggilan', 3, '2021-06-15', 12345, '1,4,5', 2, 2, 2, 1, 'DDD', 2, 5, 'Univ Jember', 'FFF', 4, 4, 56, '12'),
(21, 5555666777, 'Panggilanaa', 3, '2021-06-15', 12345, '1,4,5', 2, 2, 2, 1, 'DDD', 2, 5, 'Univ Jember', 'FFF', 4, 4, 56, '12'),
(22, 1111, 'aaaaa', 5, '2021-05-30', 86578792, '1,3', 1, 2, 1, 1, 'jj', 2, 4, '', '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Jawa Timur'),
(2, 'Jawa Tengah'),
(3, 'Jawa Barat'),
(4, 'DKI Jakarta'),
(5, 'Daerah Istimewa Yogyakarta'),
(6, 'Banten'),
(7, 'Sumatra Utara'),
(8, 'Sumatra Barat'),
(9, 'Riau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_kawin`
--

CREATE TABLE `status_kawin` (
  `id_kawin` int(11) NOT NULL,
  `status_perkawinan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `status_kawin`
--

INSERT INTO `status_kawin` (`id_kawin`, `status_perkawinan`) VALUES
(1, 'Belum Menikah'),
(2, 'Menikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_profil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `id_profil`) VALUES
(1, 'firra.andriani22@gmaill.com', '1234', 'Firra Andriani', NULL),
(2, 'nana.wijayanto@gmail.com', '123', 'Nana Wijayanto', 22),
(3, 'penggemarpb40@gmail.com', '1234', 'Ibnu Qomaril Huda', 21),
(4, 'anung.Firdauzy@gmail.com', '123', 'Anung Firdauzy', NULL),
(5, 'fitria.anggraeni@gmail.com', '1234', 'Fitria Anggraeni', 16),
(6, 'test@gmail.com', '1234', 'test', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota_jenis`
--
ALTER TABLE `anggota_jenis`
  ADD PRIMARY KEY (`id_jenis_anggota`);

--
-- Indeks untuk tabel `catatan_user`
--
ALTER TABLE `catatan_user`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indeks untuk tabel `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`id_hobi`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `status_kawin`
--
ALTER TABLE `status_kawin`
  ADD PRIMARY KEY (`id_kawin`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota_jenis`
--
ALTER TABLE `anggota_jenis`
  MODIFY `id_jenis_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `catatan_user`
--
ALTER TABLE `catatan_user`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `gender`
--
ALTER TABLE `gender`
  MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `hobi`
--
ALTER TABLE `hobi`
  MODIFY `id_hobi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `status_kawin`
--
ALTER TABLE `status_kawin`
  MODIFY `id_kawin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catatan_user`
--
ALTER TABLE `catatan_user`
  ADD CONSTRAINT `catatan_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
