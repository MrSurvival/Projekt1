<?php
    function dreieck($länge)
    {
        $erg = 0.5*$länge*sqrt(3);
        return $erg;
    }
    $eingabe1 = $_GET["eingabe1"];

    $ergebnis = dreieck($eingabe1);

    echo "Die Fläche des Dreiecks ist: A = ".$ergebnis;

    //http://localhost/Schule_11/Projekt1/functions/gleichschenkligesdreieck.php?eingabe1=2
?>