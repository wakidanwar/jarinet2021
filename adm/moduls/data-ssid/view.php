<!DOCTYPE html>
<html>
<head>
	<title>Edit Data User</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="/../jarinet/assets/stafs-style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="/../jarinet/assets/js/jquery-3.4.1.js"></script>
</head>
<body>
	<?php 
	include "koneksi.php";
	$id_ssid = $_GET['id_ssid'];
	$query_mysql = mysql_query("SELECT * FROM tbl_ssid WHERE id_ssid='$id_ssid'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
		?>
	<!-- <a href="index.php">Lihat Semua Data</a> -->

	<div class="halaman">
		<h3>Data SSID "<?php echo $data['nama_ssid'] ?>"</h3>

		
			<form action="update.php" method="post">		
				<table border="1px" class="table">
					<tr>
						<td>ID-SSID/TGL INSTALASI</td>
						<td> SSID00<?php echo $data['id_ssid'] ?> : <?php echo $data['tgl_instalasi'] ?></td>					
					</tr>	
					<tr>
						<td>NAMA SSID</td>
						<td><b><?php echo $data['nama_ssid'] ?></b> </td>					
					</tr>	
					<tr>
						<td>PASSWORD SSID</td>
						<td><b><?php echo $data['password'] ?></b></td>				
					</tr>
					<tr>
						<td>TGL GANTI PASSWORD</td>
						<td><?php echo $data['tgl_gantipswd'] ?></td>
					</tr>
					<tr>
						<td>PASSWORD BARU</td>
						<td><?php echo $data['pswd_baru'] ?></td>					
					</tr>
					<tr>
						<td>MERK</td>
						<td><?php echo $data['merk'] ?></td>					
					</tr>
					<tr>
						<td>LOKASI</td>
						<td><?php echo $data['lokasi'] ?></td>					
					</tr>
					<tr>
						<td>GEDUNG</td>
						<td><?php echo $data['gedung'] ?></td>					
					</tr>
					<tr>
						<td>REMOTE</td>
						<td><?php echo $data['remote'] ?></td>
					</tr>
					<tr>
						<td>IP ADDRES</td>
						<td><?php echo $data['ip_address'] ?></td>
					</tr>
					<tr>
						<td>PIC/PETUGAS</td>
						<td><?php echo $data['pic'] ?></td>
					</tr>	
					<tr>
						<td></td>
						<td><input class="button-hps" type="submit" value="Close"></td>					
					</tr>				
				</table>
			</form>
		<?php } ?>
	</div>


</body>
</html>
