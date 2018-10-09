-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Okt 2016 pada 22.28
-- Versi Server: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`) VALUES
(1, 'tri nanda satrio p', 'admin', 'Tri Nanda Satrio P', 'Jl.Kedawung 8-D no 2', 'Malang', '1995-09-29', '12345'),
(2, 'imam', 'admin', 'Imam Fauzi', 'Malang', 'Malang', '2016-08-10', '12345'),
(3, 'superadmin', 'admin', 'Superadmin', 'malang', 'malang', '1995-09-29', 'asd222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses_admin`
--

CREATE TABLE `hak_akses_admin` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hak_akses_admin`
--

INSERT INTO `hak_akses_admin` (`id`, `id_menu`, `id_admin`) VALUES
(18, 15, 3),
(19, 16, 3),
(20, 17, 3),
(21, 18, 3),
(22, 19, 3),
(24, 20, 3),
(25, 21, 3),
(26, 22, 3),
(27, 23, 3),
(28, 24, 3),
(29, 25, 3),
(30, 26, 3),
(38, 26, 1),
(39, 25, 1),
(40, 27, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_travel`
--

CREATE TABLE `jasa_travel` (
  `idtransaksi` int(11) NOT NULL,
  `idpelanggan` int(11) DEFAULT NULL,
  `tanggal_transaksi` datetime DEFAULT NULL,
  `waktu_berangkat` datetime DEFAULT NULL,
  `idtarif` int(11) DEFAULT NULL,
  `idadmin` int(11) DEFAULT NULL,
  `idkendaraan` int(11) DEFAULT NULL,
  `idcabang` int(11) DEFAULT NULL,
  `idsupir` int(11) DEFAULT NULL,
  `pembayaran` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor_cabang`
--

CREATE TABLE `kantor_cabang` (
  `idcabang` int(11) NOT NULL,
  `nama_cabang` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `lokasi_cabang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kantor_cabang`
--

INSERT INTO `kantor_cabang` (`idcabang`, `nama_cabang`, `alamat`, `lokasi_cabang`) VALUES
(1, 'Malang', 'Malang', 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `idkendaraan` int(11) NOT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `plat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`idkendaraan`, `merk`, `status`, `plat`) VALUES
(1, 'Luxio 1', 'aktive', ''),
(2, 'Luxio 2', 'aktive', ''),
(3, 'Luxio 3', 'aktive', ''),
(4, 'Luxio 4', 'aktive', ''),
(5, 'Luxio 5', 'aktive', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `idkota` int(11) NOT NULL,
  `idprovinsi` int(11) DEFAULT NULL,
  `nama_kota` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`idkota`, `idprovinsi`, `nama_kota`, `status`) VALUES
