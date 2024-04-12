<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
    <?php
        //recuperar as informações enviadas nos formulario
        // method =  get (passa informação pelo url )
        //$ = simbolo de criação de variavel 
        $numero1 = $_GET  ["num1"]; //inserir name do campo "name" do formulário
        $numero2 = $_GET  ["num2"]; //inserir name do campo "name" do formulário
        $operacao = $_GET  ["operacao"];
        $tabuada = $_GET ["tabuada"] //inserir name do campo "name" do formulário

        echo "<a href=index.php><img src=img/botao.png alt=voltar></a>";

        //realizar o processamento de informações
        if ($operacao == "soma") {
            $resultado = $numero1 + $numero2;
            echo "<h1> Resultado: $resultado </h1>"; 

        }
        elseif ($operacao == "subtrair"){
            $resultado = $numero1 - $numero2;
            echo $resultado;
            echo "<h1> Resultado: $resultado </h1>"; 

        }
        elseif ($operacao == "multiplicar"){
            $resultado = $numero1 * $numero2;
            echo $resultado;
            echo "<h1> Resultado: $resultado </h1>"; 
    

        }
        else {
            $resultado = $numero1 / $numero2;
            echo $resultado;
            echo "<h1> Resultado: $resultado </h1>"; 
            //colocar um botao para voltar para pagina principal 
        }
    /////////////////////////////////////////////////////////////////////////
       
?>

    // if ($tabuada == "1") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    // }
    // if ($tabuada == "2") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    
    // }
    // if ($tabuada == "3") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    
    // }
    // if ($tabuada == "4") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    
    // }
    // if ($tabuada == "5") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    
    // }
    // if ($tabuada == "6") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    
    // }
    // if ($tabuada == "7") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    
    // }
    // if ($tabuada == "8") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    
    // }
    // if ($tabuada == "9") {
    //     for($i=0;$i<=10;$i++){
    //         $resultado = $tabuada * $i;
    //         echo "$tabuada x $i = $resultado"."<br>";
    //     }
    
    // }

