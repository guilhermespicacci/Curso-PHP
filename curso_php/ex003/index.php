<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     date_default_timezone_set("America/Sao_Paulo");
    for($cont = 0;$cont <= 3;$cont++){
        $minutos = date("H:i:s");
        echo "<p>$minutos</p>" ;
        sleep(1);
        
     };

   
     $hora = date("d/m/y");
     
     
     
     echo "<p> $hora</p>";
    ?>
</body>
</html>