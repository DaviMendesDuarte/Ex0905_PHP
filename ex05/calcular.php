<?php
    function validarIdade($a)
    {
        if ($a < 18)
        {
            echo "Você é menor de idade";
        } 
        elseif ($a >= 18 && $a <= 59)
        {
            echo "Você é adulto(a)";
        }
        else
        {
            echo "Você é idoso(a)";
        } 
        
        return;
    }
    
    $num1 = $_POST['n1'];
    $res = validarIdade($num1);
    
?>