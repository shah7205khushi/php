<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "use1");

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: 1.php");
    exit();
}

// Handle password change
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_password =($_POST['current_password']);
    $new_password =($_POST['new_password']);

    $user_id = $_SESSION['user']['id'];
    
    // Verify current password
    $sql = "SELECT * FROM users WHERE id='$user_id' AND password='$current_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Update password
        $sql = "UPDATE users SET password='$new_password' WHERE id='$user_id'";
        if (mysqli_query($conn, $sql)) {
            echo "Password changed successfully";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    } else {
        echo "Current password is incorrect";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>
    <form method="post">
        Current Password: <input type="password" name="current_password" required><br>
        New Password: <input type="password" name="new_password" required><br>
        <button type="submit">Change Password</button>
    </form>
    <a href="3.php">Back to Profile</a>
</body>
</html>
