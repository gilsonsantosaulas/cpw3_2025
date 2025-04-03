<?php 
    $respostas = $_POST['respostas'];
    $gabarito = $_POST['gabarito'];

    $acertos = 0;
    for($i=0;$i<count($respostas); $i++) {
        if($respostas[$i] == $gabarito[$i]) {
            $acertos++;
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
    <h1>Correção da Prova</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Respostas</td>
                <td>Gabarito</td>
                <td>Correção</td>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=0;$i<count($respostas);$i++) { 
                    echo "<tr>";
                    echo "<td>$respostas[$i]</td>";
                    echo "<td>$gabarito[$i]</td>";
                    if($respostas[$i] == $gabarito[$i]) {
                        echo "<td>Resposta Correta</td>";
                    } else {
                        echo "<td>Resposta Errada</td>";
                    }
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>
    <h4>Acertos: <?php echo $acertos; ?></h4>
</body>
</html>