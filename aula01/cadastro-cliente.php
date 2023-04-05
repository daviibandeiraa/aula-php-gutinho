<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar-cliente.php">
        Nome:<input name="nome"><br>
        E-mail:<input name="email" type="email"><br>
        Telefone:	<input type="tel" id="telefone" name="telefone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="11 99999-9999"> <br>
        Rua: <input name="rua"><br>
        Número: <input name="numero" type="number"><br>
        Bairro: <input name="bairro"><br>
        Complemento: <input name="complemento" type="number"><br>
        Cidade: <input name="cidade"><br>
        Estado: <select name="estado" id="estado">
            <option value="sp">SP</option>
            <option value="rj">RJ</option>
            <option value="sc">SC</option>
            <option value="ba">BA</option>
        </select> <br>
        Data de Nascimento: <input name="datadenascimento"><br>
        CPF: <input name="cpf" type="number"><br>
        RG: <input name="rg" type="number"><br>
        WhatsApp: <input name="whatsapp" type="number"><br>
        Fuma? <br> <INPUT TYPE="RADIO" NAME="fuma" VALUE="sim"> Sim 
        <INPUT TYPE="RADIO" NAME="fuma" VALUE="nao"> Não <br>
        Ingere bebidas alcoolicas <br>
         <INPUT TYPE="RADIO" NAME="bebe" VALUE="sim"> Sim
         
         <input type="radio" name="bebe" value="nao"> Não<br>

        <button type="submit">Salvar cadastro</button>
    </form>
</body>

</html>