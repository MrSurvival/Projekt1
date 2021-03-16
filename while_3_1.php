<?php
    $x = 1;
    $text = "*";
    $spaces = 8;

    while($x < 8) //Höhe 8 mal
    {
        if($spaces > 0) //Bedingung Spaces, um es nach einem Baum aussehen zu lassen
        {
            $c = $spaces;
            while($c > 0)
            {
                echo "."; //Spaces ging leider nicht XD
                $c = ($c - 1);
            }
            $spaces = ($spaces - 1);
        }

        $y = $x;
        while($y > 0) // Die Sterne wiederholt hintereinander setzten
        {
            echo $text;
            $y = ($y - 1);
        }

    $x = ($x + 1);
    echo"<br>";
    }
?>