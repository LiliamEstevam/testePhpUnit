<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início</title>
</head>

<body>
  <a href="telas/formCadServico.php">CADASTRAR SERVIÇO</a>
  <br>
  <br>
  <a href="telas/formCadFuncionario.php">CADASTRAR FUNCIONÁRIO</a>
  <br>
  <br>
  <a href="telas/formCadCliente.php">CADASTRAR CLIENTE</a>
  <br>
  <a href="telas/formCadAgenda.php">CADASTRAR AGENDA</a>
  <br>
  <br>
  <a href="telas/formAlterarAgenda.php">ALTERAR AGENDA</a>
  <br>
  <br>
  <a href="telas/formAlterarServico.php">ALTERAR SERVICO</a>
  <br>
  <br>
  <a href="telas/formRemoverAgenda.php">REMOVER AGENDA</a>
  <br>
  
  <br>
  <a href="telas/formRemoverServico.php">REMOVER SERVICO</a>
  <br>
  <div id='conteudo'>
  <?php
        require_once './classes/Salao.php';
        $salao = new Salao();
        $clientes = $salao->getCliente();
        $funcionarios = $salao->getFuncionarios();
        $servicos = $salao->getServicos();
        
    ?>
    <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="4">Clientes Cadastrados</th>
                </tr>
                <tr>
                    <th>CPF</th><th>Nome</th><th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Percorrendo o vetor de clientes para criar as linhas da tabela
                foreach ($clientes as $cliente):
            ?>
                <tr>
                    <td>
                        <?= $cliente->getCpf() ?>
                    </td>
                    <td>
                        <?= $cliente->getNome() ?>
                    </td>
                    <td>
                        <a href="./telas/formAlterarCliente.php?cpf=<?= $cliente->getCpf() ?>">
                            📝
                        </a>
                    </td>
                    <td>
                        <a href="./telas/removerCliente.php?cpf=<?= $cliente->getCpf() ?>">
                            ❌
                        </a>
                    </td>
                </tr>
            <?php        
                endforeach;
            ?>
            </tbody>
        </table>
    </section>
    <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="4">Funcionario Cadastrados</th>
                </tr>
                <tr>
                    <th>CPF</th><th>Nome</th><th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Percorrendo o vetor de clientes para criar as linhas da tabela
                foreach ($funcionarios as $funcionarios):
            ?>
                <tr>
                    <td>
                        <?= $funcionarios->getCpf() ?>
                    </td>
                    <td>
                        <?= $funcionarios->getNome() ?>
                    </td>
                    <td>
                        <a href="./telas/formAlterarFuncionario.php?cpf=<?= $funcionarios->getCpf() ?>">
                            📝
                        </a>
                    </td>
                    <td>
                        <a href="./telas/removerFuncionario.php?cpf=<?= $funcionarios->getCpf() ?>">
                            ❌
                        </a>
                    </td>
                </tr>
            <?php        
                endforeach;
            ?>
            </tbody>
        </table>
    </section>
    <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="4">Serviço Cadastrados</th>
                </tr>
                <tr>
                    <th>Nome do servico</th><th>codigo</th><th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Percorrendo o vetor de clientes para criar as linhas da tabela
                foreach ($servicos as $servicos):
            ?>
                <tr>
                    <td>
                        <?= $servicos->getNome() ?>
                    </td>
                    <td>
                        <?= $servicos->getCodServico() ?>
                    </td>
                    <td>
                        <a href="./telas/formAlterarServico.php?cpf=<?= $servicos->getNome() ?>">
                            📝
                        </a>
                    </td>
                    <td>
                        <a href="./telas/removerServico.php?cpf=<?= $servicos->getCodServico() ?>">
                            ❌
                        </a>
                    </td>
                </tr>
            <?php        
                endforeach;
            ?>
            </tbody>
        </table>
    </section>
   </div>
</body>

</html>