<?php 
    $notas = $_POST['notas'];
    $soma = 0;
    for($i=0;$i<count($notas); $i++) {
        $soma = $soma + $notas[$i];
    }
    $media = $soma/count($notas);
    
    echo "Média: " . $media;
?>