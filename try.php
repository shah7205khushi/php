<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

span
{
    color:red;
}

</style>    
<body>

<?php

$name = $email = $website = $gender = $comment =$city = "";
$nameerr = $emailerr = $websiteerr = $gendererr = $cityerr = "";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["name"]))
    {
        $nameerr = "name is required";
    }

    else
    {
        $name = ($_POST["name"]);
       if(!preg_match("/^[a-zA-z-'  ]*$/",$name))
       {
           $nameerr = "only letters and whitespace are allowed";
       }
    }



    if(empty($_POST["email"]))
    {
        $emailerr = "email is required";
    }

    else
    {
        $email = ($_POST["email"]);
        $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";

        if(!preg_match($pattern,$email))
        {
            $emailerr = "invalid email format";
        }
    }


    if(empty($_POST["website"]))
    {
        $website = "";
    }
    else
    {
        $website = ($_POST["website"]);
    }


    if(empty($_POST["comment"]))
    {
        $comment = "";
    }
    else
    {
        $comment = ($_POST["comment"]);
    }

    if(empty($_POST["gender"]))
    {
        $gendererr = "gender is required";
    }
    else
    {
        $gender = ($_POST["gender"]);
    }

    if(empty($_POST["city"]))
    {
        $cityerr = "city is required";
    }
    else
    {
        $city = ($_POST["city"]);
    }


}




?>

    <h2>php form validation </h2>
    <form  method="POST" action = "<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
    <span> * required fields</span>
    <br> 
    <br> 
    <br> 

    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span>*<?php echo $nameerr; ?></span>
    <br> 
    <br> 
    <br> 



     Email:
    <input type="email" name="email" value = "<?php echo $email ; ?>" >
    <span>*<?php echo $emailerr ;?></span>
    <br>
    <br> 
    <br> 

    

    website:
    <input type="url" name="website" value = "<?php echo $website ; ?>">
    <br>
    <br> 
    <br> 
  

    comment:
    <textarea name="comment" rows="3" cols="19"><?php echo $comment ;?></textarea>
    <br>
    <br> 
    <br> 

    Gender:
    <input type= "radio" name="gender"<?php if (isset($gender) && $gender == "male") echo "checked" ?> value="male">Male 
    <input type= "radio" name="gender"<?php if(isset($gender) && $gender == "female") echo "checked" ?> value="female">female 
    <input type= "radio" name="gender"<?php if(isset($gender) && $gender == "other") echo "checked" ?>value="other">other 
    <span>*<?php echo $gendererr ; ?></span>
    <br>
    <br> 
    <br> 

    city:
    <select id=city name=city>
    <option value="ahm">ahmedabad</option>
    <option value="surat">surat</option>
    <option value="mumbai">mumbai</option>
    </select>
   

    <br>
    <br> 
    <br>

    <input type=submit value=submit name=submit>






    </form>

    <?php

    echo "<h2>Your input</h2>";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $city;




    ?>

</body>
</html>