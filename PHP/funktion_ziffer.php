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
    $pos_numerals = ['Eins', 'Zwei', 'Drei', 'Vier',
                     'Fünf', 'Sechs', 'Sieben', 'Acht', 'Neun'];
    $neg_numerals = ['Null', 'minus Eins', 'minus Zwei', 'minus Drei',
                     'minus Vier', 'minus Fünf', 'minus Sechs',
                     'minus Sieben', 'minus Acht', 'minus Neun'];
    if($number > 0)
    {
        return $pos_numerals[$number-1]; # count -1 because pos_numerals doesn't contains 'Null'
    }
    elseif($number < 0)
    {
        $number = $number * -1;
        return $neg_numerals[$number];
    }
    else
    {
        return 'Not a number';
    }
}


function number_2_digits($number)
{
	$output_array = [];
    if($number != 0)
    {
        while($number <= -1 || $number >= 1)
    	{
    		array_push($output_array, $number % 10);
    		$number = $number / 10;
    	}
        $output_array = array_reverse($output_array);
    	return $output_array;
    }
    else
    {
        return [$number];
    }
    #print_r($output_array);

}

$number = -545;

echo $number.' als Wort: ';
foreach(number_2_digits($number) as $digit)
{
    echo number_2_numeral($digit).' ';
}

?>
