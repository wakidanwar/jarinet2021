	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<div class="menu">
		<ul>
			<li><a style="color: white;" class="button klik_menu" id="input" > + Data Baru</a></li>
		</ul>			
	</div>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>KODE/TANGGAL</th>
			<th>URAIAN MASALAH</th>
			<th>KENDALA</th>
			<th>SOLUSI PERBAIKAN</th>
			<!-- <th>PETUGAS</th> -->
			<th>KET</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM tbl_mtnc ORDER BY tanggal DESC")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
			?>
			<tr>
				<td > <?php echo $nomor++; ?></td>
				<td width="130px" >
					<a class="button-wrn" href="/jarinet/adm/moduls/data-mtnc/view.php?id_mtnc=<?php echo $data['id_mtnc']; ?>" target="popup" onclick="window.open('/jarinet/adm/moduls/data-mtnc/view.php?id_mtnc=<?php echo $data['id_mtnc']; ?>','edit','width=600,height=350')">MTNC0<?php echo $data['id_mtnc']; ?>/<?php echo $data['tanggal']; ?></a> <br>| LOC : <span class="button-abu"><?php echo $data['lokasi']; ?></span>
				</td>
				<td width="190px" > <?php echo $data['uraian_masalah']; ?></td>
				<td width="190px" > <?php echo $data['kendala']; ?></td>
				<td width="190px" > <?php echo $data['solusi']; ?></td>
				<!-- <td > <?php echo strtoupper($data['petugas']); ?></td> -->
				<td width="100px">
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
					<span class="button-melon"> <?php echo strtoupper($data['petugas']); ?></span>
				</td>
				<td width="70px">
					<a class="button" href="/jarinet/adm/moduls/data-mtnc/edit.php?id_mtnc=<?php echo $data['id_mtnc']; ?>" target="popup" onclick="window.open('/jarinet/adm/moduls/data-mtnc/edit.php?id_mtnc=<?php echo $data['id_mtnc']; ?>','edit','width=575,height=370')">Edit</a>
					<a class="button-hps" href="/jarinet/adm/moduls/data-mtnc/hapus.php?id_mtnc=<?php echo $data['id_mtnc']; ?>">Hapus</a>				
				</td>
			</tr>
		<?php } ?>
	</table>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.klik_menu').click(function(){
				var menu = $(this).attr('id');
				if(menu == "home"){
					$('.badan').load('home.php');						
				}else if(menu == "tentang"){
					$('.badan').load('troubleshoot.php');						
				}else if(menu == "tutorial"){
					$('.badan').load('moduls/data-user/');						
				}else if(menu == "sosmed"){
					$('.badan').load('sosmed.php');						
				}else if(menu == "input"){
					$('.badan').load('moduls/data-mtnc/input.php');						
				}
			});


			// halaman yang di load default pertama kali
			// $('.badan').load('home.php');						

		});
	</script>