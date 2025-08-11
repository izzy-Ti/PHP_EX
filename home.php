<?php  
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is my website</h2><hr>
    <a href="index.php">This is a link for index</a>
</body>
</html>
<?php 
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
?>