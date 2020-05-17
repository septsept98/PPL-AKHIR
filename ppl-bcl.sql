-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 05:31 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl-bcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag_gudang`
--

CREATE TABLE `bag_gudang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bag_gudang`
--

INSERT INTO `bag_gudang` (`id`, `nama`, `username`, `email`, `password`) VALUES
(1, 'Septian', 'Septian98', '', 'Semangat45'),
(2, 'Fika', 'Fika66', '', 'Fika123'),
(3, 'Ralp', 'Ralp99', 'Ralp@gmail.com', '$2y$10$Az9XaUdnfBq5m5UP7AE4Yea1RQg9y/cFEqR7oWndZW5hblCUDVQYS'),
(4, 'Admin', 'Admin', 'admin@admin.com', '$2y$10$jxDpLfvHFIFdAhie6CUSF.ZIkjXTri2pS0Q87PMJnfjZYwiAQWbKK');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `id_barang`, `tgl_masuk`, `jumlah`) VALUES
(1, 5, '2020-05-16 07:19:03', 15),
(2, 6, '2020-05-16 08:52:25', 15),
(3, 5, '2020-05-16 09:44:05', 5),
(4, 6, '2020-05-16 09:44:47', 10);

--
-- Triggers `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `stok_masuk` AFTER INSERT ON `barang_masuk` FOR EACH ROW BEGIN
UPDATE tb_barang
SET jumlah_barang = jumlah_barang + NEW.jumlah
WHERE
id = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'DSLR'),
(2, 'Drone'),
(3, 'Miroless'),
(6, 'Monopod');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(20) NOT NULL,
  `harga_barang` double NOT NULL,
  `ket_barang` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `id_kategori`, `nm_barang`, `jumlah_barang`, `harga_barang`, `ket_barang`, `gambar`) VALUES
(5, 1, 'Canon Eos 7D', 20, 35000000, '<p>Baru</p>\r\n', 'business-plan-illustration-png-favpng-kdPBNpc3uKhBCNbLGJC1ucwiT.jpg'),
(6, 3, 'Canon M10', 25, 3500000, '<p>New</p>\r\n', '6645894_preview.jpg');

--
-- Triggers `tb_barang`
--
DELIMITER $$
CREATE TRIGGER `stok_hapus` AFTER DELETE ON `tb_barang` FOR EACH ROW BEGIN
DELETE FROM barang_masuk
WHERE
barang_masuk.id_barang = old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(1, 'Fiqih', 'Fiqih76  ', 'Fiqih@gmail.com', '$2y$10$kXYDgdKa59qWdP0.7Yfs7e1NVNTBaaymvk2/UDGIRuBvroQ7WQNWi'),
(2, 'Septian', 'Septsept', 'Septianardi053@gmail.com', '$2y$10$V/F6MbyzuRmAEztnzJ/9yu349bFsAYjPq2CiqcmanCmXV1mMPX0Hu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bag_gudang`
--
ALTER TABLE `bag_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bag_gudang`
--
ALTER TABLE `bag_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
