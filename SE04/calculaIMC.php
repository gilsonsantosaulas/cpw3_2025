<body>
<?php
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $imc = $peso/($altura*$altura);
    
?>
<h1>IMC: <?php echo $imc; ?></h1>
