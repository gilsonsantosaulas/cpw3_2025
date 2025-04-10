<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Planos de Saúde</h1>
        <form action="verifica_planos.php" method="post">
            <?php 
                echo "<h4>Pacientes e seus planos de saúde</h4>";
                for($i=0; $i<5; $i++) {
                    echo "<p>";
                    echo "<input type='text' name='nomes_pacientes[]' placeholder='Nome do paciente'>";
                    echo "<input type='text' name='nomes_planos[]' placeholder='Nome do plano de saúde'>";
                    echo "</p>";
                }
            ?>
            <button type="submit">Verificar Planos</button>
        </form>
    </body>
</html>
