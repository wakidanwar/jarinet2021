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
			<th>KODE INSTALASI</th>
			<th>NAMA SSID</th>
			<th>PASSWORD</th>
			<!-- <th>TGL_GANTIPSWD</th> -->
			<!-- <th>PSWD_BARU</th> -->
			<!-- <th>MERK</th> -->
			<th>LOKASI</th>
			<!-- <th>GEDUNG</th> -->
			<th>REMOTE</th>
			<th>IP ADDRESS/ALT</th>
			<th>PIC</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM tbl_ssid")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td>
				<a class="button-wrn" href="/jarinet/adm/moduls/data-ssid/view.php?id_ssid=<?php echo $data['id_ssid']; ?>" target="popup" onclick="window.open('/jarinet/adm/moduls/data-ssid/view.php?id_ssid=<?php echo $data['id_ssid']; ?>','edit','width=450,height=350')">SSID00<?php echo $data['id_ssid']; ?>/<?php echo $data['tgl_instalasi']; ?></a>
			</td>
			<td><?php echo $data['nama_ssid']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<!-- <td><?php echo $data['tgl_gantipswd']; ?></td> -->
			<!-- <td><?php echo $data['pswd_baru']; ?></td> -->
			<!-- <td><?php echo $data['merk']; ?></td> -->
			<td><?php echo $data['lokasi']; ?></td>
			<!-- <td><?php echo $data['gedung']; ?></td> -->
			<td><?php echo $data['remote']; ?></td>
			<td><a href="http://<?php echo $data['ip_address']; ?>" target="_blank"><?php echo $data['ip_address']; ?></a></td>
			<td><?php echo $data['pic']; ?></td>
			<td>
				<a class="button" href="/jarinet/adm/moduls/data-ssid/edit.php?id_ssid=<?php echo $data['id_ssid']; ?>" target="popup" onclick="window.open('/jarinet/adm/moduls/data-ssid/edit.php?id_ssid=<?php echo $data['id_ssid']; ?>','edit','width=720px,height=465px')">Edit</a> |
				<a class="button-hps" href="/jarinet/adm/moduls/data-ssid/hapus.php?id_ssid=<?php echo $data['id_ssid']; ?>">Hapus</a>				
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
				$('.badan').load('moduls/data-ssid/input.php');						
			}
		});


			// halaman yang di load default pertama kali
			// $('.badan').load('home.php');						

		});
	</script>