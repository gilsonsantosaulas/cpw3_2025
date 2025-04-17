<?php 
    $notas = $_POST['notas'];
    $soma = 0;
    for($i=0;$i<count($notas); $i++) {
        $soma = $soma + $notas[$i];
    }
    $media = $soma/count($notas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Média</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Número da Nota</td>
                <td>Nota</td>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($notas);$i++) : ?>
            <tr>
                <td><?php echo ($i+1); ?></td>
                <td><?php echo $notas[$i]; ?></td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <h4>Média: <?php echo $media; ?></h4>
    <ul>
    <?php for($i=0;$i<count($notas);$i++) : ?>
        <li><?php echo $notas[$i]; ?></li>
    <?php endfor; ?>
    </ul>
</body>
</html>