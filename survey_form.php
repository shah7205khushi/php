<?php
session_start();

// Check if the user has already submitted the survey
if (isset($_SESSION['submitted'])) {
    echo "You have already submitted the survey. Thank you!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Form</title>
</head>
<body>
    <h1>User Survey</h1>
    <form action="submit_survey.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="response">Your Response:</label><br>
        <textarea id="response" name="response" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
