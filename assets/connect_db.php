<?php
// dichiarazione delle variabili principali
$mysqli = new mysqli('localhost', 'root', 'root', 'DB_library');
    if ($mysqli->connect_error) {
        die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
    } else {
    }
    ?>