<?php

    $notas = [3,1,2,4];
    $soma = 0;

    for($i = 0; $i < count($notas); $i++){
        $soma +=$notas[$i];
    }
    $resultado = $soma / count ($notas);

    if($resultado >=7){
        echo"Você foi aprovado, parabéns.<br>
        Média final".$resultado;
    }else{
        echo"Você reprovado. <br>
        Média final ".$resultado;
    }
?>