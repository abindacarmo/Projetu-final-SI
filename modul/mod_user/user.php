<?php
$asaun="modul/mod_user/ak_user.php";
$user = new User();
switch ($_GET['act']) {
    default:
        echo"<div class='card'>
                <div class='card-header'>
                    <h3 class='card-title'>Dadus Users</h3><br><br>
                    <a href='user-adduser.html'><span class = 'btn btn-xn btn-success'><i class='fas fa-user-plus'></i></span></a><br>
                </div>
                <div class='card-body'>
                <table id='example1' class='table table-bordered table-striped'>
                    <thead>
                        <tr>
                            <th>Nu.</th>
                            <th>Nu. User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Asaun</th>
                        
                        </tr>
                    </thead>
                    <tbody>";
                    $arrayuser=$user->viewusers();
                    $nu=1;
                    if (is_array($arrayuser) || is_object($arrayuser)) {
                        foreach($arrayuser as $r){
                            echo"
                                <tr>
                                    <th>$nu</th>
                                    <td>$r[id_user]</td>
                                    <td>$r[username]</td>
                                    <td>$r[password]</td>
                                    <td>$r[level]</td>
                                    <td><a href='user-edituser-$r[id_user].html' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i><a href='user-deleteuser-$r[id_user].html' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></td>
                                </tr>";
                                $nu++;
                        }
                    }
                    echo"
                    </tbody>
                </table>
            </div>";
    break;
    case'adduser':
        echo"
        <div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=user&act=input'  method='POST'>
                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. User</label>
                    <input type='text' name='iduse' class='form-control' id='nuuse' placeholder='numeru user'>
                  </div>
                  <div class='form-group'>
                    <label for='naran'>Username</label>
                    <input type='text' name='naran' class='form-control' id='naran' placeholder='username'>
                  </div>
                  <div class='form-group'>
                    <label for='pass'>Passwword</label>
                    <input type='text' name='pass' class='form-control' id='pass' placeholder='password'>
                  </div>
                  <div class='form-group'>
                    <label for='level'>Level</label>
                    <input type='text' name='level' class='form-control' id='level' placeholder='level'>
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
    
    case'edituser':
       $iduser = $_GET['iduser'];
	
        $username=$user->viewUserEdit('username', $iduser);
        $password=$user->viewUserEdit('password', $iduser);
        $level=$user->viewUserEdit('level', $iduser);//ida nomealuno kor kinur ne'e mai husi file class.php ne'ebe iha nia funsaun editaluno
        
        echo"
        <div class='col-md-10' style='margin-left: 120px;'>
            <!-- general form elements -->
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  action='$asaun?modul=user&act=update'  method='POST'>
                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleInputEmail1'>Nu. User</label>
                    <input type='text' name='iduse' class='form-control' id='nuuse' value='$iduser'>
                  </div>
                  <div class='form-group'>
                    <label for='naran'>Username</label>
                    <input type='text' name='naran' class='form-control' id='naran' value='$username'>
                  </div>
                  <div class='form-group'>
                    <label for='pass'>Password</label>
                    <input type='text' name='pass' class='form-control' id='pass' value='$password'>
                  </div>
                  <div class='form-group'>
                    <label for='level'>Level</label>
                    <input type='text' name='level' class='form-control' id='level' value='$level'>
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

    case 'deleteuser':
      $nuuse = $_GET['iduser'];
      $user->deleteUser($nuuse);
    break;


}