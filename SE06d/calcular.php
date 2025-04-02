<?php 
    $frente = $_POST["frente"];
    $lado = $_POST["lado"];
    $dimensao = $lado*$frente;
    echo "Dimensão: " . $dimensao . "m²";
?>