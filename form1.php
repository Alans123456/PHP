<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <h2>Operator</h2>
    <?php
    $a=2;
    $b=3;
    echo $sum=$a*$b


    ?>
    <h2>By Form</h2>
    <form action="" method="Post">
        <input type="text" name="num1" id="num1" placeholder="Length">
        <input type="text" name="num2" id="num2" placeholder="Breath">
        <br>
        <button type="submit" name="submit">Find area </button>
        
    </form>
    <div class="result" style="margin:20px; padding:20px; background-color:red; color:white; font-size:40px; width:200px">
    <?php
    if (isset($_POST['submit']))
    {
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        $Area=$a*$b;
        echo"The Area is ". $Area;

    }
    else{
        echo "<br>";
        echo"The Area is";
    }
     ?>
     </div>
</body>
</html>