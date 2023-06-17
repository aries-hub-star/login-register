<?php
    /* RPDO Database connection configuration*/
    $db_username = 'root';
    $db_password = '';
    $conn = new PDO('mysql:host=localhost;dbname=sese-login', $db_username, $db_password);
    if(!$conn) {
        die("Fatal Error: Connection Failed!");
    }
    else {
        echo "Connection Succeeded";
    }
?>