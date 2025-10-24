<?php
	include "../../include/class.php";
	$doc = new Doutor();

// $r=$_GET['nudep'];
$module=$_GET['modul'];
$act=$_GET['act'];

if($module=='doutor' AND $act=='input'){
		
	$iddoc		= $_POST['id_doc'];
	$naran		= $_POST['naran'];
	$sexu	= $_POST['sexu'];
	$spesial= $_POST['spesial'];
	$posisi= $_POST['posisi'];
	$nustr	= $_POST['nustr'];
		
	$doc->saveDoutor($iddoc,$naran,$sexu,$spesial,$nustr,$posisi);

	header("Location: ../../doutor.html");
}
elseif($module=='doutor' AND $act=='update'){ //hadia ne'e orcida tau iha docente.php parte update nia.
    
    $iddoc		= $_POST['id_doc'];
	$naran		= $_POST['naran'];
	$sexu	= $_POST['sexu'];
	$spesial= $_POST['spesial'];
	$posisi= $_POST['posisi'];
	$nustr	= $_POST['nustr'];

	$doc->updateDoutor($iddoc,$naran,$sexu,$spesial,$nustr,$posisi);


	header("Location: ../../doutor.html");

}
elseif($module=='doutor' AND $act=='delete'){
	
	$nudoc = $_GET['iddoc'];
	$doc->deletedoutor($nudoc);

	header("Location: ../../doutor.html");
}