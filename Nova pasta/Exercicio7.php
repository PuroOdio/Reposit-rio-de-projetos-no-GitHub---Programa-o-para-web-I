<?php
    $sal = 300;
    $salr;

    if ($sal <= 300) {
        $salr = ($sal * 1.5);
        echo "Seu salário foi reajustado 50%,agora seu salário é ", $salr;
    } else {
        $salr = ($sal* 1.3);
        echo "Seu salário foi reajustado 30%,agora seu salário é ", $salr;
    }