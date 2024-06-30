<?php
// Function to validate name
function validateName($name) {
    // Regular expression to match only letters, spaces, and hyphens in the name
    return preg_match('/^[a-zA-Z\s-]+$/', $name);
}

// Function to validate email format
function validateEmail($email) {
    // Regular expression to validate email format
    return preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email);
}

// Function to log validation status with date and time
function logValidation($validationStatus) {
    $logMessage = date("Y-m-d H:m:s") . " - Validation " . ($validationStatus ? "successful" : "failed") . "\n";
    file_put_contents("log.txt", $logMessage, FILE_APPEND);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Validate form data
    $nameValid = validateName($name);
    $emailValid = validateEmail($email);

    // Log validation status
    logValidation($nameValid && $emailValid);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h2>Submit Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
