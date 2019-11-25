<?php
if(!$_POST)
{
    $_POST['vorname'] = '';
    $_POST['nachname'] = '';
    $_POST['artikel'] = '';
    $_POST['preis'] = '';
    $_POST['menge'] = '';
}

if(isset($_POST['speichern']))
{
    echo $_POST['vorname'].' '.$_POST['nachname'].' hat '.$_POST['menge'].'x '.
        'den Artikel: '.$_POST['artikel'].' für '.$_POST['preis'] * $_POST['menge'].'€ gekauft';
}

echo '<form method="post">';
echo '<table border=0>';
echo '<div>';
echo '<tr><td>Vorname:</td> <td><input type="text" name="vorname" value="'.$_POST['vorname'].'"></td></tr>';
echo '<tr><td>Nachname:</td> <td><input type="text" name="nachname" value="'.$_POST['nachname'].'"></td></tr>';
echo '</div>';
echo '<tr><td> </td><td> </td></tr>';
echo '<div>';
echo '<tr><td>Artikel:</td> <td><input type="text" name="artikel" value="'.$_POST['artikel'].'"></td></tr>';
echo '<tr><td>Preis:</td> <td><input type="text" name="preis" value="'.$_POST['preis'].'"></td></tr>';
echo '<tr><td>Menge:</td> <td><input type="text" name="menge" value="'.$_POST['menge'].'"></td></tr>';
echo '</div>';
echo '</table>';

echo '<div><input type="submit" name="speichern" value="Speichern"></div>';
echo '</form>';

?>
