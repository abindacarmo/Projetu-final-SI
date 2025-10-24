<?php
define('DB_NAME','database_klinika');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','127.0.0.1');

class DbConnect{

function __construct(){
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	$this->con=$con;
	
	if(mysqli_connect_errno()){
		echo "Failed to connect to database".mysqli_connect_error();
	}
	
	return $this->con;
}
}


class Injection
{
	function anti_injection($data)
	{
		$filter = mysqli_real_escape_string($this->con, stripslashes(strip_tags(htmlentities($data, ENT_QUOTES))));
		return $filter;
	}

	function anti_injectionlog($data)
	{
		$filter = mysqli_real_escape_string($this->con, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
		return $filter;
	}
}

class User extends DbConnect{

	function cek_login($userr, $password)
	{
		$password = $password;

		$result = mysqli_query($this->con, "SELECT * FROM t_user WHERE username='$userr' AND password='$password'") or die("" . mysqli_error());
		$user_data = mysqli_fetch_array($result);
		$no_rows = mysqli_num_rows($result);
		if ($no_rows == 1) {
			$_SESSION['leveluser']  = $user_data['level'];
			$_SESSION['nudok']  	= $user_data['id_doutor'];
			$_SESSION['status']  	= "Doutor";

			return TRUE;
		} else {
			return FALSE;
		}
	}

//institution chek_login
	function get_sesi() {
		return $_SESSION['username'] AND $_SESSION['password'];
	}
	function viewDoutorHome($field,$username) {
      $query=mysqli_query($this->con, "SELECT doc.id_doutor, doc.naran_doutor FROM t_doutorfunsionario doc, t_user u WHERE u.id_doutor=doc.id_doutor and u.username='$username'") or die ("".mysqli_error());
	   $data=mysqli_fetch_array($query);
	    if ($field == 'id_doutor') return $data['id_doutor'];
		else if ($field == 'naran_doutor') return $data['naran_doutor'];
	}

