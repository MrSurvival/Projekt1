<?php
    $feld = array(); // leeres Array
    For($i=0;$i<10;$i++) 
    {
        $zufall = rand(0,100); // eine Zufallszahl zwischen 1 und 100
        $feld[$i] = $zufall; // Schreibe die Zahl in das i-te Feld
    }
?>