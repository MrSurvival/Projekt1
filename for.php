<?php 
    $e = 0;
    while($e<10) 
    {
        echo "Hallo<br>";
        $e++; //increment = jetzige Zahl +1
    }
    //genau die selben Elemente kompater in verbindung gebracht
    for($e=0; $e<10;$e++) //einleiten mit for, dann die Variable setzten, überprüfen, 
                            //ob sie kleiner als 10 ist und dann eins hoch setzten
    {
        echo "Hallo<br>";
    } // Vorteil es ist exakter und kompakter sorgt auch für bessere Übersicht

    //Aufgabe 2
    //for sollte man nur benutzen, wenn man vorher genau weiß wie oft weiderholt werden soll.
    //while kann Grundlegend das selbe Resultat hervorbringen kann aber auch ungenauer sein.
?>
