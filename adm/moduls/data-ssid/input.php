	<div class="menu">
		<ul>
			<li>Input SSID baru</li>
			<li><a class="klik_menu" id="tutorial" > Kembali</a></li>
		</ul>			
	</div>
	<br/>
	
	<form action="moduls/data-ssid/input-aksi.php" method="post">		
		<table border="0px" class="table">
			<tr>
				<td width="140px">TANGGAL PASANG</td>
				<td><input type="date" name="tgl_instalasi"></td>					
			</tr>	
			<tr>
				<td>NAMA SSID</td>
				<td><input type="text" name="nama_ssid"></td>					
			</tr>	
			<tr>
				<td>PASSWORD</td>
				<td><input type="text" name="password"></td>					
			</tr>
			<tr>
				<td>TGL GANTI PASSWORD</td>
				<td><input type="date" name="tgl_gantipswd"></td>					
			</tr>
			<tr>
				<td>PASWORD BARU</td>
				<td><input type="text" name="pswd_baru"></td>					
			</tr>
			<tr>
				<td>MERK</td>
				<td><input type="text" name="merk"></td>					
			</tr>
			<tr>
				<td>LOKASI</td>
				<td><input type="text" name="lokasi"></td>					
			</tr>
			<tr>
				<td>GEDUNG</td>
				<td><input type="text" name="gedung"></td>					
			</tr>
			<tr>
				<td>REMOTE</td>
				<td>
					<select name='remote'>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>
					</select>
					
				</td>					
			</tr>
			<tr>
				<td>IP ADDRESS</td>
				<td><input type="text" name="ip_address"></td>					
			</tr>
			<tr>
				<td>PIC/PETUGAS</td>
				<td><input type="text" name="pic"></td>					
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
					$('.badan').load('moduls/data-ssid/');						
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