	function viewusers(){
		$query=mysqli_query($this->con, "SELECT * FROM t_user order by id_user") or die ("".mysqli_error());
		$data = [];

		while($row = mysqli_fetch_assoc($query)) {
			$data[] = $row;
		}

		return $data;
	}
	function viewUserEdit($field,$iduser) {
		$query=mysqli_query($this->con, "SELECT * FROM t_user WHERE id_user='$iduser'") or die ("".mysqli_error());
		$data=mysqli_fetch_array($query);
		if ($field == 'id_user') return $data['id_user'];
		elseif ($field == 'username') return $data['username'];
		elseif ($field == 'password') return $data['password'];
		elseif ($field == 'level') return $data['level'];
	}
	function saveUser($nuuse,$naran,$pass,$level,$narand){
		mysqli_query($this->con, "INSERT INTO t_user (id_user,username,password,level) values('$nuuse', '$naran', '$pass', '$level')");
	}
	function updateUser($nuuse,$naran,$pass,$level,$narand) {
		mysqli_query($this->con, "UPDATE t_user SET username='$naran',password='$pass',level='$level' WHERE id_user='$nuuse'") or die ("".mysqli_error());
	}
	function deleteUser($nuuse){
		mysqli_query($this->con, "DELETE  FROM t_user WHERE id_user='$nuuse'");
	}
	

}

class Doutor extends DbConnect{
	function ViewDoutores(){
		$query=mysqli_query($this->con, "SELECT * FROM t_doutorfunsionario WHERE posisaun='Doutor' order by id_doutor") or die ("".mysqli_error());
		$data = [];

    while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    return $data;
	}
	function ViewFunsionarios(){
		$query=mysqli_query($this->con, "SELECT * FROM t_asistente order by id_asistente") or die ("".mysqli_error());
		$data = [];

    while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
	 return $data;
	}
	function saveFunsionario($nufun,$naran,$sexu,$posisaun){
		mysqli_query($this->con, "INSERT INTO t_asistente (id_asistente,naran,sexu,posisaun) values('$nufun', '$naran', '$sexu', '$posisaun')");
	}
	function viewFunsionarioEdit($field,$idasis) {
		$query=mysqli_query($this->con, "SELECT * FROM t_asistente WHERE id_asistente='$idasis'") or die ("".mysqli_error());
		$data=mysqli_fetch_array($query);
		if ($field == 'id_asistente') return $data['id_asistente'];
		elseif ($field == 'naran') return $data['naran'];
		elseif ($field == 'sexu') return $data['sexu'];
		elseif ($field == 'posisaun') return $data['posisaun'];
	}
	function updateFunsionario($nufun,$naran,$sexu,$posisaun) {
		mysqli_query($this->con, "UPDATE t_asistente SET naran='$naran',sexu='$sexu',posisaun='$posisaun' WHERE id_asistente='$nufun'") or die ("".mysqli_error());
	}

   
	function viewDoutorEdit($field,$iddoc) {
		$query=mysqli_query($this->con, "SELECT * FROM t_doutorfunsionario WHERE id_doutor='$iddoc'") or die ("".mysqli_error());
		$data=mysqli_fetch_array($query);
		if ($field == 'id_doutor') return $data['id_doutor'];
		elseif ($field == 'naran_doutor') return $data['naran_doutor'];
		elseif ($field == 'sexu') return $data['sexu'];
		elseif ($field == 'spesialis') return $data['spesialis'];
		elseif ($field == 'no_str') return $data['no_str'];
	}
	function saveDoutor($iddoc,$naran,$sexu,$spesial,$nustr,$posisi){
		mysqli_query($this->con, "INSERT INTO t_doutorfunsionario (id_doutor,naran_doutor,sexu,spesialis,posisaun,no_str) values('$iddoc', '$naran', '$sexu', '$spesial', '$posisi', '$nustr')");
	}
	function updateDoutor($iddoc,$naran,$sexu,$spesial,$nustr) {
		mysqli_query($this->con, "UPDATE t_doutorfunsionario SET naran_doutor='$naran',sexu='$sexu',spesialis='$spesial',no_str='$nustr' WHERE id_doutor='$iddoc'") or die ("".mysqli_error());
	}
	function deletedoutor($iddoc){
		mysqli_query($this->con, "DELETE  FROM t_doutorfunsionario WHERE id_doutor='$iddoc'");
	}
}

class Pasiente extends DbConnect{
	function ViewPasiente(){
		$query=mysqli_query($this->con, "SELECT * FROM t_pasiente order by id_pasiente") or die ("".mysqli_error());
		$data = [];

    while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    return $data;
	}
	function viewPasienteEdit($field,$nupas) {
		$query=mysqli_query($this->con, "SELECT * FROM t_pasiente WHERE id_pasiente='$nupas'") or die ("".mysqli_error());
		$data=mysqli_fetch_array($query);
		if ($field == 'id_pasiente') return $data['id_pasiente'];
		elseif ($field == 'naran_pasiente') return $data['naran_pasiente'];
		elseif ($field == 'sexu') return $data['sexu'];
		elseif ($field == 'data_moris') return $data['data_moris'];
		elseif ($field == 'idade') return $data['idade'];
		elseif ($field == 'hela_fatin') return $data['hela_fatin'];
		elseif ($field == 'nu_telefone') return $data['nu_telefone'];
		elseif ($field == 'create_at') return $data['create_at'];
	}
	function savePasiente($idpas,$naran,$sexu,$datamoris,$idade,$helafatin,$nutelf,$create){
		mysqli_query($this->con, "INSERT INTO t_pasiente (id_pasiente,naran_pasiente,sexu,data_moris,idade,hela_fatin,nu_telefone,create_at) values('$idpas', '$naran', '$sexu', '$datamoris', '$idade', '$helafatin', '$nutelf', '$create')");
	}
	function updatePasiente($idpas,$naran,$sexu,$datamoris,$idade,$helafatin,$nutelf,$create) {
		mysqli_query($this->con, "UPDATE t_pasiente SET naran_pasiente='$naran',sexu='$sexu',data_moris='$datamoris',idade='$idade',hela_fatin='$helafatin',nu_telefone='$nutelf',create_at='$create' WHERE id_pasiente='$idpas'") or die ("".mysqli_error());
	}
	function deletePasiente($idpas) {
		  mysqli_query($this->con, "DELETE FROM t_pasiente WHERE id_pasiente='$idpas'");
	  }
}

class Konsulta extends DbConnect{
	function viewKonsulta() {
		$query=mysqli_query($this->con, "SELECT k.id_konsulta, p.naran_pasiente, p.sexu, p.data_moris, p.idade, d.naran_doutor, k.keluhan, k.data_atual FROM t_pasiente p, t_konsulta k, t_doutorfunsionario d WHERE k.id_pasiente=p.id_pasiente and k.id_doutor=d.id_doutor") or die ("".mysqli_error());
		$data=[];

		 while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
		}

