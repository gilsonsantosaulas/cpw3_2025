<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Carros</h1>
        <form action="verifica_carros.php" method="post">
            <?php 
                echo "<h4>Carros e Consumos</h4>";
                for($i=0; $i<3; $i++) {
                    echo "<p>";
                    echo "<input type='text' name='carros[]' placeholder='Carros'>";
                    echo "<input type='text' name='consumos[]' placeholder='Consumos'>";
                    echo "</p>";
                }
            ?>
            <button type="submit">Verificar Carros</button>
        </form>
    </body>
</html>
