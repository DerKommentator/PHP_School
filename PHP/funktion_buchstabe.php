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

#####################################################
# gedrehtes H

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
echo '<br>';


################################################
# HALLO


$hoehe = 10;

function buchstaben($buchstabe, $hoehe=10, $abstand = 3)
{
    for($i=1; $i<= $hoehe; $i+=1)
    {
        foreach($buchstabe as $element)
        {
            if($element == 'H')
            {
                male('x', 1);
                if($i == round($hoehe/2))
                {
                    male('x', $hoehe);
                }
                else
                {
                    male(' ', $hoehe);
                }
                male('x', 1);


                male(' ', $abstand);
            }
            elseif($element == 'A')
            {
                male(' ', $hoehe - $i);

                if($i != 1)
                {
                    male('x', 1);
                }

            	if($i == round($hoehe/2 + .5))
            	{
            		male('x', ($i-1)*2 -1);
            	}
            	else
            	{
            		male(' ', ($i-1)*2 -1);
            	}

                male('x', 1);

                male(' ', $hoehe - $i);

                male(' ', $abstand);
            }
            elseif ($element == 'L')
            {
                male('x', 1);

                if($i == $hoehe)
                {
                    male('x', $hoehe);
                }
                else
                {
                    male(' ', $hoehe);
                }
                male(' ', $abstand);
            }
            elseif ($element == 'O')
            {
                if($i == 1 || $i == $hoehe)
                {
                    male(' ', round($hoehe / 2.5));
                    male('x', round($hoehe/3.5));
                }
                elseif($i == 2 || $i == $hoehe - 1)
                {
                    male(' ', round($hoehe / 4)-1);
                    male('x', 1);
                    male(' ', round($hoehe / 2)+1);
                }
                elseif($i == 3 || $i == $hoehe - 2)
                {
                    male(' ', round($hoehe / 6)-1);
                    male('x', 1);
                    male(' ', round($hoehe / 2) * 1.5 +1);
                }
                else
                {
                    male('x', 1);
                    male(' ', $hoehe);
                }
                male('x', 1);
            }
        }
        male('', 1, 1);
    } //ich putz hier nur
}

$word = ['A', 'L', 'L', 'A'];

buchstaben($word);

?>
