<html>
<head>
<title>Demo</title>
</head>

<body>
<?php
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["comments"])) 
    {
        echo $_POST["name"]."--".$_POST["email"]."--".$_POST["comments"];
        //header("Location:htmlif.php?action=done");
        
    } 
?>


   <?php if (isset($_REQUEST["action"]) && $_REQUEST["action"] == 'done') { 
        echo $_POST['name'];
    ?>

<p><em>Thank you for your valuable feedback!</em></p>

   <?php } else { ?>
    <h1>Form</h1>
<p>Please enter the fields below.</p>
<form action="10.php?action=done" method="post" name="info" id="info">
  <table cellspacing="0">
    <tr>
      <td>Your name:</td>
      <td><input name="name" type="text" id="name"></td>
    </tr>
    <tr>
      <td>E-mail address:</td>
      <td><input name="email" type="text" id="email"></td>
    </tr>
  </table>
  <p><strong>Comments about our site:</strong></p>
  <p> 
    <textarea name="comments" id="comments"></textarea>
  </p>
  <p>
    <input type="submit" name="Submit" value="Submit">
  </p>
</form>

  <?php } ?>

 
</body>
</html>



