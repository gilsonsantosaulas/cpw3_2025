<body>
<?php
    $numero1 = $_GET["n1"];
    $numero2 = $_GET["n2"];
    $soma = $numero1 + $numero2;
    $sub = $numero1 - $numero2;
    $mul = $numero1 * $numero2;
    $div = $numero1 / $numero2;
?>
<h1>Soma: <?php echo $soma; ?></h1>
<h1>Subtração: <?php echo $sub; ?></h1>
<h1>Multiplicação: <?php echo $mul; ?></h1>
<h1>Divisão: <?php echo $div; ?></h1>


</body>