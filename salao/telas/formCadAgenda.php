<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Agenda</title>

</head>
<body>
   
    <div id='conteudo'>
        <form action="./cadAgenda.php">
            <p>
                Data:
                <input type="text" name="data">
            </p>
            <p>
                Hora:
                <input type="text" name="hora">
            </p>
            <p>
                Funcionario:
                <input type="text" name="nomeFuncionario">
            </p>
            <p>
                Cliente:
                <input type="text" name="nomeCliente">
            </p>
            <p>
                Servico:
                <input type="number" name="codServico">
            </p>
            <p>
                Status:
                <input type="text" name="status">
            </p>
            <p>
                Codigo Agenda:
                <input type="number" name="codAgenda">
            </p>
            <input type="submit" value="Enviar">
        </form>
    </div>
 
</body>
</html>
