<?php 
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
include "../../class/tamu.php";
$tamu = new Tamu();

	//mengisi attribute dengan hasil dari inputan
$tamu->email = $_POST['email'];
$tamu->password = $_POST['password'];


	//menampung hasil dari method create 
$error = $tamu->getLogin();
$yangcocok = $error->num_rows;

if ($yangcocok==1) {
	$_SESSION['tamu']=$error->fetch_assoc();

	if (!isset($_SESSION['reservation'])) {
		header("location: ../../index.php?page=home");
	}else{
		header("location: ../../index.php?page=checkout");
	}
	
}
else {	
	include "../../class/user.php";
	$user = new User();

	//mengisi attribute dengan hasil dari inputan

	$user->username= $_POST['email'];
	$user->password= $_POST['password'];


	//menampung hasil dari method create 
	$error = $user->getLogin();

	$yangcocok = $error->num_rows;

	if ($yangcocok==1) {
		$_SESSION['user']=$error->fetch_assoc();
		header("location: ../../page/admin/index.php");
	}
	else {
		//membuat session untuk menampilkan pesan error bernama message
		if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} 
		$_SESSION['message'] = "Periksa Email atau Password Anda";
		//memanggil tampilan create kambali
		header("location: ../../index.php?page=login");
	}
}
?>


