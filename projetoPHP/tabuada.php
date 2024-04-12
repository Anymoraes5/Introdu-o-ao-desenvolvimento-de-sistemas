<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>
<?php

    $tabuada = $_GET ["tabuada"];

    for($i=0;$i<=10;$i++){
        for ($a=0;$a<=10; $a++){
            $resultado = $i * $a;
            echo "<li> $i x $a = $resultado </li>"."<br>";
        }
    }
?>
