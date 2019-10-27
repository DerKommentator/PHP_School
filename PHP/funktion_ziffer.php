<?php
/*function gibZifferalsWort($ziffer)
{
    switch ($ziffer)
    {
        case 0:
            return 'Null';
            break;
        case 1:
            return 'Eins';
            break;
        case 2:
            return 'Zwei';
            break;
        case 3:
            return 'Drei';
            break;
        case 4:
            return 'Vier';
            break;
        case 5:
            return 'Fünf';
            break;
        case 6:
            return 'Sechs';
            break;
        case 7:
            return 'Sieben';
            break;
        case 8:
            return 'Acht';
            break;
        case 9:
            return 'Neun';
            break;
        case 10:
            return 'Zehn';
            break;
        default:
            return 'Dies ist keine Ziffer';
            break;
    }
}*/




function number_2_numeral($number)
{
    $numerals = ['Null', 'Eins', 'Zwei', 'Drei', 'Vier', 'Fünf', 'Sechs',
                    'Sieben', 'Acht', 'Neun', 'Zehn'];
    if($number<10)
    {
        return $numerals[$number];
    }
    else
    {
        return 'Dies ist keine Ziffer';
    }
}


function number_2_digits($number)
{
	$output_array = [];
	while($number >= 1)
	{
		array_push($output_array, $number % 10);
		$number = $number / 10;
	}
	$output_array = array_reverse($output_array);

	return $output_array;
}

$number = 425;

echo $number.' als Wort: ';
foreach(number_2_digits($number) as $digit)
{
    echo number_2_numeral($digit).' ';
}
//test
?>
