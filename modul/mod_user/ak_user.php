<?php
	include "../../include/class.php";
	$user = new User();

// $r=$_GET['nudep'];
$module=$_GET['modul'];
$act=$_GET['act'];

if($module=='user' AND $act=='input'){
		
	$nuuse		= $_POST['iduse'];
	$naran		= $_POST['naran'];
	$pass= $_POST['pass'];
	$level	= $_POST['level'];
		
	$user->saveUser($nuuse,$naran,$pass,$level,$narand);

	header("Location: ../../user.html");
}
elseif($module == 'user' AND $act=='update'){

	$nuuse		= $_POST['iduse'];
	$naran		= $_POST['naran'];
	$pass       = $_POST['pass'];
	$level	    = $_POST['level'];
		
	$user->updateUser($nuuse,$naran,$pass,$level,$narand);

	header("Location: ../../user.html");
}
// elseif($module=='user' AND $act=='delete'){
	
// 	$nuuse = $_GET['iduser'];
// 	$user->deleteUser($nuuse);

// 	header("Location: ../../user.html");
// }
echo"hhhhhhhhhhhh";
?>