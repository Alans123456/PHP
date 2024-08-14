<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="num1" id="num1" placeholder="num1"><br><br>
    <input type="text" name="num2" id="num2" placeholder="num2"><br><br>
    <input type="text" name="num3" id="num3" placeholder="num3"><br><br>
    <input type="text" name="num4" id="num4" placeholder="num4"><br><br>
    <input type="text" name="num5" id="num5" placeholder="num5"><br><br>
    <button type="submit" style="background-color: red;">Check</button>
    </form>
    <?php
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $c=$_POST['num3'];
    $d=$_POST['num4'];
    $e=$_POST['num5'];
    $total=$a+$b+$c+$d+$e;
    if($a>=40 && $b>=40 && $c>=40 && $d>=40 && $e>=40){
     echo " you are pass ";
     echo "<br/>";
     echo "Total ".$total;
     echo"<br/>";
     $percentage=$total/5;
     echo "Percentage is ". $percentage;
     echo"</br>";
     echo "You get ";
     if($percentage>=90)
     echo "A+";
    elseif($percentage>=80)
    echo"A";
    elseif($percentage>=70)
    echo"B+";
    elseif($percentage>=60)
    echo"B";
    elseif($percentage>=50)
    echo"C+";
    else
    echo"C";
    }
    else{
        echo " You are fail";
        echo"<br/>";
        echo "Total".$total;
        echo"<br/>";
        $percentage=$total/5;
        echo"Percentage is".$percentage;
        
    }

   ?>
</body>
</html>