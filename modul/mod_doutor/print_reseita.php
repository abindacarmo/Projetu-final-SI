<?php
include "../../include/class.php";
$tratamento = new Tratamento();
$id_pemr = $_GET['id']; // ID pemeriksaan

$data = $tratamento->printReseita($id_pemr); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>GET WELL SOON❤️</title>
    <style>
        body { font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin: 40px; width: 85mm; height: 55mm;}
        h2 { text-align: center; }
        .box { border: 1px solid #000; padding: 20px;   
        }
        
    </style>
</head>
<body>
    <h2>Reseita Pasiente</h2>
    <div class='box'>
        <p><b>Nu. Reseita:</b> <?= $data['id_pemeriksaan'] ?></p>
        <p><b>Nome Pasiente:</b> <?= $data['naran_pasiente'] ?></p>
        <p><b>Diagnostico:</b> <?= $data['diagnosticos'] ?></p>
        <p><b>Reseita:</b> <?= $data['reseita'] ?></p>
        <p><b>Observasaun:</b> <?= $data['observasaun'] ?></p>
    </div>

    <script>window.print();</script>
</body>
</html>