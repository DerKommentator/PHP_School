<?php

$hoehe = 30;

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


for($i=1; $i <= $hoehe; $i+=1)
{
    male(' ', $hoehe - $i);

    if($i != 1)
    {
        male('x', 1);
    }

    male(' ', ($i - 1) * 2 -1);
    male('x', 1, 1);
}
for($i=1; $i <= $hoehe-1; $i+=1)
{
    male(' ', $i);
    male('x', 1);
    male(' ', $hoehe*2 - $i*2 -3);
    if($i != $hoehe-1)
    {
        male('x', 1, 1);
    }
    //echo '<br>';
}




 ?>
