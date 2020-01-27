<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="counter.css" />
    </head>
    <body>
        <?php

            if(!$_POST)
            {
                $_POST['counter'] = 0;
            }

            if(isset($_POST['plus']))
            {
                $_POST['counter'] +=1;
            }
            elseif(isset($_POST['minus']))
            {
                $_POST['counter'] -=1;
            }
            elseif(isset($_POST['plus10']))
            {
                $_POST['counter'] += 10;
            }
            elseif(isset($_POST['minus10']))
            {
                $_POST['counter'] -= 10;
            }
            elseif(isset($_POST['reset']))
            {
                $_POST['counter'] = 0;
            }

            /*if($_POST['counter'] < 0)
            {
                $counter_color = "#FF0000";
            }
            else
            {
                $counter_color = "#000000";
            }*/

            $counter_color = ($_POST['counter'] < 0) ? '#FF0000' : '#00FF00';


            echo '<div id="counter">';

            echo '<form method="post">';
            echo '<table border=1';
            echo '<tr>';
            echo '<td rowspan="4"><p style="font-size: 40px;">S</br>E</br>H</br>R</td>';
            echo '<td colspan="2" class="counterField"><p style="color:'.$counter_color.'">'.$_POST['counter'].'</p></td>';
            echo '<td rowspan="4"><p style="font-size: 40px;">S</br>U</br>P</br>E</br>R</p></td>';
            echo '</tr>';

            echo '<tr><td width="50%"><input class="changeValue" type="submit" name="minus" value="-"></td>';
            echo '<td width="50%"><input class="changeValue" type="submit" name="plus" value="+"></td></tr>';

            echo '<tr><td width="50%"><input class="changeValue" type="submit" name="minus10" value="-10"></td>';
            echo '<td width="50%"><input class="changeValue" type="submit" name="plus10" value="+10"></td></tr>';

            echo '<tr><td colspan="2"><input class="resetValue" type="submit" name="reset" value="Reset"></td></tr>';

            echo '</table>';
            echo '<input type="hidden" name="counter" value="'.$_POST['counter'].'">';
            echo '</form>';

            echo '</div>';

        ?>
    </body>
</html>
