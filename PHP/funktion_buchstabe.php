<?php
echo '<pre>';
function male($zeichen, $anzahl, $br=false)
{
    for($i=1;$i<=$anzahl;$i+=1)
    {
        echo $zeichen;
    }

    if($br != false)
    {
        echo '<br>';
    }
}

$breite = 21;
$hoehe = 6;

for($zeile=1; $zeile<=$hoehe; $zeile+=1)
{
    if($zeile == 1 OR $zeile == $hoehe)
    {
        male('x', $breite, 1);
    }
    else
    {
        male(' ', ($breite-1)/2);
        male('x', 1, 1);
    }
}
?>
