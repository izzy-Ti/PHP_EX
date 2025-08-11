<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Register here</h2>
    <form action="index.php" method = "POST">
    <label for="">NAME</label><br>
    <input type="text" name = "username"><br>
    <label for="">password</label><br>
    <input type="password" name = "password"><br>
    <input type="submit" value= "login" name = "login">
</form>
</body>
</html>
<?php
    include("db.php");
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, password)
                    VALUES('$username', '$hashed')";
            mysqli_query($conn, $sql);
            echo" user {$username} is registered successfully";
        } else{
            echo"please enter both username and password";
        }
    }
    mysqli_close($conn);
?>