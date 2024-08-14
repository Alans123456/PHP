<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
</head>
<body>
    <h2>Comment</h2>
    <form action="" method="post">
        <textarea name="comment" id="comment" placeholder="Comment"></textarea>
        <button type="submit" name="submit">post</button>

        <?php
        $b=$_POST['comment'];
        echo"<br>";
        echo $b;
        ?>
</body>
</html>