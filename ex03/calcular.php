<?php
    function maiorNumero($a, $b, $c)
    {
        if ($a > $b && $a > $c)
        {
            echo "O maior numero é $a";
        } 
        elseif ($b > $a && $b > $c)
        {
            echo "O maior numero é $b";
        }
        else
        {
            echo "O maior numero é $c";
        } 
        
        return;
    }
    
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $num3 = $_POST['n3'];
    $res = maiorNumero($num1, $num2, $num3);
?>