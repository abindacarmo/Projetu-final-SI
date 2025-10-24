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
                            <td>Nu. Avaliasaun</td>
                            <td>Naran</td>
                            <td>Sexu</td>
                            <td>Tinan</td>
                            <td>Data</td>
                            <td>Diagnostiku</td>
                            <td>Reseita</td>
                            <td>Observasaun</td>
                            <td>Bele Print</td>
                            
                        
                        </tr>
                    </thead>
                    <tbody>";
                    $arraydocter=$tratamento->viewPmrksn();
                    $nu=1;
                    if (is_array($arraydocter) || is_object($arraydocter)) {
                        foreach($arraydocter as $r){
                            echo"
                                <tr>
                                    <td>$nu</td>
                                    <td>$r[id_pemeriksaan]</td>
                                    <td>$r[naran_pasiente]</td>
                                    <td>$r[sexu]</td>
                                    <td>$r[idade]</td>
                                    <td>$r[data_pmrksn]</td>
                                    <td>$r[diagnosticos]</td>
                                    <td>$r[reseita]</td>
                                    <td>$r[observasaun]</td>
                                    <td><a href='modul/mod_doutor/print_reseita.php?id=$r[id_pemeriksaan]' target='_blank'>Print</a></td>
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
