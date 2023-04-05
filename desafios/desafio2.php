<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1> todos os números ímpares entre 0 e 100</h1>
</body>
</html>
<?php

for($i = 0; $i <= 100; $i ++){

    if($i % 2 == 1){
        echo "<div>".$i."</div>";
    }

}
?>