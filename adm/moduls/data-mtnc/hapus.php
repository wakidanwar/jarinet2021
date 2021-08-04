<?php 
include 'koneksi.php';
$id_mtnc = $_GET['id_mtnc'];
mysql_query("DELETE FROM tbl_mtnc WHERE id_mtnc='$id_mtnc'")or die(mysql_error());

// header("location:index.php?pesan=hapus");
echo "<script>history.back()</script>";
?>