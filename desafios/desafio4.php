<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Digite sua idade: <input name="idade" type="number">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php 
$idade = $_POST["idade"];

if($idade >= 18){
    echo "Maior de 18";
}
else{
    echo "Menor de 18";
}

?>