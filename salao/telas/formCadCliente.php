<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

</head>
<body>
   
    <div id='conteudo'>
        <form action="./cadCliente.php">
            <p>
                cpf Cliente:
                <input type="number" name="cpfCliente">
            </p>
            <p>
                Nome Cliente:
                <input type="text" name="nomeCliente">
            </p>
            <p>
                Restrição ou alergias:
                <input type="text" name="restricaoCliente">
            </p>
            <input type="submit" value="Enviar">
        </form>
    </div>
 
</body>
</html>