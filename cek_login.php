<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include_once 'include/class.php';

$user 		= new User();
$injection 	= new Injection();

$userr = $_POST['username'];
$password = $_POST['password'];



if($user->get_sesi()) {
  header("location:home.html");
}
	#login docente
	$login1 = $user->cek_login($userr, $password);

	if ($login1) {
		$_SESSION['username'] = $userr;
		$_SESSION['status'] = 'Doutor';
		header("Location: home.html");

	} 
	else {
		echo "<script language='javascript'>
		alert('Soory, User ou Password Lalos!!!');
		document.location='index.php';
		</script>";
	}

?>