<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="num1" id="num1" placeholder="num1">
    <input type="text" name="num2" id="num2" placeholder="num1">
    <button type="submit">Check</button>
    </form>
    <?php
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    
    if($a>$b){
     echo $a." is greater ";
    }
    else{
        echo $B." is greater";
    }

   ?>
</body>
</html>