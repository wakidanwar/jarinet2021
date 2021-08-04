	<div class="menu">
		<ul>
			<li>Input USER baru</li>
			<li><a class="klik_menu" id="tutorial" > Kembali</a></li>
		</ul>			
	</div>
	<br/>
	
	<form action="moduls/data-user/input-aksi.php" method="post">		
		<table border="0px" class="table">
			<tr>
				<td width="65px">Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>					
			</tr>
			<tr>
				<td>level</td>
				<td>
					<select name='level'>
						<option style="color: #FCC01D" value='admin'> Admin</option>
						<option style="color: #FC1D1D" value='pegawai'> Pegawai</option>
						<option style="color: #40D007" value='pengurus'> Pengurus</option>
					</select>
					
				</td>
			</tr>				
			<tr>
				<td></td>
				<td><input class="button" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>

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