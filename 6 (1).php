<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <?php
    $n = 0;
    if(isset($_POST["ntext"])) {
        $n = (int)$_POST["ntext"];
    ?>
        <form name="frm2" method="post" action="6(1).php?n=<?php echo $n ?>">
    <?php   
        for($i = 0; $i < $n; $i++) {
            
            echo '<input type="text" name="ntext' . $i . '"><br>';
        }
    ?>
        <input type="submit" name="submit">
        </form>
    <?php
    }
    ?>   
    <?php
        $arr=array();
        if(isset($_REQUEST["n"])){
        $n=$_REQUEST["n"];
        if(isset($_POST["submit"]))
        {
            echo "here";
            for($i = 0; $i < $n; $i++) {
                $arr[$i]=$_POST["ntext$i"];
            }
            print_r($arr);
            for($i = 0; $i < $n; $i++) {
                echo "<br>".$arr[$i];
            }
        }
    }
    ?>  
</body>
</html>