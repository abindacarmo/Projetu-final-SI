<?php
	include "../../include/class.php";
	$pmrksne = new Tratamento();

// $r=$_GET['nudep'];
$module=$_GET['modul'];
$act=$_GET['act'];

if($module=='konsultadoutor' AND $act=='input'){
		
	$pmrksn		= $_POST['pmrksn'];
	$idpas  	=$_POST['idkon'];
	$data		= $_POST['data'];
	$diagnosa	= $_POST['diagnosa'];
	$reseita       = $_POST['reseita'];
    $obser       = $_POST['obser'];
		
	$pmrksne->saveKoko($pmrksn,$idpas,$data,$diagnosa,$reseita,$obser);

	header("Location: ../../koko.html");
}
?>