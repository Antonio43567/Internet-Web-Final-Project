<?php

require_once './models/contacts.php';
require_once './database/database.php';


function controllerSave() {
    $Name = $_POST['Name'] ?? '';
    $email = $_POST['email'] ?? '';
    $Message = $_POST['Message'] ?? '';

    header('Content-Type: application/json');

    $result = save($Name, $email, $Message);

    if ($result) {
        echo json_encode(['status' => 'success', 'message' => 'Message Sent Successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to save message']);
    }
}

// Call function here to see json_encode 

//controllerSave(); 

