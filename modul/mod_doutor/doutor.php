<?php
$asaun="modul/mod_doutor/ak_doutor.php";
$doctor = new Doutor();
switch ($_GET['act']) {
    default:
        echo"<div class='card'>
                <div class='card-header'>
                    <h3 class='card-title'>Dadus Doutores</h3><br><br>
                    <a href='doutor-adddoutor.html'><span class = 'btn btn-sm btn-success'><i class='fas fa-user-plus'></i></span></a><br>
                </div>
                <div class='card-body'>
                <table id='example1' class='table table-bordered table-striped'>
                    <thead>
                        <tr>
                            <th>Nu.</th>
                            <th>Nu. Doutor</th>
                            <th>Nome Doutor</th>
                            <th>Sexu</th>
                            <th>Specialis</th>
                            <th>No. STR</th>
                            <th>Asaun</th>
                        
                        </tr>
                    </thead>
                    <tbody>";
                    $arraydocter=$doctor->ViewDoutores();
                    $nu=1;
                    if (is_array($arraydocter) || is_object($arraydocter)) {
                        foreach($arraydocter as $r){
                            echo"
                                <tr>
                                    <th>$nu</th>
                                    <td>$r[id_doutor]</td>
                                    <td>$r[naran_doutor]</td>
                                    <td>$r[sexu]</td>
                                    <td>$r[spesialis]</td>
                                    <td>$r[no_str]</td>
                                    <td><a href='doutor-editdoutor-$r[id_doutor].html' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i><a href='doutor-deletedoutor-$r[id_doutor].html' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></td>
                                </tr>";
                                $nu++;
                        }
                    }
                    echo"
                    </tbody>
                </table>
            </div>";
    break;
    case'adddoutor':
        echo"
        <div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=doutor&act=input'  method='POST'>
                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. Doutor</label>
                    <input type='text' name='id_doc' class='form-control' id='id_pas' placeholder='numeru doutor'>
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
                    <label for='datamoris'>Spesialista</label>
                    <input type='text' name='spesial' class='form-control' id='datamoris' placeholder='spesialista'>
                  </div>
                  <div class='form-group'>
                    <label for='posisi'>Pozisaun</label>
                    <input type='text' name='posisi' class='form-control' id='posisi' placeholder='pozisaun'>
                  </div>
                  <div class='form-group'>
                    <label for='idade'>Nu. STR</label>
                    <input type='text' name='nustr' class='form-control' id='idade' placeholder='nu. str'>
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
    break;
    case'editdoutor':
        $iddoc = $_GET['iddoc'];
	
        $naran=$doctor->viewDoutorEdit('naran_doutor', $iddoc);
        $sexu=$doctor->viewDoutorEdit('sexu', $iddoc);
        $spesial=$doctor->viewDoutorEdit('spesialis', $iddoc);
        $nustr=$doctor->viewDoutorEdit('no_str', $iddoc);//ida nomealuno kor kinur ne'e mai husi file class.php ne'ebe iha nia funsaun editaluno
        
        echo"
        <div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=doutor&act=update'  method='POST'>
                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. Doutor</label>
                    <input type='text' name='id_doc' class='form-control' id='id_doc' value='$iddoc'>
                  </div>
                  <div class='form-group'>
                    <label for='naran'>Naran</label>
                    <input type='text' name='naran' class='form-control' id='naran' value='$naran'>
                  </div>
                  <div class='form-group'>
                    <label for='sexu'>Naran</label>
                    <input type='text' name='sexu' class='form-control' id='sexu' value='$sexu'>
                  </div>
                    <div class='form-group'>
                  <div class='form-group'>
                    <label for='datamoris'>Spesialista</label>
                    <input type='text' name='spesial' class='form-control' id='spesial' value='$spesial'>
                  </div>
                    <label for='idade'>Nu. STR</label>
                    <input type='text' name='nustr' class='form-control' id='nustr' value='$nustr'>
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
    break;
    
    case 'deletedoutor':
        $iddoc = $_GET['iddoc'];
      $doctor->deletedoutor($iddoc);
}
?>