(1, 1, 'Malang', 'aktive'),
(2, 1, 'Surabaya', 'aktive'),
(3, 1, 'Gresik', 'aktive'),
(4, 1, 'Sidoarjo', 'aktive'),
(5, 1, 'Bojonegoro', 'aktive'),
(6, 1, 'Jombang', 'aktive'),
(7, 2, 'Blora', 'aktive'),
(8, 2, 'Cepu', 'aktive'),
(9, 1, 'Babat', 'aktive'),
(10, 1, 'Jatirogo', 'aktive'),
(11, 1, 'Lamongan', 'aktive'),
(12, 1, 'Tuban', 'aktive'),
(13, 1, 'Juanda', 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursi`
--

CREATE TABLE `kursi` (
  `idkursi` int(11) NOT NULL,
  `idkendaraan` int(11) DEFAULT NULL,
  `kode_kursi` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kursi`
--

INSERT INTO `kursi` (`idkursi`, `idkendaraan`, `kode_kursi`, `status`) VALUES
(1, 1, 'A 1', 'active'),
(2, 1, 'A 2', 'active'),
(3, 1, 'A 3', 'active'),
(4, 1, 'A 4', 'active'),
(5, 1, 'A 5', 'active'),
(6, 1, 'A 6', 'active'),
(7, 1, 'A 7', 'active'),
(8, 2, 'A 1', 'active'),
(9, 2, 'A 2', 'active'),
(10, 2, 'A 3', 'active'),
(11, 2, 'A 4', 'active'),
(12, 2, 'A 5', 'active'),
(13, 2, 'A 6', 'active'),
(14, 2, 'A 7', 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `url`, `kategori`) VALUES
(15, 'admin', 'admin', 1),
(16, 'pelanggan', 'pelanggan', 1),
(17, 'supir', 'supir', 1),
(18, 'kantor cabang', 'kantor_cabang', 1),
(19, 'provinsi', 'provinsi', 1),
(20, 'kota', 'kota', 1),
(21, 'kendaraan', 'kendaraan', 1),
(22, 'kursi', 'kursi', 1),
(23, 'tarif kota', 'tarif_kota', 2),
(24, 'TRANSAKSI JASA TRAVEL', 'transaksi', 3),
(26, 'DATA TRANSAKSI PAGI', 'transaksi/datapagi', 3),
(27, 'DATA TRANSAKSI SORE', 'transaksi/datasore', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_ktp` varchar(200) DEFAULT NULL,
  `no_hp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `alamat`, `no_ktp`, `no_hp`) VALUES
(1, 'Dendi Santoso', 'Teluk Grajakan', '878776', '000011111'),
(2, 'Akjs', 'l;sakd', '129', '095743'),
(3, 'Tri Nanda Satrio P', 'Jl.Kedawung 8-D no 2', ')89647528', '083848889331');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `idprovinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`idprovinsi`, `nama_provinsi`, `status`) VALUES
(1, 'Jawa Timur', 'aktive'),
(2, 'Jawa Tengah', 'aktive');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_mobil`
--

CREATE TABLE `sewa_mobil` (
  `idsewa` int(11) NOT NULL,
  `idpelanggan` int(11) DEFAULT NULL,
  `tanggal_sewa` date DEFAULT NULL,
  `selesai_sewa` date DEFAULT NULL,
  `idtarif_sewa` int(11) DEFAULT NULL,
  `denda` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `idadmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `idsupir` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(200) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(200) DEFAULT NULL,
  `no_hp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`idsupir`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `no_hp`) VALUES
(1, 'Fahmi', 'malang', 'malang', '1995-09-29', '21212', '8726622'),
(2, 'Sutijo', 'malang', 'malang', '1987-12-19', '213', '1231');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif_kota`
--

CREATE TABLE `tarif_kota` (
  `idtarif` int(11) NOT NULL,
  `kota_asal` varchar(200) DEFAULT NULL,
  `kota_tujuan` varchar(200) DEFAULT NULL,
  `tarif` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tarif_kota`
--

INSERT INTO `tarif_kota` (`idtarif`, `kota_asal`, `kota_tujuan`, `tarif`) VALUES
(1, '1', '6', '50000'),
(2, '1', '5', '70000'),
(3, '1', '8', '90000'),
(4, '1', '10', '100000'),
(5, '1', '9', '60000'),
(6, '1', '11', '70000'),
(7, '1', '7', '110000'),
(8, '1', '3', '70000'),
(9, '1', '12', '80000'),
(10, '13', '5', '80000'),
(11, '13', '12', '90000'),
(12, '13', '8', '100000'),
(13, '13', '7', '110000'),
(14, '1', '2', '50000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif_sewa`
--

CREATE TABLE `tarif_sewa` (
  `idtarif_sewa` int(11) NOT NULL,
  `idkendaraan` int(11) DEFAULT NULL,
  `tarif` varchar(200) DEFAULT NULL,
  `denda` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kota_asal` int(11) NOT NULL,
  `kota_tujuan` int(11) NOT NULL,
  `tanggal_berangkat` datetime NOT NULL,
  `pukul_berangkat` varchar(100) NOT NULL,
  `keberangkatan` int(11) NOT NULL,
  `petugas` varchar(111) NOT NULL,
  `supir` int(11) NOT NULL,
  `kendaraan` int(11) NOT NULL,
  `kursi` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_pelanggan`, `kota_asal`, `kota_tujuan`, `tanggal_berangkat`, `pukul_berangkat`, `keberangkatan`, `petugas`, `supir`, `kendaraan`, `kursi`, `status`, `bayar`, `tanggal`) VALUES
(1, 1, 1, 2, '2016-10-01 02:45:22', '02:45', 1, 'Superadmin', 1, 1, '1', 'active', 50000, '2016-10-25'),
(2, 3, 1, 2, '2016-10-01 17:50:43', '17:50', 1, 'Superadmin', 1, 1, '2', 'active', 50000, '2016-10-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `idtransaksi` int(11) NOT NULL,
  `idkursi` int(11) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `hak_akses_admin`
--
ALTER TABLE `hak_akses_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_travel`
--
ALTER TABLE `jasa_travel`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `idpelanggan` (`idpelanggan`),
  ADD KEY `idtarif_sewa` (`idtarif`),
  ADD KEY `idadmin` (`idadmin`),
  ADD KEY `idkendaraan` (`idkendaraan`),
  ADD KEY `idcabang` (`idcabang`),
  ADD KEY `idsupir` (`idsupir`);

--
-- Indexes for table `kantor_cabang`
--
ALTER TABLE `kantor_cabang`
  ADD PRIMARY KEY (`idcabang`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`idkendaraan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idkota`),
  ADD KEY `idprovinsi` (`idprovinsi`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`idkursi`),
  ADD KEY `idkendaraan` (`idkendaraan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`idprovinsi`);

--
-- Indexes for table `sewa_mobil`
--
ALTER TABLE `sewa_mobil`
  ADD PRIMARY KEY (`idsewa`),
  ADD KEY `idpelanggan` (`idpelanggan`),
  ADD KEY `idtarif_sewa` (`idtarif_sewa`),
  ADD KEY `idadmin` (`idadmin`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`idsupir`);

--
-- Indexes for table `tarif_kota`
--
ALTER TABLE `tarif_kota`
  ADD PRIMARY KEY (`idtarif`);

--
-- Indexes for table `tarif_sewa`
--
ALTER TABLE `tarif_sewa`
  ADD PRIMARY KEY (`idtarif_sewa`),
  ADD KEY `idkendaraan` (`idkendaraan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `idkursi` (`idkursi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hak_akses_admin`
--
ALTER TABLE `hak_akses_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `jasa_travel`
--
ALTER TABLE `jasa_travel`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kantor_cabang`
--
ALTER TABLE `kantor_cabang`
  MODIFY `idcabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `idkendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `idkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `idkursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `idprovinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sewa_mobil`
--
ALTER TABLE `sewa_mobil`
  MODIFY `idsewa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
  MODIFY `idsupir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tarif_sewa`
--
ALTER TABLE `tarif_sewa`
  MODIFY `idtarif_sewa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
