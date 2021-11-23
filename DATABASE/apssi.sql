-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2021 pada 15.53
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apssi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_pelatih` int(11) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_lisensi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `id_pelatih`, `berkas`, `keterangan`, `tgl_lisensi`) VALUES
(3, 5, '1637368041_44dac068c25cbe52ecff.jpg', 'LISENSI C AFC', '2020-11-06'),
(4, 5, '1637368089_062a0ebaaf00f7bc0d55.jpg', 'LISENSI C AFC', '2020-11-06'),
(5, 5, '1637368209_bc5819add6a1d47e5ac3.jpg', 'LISENSI C DIPLOMA', '2018-10-11'),
(6, 5, '1637368385_dd40a7511a020a4aa04e.jpg', 'LISENSI C DIPLOMA', '2021-09-10'),
(7, 8, '1637369588_11bfa38a0ca0003bb832.jpg', 'LISENSI C DIPLOMA', '2021-02-14'),
(8, 1, '1637374670_56410de914c228313871.jpeg', 'LISENSI C AFC', '2021-05-17'),
(9, 1, '1637374772_9993e9be9802da91c19f.jpeg', 'LISENSI D PSSI', '2020-12-25'),
(10, 20, '1637377308_6e324ebfe90ef327c83e.jpg', 'LISENSI C DIPLOMA', '2021-02-05'),
(11, 20, '1637377337_a2c76fde4784650c1bb1.jpg', 'LISENSI C DIPLOMA', '2021-02-05'),
(12, 31, '1637386620_bad47945077a169dc213.jpg', 'LISENSI D PSSI', '2020-02-16'),
(19, 3, '1637504374_eefdfebbf22c7bf9938d.jpg', 'LISENSI D PSSI', '2021-11-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kepelatihan`
--

