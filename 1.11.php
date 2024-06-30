<!DOCTYPE html>
<html>
<head>
 <title>Form Example</title>
</head>
<body>
<h2>Form Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 Name: <input type="text" name="name"><br>
 Email: <input type="text" name="email"><br>
 <input type="submit" name="submit" value="Submit">
</form>
<?php
// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Using $_POST to retrieve form data
 $name = $_POST['name'];
 $email = $_POST['email'];
 echo "<h3>Using \$_POST:</h3>";
 echo "Name: " . htmlspecialchars($name) . "<br>";
 echo "Email: " . htmlspecialchars($email) . "<br>";
}
//Check if the form is submitted using GET method
if (isset($_GET['submit'])) {
 //Using $_GET to retrieve form data
 $name_get = $_GET['name'];
 $email_get = $_GET['email'];
 echo "<h3>Using \$_GET:</h3>";
 echo "Name: " . htmlspecialchars($name_get) . "<br>";
 echo "Email: " . htmlspecialchars($email_get) . "<br>";
}
 //Using $_REQUEST to retrieve form data regardless of the method
if (isset($_REQUEST['submit'])) {
 $name_request = $_REQUEST['name'];
 $email_request = $_REQUEST['email'];
 echo "<h3>Using \$_REQUEST:</h3>";
 echo "Name: " . htmlspecialchars($name_request) . "<br>";
 echo "Email: " . htmlspecialchars($email_request) . "<br>";
}
?>
</body>
</html>