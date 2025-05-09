<?php
    function converterParaCelsius($a)
    { 
        return ($a - 32) * (5/9);
    }
    
    $num1 = $_POST['n1'];
    $res = converterParaCelsius($num1);

    echo "O resultado da conversão do $num1 °F para °C é: $res";
?>