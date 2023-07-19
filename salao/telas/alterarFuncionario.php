<?php

    $cpfAntigo = $_REQUEST['cpfAntigo'];
    $cpfFuncionario = $_REQUEST['cpfFuncionario'];
    $nomeFuncionario = $_REQUEST['nomeFuncionario'];
    
    require_once '../classes/Salao.php';
    $salao = new Salao();

   
    $funcionario = $salao->buscarFuncionario($cpfAntigo);
    $funcionario->setCpf($cpfFuncionario);
    $funcionario->setNome($nomeFuncionario);
?>
<script>
    alert('funcionario alterado com sucesso!!!');
    window.location.href = "../index.php";
</script>