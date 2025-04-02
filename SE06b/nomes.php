<?php 
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $nome_completo = $nome . " " . $sobrenome;
    echo "Nome: " . $nome . "<br>";
    echo "Sobrenome: " . $sobrenome . "<br>";
    echo "Nome completo: " . $nome_completo;
?>