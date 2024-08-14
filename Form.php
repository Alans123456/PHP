<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and variable</title>
</head>
<body>
   <H1> Using form and variable </H1>
   <?php
    echo"Hello All";
   ?>
   <H2>Form</H2>
   <?php
    $age =21;
     echo $age;
   ?>
   <h2>Form and Variable</h2>
   <form action="" method="post">
    <input type="text" name="age" id="age" placeholder="Enter Age">
    <button type="submit" name="submit">Send</button>
   </form>
   <?php
    $a=$_POST['age'];
    echo $a;

   ?>

</body>
</html>