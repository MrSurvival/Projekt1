<!DOCTYPE html>
<html>
    <head>
        <link href="./style.css" rel="stylesheet" />
        <title>Lottomania</title>
    </head>
    <body>
        <div class="topbar">
            <img src="./Logo.svg" alt="Logo" class="logo">
            <div class="name">Lottomania</div>
        </div>
    </body>
</html>





<?php

	$zahlen = array();
	for($i=0; $i<6; $i++) 
    {
		$temp = rand(1,49);
		if( in_array($temp, $zahlen) ) //in_array ist vergleich der variablen mit true/false als output
        {
			$i--;
			continue; //nächste Schleife
		}
		$zahlen[] = $temp;
	}

    foreach ($zahlen as &$value)
    {
        echo "<div class=".'container'."><img alt=".'Kugel'." src=".'Ball.svg'."><div class=".'centered'.">".$value."</div></div>";
    }
?>