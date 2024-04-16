<?php
// index.php: Controller and View
require_once './controller/mainController.php';
require_once './controller/projectController.php';
require_once './controller/contactController.php'; 
$env = parse_ini_file('./.env');



$uri = strtok($_SERVER["REQUEST_URI"], '?');

if ($uri === '/' && $_SERVER['REQUEST_METHOD'] === 'GET')
{

    homepage();



}

if ($uri === '/projects' && $_SERVER['REQUEST_METHOD'] === 'GET')
{

    getHTTPProjects();

}

if ($uri === '/contacts' && $_SERVER['REQUEST_METHOD'] === 'POST')
{ 
    controllerSave();

}


//if contacts and post make contacts controller, call makeContact 

// if (isset($_GET['ajax']) && $_GET['ajax'] == 'true') {  // Check if it's an AJAX request
//     header('Content-Type: application/json');  // Set proper header for JSON response
//     if (isset($_GET['id'])) {
//         echo json_encode(fetchProjects(intval($_GET['id'])));
//     } else {
//         echo json_encode(fetchProjects());
//     }
//     exit;  // Stop further script execution since we only want to return JSON data here
// }

// function fetchProjects($id = null) {
//     return getProjects($id); // Delegate to the model function
// }

// // If there's a specific project requested (based on query string)
// if (isset($_GET['id']) && !isset($_GET['ajax'])) {  // Make sure it's not an AJAX request
//     $projectData = fetchProjects(intval($_GET['id']));
// } else if (!isset($_GET['ajax'])) {
//     $projectData = fetchProjects(); // Fetch all projects
// }

// // HTML and JavaScript content (view) continues here...

