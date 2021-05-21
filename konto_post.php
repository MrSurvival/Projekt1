<form method=“post“ action="bank_interface2.php"></form>
<?php
    $base = $_POST["betrag"];
    $jahre = $_POST["jahre"];
    $zinsen = $_POST["zinsen"];

    echo $zinsen;

    if (($base > 1000) AND ($base < 100000) AND ($zinsen <= 1.10))
    {
        for ($i = $jahre; $i > 0;$i--)
        {
            $base = $base * $zinsen;
            echo ($base."<br>");

            if ($base > 100000 AND $zinsen > 1)
            {
                $zinsen = $zinsen - 0.01;
                echo "Zinsen wurden um 1% auf: ".$zinsen." gesetzt!<br>";
            }
        }
    }
    else
    {
        echo "Konto konnte nicht erstellt werden! Bitte beachten sie die Richtlinien";
    }
    //http://localhost/Schule_11/Projekt1/zinsrechner_eingabe_if.php?betrag=1000&jahre=5&zinsen=1.05
?>