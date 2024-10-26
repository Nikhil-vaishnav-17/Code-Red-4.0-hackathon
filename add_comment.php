<?php
include 'database/db_config.php';
$conn = new mysqli('localhost', 'root', '', 'community_sustainability');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $project_id = $_POST['project_id'];
    $user = 'Anonymous'; // Replace with the actual user once login is implemented
    $comment = $conn->real_escape_string($_POST['comment']);

    $query = "INSERT INTO discussions (project_id, user, comment) VALUES ($project_id, '$user', '$comment')";
    if ($conn->query($query) === TRUE) {
        header("Location: project_view.php?id=" . $project_id);
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
$conn->close();
?>
