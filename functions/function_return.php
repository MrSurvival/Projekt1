<?php
    function lineareBerechnung($x) 
    {
        echo "X wurde als ".$x." definiert<br>";
        $y = 4*$x+3;
        return $y; // return 4*$x+3; ginge auchum eine Zeile zu sparen
    };
    
    $eingabe = $_GET["eingabe"];
    $ergebnis = lineareBerechnung($eingabe); //Aufruf der vorher def. Funktion
    echo "Die Lösung ist: ".$ergebnis;

    //http://localhost/Schule_11/Projekt1/functions/function_return.php?eingabe=2
?>