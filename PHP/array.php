<?php

/*
$summe = 0;

for($i=0; $i<count($werte); $i+=1)
{
    $summe = $summe + $werte[$i];
    echo 'Werte['.$i.']='.$werte[$i].'<br>';
}
echo 'Die Summe der Werte ist '.$summe.'<br>';

echo '<br><br>';


foreach($werte as $index => $wert)
{
    echo 'Werte['.$index.']='.$wert.'<br>';
}
echo '<hr>';
*/


function ausgabe($array)
{
    foreach($array as $index => $element)
    {
        echo 'Array['.$index.']='.$element.'<br>';
    }
}

function summe($array)
{
    $summe = 0;
    foreach($array as $element)
    {
        $summe += $element;
    }
    return $summe;
}

function mittelwert($array)
{
    return summe($array) / count($array);
}

function maximum($array)
{
    $max_element = array_shift($array);
    foreach($array as $element)
    {
        if($element > $max_element)
        {
            $max_element = $element;
        }
    }
    return $max_element;
}

function minimum($array)
{
    $min_element = array_shift($array);
    foreach($array as $element)
    {
        if($element < $min_element)
        {
            $min_element = $element;
        }
    }
    return $min_element;
}

$werte = array(5,60,1,50,7,8);


ausgabe($werte);

echo 'Summe des Arrays ist '.summe($werte).'<br>';

echo 'Mittelwert des Arrays ist '.mittelwert($werte).'<br>';

echo 'Das größte Element ist '.maximum($werte).'<br>';

echo 'Das kleinste Element ist '.minimum($werte).'<br>';

?>
