<?php
    $num1 = 9;
    $num2 = 3;

    echo "(".$num1."*".$num2.")=";
    for($num2; $num2 > 0; $num2--){
        echo $num1;
        if($num2 != 1) echo " + ";   
    }
                                                 
?>