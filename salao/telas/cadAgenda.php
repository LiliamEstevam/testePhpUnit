<?php
require_once '../classes/Salao.php';
require_once '../classes/Agenda.php';

$salao = new Salao();

$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];
$funcionario = $_REQUEST['cpfFuncionario'];
$servico = $_REQUEST['codServico'];
$status = $_REQUEST['status'];
$codAgenda = $_REQUEST['codAgenda'];

$agenda = new Agenda(
    $data,
    $hora,
    $funcionario,
    $servico,
    $status,
    $codAgenda,

);

$sucesso = $salao->cadastrarAgenda($agenda);

if ($sucesso) {
  echo "<h2>Agenda cadastrado com sucesso!</h2>";
} else {
  echo "<h2>Agenda com codigo informado já está cadastrado!</h2>";
}

foreach ($salao->getAgendas() as $agenda) {
  echo $agenda->getCodAgenda() . " " . $agenda->getCliente() . "<br>";
  //mostrar mais coisa na agenda se quiser;
}
?>
<script>
    alert('Cliente cadastrado com sucesso!!!');
    window.location.href = "../index.php";
</script>
