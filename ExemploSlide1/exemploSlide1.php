<html>
  <head>
    <title>Exemplo Slide 1</title>
  </head>
  <body>
    <?php
      //ou acesso: localhost/pasta/arquivo.php?numero1=50&numero2=100
      $numero1 = $_GET["numero1"];
      $numero2 = $_GET["numero2"];
      $total = $numero1+$numero2;
    ?>
    <h1> 
       Resultado: <?php echo $total; ?>
    </h1>
  </body>
</html>