<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

mysql_query("INSERT INTO user VALUES('','$nama','$username','$password','$level')");

// header("location:");
echo "<script>history.back()</script>";
?>