		return $data;
		
	}
	function saveKonsulta($nukon,$idpas,$doutor,$diagnosa,$data){
		mysqli_query($this->con, "INSERT INTO t_konsulta (id_konsulta,id_pasiente,id_doutor,keluhan,data_atual) values('$nukon', '$idpas', '$doutor', '$diagnosa', '$data')");
	}
	// function saveKonsulta($nukon,$idpas,$sexu,$datamoris,$idade,$doutor,$diagnosa,$data){
	// 	mysqli_query($this->con, "INSERT INTO t_konsulta (id_konsulta,id_pasiente,sexu,data_moris,idade,id_doutor,keluhan,data_atual) values('$nukon', '$idpas', '$sexu', '$datamoris', '$idade', '$doutor', '$diagnosa', '$data')");
	// }

	function viewKonsultaEdit($field,$idkon) {
		$query=mysqli_query($this->con, "SELECT * FROM t_konsulta WHERE id_konsulta='$idkon'") or die ("".mysqli_error());
		$data=mysqli_fetch_array($query);
		if ($field == 'id_konsulta') return $data['id_konsulta'];
		elseif ($field == 'id_pasiente') return $data['id_pasiente'];
		elseif ($field == 'id_doutor') return $data['id_doutor'];
		elseif ($field == 'keluhan') return $data['keluhan'];
		elseif ($field == 'data_atual') return $data['data_atual'];
	}
}

class Tratamento extends DbConnect{
	function viewKonsultaDoutor() {
		$query=mysqli_query($this->con, "SELECT k.id_konsulta, p.id_pasiente, p.naran_pasiente, p.sexu, p.data_moris, p.idade, d.naran_doutor, k.keluhan, k.data_atual FROM t_pasiente p, t_konsulta k, t_doutorfunsionario d WHERE k.id_pasiente=p.id_pasiente and k.id_doutor=d.id_doutor and k.id_doutor='D001' and date(data_atual) = CURDATE()") or die ("".mysqli_error());
		$data=[];

		 while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
		}

		return $data;
		
	}
	function viewKonsultaDoutorr() {
		$query=mysqli_query($this->con, "SELECT k.id_konsulta, p.id_pasiente, p.naran_pasiente, p.sexu, p.data_moris, p.idade, d.naran_doutor, k.keluhan, k.data_atual FROM t_pasiente p, t_konsulta k, t_doutorfunsionario d WHERE k.id_pasiente=p.id_pasiente and k.id_doutor=d.id_doutor and k.id_doutor='D001'") or die ("".mysqli_error());
		$data=[];

		 while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
		}

		return $data;
		
	}
	function viewPmrksn(){
		$query=mysqli_query($this->con, "SELECT pe.id_pemeriksaan, p.id_pasiente, p.naran_pasiente, p.sexu, p.idade, pe.data_pmrksn, pe.diagnosticos, pe.reseita, pe.observasaun FROM t_pemeriksaan pe, t_pasiente p, t_konsulta k WHERE k.id_pasiente=p.id_pasiente and pe.id_konsulta=k.id_konsulta") or die ("".mysqli_error());
		$data=[];

		 while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
		}

		return $data;
	}

	function saveKoko($pmrksn,$idpas,$data,$diagnosa,$reseita,$obser){
		mysqli_query($this->con, "INSERT INTO t_pemeriksaan (id_pemeriksaan,id_konsulta,data_pmrksn,diagnosticos,reseita,observasaun) values('$pmrksn', '$idpas', '$data', '$diagnosa', '$reseita', '$obser')");
	}
	
	function printReseita($id_pemr){
		$query=mysqli_query($this->con, "SELECT pe.id_pemeriksaan, p.id_pasiente, p.naran_pasiente, p.sexu, p.idade, pe.data_pmrksn, pe.diagnosticos, pe.reseita, pe.observasaun FROM t_pemeriksaan pe, t_pasiente p, t_konsulta k WHERE k.id_pasiente=p.id_pasiente and pe.id_konsulta=k.id_konsulta and pe.id_pemeriksaan='$id_pemr'") or die ("".mysqli_error());
		$data = mysqli_fetch_array($query);
		return $data;
	}

}






