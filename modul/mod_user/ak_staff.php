<?php
	include "../../include/class.php";
	$doc = new Doutor();


$module=$_GET['modul'];
$act=$_GET['act'];

if($module=='staff' AND $act=='input'){
		
	$nufun		= $_POST['nure'];
	$naran		= $_POST['naran'];
	$sexu       = $_POST['sexu'];
	$posisaun	= $_POST['posisaun'];
		
	$doc->saveFunsionario($nufun,$naran,$sexu,$posisaun);

	header("Location: ../../staff.html");
}
elseif($module == 'staff' AND $act=='update'){

	$nufun		= $_POST['nure'];
	$naran		= $_POST['naran'];
	$sexu       = $_POST['sexu'];
	$posisaun	= $_POST['posisaun'];
		
	$doc->updateFunsionario($nufun,$naran,$sexu,$posisaun);

	header("Location: ../../staff.html");
}
// elseif($module=='user' AND $act=='delete'){
	
// 	$nuuse = $_GET['iduser'];
// 	$user->deleteUser($nuuse);

// 	header("Location: ../../user.html");
// }