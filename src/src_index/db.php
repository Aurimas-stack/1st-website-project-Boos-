<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "az_boos_projektas");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Sorry, there's a problem with the website.\n";
        echo 'Error: ' . $mysqli->connect_error . '\n';
        exit();
    }
    mysqli_query($mysqli, "INSERT INTO clients (name, email, message)
    VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");