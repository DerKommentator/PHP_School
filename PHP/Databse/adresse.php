<?php //adresse.php
#print_r($_GET);

include('connect.php');


#############################################################     EDIT     #############################################################

if(isset($_GET['edit_id']))
{
    // Hier muss der Datensatz neu selektiert werden!!
    $stmt= $mysqli->prepare("select vorname,nachname from adresse where adresse_id=?");
    $stmt->bind_param('i', $_GET['edit_id']);
    $stmt->execute();

    $result_select_adresse=$stmt->get_result();

    $row_select_adresse=$result_select_adresse->fetch_assoc();
    echo '<h3> Adresse ändern </h3>';
    echo '<div style="padding:10px;">';
    echo '<form>';
    echo '<div style="background-color:lightgray;padding:3px;">Vorname</div>';
    echo '<div style="background-color:#5fefef;padding:3px;"><input type="text" name="vorname" value="'.$row_select_adresse['vorname'].'"></div>';
    echo '<div style="background-color:lightgray;padding:3px;">Nachname</div>';
    echo '<div style="background-color:#5fefef;padding:3px;"><input type="text" name="nachname" value="'.$row_select_adresse['nachname'].'"></div>';
    
    echo '<div style="border:1px solid black;padding:3px;">';
    echo '<input type="submit" name="edit_save" value="Speichern">';
    echo '<input type="submit" name="Zurück" value="Zurück">';
    echo '</div>';
    echo '<input type="hidden" name="adresse_id" value="'.$_GET['edit_id'].'">';
    echo '</form>';
    echo '</div>';
    $stmt->close();
}


if(isset($_GET['edit_save']))
{
    $stmt= $mysqli->prepare("UPDATE adresse 
                                SET vorname = ?, 
                                    nachname = ?
                            where adresse_id = ?");

    $stmt->bind_param('ssi', $_GET['vorname'], $_GET['nachname'], $_GET['adresse_id']);
    $stmt->execute();
    $stmt->close();
}

#############################################################     SHOW     #############################################################

if(isset($_GET['show_id']))
{
    $stmt= $mysqli->prepare("select vorname, nachname, geburtstag, email from adresse where adresse_id=?");
    $stmt->bind_param('i', $_GET['show_id']);
    $stmt->execute();

    $result_select_adresse=$stmt->get_result();

    $row_select_adresse=$result_select_adresse->fetch_assoc();

    echo 'Datensatz '.$_GET['show_id']. ':<br>';
    echo '<table border=1';
    echo '<tr><td>Vorname:</td><td>'.$row_select_adresse['vorname'].'</td></tr>';
    echo '<tr><td>Nachname:</td><td>'.$row_select_adresse['nachname'].'</td></tr>';
    echo '<tr><td>Geburtstag:</td><td>'.$row_select_adresse['geburtstag'].'</td></tr>';
    echo '<tr><td>Email:</td><td>'.$row_select_adresse['email'].'</td></tr>';
    echo '</table>';
}

#############################################################     DELETE     #############################################################

if(isset($_GET['delete_id']))
{
    $stmt= $mysqli->prepare("select vorname,nachname from adresse where adresse_id=?");
    $stmt->bind_param('i', $_GET['delete_id']);
    $stmt->execute();

    $result_select_adresse=$stmt->get_result();

    $row_select_adresse=$result_select_adresse->fetch_assoc();

    echo 'Soll der Datensatz '.$row_select_adresse['vorname'].' '.$row_select_adresse['nachname'].' wirklich gelöscht werden?<br>';

    echo '<form>';
    echo '<input type="submit" name="delete" value="Ja">';
    echo '<input type="submit" name="delete" value="Nein">';
    echo '<input type="hidden" name="id" value="'.$_GET['delete_id'].'">';
    echo '</form>';

    $stmt->close();
}
if (isset($_GET['delete']) && $_GET['delete'] == "Ja")
{
    $stmt = $mysqli->prepare("DELETE FROM adresse WHERE adresse_id = ?");
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $stmt->close();
}

#############################################################     INSERT     #############################################################

if(isset($_GET['insert']))
{
    echo '<h1>Datensatz  neu anlegen</h1>';

    echo '<form>';
    echo 'Nickname: <input type="text" name="nickname"><br>';
    echo 'Vorname: <input type="text" name="vorname"><br>';
    echo 'Nachname: <input type="text" name="nachname"><br>';
    echo 'Geburtstag: <input type="date" name="geburtstag"><br>';
    echo 'Email: <input type="text" name="email"><br>';
    echo 'Kennwort: <input type="password" name="kennwort"><br>';
    echo '<input type="submit" name="insert_save" value="Speichern">';
    echo '</form>';
}
if (isset($_GET['insert_save']))
{
    $stmt = $mysqli->prepare("INSERT 
                                INTO adresse 
                                    (nickname, vorname, nachname, geburtstag, email, kennwort) 
                                VALUES 
                                    (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $_GET['nickname'], $_GET['vorname'], $_GET['nachname'], $_GET['geburtstag'], $_GET['email'], $_GET['kennwort']);
    $stmt->execute();
    $stmt->close();
}

#############################################################     MENU     #############################################################

if (!$_GET or isset($_GET['Zurück']) or isset($_GET['edit_save']) or isset($_GET['insert_save']) or isset($_GET['delete']))
{
        $str_select_adresse='select adresse_id,vorname,nachname from adresse';
        $result=$mysqli->query($str_select_adresse);
        echo '<form method="GET">';
        echo '<h1> Auswahl Adresse</h1>';
        echo '<table border="5" border-color="#C0C0C0">';
        echo '<tr>';
        echo '<td>'.'<b>Vorname'.'</td>';
        echo '<td>'.'<b>Nachname'.'</td>';
        echo '<td colspan="3"><a href="?insert=neu">neu </a></td>';
        
        echo '</tr>';
    

    while( $row=$result->fetch_assoc())
    {

        echo '<tr>';
        
        echo '<td>'.$row['vorname'].'</td>';
        echo '<td>'.$row['nachname'].'</td>';
                
        echo '<td><button type="submit" name="edit_id" value="'.$row['adresse_id'].'"><img src="icons/aendern.gif" width="30px" alt="Submit"></button></td>';
        echo '<td><button type="submit" name="show_id" value="'.$row['adresse_id'].'"><img src="icons/lupe.bmp" width="30px" alt="Submit"></button></td>';
        echo '<td><button type="submit" name="delete_id" value="'.$row['adresse_id'].'"><img src="icons/delete.bmp" width="30px" alt="Submit"></td>';
        echo '</tr>';
    }
    echo '</table>';

    echo '</form>';
}
$mysqli->close();

?>

