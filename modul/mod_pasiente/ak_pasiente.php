<?php
	include "../../include/class.php";
	$pas = new Pasiente();

// $r=$_GET['nudep'];
$module=$_GET['modul'];
$act=$_GET['act'];

if($module=='formulario' AND $act=='input'){
		
	$idpas		= $_POST['id_pas'];
	$naran		= $_POST['naran'];
	$sexu	= $_POST['sexu'];
	$datamoris= $_POST['datamoris'];
	$idade	= $_POST['idade'];
	$helafatin		= $_POST['helafatin'];
	$nutelf	= $_POST['nutelf'];
	$create= $_POST['create'];
		
	$pas->savePasiente($idpas,$naran,$sexu,$datamoris,$idade,$helafatin,$nutelf,$create);

	header("Location: ../../pasiente.html");
}
elseif($module=='pasiente' AND $act=='update'){ //hadia ne'e orcida tau iha docente.php parte update nia.
	$idpas		= $_POST['id_pas'];
	$naran		= $_POST['naran'];
	$sexu	= $_POST['sexu'];
	$datamoris= $_POST['datamoris'];
	$idade	= $_POST['idade'];
	$helafatin		= $_POST['helafatin'];
	$nutelf	= $_POST['nutelf'];
	$create= $_POST['create'];

	$pas->updatePasiente($idpas,$naran,$sexu,$datamoris,$idade,$helafatin,$nutelf,$create);


	header("Location: ../../pasiente.html");

}elseif($module=='pasiente' AND $act=='delete'){
	
	$nudoc = $_GET['idpas'];
	$pas->deletePasiente($nudoc);

	header("Location: ../../pasiente.html");
}