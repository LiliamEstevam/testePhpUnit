<?php
 
    $codAgendaAntigo = $_REQUEST['codAgendaAntigo '];
    $codAgenda = $_REQUEST['CodAgenda'];
    
    require_once '../classes/Salao.php';
    $salao = new Salao();

    $agenda = $salao->buscarAgenda($codAgendaAntigo);
    $agenda->setAgenda($Agenda);

?>
<script>
    alert('Agenda alterada com sucesso!!!');
    window.location.href = "../index.php";
</script>
    
    
