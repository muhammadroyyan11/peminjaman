-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2024 pada 11.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktifitas_pinjam`
--

CREATE TABLE `aktifitas_pinjam` (
  `id` int(11) NOT NULL,
  `kd_pjm` varchar(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `kd_brg` varchar(5) NOT NULL,
  `tgl_pjm` date NOT NULL,
  `estimate_kmbl` date NOT NULL,
  `tgl_kmbl` date NOT NULL,
  `ptgs_pjm` varchar(30) NOT NULL,
  `ptg_kmbl` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktifitas_pinjam`
--

INSERT INTO `aktifitas_pinjam` (`id`, `kd_pjm`, `nip`, `kd_brg`, `tgl_pjm`, `estimate_kmbl`, `tgl_kmbl`, `ptgs_pjm`, `ptg_kmbl`, `status`) VALUES
(74, '9131', '54321', '3037', '2023-03-28', '2023-04-04', '0000-00-00', 'admin', '-', 'Belum Kembali'),
(75, '9131', '54321', '9743', '2023-03-28', '2023-04-04', '0000-00-00', 'admin', '-', 'Belum Kembali'),
(76, '9131', '54321', '8985', '2023-03-28', '2023-04-04', '0000-00-00', 'admin', '-', 'Belum Kembali'),
(77, '5482', '339999', '3621', '2023-03-28', '2023-04-04', '2023-03-28', 'admin', '', 'Kembali'),
(78, '3735', '66672', '8542', '2023-03-30', '2023-04-03', '0000-00-00', 'admin', '-', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_admin`
--

CREATE TABLE `akun_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `level_user` varchar(7) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_admin`
--

INSERT INTO `akun_admin` (`id`, `username`, `level_user`, `password`, `token`, `status`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'petugas', 'petugas', '827ccb0eea8a706c4c34a16891f84e7b', '64254db8396e404d9223914a0bd355d2', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `pangkat_golongan` varchar(30) NOT NULL,
  `seksi` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nip`, `nama`, `jabatan`, `pangkat_golongan`, `seksi`, `tgl_lahir`, `foto`) VALUES
