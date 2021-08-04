<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

mysql_query("UPDATE user SET nama='$nama', username='$username', password='$password', level='$level' WHERE id='$id'");

echo "<script>window.close();</script>";

?>