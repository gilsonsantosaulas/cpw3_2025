<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Tarefas</h1>
        <form action="exibir_tarefas.php" method="post">
            <input type="text" name="dia_semana" placeholder="Dia da Semana">
            <?php  for($i=0; $i<5; $i++) : ?>    
            <input type="text" name="tarefas[]" placeholder="Tarefa">
            <?php endfor; ?>
            <button type="submit">Exibir Tarefas</button>
        </form>
    </body>
</html>
