<body>
<?php
    $login = $_GET["login"];
    $senha = $_GET["senha"];
    if($login == "admin" && $senha == "123") {
	$mensagem = "Acesso permitido";
    } else {
	$mensagem = "Acesso negado";
    }
?>
<h1><?php echo $mensagem; ?></h1>



</body>