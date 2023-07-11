<?php

//ROOT constante que armazena o caminho para o diretório raíz do servidor
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
//PASTASISTEMA constante que armazena o nome da pasta que representa o sistema
define('PASTASISTEMA', 'carminha');
//PATH constante com o caminho completo até a pasta do sistema (dentro do servidor)
define('PATH', ROOT.'/'.PASTASISTEMA.'/');

require_once 'Funcionario.php';
require_once 'Agenda.php';
require_once 'Cliente.php';
require_once 'Servico.php';

class Salao
{

  private $agenda = [];
  private $funcionario = [];
  private $servico = [];
  private $cliente = [];
	
  function __construct()
  {
    //Se já existe um sistema serializado carrega ele para o objeto criado
    if (file_exists(PATH . 'sistema.save')) {
      $dados = file_get_contents(PATH.'sistema.save');
      $salao = unserialize($dados);
     
      $this->funcionario = $salao->funcionario;
      $this->agenda = $salao->agenda;
      $this->cliente = $salao->cliente;
      $this->servico = $salao->servico;
      
      //$this->agencias = $sistema->agencias;
     
    }
  }
     
      function getFuncionario(){
          return $this->funcionario;
      }
    
      function getAgenda(){
          return $this->agenda;
      }

      function getServico(){
          return $this->servico;
      }

          function getCliente(){
        return $this->cliente;
    }

  //Antes de destruir serializa o sistema no servidor
  function __destruct()
  {
    $serializado = serialize($this);
    file_put_contents(PATH.'sistema.save', $serializado);
  } // nao altera nada


  function cadastrarCliente($cliente)
    {
        $aux = $this->buscarCliente($cliente->getCpf());
        if ($aux == null) {
            $this->cliente[] = $cliente;
            return true;
        }
        return false;
    }


    function removerCliente($cpf)
    {
        $indRemover = null;
        foreach ($this->cliente as $ind => $cliente) {
            if ($cliente->getCpf() == $cpf) {
                $indRemover = $ind;
            }
        }
        var_dump($indRemover);
        if ($indRemover !== null) {
            unset($this->cliente[$indRemover]);
        }
    }
    function buscarCliente($cpf)
    {
        foreach ($this->cliente as $cliente) {
            if ($cliente->getCpf() == $cpf) {
                return $cliente;
            }
        }
        return null;
    }
    function cadastrarFuncionario($funcionario)
   {
        $aux = $this->buscarFuncionario($funcionario->getCpf());
        if ($aux == null) {
            $this->funcionario[] = $funcionario;
            return true;
        }    
        return false;
    }
    
    
    function removerFuncionario($cpf)
    {
        $indRemover = null;
        foreach ($this->funcionario as $ind => $funcionario) {
            if ($funcionario->getCpf() == $cpf) {
                $indRemover = $ind;
            }
        }
        var_dump($indRemover);
        if ($indRemover !== null) {
            unset($this->funcionario[$indRemover]);
        }
    }
    function buscarFuncionario($cpf)
    {
        foreach ($this->funcionario as $funcionario) {
            if ($funcionario->getCpf() == $cpf) {
                return $funcionario;
            }
        }
        return null;
    }
    function cadastrarServico($servico)
    {
         $aux = $this->buscarServico($servico->getCodServico());
         if ($aux == null) {
             $this->servico[] = $servico;
         }
     }
     function removerServico($codServico)
     {
         $indRemover = null;
         foreach ($this->servico as $ind => $servico) {
             if ($servico->getCodServico() == $codServico) {
                 $indRemover = $ind;
             }
         }
         var_dump($indRemover);
         if ($indRemover !== null) {
             unset($this->servico[$indRemover]);
         }
     }
     function buscarServico($codServico)
     {
         foreach ($this->servico as $servico) {
             if ($servico->getCodServico() == $codServico) {
                 return $servico;
             }
         }
         return null;
     }

     function cadastrarAgenda($agenda)
     {
          $aux = $this->buscarAgenda($agenda->getCodAgenda());
          if ($aux == null) {
              $this->agenda[] = $agenda;
              return true;
          } return false;
      }
      function removerAgenda($codAgenda)
      {
          $indRemover = null;
          foreach ($this->agenda as $ind => $agenda) {
              if ($agenda->getCodAgenda() == $codAgenda) {
                  $indRemover = $ind;
              }
          }
          var_dump($indRemover);
          if ($indRemover !== null) {
              unset($this->agenda[$indRemover]);
          }
      }
      function buscarAgenda($codAgenda)
      {
          foreach ($this->agenda as $agenda) {
              if ($agenda->ggetCodAgenda() == $codAgenda) {
                  return $agenda;
              }
          }
          return null;
      }
    }