<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
<input type="text" name="investvalue" placeholder="Investment Amount"/>
<input type="text" name="interest" placeholder="Yearly Interest"/>
<input type="text" name="yearinvest" placeholder="Years of invest"/>

<button type="submit" name="submit">Submit</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $x = $_POST["investvalue"];
        $y = $_POST["interest"];
        $z = $_POST["yearinvest"];
        for($i =0;$i < $z; $i++){
            $x = $x + ($x*$y);
        }
        echo $x;
    }
?>
</body>
</html>
