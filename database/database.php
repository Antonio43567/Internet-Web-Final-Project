<?php


function getDatabaseConnection() {
    global $env;
    $host = $env['DBHOST'];
    $username = $env['DBUSER'];
    $password = $env['DBPASS'];
    $database = $env['DBNAME'];

    $con = mysqli_connect($host, $username, $password, $database);
    if (!$con) {
        die("Connection Error: " . mysqli_connect_error());
    }
    return $con;
}

