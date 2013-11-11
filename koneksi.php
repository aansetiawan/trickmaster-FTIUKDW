<?php 
$host="localhost"; 
$user="moses"; 
$password="Z4JvJ8mte9ApwASZ"; 
$database="moses"; 
$koneksi=mysql_connect($host,$user,$password); 
	mysql_select_db($database,$koneksi); 
	
	//cek koneksi 
	
	if($koneksi){ 
	//echo "berhasil koneksi"; 
		}else{ 
			echo "gagal koneksi"; 
} 
?> 
