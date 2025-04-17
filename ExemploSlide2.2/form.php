<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="calcula.php" method="post">
            <?php for($i=0;$i<10;$i++) : ?>
                <input type='text' name='notas[]' placeholder='Nota '>
            <?php endfor; ?>
            <button type="submit">Calcular Média</button>
        </form>
    </body>
</html>
