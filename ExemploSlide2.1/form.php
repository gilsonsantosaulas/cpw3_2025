<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="calcula.php" method="post">
            <?php 
                for($i=0; $i<5; $i++) {
                    $numero_nota = $i+1;
                    echo "<input type='text' name='notas[]' placeholder='Nota $numero_nota'>";
                }
            ?>
            <button type="submit">Calcular Média</button>
        </form>
    </body>
</html>
