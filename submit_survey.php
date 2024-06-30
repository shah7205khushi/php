<?php
session_start();

if (isset($_SESSION['submitted'])) {
    echo "You have already submitted the survey. Thank you!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "survey_db");

    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO responses (username, response) VALUES (?, ?)");
    $stmt->bind_param("ss", $_POST['username'], $_POST['response']);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Thank you for your response!";
        $_SESSION['submitted'] = true; // Set session variable to prevent duplicate submissions
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
