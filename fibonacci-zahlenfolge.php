<?php
    $first = 2;
    $next = 3;
    $temp = 0;

    for ($i = 10;$i>0;$i--)
    {
        $temp = $first + $next;
        $first = $next;
        $next = $temp;
        echo ($next)."<br>";
    }
?>