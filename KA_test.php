<?php
    $Tage = 8;
    $hälfte = false;

    for ($i=$Tage;$i>0;$i--)
    {
        if ($i <= ($Tage / 2) and $hälfte == false)
        {
            echo "Wir haben die Hälfte erreicht"."<br>";
            $hälfte = true;
        }
        echo $Tage."<br>";
    }

    while ($Tage > 0)
    {
        echo "Schleife für den: ".$Tage.". Tag"."<br>";
        $Tage--;
    }
  
    for ($k = 0;$k<$Tage;$k++)
    {
        echo "Hallo ";
    }
?>