<?php
require_once '../classes/Salao.php';
require_once '../classes/Funcionario.php';

$salao = new Salao();

$cpfFuncionario = $_REQUEST['cpfFuncionario'];
$nomeFuncionario = $_REQUEST['nomeFuncionario'];
$servicoFuncionario = $_REQUEST['servicoFuncionario'];

$funcionario = new Funcionario(
  $cpfFuncionario,
  $nomeFuncionario,
  [$servicoFuncionario],
);

$sucesso = $salao->cadastrarFuncionario($funcionario);

if ($sucesso) {
  echo "<h2>Funcionário cadastrado com sucesso!</h2>";
} else {
  echo "<h2>Funcionário com CPF informado já está cadastrado!</h2>";
}

foreach ($salao->getFuncionarios() as $funcionario) {
  echo $funcionario->getCpf() . " " . $funcionario->getNome() . "<br>";
}?>
<script>
    alert('Cliente cadastrado com sucesso!!!');
    window.location.href = "../index.php";
</script>
