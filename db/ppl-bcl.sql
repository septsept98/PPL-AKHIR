-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 09:22 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
(6, 6, '2020-05-19 09:20:17', 5),
(7, 7, '2020-05-19 09:21:01', 10),
(8, 8, '2020-05-19 09:22:16', 5),
(9, 9, '2020-05-19 09:24:45', 5),
(10, 10, '2020-05-19 09:25:46', 10),
(11, 11, '2020-05-19 09:26:41', 5),
(12, 12, '2020-05-19 09:33:08', 20),
(13, 13, '2020-05-19 09:34:23', 10),
(14, 14, '2020-06-02 10:03:51', 10);

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
  `kategori` varchar(100) NOT NULL,
  `img_kat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `img_kat`) VALUES
(2, 'Drone', 'drone.png'),
(3, 'Mirrorless', 'mirrorles.png'),
(7, 'DSLR', 'slr.png'),
(8, 'Aksesoris', 'aksesoris.png'),
(9, 'Lensa', 'lensa.png');

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
(6, 2, 'Drone Gore 3', 5, 1000000, '<ul>\r\n <li>Tidak boleh terbang di luar garis pandang</li>\r\n <li>Tidak boleh terbang dalam jarak 4 km dari lapangan terbang</li>\r\n <li>Tidak boleh terbang di atas orang yang belum memberi izin</li>\r\n <li>Tidak boleh terbang di atas properti kecuali izin telah diperoleh dari pemilik</li>\r\n</ul>\r\n', 'Drone.png'),
(7, 3, 'Canon EOS M10', 10, 5500000, '<ul>\r\n <li>18,0 megapiksel Sensor CMOS ukuran APS-C</li>\r\n <li>Hibrida CMOS AF II Fokus cepat dan halus</li>\r\n <li>7.5cm 3.0\" Tilt-Ip Touch </li>\r\n <li>Wifi</li>\r\n <li>NFC</li>\r\n <li>Pemotretan Jarak Jauh</li>\r\n <li>Hybrid Otomatis</li>\r\n</ul>\r\n', 'M10.jpg'),
(8, 3, 'Fujifilm XA3', 5, 3800000, '<ul>\r\n <li>Sensor lebih besar 24MP , wifi, dan built-in flash.</li>\r\n <li>Layar touchscreen & bisa diputar untuk selfie.</li>\r\n <li>Diameter 58mm.</li>\r\n</ul>\r\n', 'fujifilm-xa3.jpg'),
(9, 7, 'Canon Eos 7D', 5, 4500000, '<ul>\r\n <li>ISO 100 - 6400 (berkembang hingga 12800)</li>\r\n <li>3 \"Layar Jenis Tetap</li>\r\n <li>Jendela bidik optik (pentaprisme)</li>\r\n <li>Pemotretan beruntun 8 fps</li>\r\n <li>Resolusi video 1920 x 1080</li>\r\n <li>860g. 148 x 111 x 74 mm</li>\r\n <li>Badan Cuaca Tertutup</li>\r\n</ul>\r\n', 'Eos7D.jpg'),
(10, 7, 'Nikon D3200', 10, 2600000, '<ul>\r\n <li>24.2 (total 24.7) megapikselsensor CMOS format-DX<u> </u>dengan resolusi 12 bit, dibuat oleh Nikon</li>\r\n <li>Mode film Full HD 1080p</li>\r\n <li>Active D-Lighting</li>\r\n <li>Piksel area gambar adalah Format DX yang dapat disesuaikan dengan (Besar) 6,016 × 4,000 (Sedang) 4,512 × 3,000 (Kecil) 3,008 × 2.000</li>\r\n <li>Media penyimpanan adalah SD, SDHC atau SDXC, mode bus UHS-I , dan LAN Nirkabel Eye-Fi</li>\r\n <li>Antarmuka GPS untuk geotagging langsung yang didukung oleh Nikon GP-1</li>\r\n</ul>\r\n', 'Nikon-D3200.jpg'),
(11, 3, 'Nikon Coolpix P900', 5, 6900000, '<ul>\r\n <li>Sensor MPOS cahaya rendah 16 MP</li>\r\n <li>83x Zoom-NIKKOR ED Glass Lens</li>\r\n <li>LCD Vari-angle 921.000-titik 3\"</li>\r\n <li>Wi-Fi® + NFC Konektivitas Internal</li>\r\n</ul>\r\n', 'COOLPIX.jpg'),
(12, 8, 'Takara eco', 20, 200000, '<ul>\r\n <li>Sections: 3</li>\r\n <li>Diameter: 21.2*16.2mm</li>\r\n <li>Max Height: 1400mm</li>\r\n <li>Min Height: 545mm</li>\r\n <li>Folded Length: 560mm</li>\r\n <li>Weight: 990g</li>\r\n <li>Max Load: 3kg</li>\r\n</ul>\r\n', 'Tripod.jpeg'),
(13, 9, 'Canon 18-500mm', 10, 3500000, '<ul>\r\n <li>Kondisi Barang : Baru</li>\r\n <li>Kategori   : Lensa</li>\r\n <li>Berat   : 3 kilogram</li>\r\n <li>Brand   : Canon</li>\r\n <li>Focus Type   : Zoom</li>\r\n <li>Kaliber   : <49mm>\r\n <li>Type   : Standard</li>\r\n</ul>\r\n\r\n<p> </p>\r\n', 'Tamron.jpg'),
(14, 8, 'Tripod', 10, 250000, '<ul>\r\n <li>Sections 3 legs</li>\r\n <li>Diameter 16.8mm</li>\r\n <li>Max height 1060mm</li>\r\n <li>Folded lenght 370mm</li>\r\n <li>Weight 380mm</li>\r\n <li>Max load: 2 - 2,5 kg</li>\r\n</ul>\r\n', 'Tripod.jpeg');

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
(2, 'Septian', 'Septsept', 'Septianardi053@gmail.com', '$2y$10$V/F6MbyzuRmAEztnzJ/9yu349bFsAYjPq2CiqcmanCmXV1mMPX0Hu'),
(3, 'Rama', 'Rama', 'Ralp@gmail.com', '$2y$10$a14yqW5bchGzRbVvo.5GDesAhIW76JGaxUyoG0rRz/wxlOepofYTy'),
(4, 'zahra', 'zahra', 'zahrafifah@gmail.com', '$2y$10$VwL/13MPmjRS0V/8ddHi/.uwcWZ1kb/Y7qJeEiGF1t0cBJiRNg/Fi'),
(5, 'zahra afifah', 'zahra123', 'zahrafifah@gmail.com', '$2y$10$jX8JXHXpYFODF9hqgWBxRe6wBj7cJFYM7XvSFMCZ9G0kSEALc0tya');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
