<?php

	$zahlen = array();
	for($i=0; $i<6; $i++) 
    {
		$temp = mt_rand(1,49);
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

<style type="text/css">
.container {
  position: relative;
  text-align: center;
  color: blue;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: Roboto;
    font-style: normal;
    font-weight: normal;
    font-size: 84px;
    line-height: 75px;
    display: flex;
    align-items: center;
    text-align: center;
    color: #302626;
}
</style>