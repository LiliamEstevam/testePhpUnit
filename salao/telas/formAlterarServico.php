<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para alterar serviço</title>

</head>

<body>
    <?php
    require_once '../classes/Salao.php';

    $codServico = $_REQUEST['codServico'];
    $salao = new Salao();
    $servico = $salao->buscarServico($codServico);

    ?>
    <div id='conteudo'>
        <form action="./alterarServico.php?">
            <input type='hidden' name="codServicoAntigo" value='<?= $servico->getServico() ?>'>
            <p>
                Serviço:
                <input type="text" name="codServicoAntigo" value='<?= $servico->getServico() ?>'>
            </p>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>