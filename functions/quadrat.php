<?php
    function quadrat($länge)
    {
        $erg = $länge*$länge;
        return $erg;
    }
    $eingabe1 = $_GET["eingabe1"];

    $ergebnis = quadrat($eingabe1);

    echo "Die Fläche des Quadtrats ist: A = ".$ergebnis;

    //http://localhost/Schule_11/Projekt1/functions/gleichschenkligesdreieck.php?eingabe1=2
?>