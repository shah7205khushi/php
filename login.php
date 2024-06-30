<?php
session_start();

// Check if the user is already logged in via cookies
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    // You should validate the cookies against your database here
    // For demonstration, we assume cookies are valid
    $_SESSION['username'] = $_COOKIE['username'];
    header('Location: welcome.php');
    exit();
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password
    // For demonstration, we assume they are always correct
    // In a real application, you should check these values against a database
    if ($username == "khushi" && $password == "123") {
        $_SESSION['username'] = $username;

        // Set cookies if "Remember Me" is checked
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // 30 days
            setcookie('password', $password, time() + (86400 * 30), "/"); // 30 days
        }

        header('Location: welcome.php');
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember Me</label><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
