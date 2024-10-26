<?php
include 'database/db_config.php';

$search_query = $_GET['query'];
$query = "SELECT * FROM projects WHERE title LIKE '%$search_query%'";
$result = $conn->query($query);

$projects = [];
while ($row = $result->fetch_assoc()) {
    $projects[] = $row;
}
echo json_encode($projects);
$conn->close();
?>
