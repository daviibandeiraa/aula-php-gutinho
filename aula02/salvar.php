<?php 
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$idade = $_POST["idade"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];


echo "$nome - $cidade";

$arquivo = fopen("clientes.txt", "a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $sobrenome . "\t");
fwrite($arquivo, $idade . "\t");
fwrite($arquivo, $cpf . "\t");
fwrite($arquivo, $endereco . "\t");
fwrite($arquivo, $cidade . "\t");
fwrite($arquivo, $telefone . "\t");
fwrite($arquivo, $email . "\n");

fclose($arquivo);

header("location:index.php");
?>