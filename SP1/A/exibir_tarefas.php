<?php 
    $dia_semana = $_POST['dia_semana'];
    $tarefas = $_POST['tarefas'];

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <h2><?=$dia_semana;?></h2>
    <table class="table table-bordered">
        <tbody>

            <?php 
            $totalTarefas=0;
            for($i=0;$i<count($tarefas);$i++) : 
                if($tarefas[$i]!="") :
                    $totalTarefas+=1;
            ?>

            <tr>
                <td><?=$tarefas[$i]?></td>
            </tr>

            <?php 
                endif; 
            endfor; 
            ?>
        </tbody>
    </table>

    <h3>Total de Tarefas: <?=$totalTarefas?></h3>
</body>
</html>