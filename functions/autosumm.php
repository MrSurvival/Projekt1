<?php
    function autoSumm($sum1,$sum2)
    {
        $erg = $sum1 + $sum2;
        return $erg;
    }
    $eingabe1 = $_GET["eingabe1"];
    $eingabe2 = $_GET["eingabe2"];

    $ergebnis = autoSumm($eingabe1,$eingabe2);

    echo "Die Summe aus ".$eingabe1." und ".$eingabe2." ist: ".$ergebnis."<br>";

    //http://localhost/Schule_11/Projekt1/functions/autosumm.php?eingabe1=5&eingabe2=8
?>