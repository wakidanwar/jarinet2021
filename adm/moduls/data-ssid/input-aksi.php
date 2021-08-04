<?php 
include 'koneksi.php';
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

mysql_query("INSERT INTO tbl_ssid VALUES('','$tgl_instalasi','$nama_ssid','$password','$tgl_gantipswd','$pswd_baru','$merk','$lokasi','$gedung','$remote','$ip_address','$pic')");

// header("location:");
echo "<script>history.back()</script>";
?>