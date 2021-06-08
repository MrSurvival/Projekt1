<?php
    $feld = array(); // leeres Array
    For($i=0;$i<10;$i++) 
    {
        $zufall = rand(0,100); // eine Zufallszahl zwischen 1 und 100
        $feld[$i] = $zufall; // Schreibe die Zahl in das i-te Feld
        echo "Index:[".$i."] = ".$zufall."<br>";

        //http://localhost/Schule_11/Projekt1/Arrays/zufalls_array_tabelle.php
    }
?>