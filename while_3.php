<?php
    $x = 0;

    while($x < 8)
    {
        $y = $x;
        while($y > 0)
        {
            echo"*";
            $y = ($y - 1);
        }
    $x = ($x + 1);
    echo"<br>";
    }
?>