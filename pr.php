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
        color : red;
    }

</style>    
<body>

<?php

$name = $email = $mobile = $website = $address = $gender =$hobby = " ";
$nameerr = $emailerr = $mobileerr = $websiteerr = $addresserr = $gendererr =$hobbyerr = " ";

//$name = $_POST["$name"];
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

    <h2>PHP form validation </h2>
    <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    NAME:<input type = "text" id = "name" value = "<?php echo $name;?>">
    <span>*<?php echo $nameerr; ?></span>
    <br>
    <br>

    Email:<input type = "email" id = "email">
    <br>
    <br>

    Website:<input type = "website" id = "website">
    <br>
    <br>

    Mobile:<input type = "number" id = "mobile">
    <br>
    <br>

    address:<textarea rows = "3" cols = "17" id = address></textarea>
    <br>
    <br>

    Gender:<input type = "radio" id = "male" >MALE 
    <input type = "radio" id = "female" >FEMALE 
    <input type = "radio" id = "other" >OTHER
    <br>
    <br>

   Hobbies:<input type = "checkbox" id = "play" >play 
    <input type = "checkbox" id = "swim" >swim 
    <input type = "checkbox" id = "dance" >dance
    <br>
    <br>

    city:
    <select id = "city">
    <option value = "ahm">ahm</option>  
    <option value = "surat">surat</option>
    <option value = "mumbai">mumbai</option>  
</select>

<br>
    <br>

<input type = "submit" value="submit" id = "submit">

</form>


<?php
echo $name;
echo "<br>";
?>

</body>
</html>