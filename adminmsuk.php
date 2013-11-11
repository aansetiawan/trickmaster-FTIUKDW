<?php session_start(); 
include "koneksi.php"; 
	$username=$_POST['username']; 
	$password=$_POST['password']; 
	$query=mysql_query("select * from admin where username='$username' and password='$password'"); 
	$cek=mysql_num_rows($query); 
	
	if($cek){ 
	$_SESSION['username']=$username; 
	header('location:index.php');
}
else{ 
	header('location:masuk.php');
	} 
?> 
