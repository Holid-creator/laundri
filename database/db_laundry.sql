-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 05:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_laundri`
--

CREATE TABLE `tb_laundri` (
  `id_laundri` int(11) NOT NULL,
  `id_plg` varchar(15) NOT NULL,
  `kode_user` int(11) NOT NULL,
  `tgl_terima` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jml_kiloan` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_laundri`
--

INSERT INTO `tb_laundri` (`id_laundri`, `id_plg`, `kode_user`, `tgl_terima`, `tgl_selesai`, `jml_kiloan`, `nominal`, `status`, `catatan`) VALUES
(1, 'PLG-001', 2, '2020-12-24', '2020-12-25', 1, 7000, 'Lunas', 'Sempaak, Jaket'),
(6, 'PLG-001', 1, '0000-00-00', '0000-00-00', 4, 0, 'Belum Lunas', 'catatan'),
(7, 'PLG-001', 1, '0000-00-00', '0000-00-00', 3, 21000, 'Belum Lunas', 'catatan'),
(8, 'PLG-002', 1, '2020-12-02', '2020-12-04', 5, 35000, 'Lunas', 'Sempak'),
(9, 'PLG-001', 1, '2020-12-16', '2020-12-17', 3, 21000, 'Lunas', 'hjgbkjum'),
(10, 'PLG-001', 1, '2020-12-14', '2020-12-15', 2, 14000, 'Lunas', 'gjmgbjm'),
(11, 'PLG-002', 1, '2020-12-23', '2020-12-24', 2, 14000, 'Lunas', 'Jaket, Kaos Dalam, Levis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `kode_plg` varchar(10) NOT NULL,
  `n_plg` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`kode_plg`, `n_plg`, `alamat`, `telpon`) VALUES
('PLG-0003', 'Panjul', 'Kp. Pasir sereh', '085881431888'),
('PLG-001', 'Yola Yosanta', 'Kp. Pasir sereh', '085693797029'),
('PLG-002', 'Holid', 'Kp. Pasir Sereh', '085780781987');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `kode_transaksi` int(11) NOT NULL,
  `kode_user` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kode_transaksi`, `kode_user`, `tgl_transaksi`, `pemasukan`, `pengeluaran`, `catatan`, `keterangan`) VALUES
(1, 1, '2020-12-16', 21000, 0, 'hjgbkjum', 'pemasukan'),
(2, 1, '2020-12-23', 14000, 0, 'Jaket, Kaos Dalam, Levis', 'pemasukan'),
(3, 1, '0000-00-00', 0, 0, 'catatan', 'pemasukan'),
(4, 1, '0000-00-00', 0, 0, 'catatan', 'pemasukan'),
(5, 1, '0000-00-00', 0, 0, 'catatan', 'pemasukan'),
(6, 1, '2020-12-14', 14000, 0, 'gjmgbjm', 'pemasukan'),
(7, 1, '2020-12-14', 14000, 0, 'gjmgbjm', 'pemasukan'),
(8, 1, '2020-12-14', 0, 14000, 'Beli Sabun Mandi, Odol, Sikat gigi dan shampoo', 'pengeluaran'),
(9, 2, '2020-12-17', 0, 23000, 'Beli Roko Sampurna Mild', 'pengeluaran'),
(10, 2, '2020-12-19', 0, 18000, 'Beli Roko Filter', 'pengeluaran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `nama`, `password`, `level`, `foto`) VALUES
(1, 'yola', 'yola', 'yola', 'admin', 'yola.jpg'),
(2, 'holid', 'M Holidin', 'holid', 'kasir', 'holid.jpg'),
(19, 'admin', 'admin', 'admin', 'kasir', '2020121209483314474429_309665892729288_2172374602682990592_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_laundri`
--
ALTER TABLE `tb_laundri`
  ADD PRIMARY KEY (`id_laundri`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`kode_plg`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_laundri`
--
ALTER TABLE `tb_laundri`
  MODIFY `id_laundri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
