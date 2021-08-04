-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 06:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jarinet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mtnc`
--

CREATE TABLE `tbl_mtnc` (
  `id_mtnc` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `uraian_masalah` varchar(150) NOT NULL,
  `kendala` varchar(150) NOT NULL,
  `solusi` varchar(150) NOT NULL,
  `petugas` varchar(20) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mtnc`
--

INSERT INTO `tbl_mtnc` (`id_mtnc`, `tanggal`, `lokasi`, `uraian_masalah`, `kendala`, `solusi`, `petugas`, `keterangan`) VALUES
(1, '2020-06-22', 'SMA POMOSDA', 'Kotak jaringan di Lab. SMA POMOSDA kotor dan semerawut.', 'Kotak tengah tempat dilewati kabel jaringan kotor dan kurang kokoh.', 'Perbaikan kotak jaringan dan perbaikan Beberapa Peralatan di Lab. Komputer SMA POMOSDA.', 'WAKID, RIDWAN', 'SUCCESS'),
(2, '2020-06-24', 'Balairung', 'Laporan dari pengguna wifi, tidak bisa koneksi ke internet. tersambung dengan wifi tapi tidak bisa internetan', 'Tidak bisa konek internet, tidak bisa restart melalui remote.', 'Matikan dan nyalakan AP dengan interval 3 menit. Kemudian diperiksa koneksinya. melalui remote AP dan Mikrotik untuk Kendali keluaran bandwith AP.', 'WAKID', 'SUCCESS'),
(3, '2020-06-24', 'SMA POMOSDA', 'Perawatan Berkala, tata ulang AP Asatidz Dan AP Waka SMA', 'Peralatan kabel telpon milik telkom semerawut, perlu di tata ulang.', 'Ditata ulang, Dirapikan', 'WAKID, RIDWAN', 'SUCCESS'),
(4, '2020-06-26', 'SMA POMOSDA', 'Perawatan jaringan internet Kantor TU SMA POMOSDA dan Klinik', 'Kotor, Kabel semerawut.', 'Dibersihkan, ditata ulang', 'WAKID, RIDWAN', 'SUCCESS'),
(5, '2020-06-28', 'Asrama Putri', 'Akses Jalur ICT Ke asrama putri untuk, area Dhalem Utara, Waserda FotoCopy Terputus', 'Penhubung Switch di asrama putri mati, penybab Steker listrik Longgar.', 'Dipasang Kembali dengan Rapat.', 'RIDWAN', 'SUCCESS'),
(6, '2020-06-29', 'SMA POMOSDA', 'Ruang waka tidak terkoneksi internet', 'Kabel di switch, tidak terpasang dengan benar atau longgar.', 'Dipasang ulang ke switch dan kembali normal', 'WAKID', 'SUCCESS'),
(7, '2020-07-13', 'omah japo', 'internet lemot', 'wifi modem nyala, router dan wifi omah japo cache penuh, alamat ip remot wifi omah japo lupa', 'matikan wifi modem, dan restart roter dan wifi omah japo', 'ridwan', 'SUCCESS'),
(8, '2020-07-13', 'server', 'internet astinet los', 'kabel utama fiber 12 core dari telkom tidak dengan sempurna di olt telkom', 'memasang ulang dan test kabel utama fiber 12 core', 'teknisi telkom', 'SUCCESS'),
(9, '2020-07-15', 'kantor smp', 'cache wifi penuhkarna banyak yang akses', 'wifi tidak bisa di remot', 'hardrestart dan softrestar (restart system)', 'ridwan', 'SUCCESS'),
(10, '2020-08-09', 'SMA POMOSDA', 'Pemindahan kabel fiber optik antisipasi pembangunan bangunan baru di sma pomosda', 'Akan dilaksanakan pembangunan lantai dua di jalur fiber ict ke sma.', 'Pemindahan kabel', 'TIM JARINGAN', 'SUCCESS'),
(11, '2020-10-22', 'sd pomosda', 'password wifi sd sudah banyak yang tau, sehingga menggangu aktifitas manajement dan ustad sd', 'ip remot belum di setting sesuai dengan subnet jalur sd', '1.ganti passord login wifi sdsS\r\n2. setting ip remot di sesuaikan dengan subnet jaringan komputer sd', 'ridwan', 'SUCCESS'),
(12, '2021-07-24', 'WASERDA', 'Pemasangan kabel dan Menata kabel Lan Switch dan PC Waserda. Waserda menambah 2 unit baru untuk kasir.', 'Tidak Ada Kendala', 'Dipasang dengan baik', 'Wakid & Ridwan', 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ssid`
--

CREATE TABLE `tbl_ssid` (
  `id_ssid` int(11) NOT NULL,
  `tgl_instalasi` date NOT NULL,
  `nama_ssid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `tgl_gantipswd` date NOT NULL,
  `pswd_baru` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `lokasi` varchar(47) NOT NULL,
  `gedung` varchar(20) NOT NULL,
  `remote` varchar(5) NOT NULL,
  `ip_address` varchar(25) NOT NULL,
  `pic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ssid`
--

INSERT INTO `tbl_ssid` (`id_ssid`, `tgl_instalasi`, `nama_ssid`, `password`, `tgl_gantipswd`, `pswd_baru`, `merk`, `lokasi`, `gedung`, `remote`, `ip_address`, `pic`) VALUES
(1, '2020-01-05', 'balairung', 'kesepakatan', '0000-00-00', '-', 'TP-Link', 'Pemukiman Ustadz selatan Gor', 'Balairung', 'Yes', '10.10.11.250', 'Wakid'),
(2, '2020-03-05', 'misuwur', 'musyawarah', '0000-00-00', '-', 'TP-Link', 'Depan Kamar Pak imron', 'Balairung', 'Yes', '10.10.8.86', 'Wakid'),
(3, '2020-02-27', 'ICT S', 'alhusain', '0000-00-00', '-', 'Asus', 'Kantor ICT', 'Balairung', 'Yes', '192.168.60.253', 'wakid'),
(4, '2020-03-31', 'Dhalem Eyang', 'dudukdikursi', '2020-12-15', '-', 'Tenda', 'Ndalem eyang', 'Pagupon Jatayu', 'Yes', '10.10.11.254', 'Wakid'),
(5, '2019-11-05', 'LAB SMA', 'pomosda2020', '2020-01-06', 'pomosda2020', 'TP-Link', 'Lab Komputer', 'SMA POMOSDA LT 2', 'Yes', '192.168.45.2', 'Wakid'),
(7, '2020-06-03', 'Taliati', 'hidupsehat', '0000-00-00', '-', 'TP-Link', 'Kantor Taliati', 'Balairung', 'Yes', '192.168.60.252', 'WAKID'),
(9, '2018-06-19', 'STT POMOSDA', 'alqoyyim', '2020-06-23', 'greenschool', 'netis', 'lantai tiga stt', 'stt pomosda', 'Yes', '192.168.14.254', 'ridwan'),
(10, '2018-07-19', 'LAB_STT', 'almuntadzar', '2020-06-23', 'engineering20', 'tp-link', 'lantai dua stt', 'stt pomosda', 'Yes', '192.168.14.253', 'ridwan'),
(11, '2016-11-21', 'Kantor stt', 'sawikembang', '2020-06-23', 'telorambat', 'tp-link', 'lantai satu stt', 'stt pomosda', 'Yes', '192.168.15.252', 'ridwan'),
(12, '2020-06-24', 'Dhalem', 'kacangpajnang', '2020-06-24', '-', 'TP-Link', 'Dhalem Pak Roni', 'Asrama Putri', 'Yes', '10.10.10.163', 'WAKID'),
(13, '2020-06-24', 'R WAKA SMA', 'aktif2020', '2020-07-16', 'aktif2020', 'Netis', 'Ruang Waka SMA POMOSDA', 'SMA POMOSDA', 'Yes', '192.168.40.254', 'WAKID'),
(14, '2020-06-24', 'R ASATIDZ SMA', 'komunikatif', '2020-07-16', 'komunikatif', 'Netis', 'Ruang Ustadz SMA POMOSDA', 'SMA POMOSDA', 'Yes', '192.168.40.253', 'WAKID'),
(15, '2020-06-24', 'SMA POMOSDA', 'elinglanwaspodo', '2020-06-24', '-', 'Tenda', 'Ruang TU SMA POMOSDA', 'SMA POMOSDA', 'Yes', '192.168.43.12', 'WAKID'),
(17, '2020-07-06', 'AL-BAQIR', 'mulaiduluaja', '0001-01-01', '-', 'D-Link', 'Pendopo Dhalem', 'Dhalem', 'No', '192.168.10.253', 'RIDWAN'),
(18, '2020-12-21', 'SD POMOSDA', 'belajarteka', '0000-00-00', '-', 'D-Link', 'Depan teras', 'SD POMOSDA', 'Yes', '10.10.11.252', 'WAKID'),
(19, '2020-12-21', 'ASSODIQ', 'sum3nd33', '0000-00-00', '-', 'Tenda', 'Kantor pusat', 'Pagupon jatayu', 'No', '192.168.12.2', 'WAKID');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin wa', 'admin', 'admin123', 'admin'),
(2, 'pegawai', 'pegawai', 'pegawai', 'pegawai'),
(3, 'pengurus', 'pengurus', 'pengurus', 'pengurus'),
(4, 'Wakid Anwar', 'wakid', 'wakid', 'admin'),
(5, 'ridwan', 'ridwan', 'ridwan', 'admin'),
(6, 'mtnh', 'mtnh', 'sockyssku2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mtnc`
--
ALTER TABLE `tbl_mtnc`
  ADD PRIMARY KEY (`id_mtnc`);

--
-- Indexes for table `tbl_ssid`
--
ALTER TABLE `tbl_ssid`
  ADD PRIMARY KEY (`id_ssid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mtnc`
--
ALTER TABLE `tbl_mtnc`
  MODIFY `id_mtnc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_ssid`
--
ALTER TABLE `tbl_ssid`
  MODIFY `id_ssid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
