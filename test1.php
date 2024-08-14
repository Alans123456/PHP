
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="age" id="age" placeholder="age">
        <button type="submit">Check</button>
    </form>
    <?php
    $age = $_POST['age'];  
    if ($age>= 18)
    {
        
        echo("You can vote");
    }
    else
    {
        echo("You can't vote");
    }
    
    ?>
</body>
</html>