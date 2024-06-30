<?php
session_start();

//Include database connection if you want to store the data in the database
$conn = mysqli_connect("localhost", "root", "", "form_data");
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['form_data'] = $_POST;
    // If you want to store the data in the database
    $name = $_POST['name'];
    $course = $_POST['course'];
    $department = $_POST['department'];
    $sql = "INSERT INTO submissions (name, course, department) VALUES ('$name', '$course', '$department')";
    $result=mysqli_query($conn, $sql);
    if($result)
    {
        echo "data stored succesfully";
    }
}

// Get form data from session if available
$form_data = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : ['name' => '', 'course' => '', 'department' => ''];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Preserved Data</title>
</head>
<body>
    <form action="form.php" method="post">
        NAME: <input type="text" name="name" value="<?php echo htmlspecialchars($form_data['name']); ?>">
        <br><br>
        COURSE: <input type="text" name="course" value="<?php echo htmlspecialchars($form_data['course']); ?>">
        <br><br>
        DEPARTMENT: <input type="text" name="department" value="<?php echo htmlspecialchars($form_data['department']); ?>">
        <br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
