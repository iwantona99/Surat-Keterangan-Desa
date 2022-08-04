-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2021 pada 02.12
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pemohon`
--

CREATE TABLE `data_pemohon` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pemohon`
--

INSERT INTO `data_pemohon` (`nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `telepon`, `pekerjaan`) VALUES
('1111111111111111', 'Fachri Shofiyyuddin Ahmad', '2000-05-28', 'Kudus', 'Laki-Laki', 'Islam', '                   RT 01 RW 07', '087897315639', 'Mahasiswa'),
('2222222222222222', 'Amalia', '1997-02-08', 'Kudus', 'Perempuan', 'Islam', ' RT 02 RW 03', '087897315639', 'Mahasiswa'),
('3333333333333333', 'Muhammad Ilham', '2021-01-08', 'Kudus', 'Laki-Laki', 'Islam', '      RT 01 RW 03', '087897315639', 'Mahasiswa'),
('4444444444444444', 'Muhammad Farih Ahbab', '2003-10-08', 'Kudus', 'Laki-Laki', 'Islam', '     RT 01 RW 05', '087897315639', 'Mahasiswa'),
('5555555555555555', 'Bintang Sultan Mimbar Maulana', '1999-11-15', 'Kudus', 'Laki-Laki', 'Islam', 'RT 04 RW 02', '087897315639', 'Mahasiswa'),
('9999999999999999', 'Budi', '2021-01-12', 'Kudus', 'Laki-Laki', '', '', '', ''),
('1000000000000000', 'Hadi', '2021-01-12', 'Pati', 'Laki-Laki', '', '', '', ''),
('7777777777777777', 'Fiki', '2021-01-12', 'Kudus', 'Perempuan', '', '', '', ''),
('8888888888888888', 'Inayah', '2021-01-12', 'Kudus', 'Perempuan', 'Islam', ' RT 01 RW 07', '087897315639', 'Mahasiswa'),
('1234', 'Fahri', '2021-03-16', 'Kudus', 'Laki-Laki', 'Islam', 'Kauman', '087897315639', 'Mahasiswa'),
('98', 'Fahri', '2021-03-16', 'Kudus', 'Laki-Laki', 'Islam', '  ', '', ''),
('00', 'Fahri', '2021-03-16', 'Kuduss', 'Laki-Laki', 'Islam', '   Kauman', '087897315639', 'Mahasiswa'),
('00', 'AIDUL FAUZI', '1998-06-18', 'MEDAN', 'Laki-Laki', '', '', '', ''),
('123456', 'AIDUL FAUZI', '0000-00-00', 'AUSTRALI', 'Laki-Laki', 'Islam', 'Jamur Ujung', '123', 'Yutuber'),
('345', 'AIDUL FAUZI', '2021-09-09', 'MEDAN', 'Laki-Laki', '', '', '', ''),
('121', 'Ust. Abd Samad', '2021-11-10', 'MEDAN', 'Laki-Laki', '', '', '', ''),
('1117045003920001', 'SRI REZKI', '1998-03-10', 'Suka Damai Bawah', 'Perempuan', '', '', '', ''),
('1111121207830001', 'MUKHTAR', '1985-07-12', 'Keumangan', 'Laki-Laki', 'Islam', 'Jamur Ujung Kecamatan Wih Pesam', '12071985', 'Petani'),
('1117042006010003', 'RIYADDI PUTRA', '2001-06-20', 'Simpang Wariji', 'Laki-Laki', 'Islam', 'Jamur Ujung Kecamatan Wih Pesam', '20062001', 'Pelajar'),
('1117040709120001', 'LIYANA FITRI', '2012-09-30', 'JAMUR UJUNG', 'Perempuan', '', '', '', ''),
('1117042102710002', 'SYAIFUL BAHRI', '1971-02-21', 'MEULABOH', 'Laki-Laki', 'Islam', 'Jamur Ujung Kecamatan Wih Pesam', '21021971', 'Petani'),
('1117045204060001', 'ZIKRA MAULIDA', '2006-04-12', 'JAMUR UJUNG', 'Perempuan', 'Islam', 'Jamur Ujung Kecamatan Wih Pesam', '12042006', 'Pelajar'),
('1117041703530001', 'HIDAYANTI AIZA', '1998-09-09', 'JAMUR UJUNG', 'Perempuan', 'Islam', 'Jamur Ujung Kecamatan Wih Pesam', '09091998', 'Pelajar'),
('1117042408010001', 'RISKI SAPUTRA', '2001-08-24', 'JAMUR UJUNG', 'Laki-Laki', 'Islam', 'Jamur Ujung', '24082001', 'Pelajar'),
('1117041011920002', 'NUR BAHARI', '1992-11-10', 'PEKAN BARU', 'Laki-Laki', 'Islam', 'Seuneubok Nalan Kecamatan Peulimbang Kabupaten Bireuen', '10111992', 'Pelajar'),
('1117041405150002', 'NIZAM AL LUTFHI', '2015-05-14', 'JAMUR UJUNG', 'Laki-Laki', 'Islam', 'Kampung Jamur Ujung Kecamatan Wih Pesam ', '14052015', 'Pelajar'),
('1117040101600009', 'SUTINO', '1960-01-01', 'SUKA DAMAI', 'Laki-Laki', 'Islam', 'Kampung Jamur Ujung Kecamatan Wih Pesam Kabupaten Bener Meriah', '01011960', 'Petani'),
('1671106407030005', 'RIZKILA YOHANA', '2003-07-24', 'MEDAN', 'Laki-Laki', 'Islam', 'Bukit Sangkal Kecamatan Kalidoni Kabupaten Kota Palembang Provinsi Sumatera Selatan', '24072003', 'Pelajar'),
('1104110609690002', 'ILYASIN', '1969-09-06', 'BUKILAH TERITIT', 'Laki-Laki', 'Islam', 'Paya Tumpi Baru Kecamatan Kebayakan Kabupaten Aceh Tengah', '06091969', 'Supir'),
('1117047009120001', 'LIYANA FITRI', '2012-09-30', 'JAMUR UJUNG', 'Perempuan', 'Islam', 'Jamur Ujung Kecamatan Wih Pesam', '30092012', 'Pelajar'),
('1117045003980001', 'SRI REZKI', '1998-03-10', 'Suka Damai Bawah', 'Perempuan', 'Islam', 'Jamur Ujung Kecamatan Wih Pesam', '10031998', 'Ibu Rumah Tangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_skd`
--

CREATE TABLE `data_request_skd` (
  `id_request_skd` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(20) NOT NULL DEFAULT '-',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(22, '1111121207830001', '2021-11-25 00:42:16', '1111121207830001_.jpg', '1111121207830001_.jpg', '-', 'Surat sedang dalam proses cetak', 'DOMISILI', 2, '2021-11-25'),
(23, '1117041011920002', '2021-11-25 00:44:37', '1117041011920002_.jpg', '1117041011920002_.jpg', '-', 'Surat sedang dalam proses cetak', 'DOMISILI', 2, '2021-11-25'),
(24, '1117042006010003', '2021-11-25 00:47:24', '1117042006010003_.jpg', '1117042006010003_.jpg', '-', 'Surat sedang dalam proses cetak', 'DOMISILI', 2, '2021-11-25'),
(25, '1671106407030005', '2021-11-25 00:54:40', '1671106407030005_.jpg', '1671106407030005_.jpg', '-', 'Surat sedang dalam proses cetak', 'DOMISILI', 2, '2021-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_skp`
--

CREATE TABLE `data_request_skp` (
  `id_request_skp` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `lama` int(11) NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'PAMIT',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_skp`
--

INSERT INTO `data_request_skp` (`id_request_skp`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `instansi`, `jabatan`, `keperluan`, `keterangan`, `lama`, `sampai_tanggal`, `request`, `status`, `acc`) VALUES
(12, '1117042408010001', '2021-11-25 00:50:48', '1117042408010001_.jpg', '1117042408010001_.jpg', 'Sikambing Kecamatan Medan Sung', '', 'Pekerjaan', 'Surat sedang dalam proses cetak', 1, '2022-11-25', 'PAMIT', 2, '2021-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_sktm`
--

CREATE TABLE `data_request_sktm` (
  `id_request_sktm` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'TIDAK MAMPU',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`) VALUES
(53, '1117040101600009', '2021-11-25 00:43:45', '1117040101600009_.jpg', '1117040101600009_.jpg', 'Mendapatkan Beasiswa', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2021-11-25'),
(54, '1117041405150002', '2021-11-25 00:45:48', '1117041405150002_.jpg', '1117041405150002_.jpg', 'Mendapatkan Bantuan Pendidikan', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2021-11-25'),
(55, '1117041703530001', '2021-11-25 00:46:42', '1117041703530001_.jpg', '1117041703530001_.jpg', 'Mendapatkan Beasiswa', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2021-11-25'),
(56, '1117045204060001', '2021-11-25 00:52:51', '1117045204060001_.jpg', '1117045204060001_.jpg', 'Mendapatkan Bantuan Pendidikan', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2021-11-25'),
(57, '1117047009120001', '2021-11-25 00:53:49', '1117047009120001_.jpg', '1117047009120001_.jpg', 'Pengurusan Administrasi ke Sek', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 2, '2021-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_sku`
--

CREATE TABLE `data_request_sku` (
  `id_request_sku` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'USAHA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(11, '1104110609690002', '2021-11-25 00:41:03', '1104110609690002_.jpg', '1104110609690002_.jpg', 'Cetak Baliho', 'Mendapatkan Bantuan UMKM', 'Surat sedang dalam proses cetak', 'USAHA', 2, '2021-11-25'),
(12, '1117042102710002', '2021-11-25 00:48:34', '1117042102710002_.jpg', '1117042102710002_.jpg', 'Tanaman Palawija', 'Administrasi Pinjaman BANK', 'Surat sedang dalam proses cetak', 'USAHA', 2, '2021-11-25'),
(13, '1117045003980001', '2021-11-25 00:51:57', '1117045003980001_.jpg', '1117045003980001_.jpg', 'Bengkel', 'Mendapatkan Bantuan Perdaganga', 'Surat sedang dalam proses cetak', 'USAHA', 2, '2021-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `nik` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`) VALUES
('1', '1', 'Staf'),
('1104110609690002', '1104110609690002', 'Pemohon'),
('1111121207830001', '1111121207830001', 'Pemohon'),
('1117040101600009', '1117040101600009', 'Pemohon'),
('1117041011920002', '1117041011920002', 'Pemohon'),
('1117041405150002', '1117041405150002', 'Pemohon'),
('1117041703530001', '1117041703530001', 'Pemohon'),
('1117042006010003', '1117042006010003', 'Pemohon'),
('1117042102710002', '1117042102710002', 'Pemohon'),
('1117042408010001', '1117042408010001', 'Pemohon'),
('1117045003980001', '1117045003980001', 'Pemohon'),
('1117045204060001', '1117045204060001', 'Pemohon'),
('1117047009120001', '1117047009120001', 'Pemohon'),
('1671106407030005', '1671106407030005', 'Pemohon'),
('2', '2', 'Reje');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD PRIMARY KEY (`id_request_skp`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD PRIMARY KEY (`id_request_sktm`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD PRIMARY KEY (`id_request_sku`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  MODIFY `id_request_skp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD CONSTRAINT `data_pemohon_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Ketidakleluasaan untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Ketidakleluasaan untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD CONSTRAINT `data_request_skp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Ketidakleluasaan untuk tabel `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD CONSTRAINT `data_request_sktm_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Ketidakleluasaan untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
