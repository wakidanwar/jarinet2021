<?php
// mysql_connect('localhost', 'root', '');
// mysql_select_db('db_jarinet');
include '../config/mysqli-koneksi.php';
 
$table1 = "user";
$table2	= "tbl_ssid";
$table3	= "tbl_mtnc";
 
?>
<div class="halaman">
	<h1>Halaman Dashboard</h1>
	
	<div class="gallery">
		<a>
			<img src="../assets/imgs/userman.jpg" alt="userman.jpg" >
		</a>
		<div class="desc">
			<br>
			<b>Userman</b><br>
			Total User <b>
				<?php
				$sql = "SELECT count(*) AS jumlah_user FROM $table1";
				$query = mysql_query($sql);
				$result = mysql_fetch_array($query);
				echo "{$result['jumlah_user']} <br/>"; ?></b></p>
			</div>
	</div>

	<div class="gallery">
		<a>
			<img src="../assets/imgs/ssid-img.jpg" alt="ssid-img" >
		</a>
		<div class="desc">
			<br>
			<b>SSID</b><br>
			Total SSID <b>
				<?php 
				$sql = "SELECT count(*) AS jumlah_ssid FROM $table2";
				$query = mysql_query($sql);
				$result = mysql_fetch_array($query);
				echo "{$result['jumlah_ssid']} <br/>"; ?></b></p>
		</div>
	</div>

	<div class="gallery">
		<a>
			<img src="../assets/imgs/mtnc-img.jpg" alt="mtnc-img" >
		</a>
		<div class="desc">
			<br>
			<b>MAINTENANCE</b><br>
			Total MTNC <b>
				<?php 
				$sql = "SELECT count(*) AS jumlah_mtnc FROM $table3";
				$query = mysql_query($sql);
				$result = mysql_fetch_array($query);
				echo "{$result['jumlah_mtnc']} <br/>"; ?></b></p>
		</div>
	</div>

	<div class="gallery">
		<a>
			<img src="../assets/imgs/img_5terre.jpg" alt="Cinque Terre" >
		</a>
		<div class="desc">
			<br>
			<b>Userman</b><br>
			Total User <b></b></p>
		</div>
	</div>	
</div>