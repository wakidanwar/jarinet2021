<?php 

include 'koneksi.php';
$id_ssid 		= $_POST['id_ssid'];
$tgl_instalasi 	= $_POST['tgl_instalasi'];
$nama_ssid 		= $_POST['nama_ssid'];
$password 		= $_POST['password'];
$tgl_gantipswd 	= $_POST['tgl_gantipswd'];
$pswd_baru 		= $_POST['pswd_baru'];
$merk 			= $_POST['merk'];
$lokasi 		= $_POST['lokasi'];
$gedung 		= $_POST['gedung'];
$remote 		= $_POST['remote'];
$ip_address 	= $_POST['ip_address'];
$pic 			= $_POST['pic'];

mysql_query("UPDATE tbl_ssid SET tgl_instalasi='$tgl_instalasi', nama_ssid='$nama_ssid', password='$password', tgl_gantipswd='$tgl_gantipswd', pswd_baru='$pswd_baru', merk='$merk', lokasi='$lokasi', gedung='$gedung', remote='$remote', ip_address='$ip_address', pic='$pic' WHERE id_ssid='$id_ssid'");

echo "<script>window.close();</script>";

?>