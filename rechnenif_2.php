<?php
    //Eingabe
    $var1 = -6;
    $var2 = 7;

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

    //Aufgabe 2
    //die erste Zahl ist kleiner als 100
    if($var1<100) {  
        echo "Variable 1 ist kleiner als 100!"."<br>";
    }
    else{
        echo "Variable 1 ist größer als 100!"."<br>";
    }

    //die zweite Zahl ist durch 3 teilbar
    if($var2 % 3 == 0) {  
        echo "Die Zahl ist durch 3 Teilbar!"."<br>";
    }
    else{
        echo "Die Zahl ist NICHT durch 3 Teilbar!"."<br>";
    }

    //die erste Zahl ist kleiner als 100, aber größer als 0
    if ($var1 < 100 and $var1>0) {
        echo "Variable 1 liegt zwischen 0 und 100!"."<br>";
    }
    else {
        echo "Variable 1 liegt NICHT zwischen 0 und 100!"."<br>";
    }

    //die erste Zahl ist kleiner als 50 und gerade
    if ($var1<50 and $var1 % 2) {
        echo "Variable 1 ist kleiner als 50 und gerade!"."<br>";
    }
    else {
        echo "Variable 1 ist NICHT kleiner als 50 und gerade!"."<br>";
    }

?>