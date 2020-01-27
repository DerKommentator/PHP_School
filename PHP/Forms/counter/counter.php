<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="counter.css" />
    </head>
    <body>
        <?php

            if(!$_POST) {
                $_POST['counter'] = 0;
            }

            if(isset($_POST['plus'])) {
                $_POST['counter'] +=1;
            }

            if(isset($_POST['minus'])) {
                $_POST['counter'] -=1;
            }

            if(isset($_POST['reset'])) {
                $_POST['counter'] = 0;
            }

            echo '<div id="counter">';

            echo '<form method="post">';
            echo '<table border=0';
            echo '<tr><td colspan="2"><input readonly class="counterField" type="text" name="counter" value="'.$_POST['counter'].'"></td></tr>';

            echo '<tr><td width="50%"><input class="changeValue" type="submit" name="plus" value="+"></td>';
            echo '<td width="50%"><input class="changeValue" type="submit" name="minus" value="-"></td></tr>';

            echo '<tr><td colspan="2"><input class="resetValue" type="submit" name="reset" value="Reset"></td></tr>';
            echo '</table>';
            echo '</form>';

            echo '</div>';

        ?>
    </body>
</html>
