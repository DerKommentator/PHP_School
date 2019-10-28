<?php

$werte = array(5,60,0,50);
$summe = 0;

$werte[] = 7;

$werte[10] = 8;

/*for($i=0; $i<count($werte); $i+=1)
{
    $summe = $summe + $werte[$i];
    echo 'Werte['.$i.']='.$werte[$i].'<br>';
}
echo 'Die Summe der Werte ist '.$summe.'<br>';

echo '<br><br>';*/

foreach($werte as $index => $wert)
{
    echo 'Werte['.$index.']='.$wert.'<br>';
}


print_r($werte);
?>
