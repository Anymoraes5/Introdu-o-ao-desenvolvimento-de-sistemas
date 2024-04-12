<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
    </head>
    <body>
        <h1>calculadora simples</h1>
        <form action="calcular.php" method="get"> 
            <label> número 1: </label><input type="text" name="num1" placeholder = "informe o primeiro valor"><br><br>
            <label > número 2: </label><input type="text" name="num2" placeholder = "informe o segundo valor"><br><br>
            <label > operação: </label>
            <select name="operacao">
                <option value="soma"> Somar </option>
                <option value="subtrair"> Subtrair</option>
                <option value="multiplicar"> Multiplicar </option>
                <option value="dividir"> Dividir </option>
            </select>
        </form>
        
<!-- tabuada -->
        <form action="tabuada.php" method="get">
            <br><br>
            <input type="submit" value="tabuada">
        </form>
 

        
    </body>
    </html>
    

