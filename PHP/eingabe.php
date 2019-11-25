<?php
if(!$_POST)
{
    $_POST['vorname'] = '';
    $_POST['nachname'] = '';
}
    echo '<form method="post">';
    echo '<div>Vorname</div>';
    echo '<div><input type="text" name="vorname" value="'.$_POST['vorname'].'"></div>';
    echo '<div>Nachname</div>';
    echo '<div><input type="text" name="nachname" value="'.$_POST['nachname'].'"></div>';
    echo '<div><input type="submit" name="speichern" value="Speichern"></div>';
    echo '</form>';

?>
