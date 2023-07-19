<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para Alterar Funcionário</title>

</head>

<body>
    <?php
    require_once '../classes/Salao.php';

    $cpf = $_REQUEST['cpf'];
    $salao = new Salao();
    $funcionario = $salao->buscarFuncionario($cpf);

    ?>
    <div id='conteudo'>
        <form action="./alterarFuncionario.php?">
            <input type='hidden' name="cpfAntigo" value='<?= $funcionario->getCpf() ?>'>
            <p>
                cpf:
                <input type="number" name="cpfFuncionário" value='<?= $funcionario->getCpf() ?>'>
            </p>
            <p>
                Nome:
                <input type="text" name="nomefuncionario" value='<?= $funcionario->getNome() ?>'>
            </p>
            <p>
                Serviço:
                <input type="text" name="servicoFuncionário" value='<?= $funcionario->getServico() ?>'>
            </p>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>