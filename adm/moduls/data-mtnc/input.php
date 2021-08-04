	<div class="menu">
		<ul>
			<li>MAINTENANCE BARU</li>
			<li><a class="klik_menu" id="tutorial" > Kembali</a></li>
		</ul>			
	</div>
	<br/>
	
	<form action="moduls/data-mtnc/input-aksi.php" method="post">		
		<table style="border: 2px dashed black;" class="table">
			<tr style="border: 1px dashed black;">
				<td style="width: 135px;">TANGGAL MAINTENANCE</td>
				<td><input type="date" name="tanggal"></td>					
			</tr>	
			<tr style="border: 1px dashed black;">
				<td>LOKASI</td>
				<td><input type="text" name="lokasi"> | PETUGAS/PIC : <input type="text" name="petugas">
				</td>					
			</tr>
			<tr style="border: 1px dashed black;">
				<td>URAIAN MASALAH</td>
				<td><textarea name="uraian_masalah" rows="5" cols="70">Uraikan Masalahnya ?</textarea></td>
			</tr>
			<tr style="border: 1px dashed black;">
				<td>KENDALA</td>
				<td><textarea name="kendala" rows="5" cols="70">Kendala di lapangan ?</textarea></td>					
			</tr>
			<tr style="border: 1px dashed black;">
				<td>SOLUSI PERBAIKAN</td>
				<td><textarea name="solusi" rows="5" cols="70">Solusi yang dilakukan ?</textarea></td>					
			</tr>
			<!-- <tr style="border: 1px dashed black;">
				<td>PETUGAS</td>
				<td><input type="text" name="petugas"></td>					
			</tr> -->
			<tr style="border: 1px dashed black;">
				<td>STATUS/KET</td>
				<td>
					<select name='keterangan'>
						<option style="color: #FCC01D" value='ON-PROGRESS'> ON-PROGRESS</option>
						<option style="color: #FC1D1D" value='PENDING'>PENDING</option>
						<option style="color: #40D007" value='SUCCESS'>SUCCESS</option>
					</select>
					
				</td>					
			</tr>				
			<tr style="border: 1px dashed black;">
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
					$('.badan').load('moduls/data-mtnc/');						
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