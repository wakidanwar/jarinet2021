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
		$id = $_GET['id'];
		$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
			?>
			<form action="update.php" method="post">		
				<table class="table">
					<tr>
						<td>Nama</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $data['id'] ?> ">
							<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
						</td>					
					</tr>	
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>					
					</tr>	
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>					
					</tr>
					<tr>
						<td>Level</td>
						<td><input type="text" name="level" value="<?php echo $data['level'] ?>"></td>					
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
