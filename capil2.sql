-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2021 pada 05.46
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
-- Database: `capil2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_admin`
--

CREATE TABLE `db_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_admin`
--

INSERT INTO `db_admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'mhsputra', '123456', 'Maulana Hadi Syahputra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_adminkadiskk`
--

CREATE TABLE `db_adminkadiskk` (
  `id_admin` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_adminkadiskk`
--

INSERT INTO `db_adminkadiskk` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'kadiskk', 'kadiskk123', 'Kadis Disdukcapil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_adminkasikk`
--

CREATE TABLE `db_adminkasikk` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_adminkasikk`
--

INSERT INTO `db_adminkasikk` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'kasikk', 'kasikk123', 'Kasi Kartu Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_adminopkk`
--

CREATE TABLE `db_adminopkk` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_adminopkk`
--

INSERT INTO `db_adminopkk` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'operatorkk', 'opkk123', 'Operator KK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_adminpengkk`
--

CREATE TABLE `db_adminpengkk` (
  `id_admin` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_adminpengkk`
--

INSERT INTO `db_adminpengkk` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'pengkk', 'pengkk123', 'Di Pengambilan Kartu Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_kk`
--

CREATE TABLE `db_kk` (
  `id` int(20) NOT NULL,
  `kep_kel` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kamp` varchar(30) NOT NULL,
  `kec` varchar(30) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `opr` enum('Pilih Status Verifikasi','Berkas Bermasalah','Pending','Selesai Verifikasi') NOT NULL,
  `kasi` enum('Pilih Status','Berkas Bermasalah','Belum Diparaf','Sudah Diparaf') NOT NULL,
  `kadis` enum('Pilih Status','Berkas Bermasalah','Belum Ditandatangani','Sudah Ditandatangani') NOT NULL,
  `diambil` varchar(30) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_kk`
--

INSERT INTO `db_kk` (`id`, `kep_kel`, `nik`, `kamp`, `kec`, `tgl_masuk`, `tgl_pengambilan`, `opr`, `kasi`, `kadis`, `diambil`, `nomor_hp`) VALUES
(38, 'Saipudin', '116525736462534', 'Selamat', 'Muda', '2019-09-04', '0000-00-00', '', 'Sudah Diparaf', '', '', '085435152365'),
(40, 'hgfghf', '21434656644', 'dhgfh', '435465', '2019-09-10', '0000-00-00', '', 'Sudah Diparaf', '', '', '08543765435'),
(41, 'jhkjhvkj', '3267654307645786', 'ytfxcfxhhmnbvcx', 'ljgfgloijhgfdvyuvtdmjh', '2019-08-10', '0000-00-00', '', '', '', '', '08535443544'),
(42, 'hbcjhgsbdcsd', '7263547729734823', 'ddsdfsdfskdfsdfu', 'sdfjsdkfsdf', '2019-09-10', '0000-00-00', '', '', '', '', '098823845727'),
(43, 'hgcahsidhfaiu', '6754356890876543', 'hghkgcxjhm', 'gfcvb,kjhvhjy', '2019-07-11', '0000-00-00', '', '', '', '', '085427635462'),
(44, 'shdkfhgfvgh', '5986545876855', 'vgfvgugfdhkh', 'fvdtvjgvf', '2019-09-10', '0000-00-00', '', '', '', '', '086546453754'),
(45, 'hfgsjkdlfjhsgdf', '098765436278', 'bhgvsjdklsjhdf', 'ujghsfdjfskdjh', '2019-07-12', '0000-00-00', '', '', '', '', '09876543456'),
(46, 'Saipudin', '116525736462534', 'Selamat', 'Muda', '2019-09-04', '0000-00-00', '', '', '', '', '085435152365'),
(47, 'hgfghf', '21434656644', 'dhgfh', '435465', '2019-09-10', '0000-00-00', '', '', '', '', '08543765435'),
(48, 'jhkjhvkj', '3267654307645786', 'ytfxcfxhhmnbvcx', 'ljgfgloijhgfdvyuvtdmjh', '2019-08-10', '0000-00-00', '', '', '', '', '08535443544'),
(49, 'hbcjhgsbdcsd', '7263547729734823', 'ddsdfsdfskdfsdfu', 'sdfjsdkfsdf', '2019-09-10', '0000-00-00', '', '', '', '', '098823845727'),
(50, 'hgcahsidhfaiu', '6754356890876543', 'hghkgcxjhm', 'gfcvb,kjhvhjy', '2019-07-11', '0000-00-00', '', '', '', '', '085427635462'),
(51, 'shdkfhgfvgh', '5986545876855', 'vgfvgugfdhkh', 'fvdtvjgvf', '2019-09-10', '0000-00-00', '', '', '', '', '086546453754'),
(52, 'hfgsjkdlfjhsgdf', '098765436278', 'bhgvsjdklsjhdf', 'ujghsfdjfskdjh', '2019-07-12', '0000-00-00', '', '', '', '', '09876543456'),
(53, 'Saipudin', '116525736462534', 'Selamat', 'Muda', '2019-09-04', '0000-00-00', '', '', '', '', '085435152365'),
(54, 'hgfghf', '21434656644', 'dhgfh', '435465', '2019-09-10', '0000-00-00', '', '', '', '', '08543765435'),
(55, 'jhkjhvkj', '3267654307645786', 'ytfxcfxhhmnbvcx', 'ljgfgloijhgfdvyuvtdmjh', '2019-08-10', '0000-00-00', '', '', '', '', '08535443544'),
(56, 'hbcjhgsbdcsd', '7263547729734823', 'ddsdfsdfskdfsdfu', 'sdfjsdkfsdf', '2019-09-10', '0000-00-00', '', '', '', '', '098823845727'),
(57, 'hgcahsidhfaiu', '6754356890876543', 'hghkgcxjhm', 'gfcvb,kjhvhjy', '2019-07-11', '0000-00-00', '', '', '', '', '085427635462'),
(58, 'shdkfhgfvgh', '5986545876855', 'vgfvgugfdhkh', 'fvdtvjgvf', '2019-09-10', '0000-00-00', '', '', '', '', '086546453754'),
(59, 'hfgsjkdlfjhsgdf', '098765436278', 'bhgvsjdklsjhdf', 'ujghsfdjfskdjh', '2019-07-12', '0000-00-00', '', '', '', '', '09876543456'),
(60, 'Saipudin', '116525736462534', 'Selamat', 'Muda', '2019-09-04', '0000-00-00', '', '', '', '', '085435152365'),
(61, 'hgfghf', '21434656644', 'dhgfh', '435465', '2019-09-10', '0000-00-00', '', '', '', '', '08543765435'),
(62, 'jhkjhvkj', '3267654307645786', 'ytfxcfxhhmnbvcx', 'ljgfgloijhgfdvyuvtdmjh', '2019-08-10', '0000-00-00', '', '', '', '', '08535443544'),
(63, 'hbcjhgsbdcsd', '7263547729734823', 'ddsdfsdfskdfsdfu', 'sdfjsdkfsdf', '2019-09-10', '0000-00-00', '', '', '', '', '098823845727'),
(64, 'hgcahsidhfaiu', '6754356890876543', 'hghkgcxjhm', 'gfcvb,kjhvhjy', '2019-07-11', '0000-00-00', '', '', '', '', '085427635462'),
(65, 'shdkfhgfvgh', '5986545876855', 'vgfvgugfdhkh', 'fvdtvjgvf', '2019-09-10', '0000-00-00', '', '', '', '', '086546453754'),
(66, 'hfgsjkdlfjhsgdf', '098765436278', 'bhgvsjdklsjhdf', 'ujghsfdjfskdjh', '2019-07-12', '0000-00-00', '', '', '', '', '09876543456'),
(67, 'bang  Ayang ', '1165541654547412', 'Tes', 'Aceh Tamiang ', '2019-09-13', '0000-00-00', '', '', '', '', '085546436234'),
(68, 'Yudi', '1116325352656', 'Dalam', 'Karang Baru', '2021-11-29', '2021-11-29', 'Pending', 'Sudah Diparaf', 'Berkas Bermasalah', 'sipolan', '08226594125');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_ktp`
--

CREATE TABLE `db_ktp` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kamp` varchar(30) NOT NULL,
  `kec` varchar(30) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `kasi` enum('Pilih','Selesai','Pending') NOT NULL,
  `opr` enum('Pilih','Berkas Bermasalah','Berkas Selesai Dicetak') NOT NULL,
  `kadis` enum('Pilih','Berkas Bermasalah','Berkas Sudah Ditandatangani') NOT NULL,
  `diambil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pdpk`
--

CREATE TABLE `db_pdpk` (
  `id` int(20) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `golongan` varchar(25) NOT NULL,
  `jeniskelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pegawai`
--

CREATE TABLE `db_pegawai` (
  `id` int(20) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(16) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `golongan` enum('Pilih','Belum Cetak','Sudah Cetak') NOT NULL,
  `jeniskelamin` date NOT NULL,
  `tempat_lahir` enum('Pilih','Selesai','Pending') NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_rekap1`
--

CREATE TABLE `db_rekap1` (
  `id` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kamp` varchar(30) NOT NULL,
  `kec` varchar(30) NOT NULL,
  `ket` enum('Belum Di Pilih','Belum Cetak','Sudah Cetak') NOT NULL,
  `verifikasi` enum('Belum Di Pilih','Selesai','Pending') NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `dokumen` enum('Belum Di Pilih','Kartu Keluarga','KTP-El','Akte Kelahiran','Akte Kematian') NOT NULL,
  `diambil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_rekap1`
--

INSERT INTO `db_rekap1` (`id`, `nama`, `nik`, `kamp`, `kec`, `ket`, `verifikasi`, `tgl_pengambilan`, `dokumen`, `diambil`) VALUES
(35, 'Maulana Hadi Syahputra', '1234465745758896', 'banai', 'Karang Baru', 'Sudah Cetak', 'Pending', '2019-07-17', 'KTP-El', 'saipul'),
(36, 'hjhgjhgjh', 'jh', 'jh', 'bku', 'Belum Cetak', 'Pending', '0034-04-23', 'Kartu Keluarga', 'sdfsdf'),
(37, 'ljksdfljsdkflsfl', 'knvlknkvnsldkok', 'lknv  nskjmvkjsn vok', 'xkcnvkn lvkxnkvjn', 'Belum Cetak', 'Pending', '0234-04-23', 'Kartu Keluarga', 'wrtfdfg'),
(38, 'dffdsdfdvbfds', '234566786532', 'banai', 'dfdsdgghgdd', 'Sudah Cetak', 'Pending', '2019-07-24', 'KTP-El', 'fhghfb'),
(39, 'bffdfgd', '1234465745758896', 'jhdgfgnhmghnfgd', 'dfgvdfsfg', 'Sudah Cetak', 'Selesai', '2019-07-15', 'KTP-El', 'fdgnnfd'),
(40, 'reben', '1127381723871872', 'asdasd', 'sjcsidfisdhf', 'Sudah Cetak', 'Pending', '3323-12-12', 'KTP-El', 'ffdgsdfsdf'),
(60, 'hjhgjhgjh', 'jh', 'jh', 'bku', 'Belum Cetak', 'Pending', '0034-04-23', 'Kartu Keluarga', 'sdfsdf'),
(79, 'ljksdfljsdkflsfl', 'knvlknkvnsldkok', 'lknv  nskjmvkjsn vok', 'xkcnvkn lvkxnkvjn', 'Belum Cetak', 'Pending', '0234-04-23', 'Kartu Keluarga', 'wrtfdfg'),
(80, 'dffdsdfdvbfds', '234566786532', 'banai', 'dfdsdgghgdd', 'Sudah Cetak', 'Pending', '2019-07-24', 'KTP-El', 'fhghfb'),
(81, 'bffdfgd', '1234465745758896', 'jhdgfgnhmghnfgd', 'dfgvdfsfg', 'Sudah Cetak', 'Selesai', '2019-07-15', 'KTP-El', 'fdgnnfd'),
(82, 'reben', '1127381723871872', 'asdasd', 'sjcsidfisdhf', 'Sudah Cetak', 'Pending', '3323-12-12', 'KTP-El', 'ffdgsdfsdf'),
(83, 'kak yani', '5765237476564343', 'alam', 'asal', 'Sudah Cetak', 'Selesai', '2019-07-15', 'KTP-El', 'kak Vita'),
(84, '', '', '', '', 'Belum Di Pilih', '', '0000-00-00', 'Belum Di Pilih', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `db_adminkadiskk`
--
ALTER TABLE `db_adminkadiskk`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `db_adminkasikk`
--
ALTER TABLE `db_adminkasikk`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `db_adminopkk`
--
ALTER TABLE `db_adminopkk`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `db_adminpengkk`
--
ALTER TABLE `db_adminpengkk`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `db_kk`
--
ALTER TABLE `db_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_ktp`
--
ALTER TABLE `db_ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_pdpk`
--
ALTER TABLE `db_pdpk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_pegawai`
--
ALTER TABLE `db_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `db_rekap1`
--
ALTER TABLE `db_rekap1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `db_adminkadiskk`
--
ALTER TABLE `db_adminkadiskk`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `db_adminkasikk`
--
ALTER TABLE `db_adminkasikk`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `db_adminopkk`
--
ALTER TABLE `db_adminopkk`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `db_adminpengkk`
--
ALTER TABLE `db_adminpengkk`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `db_kk`
--
ALTER TABLE `db_kk`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `db_ktp`
--
ALTER TABLE `db_ktp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `db_pdpk`
--
ALTER TABLE `db_pdpk`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `db_pegawai`
--
ALTER TABLE `db_pegawai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `db_rekap1`
--
ALTER TABLE `db_rekap1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
