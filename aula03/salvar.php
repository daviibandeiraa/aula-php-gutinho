<?php 

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$arquivo = fopen("clientes.csv", "a");

fwrite($arquivo, $nome . ",");
fwrite($arquivo, $telefone . ",");
fwrite($arquivo, $cidade . ",");
fwrite($arquivo, $estado . "\n");

fclose($arquivo);

header("location:index.php");
?>