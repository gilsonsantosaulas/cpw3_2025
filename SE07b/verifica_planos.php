<?php 
    $nomes_pacientes = $_POST['nomes_pacientes'];
    $nomes_planos = $_POST['nomes_planos'];

    $qtd_particular = 0;
    for($i=0;$i<count($nomes_planos); $i++) {
        if($nomes_planos[$i] == "particular") {
            $qtd_particular++;
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
                <td>Nome</td>
                <td>Plano de Saúde</td>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=0;$i<count($nomes_pacientes);$i++) { 
                    echo "<tr>";
                    echo "<td>$nomes_pacientes[$i]</td>";
                    echo "<td>$nomes_planos[$i]</td>";
                    echo "</tr>";
                }
            ?>            
        </tbody>
    </table>
    <h4>Quantidade de atendimentos particular: <?php echo $qtd_particular; ?></h4>
</body>
</html>