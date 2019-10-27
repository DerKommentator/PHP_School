<?php

//Lotto 6 aus 49


function berechne_fakultat($fakultat)
{
    $fak = 1;
    for($i=1;$i <= $fakultat;$i++)
    {
        $fak = $i * $fak;
    }
    return $fak;
}
$sum = berechne_fakultat(49)/(berechne_fakultat(43)*berechne_fakultat(6));
#echo $sum;



$zahl_oben = 49;
$zahl_unten = 6;

$fakultaet49 = 1;
$fakultaet43 = 1;
$fakultaet6 = 1;

for($i=1; $i <= $zahl_oben; $i++)
{
    $fakultaet49 = $i * $fakultaet49;
}

for($i=1; $i <= $zahl_oben-$zahl_unten; $i++)
{
    $fakultaet43 = $i * $fakultaet43;
}

for($i=1; $i <= $zahl_unten; $i++)
{
    $fakultaet6 = $i * $fakultaet6;    
}

$Ergebnis = $fakultaet49 / ($fakultaet43 * $fakultaet6);
echo 'Der Binomialkoeffizient aus ' . $zahl_oben . ' und ' . $zahl_unten . ' ist ' . $Ergebnis;
$Wahrscheinlichkeit = 1 / $Ergebnis;
echo '<br>Die Wahrscheinlichkeit aus 1:' . $Ergebnis . ' ist ' . $Wahrscheinlichkeit . '%';

?>