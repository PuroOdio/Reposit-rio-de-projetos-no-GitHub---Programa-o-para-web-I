<?php
    $sexo = 'm';
    $altura = 1.70;
    $peso = 90;
    $imc = $peso / pow($altura, 2);

    if ($sexo == "f") {
            $pesoideal = (100 - $altura) * 0.85;
            echo "O seu IMC é igual a " .number_format($imc, 2 '.', ''). "<br>";
            echo "O seu peso ideal é " .number_format($pesoideal, 2, '.', '');
    } else {
        $pesoideal = (100 - $altura) * 0.90;
        echo "O seu IMC é igual a " .number_format($imc, 2, '.', '') "<br>";
        echo "O seu peso ideal é " .number_format($pesoideal, 2, '.', '');
    }
?>