<html> 
      
<head> 
    <title> 
        Button Click
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
    Button Click
    </h1> 
    
       
    <?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        function button1() { 
            echo "Button 1 Clicked".$_POST["button1"]; 
        } 
        function button2() { 
            echo "Button 2 Clicked".$_POST["button2"]; 
        } 
    ?> 
  
    <form method="post"> 
        <input type="submit" name="button1"
                 value="10" /> 
          
        <input type="submit" name="button2"
             value="20" /> 
    </form> 
</body> 
  
</html> 