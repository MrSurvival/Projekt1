<?php
    $zahlen = array();
    $zahlen[0] = rand(1,49);

    function genrand($zahlen)
        {
            $zahl = rand(1,49);
            foreach ($zahlen as &$value) 
            {
                if($value==$zahl)
                {
                    echo $value."ist gleich".$zahl;
                    return rand(1,49);
                }
                else
                {
                    return $zahl;
                }
            }
        }
    
    function loop($zahlen)
    {
        for($i=1;$i<6;$i++)
        {
            $zahlen[$i] = genrand($zahlen);
        }
    }

    foreach ($zahlen as &$value)
    {
        echo "<div class=".'container'."><img alt=".'Kugel'." src=".'Ball.svg'."><div class=".'centered'.">".$value."</div></div>";
    }

    loop($zahlen);
    
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

