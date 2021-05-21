<?php
    $base = $_GET["betrag"];
    $jahre = $_GET["jahre"];
    $zinsen = $_GET["zinsen"];

    if (($base > 1000) AND ($base <100000) AND ($zinsen <= 1.10))
    {
        for ($i = $jahre; $i > 0;$i--)
        {
            if (($base > 100000) AND ($zinsen > 1.01)
            {
                $zinsen = $zinsen - 0.01
            }
            $base = $base * $zinsen;
            echo ($base."<br>");
        }
    }
    else
    {
        echo "Konto konnte nicht erstellt werden! Bitte beachten sie die Richtlinien";
    }
    //http://localhost/Schule_11/Projekt1/zinsrechner_eingabe_if.php?betrag=1000&jahre=5&zinsen=1.05
?>