<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #efefe3;
        }

        form {
            padding: 20px;
            border-radius: 8px;
            background-color: white;
        }

        label {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        input[type=submit] {
            width: 100%;
            padding: 4px;
            border-radius: 4px;
            background-color: pink;
            border: none;
        }
    </style>

</head>

<body>

    <div id='conteudo'>
        <form action="./cadFuncionario.php" method="post">
            <label>
                cpf Funcionario:
                <input type="number" name="cpfFuncionario">
            </label>
            <label>
                Nome Funcionário:
                <input type="text" name="nomeFuncionario">
            </label>
            <label>
                Servico:
                <input type="text" name="servicoFuncionario">
            </label>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>