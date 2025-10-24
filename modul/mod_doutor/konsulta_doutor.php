<?php
$asaun = 'modul/mod_doutor/ak_konsulta_doutor.php';
$pasiente = new Pasiente();
$trtmnt =new Tratamento();
$kon =new Konsulta();

        $nualuno = $_GET['nukon'];
	
        // $naran=$pasiente->viewPasienteEdit('naran_pasiente', $nualuno);
        // $sexu=$pasiente->viewPasienteEdit('sexu', $nualuno);
        // $idade=$pasiente->viewPasienteEdit('idade', $nualuno);//ida nomealuno kor kinur ne'e mai husi file class.php ne'ebe iha nia funsaun editaluno


echo"
<div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=konsultadoutor&act=input'  method='POST'>
                <div class='card-body'>
                <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. Avaliasaun</label>
                    <input type='text' name='pmrksn' class='form-control' id='pmrksn' placeholder='numeru pemeriksaan'>
                  </div>
                  <div class='form-group'>
                    <input type='hidden' name='idkon' class='form-control' id='idkon' value='$nualuno'>
                  </div>
                  <div class='form-group'>
                    <label for='data'>Data</label>
                    <input type='date' name='data' class='form-control' id='data' placeholder='data'>
                  </div>
                  <div class='form-group'>
                    <label for='diagnosa'>Diagnosa</label>
                    <input type='text' name='diagnosa' class='form-control' id='diagnosa' placeholder='keluhan'>
                  </div>
                  <div class='form-group'>
                    <label for='reseita'>Reseita</label>
                    <input type='text' name='reseita' class='form-control' id='reseita' placeholder='reseita'>
                  </div>
                  <div class='form-group'>
                    <label for='obser'>Observasaun</label>
                    <input type='text' name='obser' class='form-control' id='obser' placeholder='observasaun'>
                  </div>
                </div>
                <!-- .card-body -->

                <div class='card-footer'>
                  <button type='submit' name='rai_dadus' class='btn btn-primary'>Rai Dadus</button>
                </div>
              </form>
            </div>
            <!-- .card -->

            <!-- general form elements -->
           

</div>";
?>
