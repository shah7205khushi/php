<!DOCTYPE html>
<html lang="en">
<head>
 <title>User Registration Form</title>
</head>
<body>
 <h2>User Registration Form</h2>
 <form action="" method="post">
 <label for="username">Username:</label>
 <input type="text" id="username" name="username" required><br><br>
 
 <label for="email">Email:</label>
 <input type="email" id="email" name="email" required><br><br>
 
 <label for="password">Password:</label>
 <input type="password" id="password" name="password" required><br><br>
 
 <input type="submit" value="Register">
 </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
 
 <title>User Details</title>
 <style>
 table {
 border-collapse: collapse;
 width: 50%;
 }
 th, td {
 border: 1px solid #ddd;
 padding: 8px;
 text-align: left;
 }
 th {
 background-color: #f2f2f2;
 }
 </style>
</head>
<body>
 <h2>User Details</h2>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username = $_POST['username'];
 $email = $_POST['email'];
 // You might want to hash the password before displaying, don't display 
//passwords as plaintext!
 $password = $_POST['password'];
 ?>
 <table>
 <tr>
 <th>Field</th>
 <th>Value</th>
 </tr>
 <tr>
 <td>Username</td>
 <td><?php echo $username; ?></td>
 </tr>
 <tr>
 <td>Email</td>
 <td><?php echo $email; ?></td>
 </tr>
 <tr>
 <td>Password</td>
 <td><?php echo $password; ?></td>
 </tr>
 </table>
 <?php
 } else {
 echo "Invalid request!";
 }
 ?>
</body>
</html>