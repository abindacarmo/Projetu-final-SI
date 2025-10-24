<?php
$asaun = 'modul/mod_pasiente/ak_pasiente.php';

echo"
<div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=formulario&act=input'  method='POST'>
                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. Pasiente</label>
                    <input type='text' name='id_pas' class='form-control' id='id_pas' placeholder='numeru pasiente'>
                  </div>
                  <div class='form-group'>
                    <label for='naran'>Naran</label>
                    <input type='text' name='naran' class='form-control' id='naran' placeholder='naran completu'>
                  </div>
                  <div class='form-group'>
                  <label>Sexu</label>
                  <select  name='sexu' class='form-control select2' style='width: 100%;'>
                    <option selected='selected'>----Hili Sexu-----</option>
                    <option>Mane</option>
                    <option>Feto</option></select><br>
                    <div class='form-group'>
                  <div class='form-group'>
                    <label for='datamoris'>Data Moris</label>
                    <input type='date' name='datamoris' class='form-control' id='datamoris' placeholder='data moris'>
                  </div>
                    <label for='idade'>Idade</label>
                    <input type='text' name='idade' class='form-control' id='idade' placeholder='idade'>
                  </div>
                  <div class='form-group'>
                    <label for='helafatin'>Hela-Fatin</label>
                    <input type='text' name='helafatin' class='form-control' id='helafatin' placeholder='hela fatin'>
                  </div>
                  <div class='form-group'>
                    <label for='classe'>No. Kontaktu</label>
                    <input type='text' name='nutelf' class='form-control' id='nutelf' placeholder='numeru kontaktu'>
                  </div>
                  <div class='form-group'>
                    <label for='turma'>Create date</label>
                    <input type='date' name='create' class='form-control' id='create' placeholder='data agora'>
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
