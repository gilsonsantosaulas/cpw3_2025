<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Corretor de Prova</h1>
        <form action="verifica_respostas.php" method="post">
            <?php 
                echo "<h4>Respostas</h4>";
                for($i=0; $i<3; $i++) {
                    $numero_questao = $i+1;
                    echo "<input type='text' name='respostas[]' placeholder='Resposta $numero_questao'>";
                }

                echo "<h4>Gabarito</h4>";
                for($i=0; $i<3; $i++) {
                    $numero_questao = $i+1;
                    echo "<input type='text' name='gabarito[]' placeholder='Gabarito $numero_questao'>";
                }
            ?>
            <button type="submit">Verificar Respostas</button>
        </form>
    </body>
</html>
