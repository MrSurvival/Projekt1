<?php
    $base = $_GET["betrag"];
    $jahre = $_GET["jahre"];
    $zinsen = $_GET["zinsen"];

    for ($i = $jahre; $i > 0;$i--)
    {
        $base = $base * $zinsen;
        echo ($base."<br>");
    }
    //http://localhost/Schule_11/Projekt1/zinsrechner_eingabe.php?betrag=1000&jahre=5&zinsen=1.05
?>