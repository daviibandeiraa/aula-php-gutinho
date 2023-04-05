<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar.php">
        Nome: <input name="nome" required> <br>
        Sobrenome: <input name="sobrenome" require> <br>
        Idade: <input name="idade" required> <br>
        CPF: <input name="cpf" type="number" required> <br>
        Endereço: <input name="endereco" required> <br>
        Cidade: <input name="cidade" required> <br>
        Telefone <input name="telefone" type="tel" required> <br>
        Email: <input name="email" type="email required"> <br>



        <button type="submit">Salvar</button>
    </form>
</body>
</html>