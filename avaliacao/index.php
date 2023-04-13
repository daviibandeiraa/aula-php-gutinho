<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro de Tarefas</h1>
    <form method="POST" action="processar.php">
        <label for="nome">Descrição da tarefa:</label>
        <input type="text" id="tarefa" name="tarefa"><br>

        <label for="idade">Nome do responsável: </label>
        <input type="text" id="nome" name="nome"><br>

        <input type="submit" value="Enviar">
    </form>

    <table>
<thead>
  <tr>
    <th>Tarefa</th>
    <th>Responsável</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><?php echo $tarefa; ?></td>
    <td><?php echo $nome; ?></td>
  </tr>
</tbody>
</table>
?>

</body>

</html>

