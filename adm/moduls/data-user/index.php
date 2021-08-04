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
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td>
				<a class="button" href="/jarinet/adm/moduls/data-user/edit.php?id=<?php echo $data['id']; ?>" target="popup" onclick="window.open('/jarinet/adm/moduls/data-user/edit.php?id=<?php echo $data['id']; ?>','edit','width=600,height=400')">Edit</a> |
				<a class="button-hps" href="/jarinet/adm/moduls/data-user/hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>				
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
					$('.badan').load('moduls/data-user/input.php');						
				}
			});


			// halaman yang di load default pertama kali
			// $('.badan').load('home.php');						

		});
</script>