<?php
$var1= 5;
$var2 = 10;

// Aufgabe 2.1
if($var1==$var2) {  //wenn wahr (true/1)// tue etwas} else  {  // wenn falsch (false/0)// tue etwas anderes}
    echo "Ist Wahr!"."<br>";
}
else{
    echo "Ist Falsch!"."<br>";
}

// Aufgabe 2.2
if ($var1==$var2) {
    echo " Var = Var2"."<br>";
}
elseif ($var1!=$var2){
    echo " Var != Var2"."<br>";
}
elseif ($var1>$var2){
    echo " Var > Var2"."<br>";
}
elseif ($var1<$var2){
    echo " Var < Var2"."<br>";
}

//Aufgabe 2.3
if ($var1==$var2) && ($var1<$var2){
    echo "und ist Wahr!"."<br>";
}
else{
    echo "und ist Falsch!"."<br>";
}

if ($var1==$var2) || ($var1<$var2){
    echo "und ist Wahr!"."<br>";
}
else{
    echo "und ist Falsch!"."<br>";
}
?>