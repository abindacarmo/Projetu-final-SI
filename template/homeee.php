<?php

if($_SESSION['leveluser']=='Admin'){
	$pname='Administrador';
}
elseif($_SESSION['leveluser']=='Doutor'){
	$pname='Doutor';
}
else{
	$pname='Staff';
}

echo "<div class='col-lg-12'>
	<h1><small><i>Sistema Informasaun Klinika</i></small></h1>
   <div class='alert alert-info alert-dismissable'>
   <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";

   echo "<h4><b><u>Pagina $pname</u></b></h4><hr />
	<h5><p><u> <b></b></u>Ola! Bemvindo iha pajina Klinika<br> 
	Iha pajina ne'e ita-boot sei hetan asesu ba dados sira ne'ebe fornece tuir menu sira iha sorin karuk.<br> 
	Neduni antes atu husik hela, diak liu <a href='login.html'><i>Logout</i></a> antes.</p></h5>
	<p>&nbsp;</p>	  		  
	<p><h5><i>Arigatou Gozaimasu</i> <3</h5></p>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
    <h5 align='right'><div class='alert'>Data : $loron_ohin, ";
   echo data_tl(date("Y m d"));

echo "</div>
</div>";
?>