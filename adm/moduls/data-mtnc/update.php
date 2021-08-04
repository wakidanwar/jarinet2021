<?php 

include 'koneksi.php';
$id_mtnc 		= $_POST['id_mtnc'];
$tanggal 		= $_POST['tanggal'];
$lokasi 		= $_POST['lokasi'];
$uraian_masalah	= $_POST['uraian_masalah'];
$kendala	 	= $_POST['kendala'];
$solusi 		= $_POST['solusi'];
$petugas		= $_POST['petugas'];
$keterangan		= $_POST['keterangan'];

mysql_query("UPDATE tbl_mtnc SET tanggal='$tanggal', lokasi='$lokasi', uraian_masalah='$uraian_masalah', kendala='$kendala', solusi='$solusi', petugas='$petugas', keterangan='$keterangan' WHERE id_mtnc='$id_mtnc'");

echo "<script>window.close();</script>";

?>