<?php
    function PoI($a)
    {
        return ($a % 2);
    }
    
    $num = $_POST['n'];
    $res = PoI($num);

    if ($res == 0)
    {
        echo "O número $num é PAR!";
    }
    else
    {
        echo "O número $num é IMPAR!";
    }
?>