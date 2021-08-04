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
	<!-- <a href="index.php">Lihat Semua Data</a> -->

	<div class="halaman">
		<h3>Edit data</h3>

		<?php 
		include "koneksi.php";
		$id_ssid = $_GET['id_ssid'];
		$query_mysql = mysql_query("SELECT * FROM tbl_ssid WHERE id_ssid='$id_ssid'")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
			?>
			<form action="update.php" method="post">		
				<table border="1px" class="table">
					<tr>
						<td>TGL INSTALASI</td>
						<td>
							<input type="hidden" name="id_ssid" value="<?php echo $data['id_ssid'] ?> ">
							<input type="date" name="tgl_instalasi" value="<?php echo $data['tgl_instalasi'] ?>">
						</td>					
					</tr>	
					<tr>
						<td width="150px">NAMA SSID</td>
						<td>
							<input type="text" name="nama_ssid" value="<?php echo $data['nama_ssid'] ?>">
							| PASSWORD SSID : <input type="text" name="password" value="<?php echo $data['password'] ?>">
						</td>					
					</tr>
					<tr>
						<td>TGL GANTI PASSWORD</td>
						<td><input type="date" name="tgl_gantipswd" value="<?php echo $data['tgl_gantipswd'] ?>"></td>					
					</tr>
					<tr>
						<td>PASSWORD BARU</td>
						<td><input type="text" name="pswd_baru" value="<?php echo $data['pswd_baru'] ?>"></td>					
					</tr>
					<tr>
						<td>MERK</td>
						<td><input type="text" name="merk" value="<?php echo $data['merk'] ?>"></td>					
					</tr>
					<tr>
						<td>LOKASI</td>
						<td><textarea style="width: 385px;" name="lokasi" ><?php echo $data['lokasi'] ?></textarea></td>					
					</tr>
					<tr>
						<td>GEDUNG</td>
						<td><input type="text" name="gedung" value="<?php echo $data['gedung'] ?>"></td>					
					</tr>
					<tr>
						<td>REMOTE</td>
						<td>
							<select name='remote'>
								<option value='<?php echo $data['remote'] ?>'>Status <?php echo $data['remote'] ?></option>
								<option value='Yes'>Yes</option>
								<option value='No'>No</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>IP ADDRES</td>
						<td><input type="text" name="ip_address" value="<?php echo $data['ip_address'] ?>"></td>
					</tr>
					<tr>
						<td>PIC/PETUGAS</td>
						<td><input type="text" name="pic" value="<?php echo $data['pic'] ?>"></td>
					</tr>	
					<tr>
						<td></td>
						<td><input class="button" type="submit" value="Simpan"></td>					
					</tr>				
				</table>
			</form>
		<?php } ?>
	</div>


</body>
</html>
