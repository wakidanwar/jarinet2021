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
	$id_mtnc = $_GET['id_mtnc'];
	$query_mysql = mysql_query("SELECT * FROM tbl_mtnc WHERE id_mtnc='$id_mtnc'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
		?>
		<!-- <a href="index.php">Lihat Semua Data</a> -->

		<div class="halaman">
			<h3>Data MTNC "<?php echo $data['lokasi'] ?>"</h3>

			
			<form action="update.php" method="post">		
				<table border="1px" class="table">
					<tr>
						<td style="width: 100px;">ID-MTNC/TGL</td>
						<td > MTNC00<?php echo $data['id_mtnc'] ?> : <?php echo $data['tanggal'] ?></td>					
					</tr>	
					<tr>
						<td>LOKASI</td>
						<td><b><?php echo $data['lokasi'] ?></b> </td>					
					</tr>	
					<tr>
						<td>URAIAN MASALAH</td>
						<td><b><?php echo $data['uraian_masalah'] ?></b></td>				
					</tr>
					<tr>
						<td>KENDALA</td>
						<td><?php echo $data['kendala'] ?></td>
					</tr>
					<tr>
						<td>SOLUSI</td>
						<td><?php echo $data['solusi'] ?></td>					
					</tr>
					<tr>
						<td>PETUGAS/PIC</td>
						<td><?php echo $data['petugas'] ?></td>					
					</tr>
					<tr>
						<td>KETERANGAN</td>
						<td>
							<?php 
							if ($data['keterangan'] == "PENDING") {
								echo "<span class='button-hps'> Pending :o</span>";
							}
							elseif ($data['keterangan'] == "ON-PROGRESS") {
								echo "<span class='button-wrn'> On Progres :)</span>";
							}
							elseif ($data['keterangan'] == "SUCCESS") {
								echo "<span class='button'> Success :D</span>";
							} 
							else {
								echo "<span class='button-abu'>oh no!</span>";
							}
							?>
						</td>					
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
