<?php

echo '<pre>';

function male($zeichen, $anzahl, $br=false)
{
    for($i=1; $i <= $anzahl; $i+=1)
    {
        echo $zeichen;
    }

    if($br == true)
    {
        echo '<br>';
    }
}

$hoehe=5;

for($i=1; $i <= $hoehe; $i+=1)
{
    male('x', 1);
    if($i == round($hoehe/2))
    {
        male('x', $hoehe-2);
    }
    else
    {
        male(' ', $hoehe-2);
    }
    male('x', 1);

    male(' ', $i-1);

    if($i != $hoehe)
    {
        male('x', 1);
    }

    male(' ', $hoehe*2 - $i*2 -1);

    male('x', 1);

    male(' ', $i-1);

    male('x', 1);
    if($i == round($hoehe/2))
    {
        male('x', $hoehe-2);
    }
    else
    {
        male(' ', $hoehe-2);
    }
    male('x', 1, 1);
}



function fakultaet($zahl)
{
    $ergebnis = 1;

    if($zahl < 0)
    {
        for($i=-1; $i >= $zahl; $i-=1)
        {
            $ergebnis = $ergebnis * $i;
        }
    }
    elseif($zahl == 0)
    {
        $ergebnis = 0;
    }
    else
    {
        for($i=1; $i <= $zahl; $i+=1)
        {
            $ergebnis = $ergebnis * $i;
        }
    }
    return $ergebnis;
}

echo fakultaet(-5).'<br>';

function zahlZuWort($zahl)
{
    $zahlenWorter = ['null', 'eins', 'zwei', 'drei', 'vier', 'fünf', 'sechs', 'sieben', 'acht', 'neun'];
    $outputString = '';
    $vorzeichen = '';

    if($zahl < 0)
    {
        $vorzeichen = 'minus ';
        $zahl = $zahl * -1;
    }

    do
    {
        $outputString = $zahlenWorter[$zahl % 10].' '.$outputString;
        $zahl = $zahl / 10;
    } while($zahl >= 1);

    return $vorzeichen.$outputString;
}

echo zahlZuWort(-245);

?>
