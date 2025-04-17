<?php 
    $carros = $_POST['carros'];
    $consumos = $_POST['consumos'];

    $maiorConsumo = 0;
    $indiceVetorMaiorConsumo = 0;
    for($i=0;$i<count($consumos); $i++) {
        if($consumos[$i]>$maiorConsumo) {
            $maiorConsumo = $consumos[$i];
            $indiceVetorMaiorConsumo = $i;
        }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Atendimentos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Carro</td>
                <td>Consumo</td>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=0;$i<count($carros);$i++) { 
                    echo "<tr>";
                    if($indiceVetorMaiorConsumo == $i) {
                        echo "<td><strong>$carros[$i]</strong></td>";
                        echo "<td><strong>$consumos[$i]</strong></td>";
                    } else {
                        echo "<td>$carros[$i]</td>";
                        echo "<td>$consumos[$i]</td>";
                    }
                    echo "</tr>";
                }
            ?>            
        </tbody>
    </table>
</body>
</html>