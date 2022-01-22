-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2022 pada 08.06
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `foto_maba` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'Ivan Rikshandi', 'Citra Raya', 'laki laki', 'Islam', 'SMK YUPPENTEK 2', 'foto1.jpg'),
(2, 'Shifa Fauzia', 'Citra Raya', 'Perempuan', 'Islam', 'SMKN 1 Kab. Tangerang', 'foto2.jpg'),
(3, 'Dyas Abrylian', 'Citra Raya', 'Laki laki', 'Islam', 'SMKN 1 Kab. Tangerang', 'foto3.jpg'),
(4, 'Nurul Fatya', 'Citra Raya', 'Perempuan', 'Islam', 'SMA IT Smart Syahida', 'foto4.jpg'),
(5, 'Martiana Aldiani', 'Citra Raya', 'Perempuan', 'Islam', 'SMAN 4 Kab. Tangerang', 'foto5.jpg'),
(6, 'Feby Dita M', 'Citra Raya', 'Perempuan', 'Islam', 'SMKN 1 Kab. Tangerang', 'foto6.jpg'),
(7, 'Yudi', 'Cikupa', 'Laki-laki', 'Islam', 'Negeri Balaraja', 'jpg'),
(8, 'Roni', 'Cibadak', 'Laki-laki', 'Budha', 'Budhi Dharma', 'jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
