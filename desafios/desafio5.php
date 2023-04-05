<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        Insira um número: <input name="numero" type="number">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php 
$numero = $_GET["numero"];

for($i = 1; $i <= 10; $i++):
    $res = $i * $numero; 
    echo "$i x $numero =  $res <br/>";   
endfor;

?>