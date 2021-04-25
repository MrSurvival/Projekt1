<?php
    $x = 8;
    $y = 15;
    $a = 3;
    $b = 5;

    
    while ($x != $y)
    {
        if ($x < $y)
        {
            $x = $x + $a;
        }
        else
        {
            $y = $y + $b;
        }
    }
    
    echo ($x);
?>