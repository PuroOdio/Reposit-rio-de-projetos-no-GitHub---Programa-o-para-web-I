<?php
    $a = 5;
    $b = 2;
    $c = 3;
    $d = 4;

    $soma = $a + $c;
    $mult = $b * $d;

    if ($soma > $mult) {
        echo "a soma A + C = " .$soma. "é maior que a multiplicação B * D = " .$mult;
    } elseif ($soma < $mult) {
        echo "a soma A + C = " .$soma. "é menor que a multiplicação B * D = " .$mult;
    } else {
        echo "a soma A + C = " .$soma. "é igual a multiplicação B * D = " .$mult;
    }

    ?>