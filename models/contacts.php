<?php

require_once 'database/database.php'; // Include the database connection setup

function save($name, $email, $message){
    $con = getDatabaseConnection(); //  database connection

    if($con->connect_error) {
        return false; // Return false if connection fails
    } else {
        $stmt = $con->prepare("INSERT INTO Contact(name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $success = $stmt->execute();
        $stmt->close();
        $con->close();
        return $success; 
    }
}
