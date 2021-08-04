<?php 
include 'koneksi.php';
$tanggal 		= $_POST['tanggal'];
$lokasi 		= $_POST['lokasi'];
$uraian_masalah	= $_POST['uraian_masalah'];
$kendala	 	= $_POST['kendala'];
$solusi 		= $_POST['solusi'];
$petugas		= $_POST['petugas'];
$keterangan		= $_POST['keterangan'];

mysql_query("INSERT INTO tbl_mtnc VALUES('','$tanggal','$lokasi','$uraian_masalah','$kendala','$solusi','$petugas','$keterangan')");

// header("location:");
echo "<script>history.back()</script>";
?>