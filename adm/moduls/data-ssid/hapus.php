<?php 
include 'koneksi.php';
$id_ssid = $_GET['id_ssid'];
mysql_query("DELETE FROM tbl_ssid WHERE id_ssid='$id_ssid'")or die(mysql_error());

// header("location:index.php?pesan=hapus");
echo "<script>history.back()</script>";
?>