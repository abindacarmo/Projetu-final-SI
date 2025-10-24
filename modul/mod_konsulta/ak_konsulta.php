<?php
	include "../../include/class.php";
	$konsulta = new Konsulta();

// $r=$_GET['nudep'];
$module=$_GET['modul'];
$act=$_GET['act'];

if($module=='formulario_konsulta' AND $act=='input'){
		
	$nukon		= $_POST['nukon'];
	$idpas  	=$_POST['id_pas'];
	$doutor		= $_POST['doutor'];
	$diagnosa	= $_POST['diagnosa'];
	$data       = $_POST['data'];
		
	$konsulta->saveKonsulta($nukon,$idpas,$doutor,$diagnosa,$data);

	header("Location: ../../konsulta.html");
}
// if($module=='formulario_konsulta' AND $act=='input'){
		
// 	$nukon		= $_POST['nukon'];
// 	$idpas  	=$_POST['id_pas'];
// 	$sexu		= $_POST['sexu'];
// 	$datamoris		= $_POST['datamoris'];
// 	$idade		= $_POST['idade'];
// 	$doutor		= $_POST['doutor'];
// 	$diagnosa	= $_POST['diagnosa'];
// 	$data= $_POST['data'];
		
// 	$konsulta->saveKonsulta($nukon,$idpas,$sexu,$datamoris,$idade,$doutor,$diagnosa,$data);

// 	header("Location: ../../konsulta.html");
// }