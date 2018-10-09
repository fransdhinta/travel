-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2016 at 11:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`idadmin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`) VALUES
(3, 'admin', 'admin', 'Dendi', 'Bandung', 'Bandung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE IF NOT EXISTS `hak_akses` (
`idakses` int(11) NOT NULL,
  `nama_akses` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses_admin`
--

CREATE TABLE IF NOT EXISTS `hak_akses_admin` (
`id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses_admin`
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
(30, 26, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jasa_travel`
--

CREATE TABLE IF NOT EXISTS `jasa_travel` (
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
-- Table structure for table `kantor_cabang`
--

CREATE TABLE IF NOT EXISTS `kantor_cabang` (
`idcabang` int(11) NOT NULL,
  `nama_cabang` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `lokasi_cabang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantor_cabang`
--

INSERT INTO `kantor_cabang` (`idcabang`, `nama_cabang`, `alamat`, `lokasi_cabang`) VALUES
(1, 'Malang', 'Malang', 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
`idkendaraan` int(11) NOT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `plat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`idkendaraan`, `merk`, `status`, `plat`) VALUES
(1, 'Pazero', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
`idkota` int(11) NOT NULL,
  `idprovinsi` int(11) DEFAULT NULL,
  `nama_kota` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`idkota`, `idprovinsi`, `nama_kota`, `status`) VALUES
(1, 1, 'Bandung', 'active'),
(2, 1, 'Jakarta', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE IF NOT EXISTS `kursi` (
`idkursi` int(11) NOT NULL,
  `idkendaraan` int(11) DEFAULT NULL,
  `kode_kursi` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`idkursi`, `idkendaraan`, `kode_kursi`, `status`) VALUES
(1, 1, 'A 1', 'active'),
(2, 1, 'A 2', 'active'),
(3, 1, 'A 3', 'active'),
(4, 1, 'A 4', 'active'),
(5, 1, 'A 5', 'active'),
(6, 1, 'A 6', 'active'),
(9, 1, 'A 7', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
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
(24, 'transaksi detail', 'transaksi_detail', 2),
(25, 'TRANSAKSI JASA TRAVEL', 'transaksi', 3),
(26, 'DATA TRANSAKSI', 'transaksi/data', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`idpelanggan` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_ktp` varchar(200) DEFAULT NULL,
  `no_hp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `alamat`, `no_ktp`, `no_hp`) VALUES
(1, 'Dendi Nuraziz', 'Bandung', '878776', '098876633'),
(2, 'Steven', 'Bandung', '3443', '4444444');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
`idprovinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`idprovinsi`, `nama_provinsi`, `status`) VALUES
(1, 'Jawa Barat', 'aktive');

-- --------------------------------------------------------

--
-- Table structure for table `sewa_mobil`
--

CREATE TABLE IF NOT EXISTS `sewa_mobil` (
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
-- Table structure for table `supir`
--

CREATE TABLE IF NOT EXISTS `supir` (
`idsupir` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(200) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_ktp` varchar(200) DEFAULT NULL,
  `no_hp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supir`
--

INSERT INTO `supir` (`idsupir`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `no_hp`) VALUES
(1, 'Fahmi', 'Bandung', 'Bandung', '0000-00-00', '21212', '8726622');

-- --------------------------------------------------------

--
-- Table structure for table `tarif_kota`
--

CREATE TABLE IF NOT EXISTS `tarif_kota` (
  `idtarif` int(11) NOT NULL,
  `kota_asal` varchar(200) DEFAULT NULL,
  `kota_tujuan` varchar(200) DEFAULT NULL,
  `tarif` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif_kota`
--

INSERT INTO `tarif_kota` (`idtarif`, `kota_asal`, `kota_tujuan`, `tarif`) VALUES
(1, '1', '1', '500000'),
(2, '1', '2', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `tarif_sewa`
--

CREATE TABLE IF NOT EXISTS `tarif_sewa` (
`idtarif_sewa` int(11) NOT NULL,
  `idkendaraan` int(11) DEFAULT NULL,
  `tarif` varchar(200) DEFAULT NULL,
  `denda` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kota_asal` int(11) NOT NULL,
  `kota_tujuan` int(11) NOT NULL,
  `tanggal_berangkat` datetime NOT NULL,
  `keberangkatan` int(11) NOT NULL,
  `petugas` varchar(111) NOT NULL,
  `supir` int(11) NOT NULL,
  `kendaraan` int(11) NOT NULL,
  `kursi` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_pelanggan`, `kota_asal`, `kota_tujuan`, `tanggal_berangkat`, `keberangkatan`, `petugas`, `supir`, `kendaraan`, `kursi`, `status`, `bayar`, `tanggal`) VALUES
(24, 1, 1, 2, '2016-07-23 03:50:12', 1, 'Dendi', 1, 1, '2', 'active', 300000, '2016-07-22'),
(25, 1, 1, 2, '2016-07-23 03:50:12', 1, 'Dendi', 1, 1, '3', 'active', 300000, '2016-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE IF NOT EXISTS `transaksi_detail` (
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
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
 ADD PRIMARY KEY (`idakses`);

--
-- Indexes for table `hak_akses_admin`
--
ALTER TABLE `hak_akses_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa_travel`
--
ALTER TABLE `jasa_travel`
 ADD PRIMARY KEY (`idtransaksi`), ADD KEY `idpelanggan` (`idpelanggan`), ADD KEY `idtarif_sewa` (`idtarif`), ADD KEY `idadmin` (`idadmin`), ADD KEY `idkendaraan` (`idkendaraan`), ADD KEY `idcabang` (`idcabang`), ADD KEY `idsupir` (`idsupir`);

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
 ADD PRIMARY KEY (`idkota`), ADD KEY `idprovinsi` (`idprovinsi`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
 ADD PRIMARY KEY (`idkursi`), ADD KEY `idkendaraan` (`idkendaraan`);

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
 ADD PRIMARY KEY (`idsewa`), ADD KEY `idpelanggan` (`idpelanggan`), ADD KEY `idtarif_sewa` (`idtarif_sewa`), ADD KEY `idadmin` (`idadmin`);

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
 ADD PRIMARY KEY (`idtarif_sewa`), ADD KEY `idkendaraan` (`idkendaraan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
 ADD PRIMARY KEY (`idtransaksi`), ADD KEY `idkursi` (`idkursi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
MODIFY `idakses` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hak_akses_admin`
--
ALTER TABLE `hak_akses_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `jasa_travel`
--
ALTER TABLE `jasa_travel`
MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kantor_cabang`
--
ALTER TABLE `kantor_cabang`
MODIFY `idcabang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
MODIFY `idkendaraan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `idkota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
MODIFY `idkursi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
MODIFY `idprovinsi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sewa_mobil`
--
ALTER TABLE `sewa_mobil`
MODIFY `idsewa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
MODIFY `idsupir` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tarif_sewa`
--
ALTER TABLE `tarif_sewa`
MODIFY `idtarif_sewa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
