<?php
    $base = 1000;
    $jahre = 5;

    for ($i = $jahre; $i > 0;$i--)
    {
        $base = $base * 1.05;
        echo ($base."<br>");
    }
?>