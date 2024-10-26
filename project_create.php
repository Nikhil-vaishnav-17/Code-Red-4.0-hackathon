<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database configuration
include 'database/db_config.php';
// Database connection
$conn = new mysqli('localhost', 'root', '', 'community_sustainability');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $image = $conn->real_escape_string($_POST['image']);  // Get the image path/link

    // Check if project already exists
    $check_query = "SELECT * FROM projects WHERE title='$title'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "Project already exists!";
    } else {
        // Insert new project with image
        $query = "INSERT INTO projects (title, description, image) VALUES ('$title', '$description', '$image')";
        if ($conn->query($query) === TRUE) {
            echo "New project created successfully!";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
