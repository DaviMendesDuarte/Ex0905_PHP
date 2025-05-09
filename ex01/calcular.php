<?php
    function multiplicar($a, $b)
    {
       return $a * $b;
    }
    
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $res = multiplicar($num1, $num2);

    echo "O resultado da multiplicação do valor $num1 e $num2 é: $res";

?>