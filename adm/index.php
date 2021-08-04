	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../index.php?pesan=gagal");
	}

	?>

<!DOCTYPE html>
<html>
<head>
	<title>ICT Control Network - [<?php echo $_SESSION['username']; ?>]</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="../assets/stafs-style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="../assets/js/jquery-3.4.1.js"></script>
</head>
<body>

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
<div class="content">
<!-- 	<header>
		<h1 class="judul">Halaman <?php echo $_SESSION['username']; ?></h1>
		<h3 class="deskripsi"><p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p></h3>	
	</header> -->

	<div class="menu">
		<ul>
			<li><img style="width: 13px;" src="../assets/imgs/logoict.png"></li>
			<!-- <li><strong><?php echo $_SESSION['level']; ?>Pages</strong></li> -->
			<li><a class="klik_menu" id="home">DASH</a></li>
			<li><a class="klik_menu" id="ssid">SSID</a></li>
			<li><a class="klik_menu" id="mtnc">MTNC</a></li>
			<li><a class="klik_menu" id="tentang">SCHEME</a></li>
			<li><a class="klik_menu" id="userman">USER</a></li>
			<!-- <li><a class="klik_menu" id="sosmed">SOSIAL MEDIA</a></li> -->
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
				}else if(menu == "ssid"){
					$('.badan').load('moduls/data-ssid/');						
				}else if(menu == "mtnc"){
					$('.badan').load('moduls/data-mtnc/');						
				}else if(menu == "userman"){
					$('.badan').load('moduls/data-user/');						
				}else if(menu == "sosmed"){
					$('.badan').load('sosmed.php');						
				}else if(menu == "input"){
					$('.badan').load('moduls/data-user/input.php');						
				}
			});


			// halaman yang di load default pertama kali
			$('.badan').load('home.php');						

		});
	</script>
</html>