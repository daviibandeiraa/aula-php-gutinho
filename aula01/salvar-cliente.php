
    <?php
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
    $rua = $_POST["rua"] ?? "";
    $numero = $_POST["numero"] ?? "";
    $bairro = $_POST["bairro"] ?? "";
    $complemento = $_POST["complemento"] ?? "";
    $cidade = $_POST["cidade"] ?? "";
    $estado = $_POST["estado"] ?? "";
    $datadenascimento = $_POST["datadenascimento"] ?? "";
    $cpf = $_POST["cpf"] ?? "";
    $rg = $_POST["rg"] ?? "";
    $whatsapp = $_POST["whatsapp"] ?? "";
    $fuma = $_POST["fuma"] ?? "";
    $bebe = $_POST["bebe"] ?? "";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Telefone: $telefone <br>";
    echo "Rua: $rua <br>";
    echo "Número: $numero <br>";
    echo "Bairro: $bairro <br>";
    echo "Complemento: $complemento <br>";
    echo "Cidade: $cidade <br>";
    echo "Estado: $estado <br>";
    echo "Data de Nascimento: $datadenascimento <br>";
    echo "CPF: $cpf <br>";
    echo "RG: $rg <br>";
    echo "WhatsApp: $whatsapp <br>";
    echo "Fuma: $fuma <br>";
    echo "Bebe: $bebe <br>";
    ?>
