<?php

$hoehe = 16;
$mitte = $hoehe/2;
$rand = $hoehe +1 / 2 -1;
$color = 'black';
$abstand = -1;

$wdh = 5;
$wdh_half = round($wdh/2);

echo '<head>';
echo '<style>';
echo 'body {color:'.$color.'}';
echo '</style>';
echo '</head>';

echo '<pre>';
function male($zeichen, $anzahl, $br=false)
{
    for($i=1;$i<=$anzahl;$i+=1)
    {
        echo $zeichen;
    }

    if($br)
    {
        echo '<br>';
    }
}


for($h=1; $h<=$wdh; $h+=1)
{
    for($i=1; $i <= $hoehe; $i+=1)
    {
        if($i <= $mitte)
        {
            for($k=1; $k<=$wdh; $k+=1)
            {
                if($k == $wdh_half && $h == $wdh_half)
                {
                    $color = 'red';
                }
                else
                {
                    $color = 'black';
                }
                male(' ', $mitte - $i);

                if($i != 1)
                {
                    male('x', 1);
                }

                male(' ', ($i - 1) * 2 -1);
                male('x', 1);
                male(' ', $mitte-$i);
            }
        }
        else
        {
            for($k=1; $k<=$wdh; $k+=1)
            {
                if($k == $wdh_half && $h == $wdh_half)
                {

                }
                male(' ', $i - $mitte);
                if($i != $hoehe)
                {
                    male('x', 1);
                }
                male(' ', $hoehe*2 - $i*2-3);
                if($i <= $hoehe-2)
                {
                    male('x', 1);
                }
                male(' ', $i-$mitte);
            }
        }
        echo '<br>';
    }
}

for($i=1; $i<=$hoehe; $i+=1)
{
    male(' ', $rand);
    if($i == 1 || $i == $hoehe)
    {
        male('x', 1);
    }
    else
    {
        male('x', 1); male(' ', $abstand); male('x', 1);
    }
    male(' ', 1);
    male('', 1, 1);


}



 ?>
