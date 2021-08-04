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
		<h3>Edit data Maintenance</h3>

		<?php 
		include "koneksi.php";
		$id_mtnc = $_GET['id_mtnc'];
		$query_mysql = mysql_query("SELECT * FROM tbl_mtnc WHERE id_mtnc='$id_mtnc'")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
			?>
			<form action="update.php" method="post">		
				<table class="table">
					<tr>
						<td>TGL MAINTENANCE</td>
						<td>
							<input type="hidden" name="id_mtnc" value="<?php echo $data['id_mtnc'] ?>">
							<input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>">
						</td>					
					</tr>
					<tr>
						<td>LOKASI</td>
						<td>
							<input type="text" name="lokasi" value="<?php echo $data['lokasi'] ?>">
							| PIC : <input type="text" name="petugas" value="<?php echo $data['petugas'] ?>">
						</td>					
					</tr>	
					<tr>
						<td>URAIAN MASALAH</td>
						<td><textarea style="width: 385px;" name="uraian_masalah" ><?php echo $data['uraian_masalah'] ?></textarea></td>					
					</tr>
					<tr>
						<td>KENDALA</td>
						<td><textarea style="width: 385px;" name="kendala" ><?php echo $data['kendala'] ?></textarea></td>					
					</tr>
					<tr>
						<td>SOLUSI</td>
						<td><textarea style="width: 385px;" name="solusi" ><?php echo $data['solusi'] ?></textarea></td>					
					</tr>
					<tr>
						<td>STATUS/KET</td>
						<td>
							<select name='keterangan'>
								<option style="color: #A60489" value="<?php echo $data['keterangan'] ?>" hidden><?php echo $data['keterangan'] ?></option>
								<option style="color: #FCC01D" value='ON-PROGRESS'> ON-PROGRESS</option>
								<option style="color: #FC1D1D" value='PENDING'> PENDING</option>
								<option style="color: #40D007" value='SUCCESS'> SUCCESS</option>
							</select>

						</td>					
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
