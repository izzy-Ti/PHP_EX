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
    <form action="index.php" method = "POST">
        <p>username: </p><br>
        <input type="text" name = "username"><br>
        <p>password: </p><br>
        <input type="password" name = "password"><br>   
        <input type="submit" value = "Login" name = "login">  <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            header("Location: home.php");
        } else{
            echo "pls make sure to enter both fields";
        }
    }
?>