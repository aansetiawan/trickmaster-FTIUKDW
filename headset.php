<?php
	session_start();
	include("koneksi.php");
	if($_SESSION==TRUE){
		$flag=1;
	}
	else{
		$flag=0;
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		<title>BlenkCom</title>
		<link rel="stylesheet" href="css/style1.css" type="text/css" />
		<link rel="stylesheet" href="style1.css" type="text/css" />
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="dropdown.js"></script>
		<script type="text/javascript" src="slides.js"></script>
		<script type="text/javascript" src="slideshow.js"></script>
	</head>
	
	<body>
	<div id="wrapper">
		<div id="header">
			<img src="gambar/logo.png" alt="logo" />
			<ul id="header_nav">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="produk.php">PRODUK</a>
					<ul>
						<li><a href="charger.php">Charger</a></li>
						<li><a href="flashdisk.php">Flashdisk</a></li>
						<li><a href="headset.php">Headset</a></li>
						<li><a href="keyboard.php">Keyboard</a></li>
						<li><a href="mouse.php">Mouse</a></li>
						<li><a href="modem.php">Modem</a></li>
						<li><a href="powerbank.php">Power Bank</a></li>
						<li><a href="stick.php">Stick</a></li>
						<li><a href="speaker.php">Speaker</a></li>
						<li><a href="usb.php">USB Port</a></li>
					</ul>
					<div class="clear"></div>
				</li>
				<li><a href="#">TENTANG KAMI</a></li>
				<li>&nbsp</li><li>&nbsp</li>
				<li><a href="pendaftaran.php">DAFTAR</a></li>

				<?php
				if($flag==0){
					echo "<li><a href='masuk.php'>MASUK</a></li>";
				}
				else if($flag==1){
					echo "<li><a href='keluar.php'>KELUAR</a></li>";
				}
				?>
			</ul>
			
		</div>
		
		<ul id="category_nav">
			<li><a href="charger.php">Charger</a></li>
			<li><a href="flashdisk.php">Flashdisk</a></li>
			<li><a href="headset.php"><strong>Headset</strong></a></li>
			<li><a href="keyboard.php">Keyboard</a></li>
			<li><a href="mouse.php">Mouse</a></li>
			<li><a href="modem.php">Modem</a></li>
			<li><a href="powerbank.php">Power Bank</a></li>
			<li><a href="stick.php">Stick</a></li>
			<li><a href="speaker.php">Speaker</a></li>
			<li><a href="usb.php">USB Port</a></li>
			
		</ul>
		
				<div id="itemlist">
			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/headset1.jpg" alt="gambar1">
					<p><input type="submit" name="1" value="Beli"> <br/>Power Bank <br/>
					Rp 100.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/headset2.jpg" alt="gambar1">
					<p><input type="submit" name="1" value="Beli"> <br/>Power Bank <br/>
					Rp 100.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/headset3.jpg" alt="gambar1">
					<p><input type="submit" name="1" value="Beli"> <br/>Power Bank <br/>
					Rp 100.000
					</p>
				</form>
				</div>
			</a>
		</div>

		<div id="footer">
			<div id="foot_menu">
				<ul>
					<li class="menu"><a href="#">Beranda </a></li>
					<li class="menu"><a href="#">Produk </a></li>
					<li class="menu"><a href="#">Tentang Kami</a></li>
					<li><a href="#">Bantuan</a></li>
					<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://blenkkomputer.hostei.com/blenk/index.php" data-via="Progweb" data-lang="en"></a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</li>
				</ul>
			</div>
			<p>&copy Website Toko Blank Komputer</p>
			<?php
				echo "$flag";
			?>
		</div>

	</div>
	</body>
</html>


