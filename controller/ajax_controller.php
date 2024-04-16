<?php
// ajax_controller.php: Handles AJAX requests for project data

require_once 'models/model.php'; 

header('Content-Type: application/json');  

// Function to fetch projects from the model
function fetchProjects($id = null) {
    return getProjects($id); // Call to the model function
}

if (isset($_GET['id'])) {
    echo json_encode(fetchProjects(intval($_GET['id'])));
} else {
    echo json_encode(fetchProjects());
}
exit;  
