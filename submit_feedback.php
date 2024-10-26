<?php
// Database connection settings
$host = "localhost"; // Hostname
$dbname = "feedback_db"; // Database name
$username = "root"; // Database username (default is "root" for XAMPP)
$password = ""; // Database password (default is empty for XAMPP)

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get feedback from the POST request
    $feedback = trim($_POST['feedback']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO feedbacks (feedback) VALUES (?)");
    $stmt->bind_param("s", $feedback);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Thank you for your feedback!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
