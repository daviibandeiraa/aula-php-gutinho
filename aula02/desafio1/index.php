<?php 

$nome = ['Davi', 'Duda', 'Gui', 'Jose', 'ben10', 'MaxSteel'];
$arquivo = fopen("nomes.txt", "a");
$i = 0;

while($i < count($nome)){
    echo $nome[$i] . "<br>";
    fwrite($arquivo, $nome[$i] . "\n");
    $i++;
}

fclose($arquivo);

?>