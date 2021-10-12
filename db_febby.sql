-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2021 pada 02.18
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_febby`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `nim`, `tahun_lulus`, `no_hp`, `alamat`, `pekerjaan`) VALUES
(1, 'Tia', '2017710818', '2021', '827281', 'jln. ahmad yani', 'Sekda ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arske`
--

CREATE TABLE `arske` (
  `id` int(5) NOT NULL,
  `nosurat` varchar(25) NOT NULL,
  `noklasi` varchar(25) NOT NULL,
  `ringkasan` text NOT NULL,
  `pengelolah` varchar(25) NOT NULL,
  `tglsurat` date NOT NULL,
  `kepada` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `surat` varchar(25) NOT NULL,
  `lamp1` varchar(25) NOT NULL,
  `lamp2` varchar(25) NOT NULL,
  `lamp3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arske`
--

INSERT INTO `arske` (`id`, `nosurat`, `noklasi`, `ringkasan`, `pengelolah`, `tglsurat`, `kepada`, `keterangan`, `surat`, `lamp1`, `lamp2`, `lamp3`) VALUES
(13, 'K01/11/VIA/Kelurahan	', '601', 'Surat Peringatan', 'Sekertaris', '2021-03-25', 'Lurah Rewarangga', 'Peringatan', 'KHS_1.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsma`
--

CREATE TABLE `arsma` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(50) NOT NULL,
  `noklasi` varchar(50) NOT NULL,
  `tglsurat` date NOT NULL,
  `tglteri` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `disposisi` text NOT NULL,
  `instansi` varchar(25) NOT NULL,
  `gbr_surat` varchar(25) NOT NULL,
  `lamp1` varchar(25) NOT NULL,
  `lamp2` varchar(25) NOT NULL,
  `lamp3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsma`
--

INSERT INTO `arsma` (`id`, `nosurat`, `noklasi`, `tglsurat`, `tglteri`, `perihal`, `isi`, `disposisi`, `instansi`, `gbr_surat`, `lamp1`, `lamp2`, `lamp3`) VALUES
(57, '11/VIA/Kelurahan', '101', '2020-08-11', '2020-08-10', 'Undangan Rapat', 'Undangan Menhadiri Pertemuan', 'sekertaris', 'Kec. Ende Timur', 'KHS_1.jpg', 'IMG-20200807-WA00042.jpg', 'IMG-20200807-WA00022.jpg', 'IMG-20200807-WA0004.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemahasiswaan`
--

CREATE TABLE `kemahasiswaan` (
  `id` int(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `tema_penelitian` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `judul_kegiatan` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kemahasiswaan`
--

INSERT INTO `kemahasiswaan` (`id`, `nama_dosen`, `tema_penelitian`, `nama_mahasiswa`, `judul_kegiatan`, `tahun`) VALUES
(3, 'Dekan', 'aaaan', 'aaaa', 'aaaan', 'aaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(20) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nidn` varchar(30) NOT NULL,
  `nama_tes` varchar(50) NOT NULL,
  `skor_tes` varchar(20) NOT NULL,
  `jenis_tes` varchar(20) NOT NULL,
  `penyelenggara` varchar(20) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `bahan_ajar` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `semester` int(10) NOT NULL,
  `sks` int(10) NOT NULL,
  `judul_bimbingan` varchar(50) NOT NULL,
  `jenis_bimbingan` varchar(50) NOT NULL,
  `prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_dosen`, `nidn`, `nama_tes`, `skor_tes`, `jenis_tes`, `penyelenggara`, `tahun`, `mata_kuliah`, `bahan_ajar`, `kelas`, `semester`, `sks`, `judul_bimbingan`, `jenis_bimbingan`, `prodi`) VALUES
(7, 'Andika', '12313121', 'adsdas', '12', 'Programing', 'aadad', '2021', 'Pemrograman Web', 'Kotlin.pdf', 'I A', 3, 3, 'Biodata Programer', 'Programing', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id` bigint(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `judul_penelitian` varchar(200) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `lama_penelitian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id`, `nama_dosen`, `nidn`, `tahun`, `judul_penelitian`, `jenis`, `lama_penelitian`) VALUES
(1, 'Kristianus Jago Tute', '814098001', '2020', 'penumbuhan karakter cinta lingkungan ', 'Programing', '1 tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian`
--

CREATE TABLE `pengabdian` (
  `id` int(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `judul_pengabdian` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `lama_kegiatan` varchar(11) NOT NULL,
  `afiliasi` varchar(20) NOT NULL,
  `kelompok_bidang` varchar(20) NOT NULL,
  `no_sk_tugas` varchar(20) NOT NULL,
  `tgl_sk_tugas` date NOT NULL,
  `lokasi_kegiatan` varchar(30) NOT NULL,
  `tahun_pelaksanaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengabdian`
--

INSERT INTO `pengabdian` (`id`, `nama_dosen`, `nidn`, `judul_pengabdian`, `tahun`, `lama_kegiatan`, `afiliasi`, `kelompok_bidang`, `no_sk_tugas`, `tgl_sk_tugas`, `lokasi_kegiatan`, `tahun_pelaksanaan`) VALUES
(1, 'Kristianus Jago Tute', '814098001', 'pelatihan e-learning di fti', '2020/2021', '1 tahun', 'universitas flores', 'sistem informasi', '35/115/f11/q/2019', '2020-07-02', 'universitas flores', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(10) NOT NULL,
  `nidn` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `rtw` varchar(20) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `nosk` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `nidn`, `nama`, `jenis_kelamin`, `ttl`, `ibu`, `rtw`, `kelurahan`, `kabupaten`, `propinsi`, `no_hp`, `pangkat`, `nosk`, `tgl`, `jabatan`) VALUES
(2, '814098001', 'kristianus jago tute', 'Laki-Laki', 'ende  14 september 1980', 'yuliana dapa', '007/004', 'kota ratu', 'ende', 'nusa tenggara timur', '085239068968', 'penata muda tk l', '3499/k8/kp/2016', '2021-08-07', 'lektor (300.00)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Andi', 'yohanesardinus@gmail.com', '20200812_203832.jpg', '$2y$10$UWHfrxur3PVtweVFKbrQmu7ANstY6ohk9H7cMLf.RYEGMGE3SuIcG', 1, 1, 1577927356),
(10, 'Dosen', 'dosen@gmail.com', 'default.jpg', '$2y$10$LKnuB12K0NeQOBy/.TgohOZKLUsEUACQ7dNZJNOCo3QkEutkB..vK', 2, 1, 1628380985),
(11, 'Dekan', 'dekan@gmail.com', 'default.jpg', '$2y$10$RoESsyRxY7J.u0eYMN5i9O5mn46nDwKedmzb.eOVrG/YzlaYEP8xG', 3, 1, 1628381009),
(12, 'Kepro', 'kepro@gmail.com', 'default.jpg', '$2y$10$T9ftnTgcXs9qCOuV1p3T1OvB28m2MYXyQj1RyiJeFd2J0g0UQCNpC', 4, 1, 1628381296);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(17, 1, 2),
(20, 2, 6),
(28, 1, 8),
(30, 1, 3),
(31, 1, 5),
(32, 1, 10),
(33, 1, 11),
(34, 1, 9),
(35, 2, 9),
(36, 2, 11),
(37, 1, 6),
(38, 1, 7),
(39, 3, 11),
(40, 3, 7),
(41, 4, 2),
(42, 4, 3),
(44, 4, 5),
(45, 4, 6),
(46, 4, 11),
(47, 4, 10),
(48, 4, 1),
(49, 3, 1),
(50, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `name`, `menu`) VALUES
(1, 'Administrator', 'Admin'),
(2, 'Kemahasiswaan', 'kemas'),
(3, 'Alumni', 'alumni'),
(4, 'Manajemen Arsip', 'Arsip'),
(5, 'Tridharma', 'tridar'),
(6, 'Data Dosen', 'dosen'),
(7, 'Dekan', 'dekan'),
(10, 'Setting Menu', 'Menu'),
(11, 'Setting Account', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'Dosen'),
(3, 'Dekan/Wadek'),
(4, 'Kepro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 11, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 11, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 10, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(5, 10, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 0),
(9, 10, 'Management Role Access', 'admin/role', 'fa fa-fw fa-user-tie', 0),
(10, 4, 'Arsip Surat Masuk', 'arsip', 'fas fa-fw fa-folder', 1),
(11, 4, 'Arsip Surat Keluar', 'arsip/suratkel', 'fas fa-fw fa-folder', 1),
(12, 10, 'Management Pengguna', 'menu/tampiluser', 'fas fa-fw fa-users', 1),
(13, 3, 'Tambah Alumni', 'alumni/add', 'fas fa-fw fa-plus', 1),
(14, 3, 'Data Alumni', 'alumni', 'fas fa-fw fa-folder', 1),
(15, 2, 'Tambah Kemahasiswaan', 'kemas/add', 'fas fa-fw fa-plus', 1),
(16, 2, 'Data Kemahasiswaan', 'kemas', 'fas fa-fw fa-folder', 1),
(17, 5, 'Pendidikan', 'tridar/pendidikan', 'fas fa-fw fa-folder', 1),
(18, 5, 'Pengabdian', 'tridar/pengabdian', 'fas fa-fw fa-folder', 1),
(19, 5, 'Penelitian', 'tridar/penelitian', 'fas fa-fw fa-folder', 1),
(20, 6, 'Tambah Data', 'dosen/add', 'fas fa-fw fa-plus', 1),
(21, 6, 'Data Dosen', 'dosen', 'fas fa-fw fa-user', 1),
(22, 7, 'Monitoring Data', 'dekan', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arske`
--
ALTER TABLE `arske`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arsma`
--
ALTER TABLE `arsma`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `arske`
--
ALTER TABLE `arske`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `arsma`
--
ALTER TABLE `arsma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
