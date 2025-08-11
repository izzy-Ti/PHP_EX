<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label>x</label><br>
        <input type="text" name= "x"><br>
        <label>y</label><br>
        <input type="text" name= "y"><br>
        <input type="submit" value= "calculate"><br>
    </form >
    <?php
        $y = $_POST["y"];
        $x = $_POST["x"];
        $number = null;

        //$number = abs($x);
        //$number = floor($x);
        //$number = round($x);
        //$number = ceil($x);
        //$number = pow($x, $y);
        //$number = max($x, $y);
        //$number = min($x, $y);
        //$number = pi();
        echo $number
    ?>
</body>
</html>