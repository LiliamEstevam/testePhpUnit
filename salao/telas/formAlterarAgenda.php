<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
        

        require_once '../classes/Salao.php';

        $codAgenda = $_REQUEST['codAgenda'];
        $salao = new Salao();
        $agenda = $salao->buscarAgenda($codAgenda);

    ?>
    <div id='conteudo'>
        <form action="./alterarAgenda.php?">
            <input type='hidden' name="codAgendaAntigo"
                value='<?= $agenda->getAgenda() ?>'
            >
            <p>
                Numero:
                <input type="number" name="numeroAgenda"
                    value='<?= $agenda->getCodAgenda() ?>'
                >
            </p>
            <input type="submit" value="Enviar">
        </form>
    </div>

       
</body>
</html>
