<?php
require_once './models/projects.php';

function getHTTPProjects($id = null) {

    header("Content-Type: application/json");
    echo json_encode(getProjects()); 
}