(4, '11001', 'Marwan Sunar', 'Kelistrikan', '4/a', 'Sekretariat', '1980-08-09', 'drow.jpg'),
(12, '66672', 'Marni Styani', 'Keuangan', '4/d', 'Sekretariat', '1992-09-17', 'drow1.jpg'),
(14, '334421', 'Maryanto S', 'Keuangan', '4/a', 'Sekretariat', '1991-05-19', 'A11201610010.jpg'),
(15, '339999', 'Dody Setiawan', 'Kepala EBT', '4/a', 'Sekretariat', '1998-12-12', 'A11_2016_099361.jpg'),
(16, '54321', 'Faiz', 'Staff Umum', 'VB', 'Administrasi Umum', '1995-07-28', 'avatar51.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `qr_code` varchar(100) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `qr_code`, `nama_barang`, `stok`, `kategori`, `tgl_masuk`, `spesifikasi`, `status`, `foto`) VALUES
(38, 'BR000001', 'BR00008 - barang Coba 2.png', 'Kabel Roll', 0, 'elektronik', '2023-03-28', 'Kabel Roll 7 Meter', 0, 'kabel.jpg'),
(39, 'BR000002', 'BR00008 - barang Coba 2.png', 'Laptop', 0, 'elektronik', '2023-03-28', 'Laptop Lenovo Core i7', 1, 'Lneovo.jpg'),
(40, 'BR000003', 'BR00008 - barang Coba 2.png', 'LCD', 0, 'elektronik', '2023-03-28', 'LCD Epson EB-X500', 0, 'EPSON-EB-X500-3.jpeg'),
(41, 'BR000004', 'BR00008 - barang Coba 2.png', 'Sound Portable', 0, 'elektronik', '2023-03-28', 'sound Portable BoB Audio', 1, 'BOB_AUDIO.jpg'),
(42, 'BR000005', 'BR00008 - barang Coba 2.png', 'Sound System', 0, 'elektronik', '2023-03-28', 'Sound System Active Huper', 0, 'sound_system_huper.jpg'),
(43, 'BR000006', 'BR00008 - barang Coba 2.png', 'Kursi Lesehan', 0, 'lain-lain', '2023-03-28', 'Kursi Sandaran Warna Biru', 0, 'kursi_lesehan_biru.png'),
(44, 'BR00007', 'BR00008 - barang Coba 2.png', 'barang Coba', 22, 'elektronik', '2024-01-17', 'asd', 0, 'barang-240118-BR000077.jpg'),
(45, 'BR00008', 'BR00008 - barang Coba 2.png', 'barang Coba 2', 22, 'elektronik', '2024-01-09', 'asasdasd', 0, 'barang-240119-BR000081.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `tgl`, `nama`, `email`, `isi`) VALUES
(5, '2023-03-28', 'Fais', 'staff@gmail.com', 'Pinjam LCD Gaes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali_brg`
--

CREATE TABLE `kembali_brg` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `kode_brg` varchar(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `estimasi` date NOT NULL,
  `wkt_kembali` date NOT NULL,
  `petugas_kmbl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam_barang`
--

CREATE TABLE `pinjam_barang` (
  `id` int(11) NOT NULL,
  `kd_pinjam` varchar(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `seksi` varchar(20) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jml_pinjam` int(3) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `petugas` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam_barang`
--

INSERT INTO `pinjam_barang` (`id`, `kd_pinjam`, `nip`, `nama`, `jabatan`, `seksi`, `kode_barang`, `nama_barang`, `jml_pinjam`, `tgl_pinjam`, `tgl_kembali`, `petugas`, `status`) VALUES
(2, '9131', '54321', 'Faiz', 'Staff Umum', 'Administrasi Umum', '3037', 'Kabel Roll', 1, '2023-03-28', '2023-04-04', 'admin', 'Belum Kembali'),
(3, '9131', '54321', 'Faiz', 'Staff Umum', 'Administrasi Umum', '9743', 'Kursi Lesehan', 5, '2023-03-28', '2023-04-04', 'admin', 'Belum Kembali'),
(4, '9131', '54321', 'Faiz', 'Staff Umum', 'Administrasi Umum', '8985', 'LCD', 1, '2023-03-28', '2023-04-04', 'admin', 'Belum Kembali'),
(6, '3735', '66672', 'Marni Styani', 'Keuangan', 'Sekretariat', '8542', 'Sound System', 1, '2023-03-30', '2023-04-03', 'admin', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Administrator', 'admin', 'admin@admin.com', '025123456789', 1, '$2a$12$ZnO.iHwKlaCQlaXMdPUO/uTy3vVbrMnd9sLT8LosfuDpTDPqbYubu', 1568689561, 'd5f22535b639d55be7d099a7315e1f7f.png', 1),
(26, 'Muhammad Royyan Zamzami', 'royyan', 'royyanmz87@gmail.com', '085649888272', 2, '$2y$10$ae0EvtbCbaFPtcKIk6HQ5O8f21UFA12XR8S2QPZRKkvtqjg7x12kK', 1686247190, 'user.png', 1),
(27, 'Rayhan', 'rayhan', 'rayhan@mail.com', '1298390123', 2, '$2y$10$y.zHZcjb57.YWWw8N08.D.X/GuwrZ/zGHa0JWfVj5gNOQWo3sFxi.', 1686254031, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktifitas_pinjam`
--
ALTER TABLE `aktifitas_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun_admin`
--
ALTER TABLE `akun_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kembali_brg`
--
ALTER TABLE `kembali_brg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktifitas_pinjam`
--
ALTER TABLE `aktifitas_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kembali_brg`
--
ALTER TABLE `kembali_brg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
