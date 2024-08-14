<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="age" id="age" placeholder="Age">
    <button type="submit">Check</button>
    </form>
    <?php
    $a=$_POST['age'];
    echo "$a";
    if($a>=18){
     echo" is Adult";
    }
    else{
        echo" is Child";
    }

   ?>
</body>
</html>