CREATE TABLE `data_kepelatihan` (
  `id_pelatih` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL,
  `kategori_team` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tahun_awal` varchar(4) NOT NULL,
  `tahun_akhir` varchar(4) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kepelatihan`
--

INSERT INTO `data_kepelatihan` (`id_pelatih`, `nama_team`, `kategori_team`, `jabatan`, `tahun_awal`, `tahun_akhir`, `keterangan`) VALUES
(3, 'BAJENG UNITED', 'SSB', 'Head Coach', '2001', '2001', ''),
(3, 'BAJENG UNITED', 'SOERATIN 13', 'Ass Coach', '2001', '2001', ''),
(3, 'BAJENG UNITED', 'SOERATIN 17', 'Ass Coach', '2001', '2001', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_team`
--

CREATE TABLE `kategori_team` (
  `id_kategori_team` int(11) NOT NULL,
  `kategori_team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_team`
--

INSERT INTO `kategori_team` (`id_kategori_team`, `kategori_team`) VALUES
(1, 'SSB'),
(2, 'SOERATIN 13'),
(3, 'SOERATIN 15'),
(4, 'SOERATIN 17'),
(5, 'LIGA 3'),
(6, 'LIGA 2'),
(7, 'LIGA 1'),
(8, 'TARKAM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lisensi`
--

CREATE TABLE `lisensi` (
  `id_lisensi` int(11) NOT NULL,
  `lisensi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lisensi`
--

INSERT INTO `lisensi` (`id_lisensi`, `lisensi`, `keterangan`) VALUES
(1, 'LISENSI D PSSI', ''),
(2, 'LISENSI C DIPLOMA', ''),
(3, 'LISENSI C AFC', ''),
(4, 'LISENSI B DIPLOMA', ''),
(5, 'LISENSI A DIPLOMA', ''),
(6, 'LISENSI A PRO', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatih`
--

CREATE TABLE `pelatih` (
  `id_pelatih` int(11) NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 1,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blokir` int(11) NOT NULL DEFAULT 1,
  `nama` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(255) NOT NULL,
  `lisensi` varchar(255) NOT NULL,
  `tgl_lisensi` date NOT NULL,
  `notel` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelatih`
--

INSERT INTO `pelatih` (`id_pelatih`, `akses`, `username`, `password`, `email`, `blokir`, `nama`, `nama_panggilan`, `alamat`, `tgl_lahir`, `nik`, `lisensi`, `tgl_lisensi`, `notel`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ARSON', '$2y$10$GnMnsxDa4hB2wLItDz/KLOo1xKkerqZbuE/Pupx6dKMTvLdKwxJna', 'artson.pertiwi@gmail.com', 1, 'Busahri', '', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637373678_4c28c80a3debb96d8b6b.jpeg', '2021-11-19', '2021-11-19', '0000-00-00'),
(2, 1, 'Abdul Karim Kamaruddin', '$2y$10$AMlJV3UGndZWcHf.aUnfKe/QDLuj8krRKuoKFBlulTyGkoIf4IR7q', 'abdulkarimachmad@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637371442_2c16f3feb74ad18a82eb.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(3, 1, 'NARHAM', '$2y$10$47o062JS4slG7CCnwMbBEebsrCujLBuOoGTbY81c1VZQvSxOkPKBK', 'ahlamzulfadlirahmani03@gmail.com', 1, 'bacoooo', 'NARHAM', 'KELAPA TIGA', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '082320242684', '1637407724_3323dbc96665c3cf83e5.jpg', '2021-11-19', '2021-11-20', '0000-00-00'),
(4, 1, 'zulfitrahsaleh@gmail.com', '$2y$10$8xEBSfJMhJxGBhb7T45u2.xniTdEwK7ZbRFajVDLH4IvQNc4u/zTC', 'zulfitrahsaleh@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(5, 1, 'Muh. Akmal Almy, M.Or', '$2y$10$ZnMJlotAPMFJ8vIZvAh0XuDNScjU0qcLFSxL.fHLO.zNwnrbQXiTC', 'dilcshad28@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637367971_42d56a0c4d075631a82f.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(6, 1, 'Akmal Almy', '$2y$10$xYI/32Xci8niZ6OVwVFTIOJ/c/IO/D4Q7fFW6b2xqHTDaTuZ0MvhC', 'sport8science@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(7, 1, 'udin sangkala', '$2y$10$8j0iuHWDRABKEoRQLo/Sa.EbdZFtBbTMSjH9/ClabcvNfRMmLeW8K', 'udinsangkala86@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(8, 1, 'Safaruddin.l', '$2y$10$Nfmxclt2L7fbtvZLIIZ6jeumDkfTWJ5ienMUbe.u31DLSjvPS.OS.', 'saparbjo982@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637369610_c95f09a210cbd2c56aa5.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(9, 1, 'SYAMSUDDIN S.  PUYOL', '$2y$10$xvvqata1aReBQaXfhwRqaeD6z/XWGxZMQhniyfA8VhkIM4.Te1BBm', 'pjokudin@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(10, 1, 'Rifai Arsyad', '$2y$10$grfm0iUyJYp.S4AH/AWbPeVnZ8qsa/KJ25RZO1cDLH0gnUIogBj5m', 'rifai26arsyad@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637371770_af4c127a763c1358f080.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(11, 1, 'Ma\'mur ', '$2y$10$dqN5JSiYGIlN.FASklvO2e3bOkDxOT6qf5iyE7QBwAkSj6DEkOco6', 'mamurnai81@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(12, 1, 'Didi Said', '$2y$10$b.zWCyorPmPtK9A7l7K44u57HDz0dQmQxJwD8kOoUu5fwkCsuD396', 'didisaid0808@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637370565_35161b949681083ad0ff.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(13, 1, 'Muh Yusril ', '$2y$10$deQctsGKWp/zkDfIYiYZoOleKfb7bHhpbXCPv/bklolsvtsbxqnli', 'ramesajip@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(14, 1, 'Muh.farham', '$2y$10$TtLzxGaeZhDTPZ5YmULDeu1w4w43tgBCaEZJAQByYnzlohaoV4W/i', 'arrank78@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(15, 1, 'M. Rusli', '$2y$10$DeSrNC405jW95UKhVCGzQuIoOi1.5hX7J08TKaehfpj.o.fQMME5G', 'mrusli19863@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(16, 1, 'M.Takdir', '$2y$10$ee2UY5ePFiqnB.eDIv8lUe8mD19/RRogNmoCAIsjCG2HcWil/pkUS', 'mtakdirmuhammad@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(17, 1, 'Aksam', '$2y$10$qR02QhjJkmaiscOQbb75Wu7Pmql.c8.DnmhK9yBC9PTi6mXP1tDY6', 'pratamaaksam@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637371632_5bb3e37a32de50e8da58.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(18, 1, 'M.efendi', '$2y$10$zbuzvgia6L71E0Td3lRSl.9i7eWvn1CVdvbgPaB6OFfSzdm5P2ghu', 'fendi78pom3@gmail.com', 1, 'Mohamad Efendi', 'Efendi', 'Aspom Gatot Subroto.jln.kalimantan no 93 blok D4 Makasar', '1978-06-05', '7371050506780004', 'LISENSI C DIPLOMA', '2020-03-24', '082226985678', '1637386980_14d028cfef08abeed12a.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(19, 1, 'Muhammad Nurdin', '$2y$10$1FtUGytxcTTFXQc4370RuucS3NagemMYAM5SgirWqufBIaqXQjc52', 'incenurdin152680@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(20, 1, 'Hendra wijaya', '$2y$10$Q3SBeXyTlmuCOlkorKHBQ.Trzs7HdZLz9LeyG0Q4iSx4cr24zyYH.', 'hendra02hw@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637376998_6fc56e238e0cc4779193.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(21, 1, 'Acksandi fuad ', '$2y$10$TjooEKkWsxQgXhweBXWLFOORNGMk.cxphbmlMMbBwI3TV6DiqYorK', 'acksandifuad@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(22, 1, 'Hendri purnawan', '$2y$10$Qp5hQMH/aXMZuMieUB40puEH70c69upfvrSfyiin1i/9TxjtQ/wY2', 'Hendritulo@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(23, 1, 'Ghazali Adil', '$2y$10$HrEw15myyy8MrVJVXzrXJ.6f.UO1xPRKT8zPP1ohGvGMTpvEMIkR2', 'ghazaliadil29@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', '1637377844_3636870adbe44cc5ba11.jpeg', '2021-11-19', '2021-11-19', '0000-00-00'),
(24, 1, 'Syahrul', '$2y$10$tnDmZzvn58MbjBOiXVxJZ.C9KL30sGsKV6CQP02etffTHntCllfJK', 'syahrularul2382@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(25, 1, 'Erik86', '$2y$10$W7M1hAZnyvkdk35zhL4dEe/sMLsOycBfHDnMsZ2LLdORsj2KRJQBq', 'erikpersipa86@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(26, 1, 'Samsir farid', '$2y$10$pif5YQ3Ctpk6EhWVWn44w.84Kl4s6BUXxaj72Uid9.ZFhp9KUI9K.', 'samsir.farid07@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(27, 1, 'Akhmad Yani KM', '$2y$10$Ig3v4adkq84qHs/2zh3XleKFQ51DsS1SVdmI1NNB/D.Zbv33q9N/O', 'akhmadyanikm05@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(28, 1, 'GUSRI', '$2y$10$aMhxa3SvhQ5tSiLoKOHrr.Q6Iwdp9oNaKmqZzXunT198X.cFW0a5u', 'gusri.du@gmail.com', 1, 'MUH GUSRI DAMAR ULANG,SH', 'GUGHUN', 'JL.H.A. PARENRENGI NO. 56 SENGKANG KAB. WAJO', '2021-11-26', '7313062611720002', 'LISENSI C AFC', '2021-02-19', '085 2823 444 00', '1637385059_ca537911ab1b4a5a4874.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(29, 1, 'arinunung72@gmail.com', '$2y$10$ZW6DM4kPCFdRSJatP/BKsOdte68XoCzKFDf3wXD8cseERRlzDwXf.', 'arinunung72@gmail.com', 1, 'Busahri', 'Buserpsad', 'Gowa Pelita mas A 6 No 20', '1972-03-05', '7306070609120007', 'LISENSI C AFC', '2018-07-18', '081245413462', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(30, 1, 'Erwin Zainuddin', '$2y$10$I90I2nmMxo7YMFU9ueKtFu628Ia0Gug3r9xaIbP0sg9viWUnspfTS', 'erwinzainuddin.021176@gmail.com', 1, '', '', '', '0000-00-00', '', '', '0000-00-00', '', 'avatar.png', '2021-11-19', '2021-11-19', '0000-00-00'),
(31, 1, 'ridhoard13', '$2y$10$tanRC0EcqMnwvUAgrvP1Tej4dzdPESQHKqFuv0uNgBeRoJ/IeFJiG', 'andyridho64@gmail.com', 1, 'Andi Ridwan,S.Pd.,M.Pd', 'Ridho', 'Jl.Maccini Raya Lr 2,No.7', '1983-08-25', '7371032508820002', 'LISENSI D PSSI', '2020-02-16', '082297691049', '1637386535_6af6d79b8360cc85959e.webp', '2021-11-19', '2021-11-19', '0000-00-00'),
(32, 1, 'Muhammad Nurdin', '$2y$10$9LINBoxUNgGKDVEx1yTQHu63PV1H71A7LyYogOoj0qezLCbcAuzWq', 'muhammadnurdin123@gmail.com', 1, 'Muhammad Nurdin', 'Ince', 'jln tamangapa raya kampung kajang', '1980-05-15', '7371121505800007', 'LISENSI D PSSI', '2020-12-25', '082188168833', '1637385010_bdb7916804512b0c29f9.jpg', '2021-11-19', '2021-11-19', '0000-00-00'),
(33, 1, 'admin@fopsdim.com', '$2y$10$GQDhSgpN9smpT5JsssSwrO/tmV42ng88ghv3A6IhiwP2gRIOj3cMS', 'bisnis.randy@yahoo.com', 1, '', '', '', '0000-00-00', '', '', '0000-00-00', '', 'avatar.png', '2021-11-20', '2021-11-20', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `notel` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indeks untuk tabel `kategori_team`
--
ALTER TABLE `kategori_team`
  ADD PRIMARY KEY (`id_kategori_team`);

--
-- Indeks untuk tabel `lisensi`
--
ALTER TABLE `lisensi`
  ADD PRIMARY KEY (`id_lisensi`);

--
-- Indeks untuk tabel `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`id_pelatih`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kategori_team`
--
ALTER TABLE `kategori_team`
  MODIFY `id_kategori_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `lisensi`
--
ALTER TABLE `lisensi`
  MODIFY `id_lisensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pelatih`
--
ALTER TABLE `pelatih`
  MODIFY `id_pelatih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
