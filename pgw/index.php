<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - www.malasngoding.com</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="../assets/stafs-style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="../assets/js/jquery-3.4.1.js"></script>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../index.php?pesan=gagal");
	}

	?>
<div class="content">
<!-- 	<header>
		<h1 class="judul">Halaman <?php echo $_SESSION['username']; ?></h1>
		<h3 class="deskripsi"><p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p></h3>	
	</header> -->

	<div class="menu">
		<ul>
			<li><strong><?php echo $_SESSION['username']; ?>Pages</strong></li>
			<li><a class="klik_menu" id="home">HOME</a></li>
			<li><a class="klik_menu" id="tentang">TENTANG</a></li>
			<li><a class="klik_menu" id="tutorial">TUTORIAL</a></li>
			<li><a class="klik_menu" id="sosmed">SOSIAL MEDIA</a></li>
			<li><a href="../logout.php">LOGOUT</a></li>
		</ul>
	</div>

	<div class="badan">

	</div>

</div>

</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.klik_menu').click(function(){
				var menu = $(this).attr('id');
				if(menu == "home"){
					$('.badan').load('home.php');						
				}else if(menu == "tentang"){
					$('.badan').load('tentang.php');						
				}else if(menu == "tutorial"){
					$('.badan').load('tutorial.php');						
				}else if(menu == "sosmed"){
					$('.badan').load('sosmed.php');						
				}
			});


			// halaman yang di load default pertama kali
			$('.badan').load('home.php');						

		});
	</script>
</html>