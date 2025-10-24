<?php
$asaun="modul/mod_user/ak_staff.php";
$doctor = new Doutor();
switch ($_GET['act']) {
    default:
        echo"<div class='card'>
                <div class='card-header'>
                    <h3 class='card-title'>Dadus Funsionarios</h3><br><br>
                    <a href='staff-addstaff.html'><span class = 'btn btn-sm btn-success'><i class='fas fa-user-plus'></i></span></a><br>
                </div>
                <div class='card-body'>
                <table id='example1' class='table table-bordered table-striped'>
                    <thead>
                        <tr>
                            <th>Nu.</th>
                            <th>Nu. Asistente</th>
                            <th>Naran</th>
                            <th>Sexu</th>
                            <th>Pozisaun</th>
                            <th>Asaun</th>
                        
                        </tr>
                    </thead>
                    <tbody>";
                    $arrayuser=$doctor->ViewFunsionarios();
                    $nu=1;
                    if (is_array($arrayuser) || is_object($arrayuser)) {
                        foreach($arrayuser as $r){
                            echo"
                                <tr>
                                    <th>$nu</th>
                                    <td>$r[id_asistente]</td>
                                    <td>$r[naran]</td>
                                    <td>$r[sexu]</td>
                                    <td>$r[posisaun]</td>
                                    <td><a href='staff-editstaff-$r[id_asistente].html' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i><a href='staff-deletestaff-$r[id_asistente].html' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></td>
                                </tr>";
                                $nu++;
                        }
                    }
                    echo"
                    </tbody>
                </table>
            </div>";
    break;

    case 'addstaff':
        echo"
        <div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-pink'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=staff&act=input'  method='POST'>
                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. Resepsionista</label>
                    <input type='text' name='nure' class='form-control' id='nufun' placeholder='numeru funsionario'>
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
                    <label for='posisaun'>Pozisaun</label>
                    <input type='text' name='posisaun' class='form-control' id='posisaun' placeholder='pozisaun'>
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

    case'editstaff':
        $iddoc = $_GET['idasis'];
	
        $naran=$doctor->viewFunsionarioEdit('naran', $iddoc);
        $sexu=$doctor->viewFunsionarioEdit('sexu', $iddoc);
        $posisaun=$doctor->viewFunsionarioEdit('posisaun', $iddoc);//ida nomealuno kor kinur ne'e mai husi file class.php ne'ebe iha nia funsaun editaluno
        
        echo"
        <div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-pink'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=staff&act=update'  method='POST'>
                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. Resepsionista</label>
                    <input type='text' name='nure' class='form-control' id='nufun' value='$iddoc'>
                  </div>
                  <div class='form-group'>
                    <label for='naran'>Naran</label>
                    <input type='text' name='naran' class='form-control' id='naran' value=' $naran'>
                  </div>
                  <div class='form-group'>
                    <label>Sexu</label>
                    <input type='text' name='sexu' class='form-control' id='sexu' value='$sexu'>
                  <div class='form-group'>
                    <label for='posisaun'>Pozisaun</label>
                    <input type='text' name='posisaun' class='form-control' id='posisaun' value='$posisaun'>
                  </div>
                <!-- .card-body -->

                <div class='card-footer'>
                  <button type='submit' name='rai_dadus' class='btn btn-danger'>Rai Dadus</button>
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