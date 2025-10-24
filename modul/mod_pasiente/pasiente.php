<?php
$asaun="modul/mod_pasiente/ak_pasiente.php";
$pasiente = new Pasiente();
switch ($_GET['act']) {
    default:
        echo"<div class='card'>
                <div class='card-header'>
                    <h3 class='card-title'>Dadus Pasientes</h3><br><br>
                </div>
                <div class='card-body'>
                <table id='example1' class='table table-bordered table-striped'>
                    <thead>
                        <tr>
                            <td>Nu.</td>
                            <td>Nu. Pasiente</td>
                            <td>Naran</td>
                            <td>Sexu</td>
                            <td>Data-Moris</td>
                            <td>Tinan</td>
                            <td>Hela-Fatin</td>
                            <td>Nu. Kontaktu</td>
                            <td>Create at</td>
                            <td>Asaun</td>
                        
                        </tr>
                    </thead>
                    <tbody>";
                    $arraydocter=$pasiente->ViewPasiente();
                    $nu=1;
                    if (is_array($arraydocter) || is_object($arraydocter)) {
                        foreach($arraydocter as $r){
                            echo"
                                <tr>
                                    <td>$nu</td>
                                    <td>$r[id_pasiente]</td>
                                    <td><a href='formulario_konsulta-input-$r[id_pasiente].html'>$r[naran_pasiente]</td>
                                    <td>$r[sexu]</td>
                                    <td>$r[data_moris]</td>
                                    <td>$r[idade]</td>
                                    <td>$r[hela_fatin]</td>
                                    <td>$r[nu_telefone]</td>
                                    <td>$r[create_at]</td>
                                    <td><a href='pasiente-editpasiente-$r[id_pasiente].html' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i>  <a href='pasiente-deletepasiente-$r[id_pasiente].html' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></td>
                                </tr>";
                                $nu++;
                        }
                    }
                    echo"
                    </tbody>
                </table>
            </div>";
    break;

    case"editpasiente":
	
        $nualuno = $_GET['idpas'];
	
        $naran=$pasiente->viewPasienteEdit('naran_pasiente', $nualuno);
        $sexu=$pasiente->viewPasienteEdit('sexu', $nualuno);
        $datamoris=$pasiente->viewPasienteEdit('data_moris', $nualuno);
        $idade=$pasiente->viewPasienteEdit('idade', $nualuno);//ida nomealuno kor kinur ne'e mai husi file class.php ne'ebe iha nia funsaun editaluno
        $helafatin=$pasiente->viewPasienteEdit('hela_fatin', $nualuno);
        $nutelf=$pasiente->viewPasienteEdit('nu_telefone', $nualuno);
        $create=$pasiente->viewPasienteEdit('create_at', $nualuno);

        echo"
        <div class='col-md-10' style='margin-left: 120px;'>
                    <!-- general form elements -->
                    <div class='card card-pink'>
                    <div class='card-header'>
                        <h3 class='card-title'>Edit Pasiente</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                
                    <form  action='$asaun?modul=pasiente&act=update'  method='POST'>
                        <div class='card-body'>
                        <div class='form-group'>
                            <label for='exampleInputEmail1'>Nu. Pasiente</label>
                            <input type='text' name='id_pas' class='form-control' id='id_pas' value='$nualuno'>
                        </div>
                        <div class='form-group'>
                            <label for='naran'>Naran</label>
                            <input type='text' name='naran' class='form-control' id='naran' value='$naran'>
                        </div>
                        <div class='form-group'>
                            <label for='sexu'>Sexu</label>
                            <input type='text' name='sexu' class='form-control' id='sexu' value='$sexu'>
                        </div><br>
                            <div class='form-group'>
                        <div class='form-group'>
                            <label for='datamoris'>Data Moris</label>
                            <input type='text' name='datamoris' class='form-control' id='datamoris' value='$datamoris'>
                        </div>
                            <label for='idade'>Idade</label>
                            <input type='text' name='idade' class='form-control' id='idade' value='$idade'>
                        </div>
                        <div class='form-group'>
                            <label for='helafatin'>Hela-Fatin</label>
                            <input type='text' name='helafatin' class='form-control' id='helafatin' value='$helafatin'>
                        </div>
                        <div class='form-group'>
                            <label for='classe'>No. Kontaktu</label>
                            <input type='text' name='nutelf' class='form-control' id='nutelf' value='$nutelf'>
                        </div>
                        <div class='form-group'>
                            <label for='turma'>Create date</label>
                            <input type='text' name='create' class='form-control' id='create' value='$create'>
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
        case"deletepasiente":
            $idpas = $_GET['idpas'];
            $pasiente->deletePasiente($idpas);
        break;
}

?>