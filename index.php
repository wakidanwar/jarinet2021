<!DOCTYPE html>
<html>
<head>
	<title>JARINET-POMOSDA</title>
	<link rel="stylesheet" type="text/css" href="assets/main-style.css">
</head>
<body>


	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak_login">
		<img style="display: block; margin-left: auto; margin-right: auto; width: 50px;" src="assets/imgs/logo-ncp.png"><p class="tulisan_login">NCP-LOGIN</p>

		<form action="config/cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .. ?" required="required">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..?" required="required">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<p class="tulisan_login">ICT-POMOSDA</p>
				<!-- <a class="link" href="#">kembali</a> -->
			</center>
		</form>
		
	</div>


</body>
</html>