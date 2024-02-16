<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width="device-width", initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <?php 
    $moeda = $_POST["valor"];
    $url = "https://economia.awesomeapi.com.br/last/USD-BRL";
    $curl =  curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    

    $response = curl_exec($curl);
    curl_close($curl);
    
    $data = json_decode($response, true); 
    $preco_dolar =$data['USDBRL']['bid'];
    $preco_convertido = $moeda * $preco_dolar;
    echo "<h2>$moeda Dólares equivale a $preco_convertido Reais</h2>";
    
    ?>
    <a href="index.html">Volte a página anterior</a>
</section>

</body>
</html>