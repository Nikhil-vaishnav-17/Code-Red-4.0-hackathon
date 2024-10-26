<?php
require 'database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $communityCode = trim($_POST['community_code']);

    // Simple validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "All required fields must be filled!";
        exit;
    }

    // Check if the email already exists
    $checkEmail = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $checkEmail->bindParam(':email', $email);
    $checkEmail->execute();
    if ($checkEmail->rowCount() > 0) {
        echo "Email is already registered!";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert into the database
    $sql = "INSERT INTO users (name, email, password, community_code) VALUES (:name, :email, :password, :community_code)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':community_code', $communityCode);

    if ($stmt->execute()) {
        echo "Sign up successful!";
    } else {
        echo "An error occurred. Please try again.";
    }
}
?>
