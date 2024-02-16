<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    var_dump($_GET);
    
    echo "<br>";
     print_r($_GET);
    echo "<br>";
   
    $name = $_GET["nome"] ?? "sem nome";
    $sname = $_GET["sobrenome"];
    echo $name;
    if(empty($name)&&empty($sname)){
        $name = "sem nome";
        $sname= "desconhecido";
        echo "Você não colocou seu nome :(";
        echo"<br>";
        echo "Vou te chamar de : $name $sname";
    }else{
    echo "é um prazer te conhecer: $name $sname";
    }
    ?>
</body>
</html>