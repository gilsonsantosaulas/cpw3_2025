<?php 
    $salario_minimo = $_POST["salario_minimo"];
    $salario_funcionario = $_POST["salario_funcionario"];
    $qtd_salarios = $salario_funcionario/$salario_minimo;
    echo "Quantidade de Salários Mínimos: " . $qtd_salarios;

?>