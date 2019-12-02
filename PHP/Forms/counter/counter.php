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
            echo '<input class="counterField" type="text" name="counter" value="'.$_POST['counter'].'"><br>';

            echo '<input class="changeValue" type="submit" name="plus" value="+">';
            echo '<input class="changeValue" type="submit" name="minus" value="-"><br>';

            echo '<input class="resetValue" type="submit" name="reset" value="Reset">';
            echo '</form>';
            
            echo '</div>';

        ?>
    </body>
</html>
