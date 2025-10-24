<?php
$asaun="modul/mod_konsulta/ak_konsulta.php";
$tratamento = new Tratamento();
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
                            <td>Nu. Konsulta</td>
                            <td>Naran</td>
                            <td>Sexu</td>
                            <td>Data-Moris</td>
                            <td>Tinan</td>
                            <td>Doutor</td>
                            <td>Reklamasaun</td>
                            <td>Data</td>
                        
                        </tr>
                    </thead>
                    <tbody>";
                    $arraydocter=$tratamento->viewKonsultaDoutorr();
                    $nu=1;
                    if (is_array($arraydocter) || is_object($arraydocter)) {
                        foreach($arraydocter as $r){
                            echo"
                                <tr>
                                    <td>$nu</td>
                                    <td>$r[id_konsulta]</td>
                                    <td>$r[naran_pasiente]</td>
                                    <td>$r[sexu]</td>
                                    <td>$r[data_moris]</td>
                                    <td>$r[idade]</td>
                                    <td>$r[naran_doutor]</td>
                                    <td>$r[keluhan]</td>
                                    <td>$r[data_atual]</td>
                                </tr>";
                                $nu++;
                        }
                    }
                    echo"
                    </tbody>
                </table>
            </div>";
    break;
    
}
