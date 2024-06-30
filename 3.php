<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: 1.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome, <?php echo $user['username']; ?>!</h1>
    <h2>welcome to home page you can change the password or Logout from this page</h2>
    <p><a href="2.php">Change Password</a></p>
    <p><a href="4.php">Logout</a></p>
</body>
</html>
