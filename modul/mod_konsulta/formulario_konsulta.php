<?php
$asaun = 'modul/mod_konsulta/ak_konsulta.php';
$pasiente = new Pasiente();

        $nualuno = $_GET['idpas'];
	
        $naran=$pasiente->viewPasienteEdit('naran_pasiente', $nualuno);
        $sexu=$pasiente->viewPasienteEdit('sexu', $nualuno);
        $datamoris=$pasiente->viewPasienteEdit('data_moris', $nualuno);
        $idade=$pasiente->viewPasienteEdit('idade', $nualuno);//ida nomealuno kor kinur ne'e mai husi file class.php ne'ebe iha nia funsaun editaluno


echo"
<div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=formulario_konsulta&act=input'  method='POST'>
                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. konsulta</label>
                    <input type='text' name='nukon' class='form-control' id='nukon' placeholder='numeru konsulta'>
                  </div>
                  <div class='form-group'>
                    <input type='hidden' name='id_pas' class='form-control' id='id_pas' value='$nualuno'>
                  </div>
                  <div class='form-group'>
                    <label for='naran'>Pasiente</label>
                    <input type='text' name='naran' class='form-control' id='naran' value='$naran' readonly>
                  </div>
                  <div class='form-group'>
                    <label>Sexu</label>
                    <input type='text' name='sexu' class='form-control' id='sexu' value='$sexu' readonly>
                  </div>
                  <div class='form-group'>
                    <label for='idade'>Idade</label>
                    <input type='text' name='idade' class='form-control' id='idade' value='$idade' readonly>
                  </div>
                  <div class='form-group'>
                    <label for='doutor'>Doutor</label>
                    <input type='text' name='doutor' class='form-control' id='doutor' placeholder='doutor'>
                  </div>
                  <div class='form-group'>
                    <label for='diagnosa'>Reklamasaun</label>
                    <input type='text' name='diagnosa' class='form-control' id='diagnosa' placeholder='keluhan'>
                  </div>
                  <div class='form-group'>
                    <label for='data'>Data</label>
                    <input type='date' name='data' class='form-control' id='data' placeholder='data agora'>
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
