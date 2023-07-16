<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar cliente</title>

</head>

<body>
    <?php
    require_once '../classes/Salao.php';

    $cpf = $_REQUEST['cpf'];
    $salao = new Salao();
    $cliente = $salao->buscarCliente($cpf);

    ?>
    <div id='conteudo'>
        <form action="./alterarCliente.php?">
            <input type='hidden' name="cpfAntigo" value='<?= $cliente->getCpf() ?>'>
            <p>
                cpf:
                <input type="number" name="cpfCliente" value='<?= $cliente->getCpf() ?>'>
            </p>
            <p>
                Nome:
                <input type="text" name="nomeCliente" value='<?= $cliente->getNome() ?>'>
            </p>
            <p>
                Restrição:
                <input type="text" name="restricaoCliente" value='<?= $cliente->getRestricao() ?>'>
            </p>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php

    ?>
</body>

</html>