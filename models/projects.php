<?php

//Model for database interactions

require_once 'database/database.php'; // Include the database connection setup

function getProjects($projectId = null) {
    $con = getDatabaseConnection(); // Get the database connection

    if ($projectId !== null) {
        $query = "SELECT id, name, filename, GitLink, description FROM Projects WHERE id = " . intval($projectId);
    } else {
        $query = "SELECT id, name, filename, GitLink, description FROM Projects ORDER BY id";
    }

    $result = mysqli_query($con, $query);
    $projects = [];

    if ($result) {
        while ($project = mysqli_fetch_assoc($result)) {
            $projects[] = $project;
        }
    } else {
        echo json_encode(['error' => 'Database query failed: ' . mysqli_error($con)]);
        $projects = null; 
    }

    mysqli_close($con);
    return $projects;
}




