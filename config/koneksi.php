<?php 
// host,user, password dan nama database.
$koneksi = mysqli_connect("localhost","root","1ct2014","db_jarinet");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>