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
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>




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

		<marquee><p>Selamat Datang Datang Di Webstie Kami, All Item DISKON 20% + 10% PERSEN</p></marquee>
		<br/><br/>
		
		<div id="slideshow">
			<img src="images/slider1.jpg" alt="" class="active" />
			<img src="images/slider2.jpg" alt="" />
			<img src="images/slider3.jpg" alt="" />
		</div>
		<br/>
		<br/>

		<p id="hot"><center><img src="gambar/hot.png" width="960px"></center></p>

		<div id="itemlist">
			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/speaker.jpg" alt="speaker">
					<p><input type="submit" name="1" value="Beli"> <br/>Speaer<br/>
					Rp 40.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/powerbank.jpg" alt="powerbank">
					<p><input type="submit" name="1" value="Beli"> <br/>Power Bank <br/>
					Rp 150.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/mouse.jpg" alt="mouse">
					<p><input type="submit" name="1" value="Beli"> <br/>Mouse <br/>
					Rp 85.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/modem.jpg" alt="modem">
					<p><input type="submit" name="1" value="Beli"> <br/>Modem <br/>
					Rp 199.999
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/keyboard.jpg" alt="keybpard">
					<p><input type="submit" name="1" value="Beli"> <br/>Keyboard <br/>
					Rp 130.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/headset.jpg" alt="headset">
					<p><input type="submit" name="1" value="Beli"> <br/>Headset <br/>
					Rp 90.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/flashdisk.jpg" alt="flashdisk">
					<p><input type="submit" name="1" value="Beli"> <br/>flash Disk <br/>
					Rp 40.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/charger.jpg" alt="charger">
					<p><input type="submit" name="1" value="Beli"> <br/>Charger <br/>
					Rp 150.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/usbport.jpg" alt="usbport">
					<p><input type="submit" name="1" value="Beli"><br/>Usb Port <br/>
					Rp 35.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/stick.jpg" alt="stick">
					<p><input type="submit" name="1" value="Beli"> <br/>Stick <br/>
					Rp 60.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/hardisk.jpg" alt="hardisk">
					<p><input type="submit" name="1" value="Beli"> <br/>hardisk External <br/>
					Rp 700.000
					</p>
				</form>
				</div>
			</a>

			<a href="#">
				<div class="itembox">
				<form action="prosesbeli.php" method="post">
					<img src="gambar/collingpad.jpg" alt="colling">
					<p><input type="submit" name="1" value="Beli"> <br/>Colling Pad <br/>
					Rp 99.999
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
			<center>
			<div class="fb-like" data-href="http://blenkkomputer.hostei.com/blenk/" data-width="50px" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
			</center>
			<p>&copy Website Toko Blank Komputer</p>
			<?php
				echo "$flag";
			?>
		</div>




	</div>
	</body>
</html>


