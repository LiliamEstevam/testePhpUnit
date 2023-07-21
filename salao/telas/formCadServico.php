<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Serviço</title>

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
        <form action="./cadServico.php" method="post">
            
            <label>
                Nome Serviço:
                <input type="text" name="nomeServico">
            </label>
            <br>
            <label>
                Tipo Serviço:
                <input type="text" name="tipoServico">
            </label>
            <br>
            <label>
                Tempo:
                <input type="number" name="tempoServico">
            </label>
            <br>
            <label>
                Descrição:
                <input type="text" name="descricaoServico">
            </label>
            <br>
            <label>
                Valor Serviço:
                <input type="number" name="valorServico">
            </label>
            <br>
            <label>
                Codigo servico:
                <input type="number" name="codServico">
            </label>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>