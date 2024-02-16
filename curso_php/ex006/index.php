<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    error_reporting(E_ALL & ~E_WARNING);

    $num1 = $_GET["n1"];
    $num2 = $_GET["n2"];
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <input type="text"name="n1">
            <input type="text" name="n2">
            <input type="submit" value="Enviar" >
        </form>
    </main>
    <section>
        <?php
       if(is_numeric($num1)&&is_numeric($num2)){
        $soma = $num1 + $num2;
        echo "<h2>A soma entre os valores $num1 e $num2 é igual a : $soma</h2>";

       }
       else{
        $soma = $num1 . $num2;
        echo"<h2>Os caracteres concatenados são $soma</h2>";
        
       }
    ?>
    </section>
</body>
</html>