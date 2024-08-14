<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num1" id="num1" placeholder="Enter a Number">
        <button type="submit">Check</button>
    </form>
    <?php
    $num1= $_POST['num1'];
    if ($num1>=8){
        echo  ("Excillent");
    }
    elseif ($num1>=7){
        echo  ("Very good");
    }
    elseif ($num1>=6){
        echo  ("Good");
    }
    elseif ($num1>=4){
        echo  ("Not bad");
    }
    else{
        echo("Bad");
    }
    ?>
</body>
</html>