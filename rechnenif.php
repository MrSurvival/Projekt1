<?php
    //Eingabe
    $var1 = 4;
    $var2 = 0;

    //Verarbeitung
    $sumadd = $var1 + $var2;
    $sumsub = $var1 - $var2;
    $summult = $var1 * $var2;
    if ($var2 != 0) {
        $sumdiv = $var1 / $var2;
    }
    else {
        $sumdiv = "Das geht nicht!";
    }
    

    //Ausgabe
    echo "Das Ergebnis aus " .$var1. " + " .$var2. " ist: " .$sumadd. "<br>";
    echo "Das Ergebnis aus " .$var1. " - " .$var2. " ist: " .$sumsub. "<br>";
    echo "Das Ergebnis aus " .$var1. " * " .$var2. " ist: " .$summult. "<br>";
    echo "Das Ergebnis aus " .$var1. " / " .$var2. " ist: " .$sumdiv. "<br>";
    
?>