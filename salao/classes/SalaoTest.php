<?php

use PHPUnit\Framework\TestCase;

require_once './Salao.php';

class SalaoTest extends TestCase
{

  function testCpfCliente()
  {
    $cliente = new Cliente("20106645879", "Jose");
    $this->assertEquals(20106645879, $cliente->getCpf());
  }
  function testNomeCliente()
  {
    $cliente = new Cliente("20106645879", "Jose");
    $this->assertEquals("Jose", $cliente->getNome());
  }
  function testCadastrarCliente () {
    $cliente = new Cliente("10000110020", "Maria", "formol");

    $salao = new Salao();
    $resultado = $salao->cadastrarCliente($cliente);

    $this->assertEquals(true, $resultado);
  }

  function testFalhaCadastrarCliente()
  {
    $salao = new Salao();

    $cliente = new Cliente("10000110020", "Maria", "formol");
    $resultado = $salao->cadastrarCliente($cliente);

    $cliente2 = new Cliente("10000110020", "Maria", "formol");
    $resultado2 = $salao->cadastrarCliente($cliente2);


    $this->assertEquals(false, $resultado2);
  }
  function testCadastrarFuncionario()
  {
    $funcionario = new Funcionario("12300110010", "Maria", "cabelereira");

    $salao = new Salao();
    $resultado = $salao->cadastrarFuncionario($funcionario);

    $this->assertEquals(true, $resultado);
  }
  function testFalhaCadastrarFuncionario()
  {
    $salao = new Salao();

    $funcionario = new Funcionario("12300110020", "Claudia", "manicure");
    $resultado = $salao->cadastrarFuncionario($funcionario);

    $funcionario2 = new Funcionario("12300110020", "Claudia", "manicure");
    $resultado2 = $salao->cadastrarFuncionario($funcionario2);

    $this->assertEquals(false, $resultado2);
  }
  function testCadastrarServico()
  {

    $servico = new Servico("001", "corte", "feminino", "60", "lavagem com corte e escova", "100,00");

    $salao = new Salao();
    $resultado = $salao->cadastrarServico($servico);

    $this->assertEquals(true, $resultado);
  }
//testefalha cadastrarservico

  function testCadastrarAgenda()
  {
    $cliente = new Cliente("20106645879", "Jose");

    $agenda = new Agenda("29/06/2023", "15:00", $cliente, "002");

    $salao = new Salao();
    $resultado = $salao->cadastrarAgenda($agenda);

    $this->assertEquals(true, $resultado);
  }
  //testefalha cadastraragenda
  function testRemoverCliente()
  {
  $cliente = new Cliente("10000110020", "Maria", "formol");

  $salao = new Salao();
  $cadastro = $salao->cadastrarCliente($cliente);
  $remocao = $salao->removerCliente($cliente->getCpf());
  $resultado = $salao->buscarCliente($cliente->getCpf());

  $this->assertEquals(null, $resultado);
  }
  function testRemoverFuncionario()
  {
  $funcionario = new Funcionario("10000110325", "camila", "unha");

  $salao = new Salao();
  $cadastro = $salao->cadastrarFuncionario($funcionario);
  $remocao = $salao->removerFuncionario($funcionario->getCpf());
  $resultado = $salao->buscarFuncionario($funcionario->getCpf());

  $this->assertEquals(null, $resultado);
  }
  function testRemoverServico()
  {
  $servico = new Servico("corte", "corte máquina", "30","corte a maquina tipo desfarçado","50");

  $salao = new Salao();
  $cadastro = $servico->cadastrarServico($servico);
  $remocao = $servico->removerServico($servico->getCodServico());
  $resultado = $servico->buscarServico($servico->getCodServico());

  $this->assertEquals(null, $resultado);
  }
  function testRemoverAgenda()
  {
  $agenda = new Agenda("12/07/2023", "14:30","MARIA","002");

  $salao = new Salao();
  $cadastro = $agenda->cadastrarAgenda($agenda);
  $remocao = $agenda->removerAgenda($agenda->getCodAgenda());
  $resultado = $agenda->buscarAgenda($agenda->getCodAgenda());

  $this->assertEquals(null, $resultado);
  }

 function testBuscarCliente()
  {
    $cliente = new Cliente("10000110020", "Maria", "formol");

    $salao = new Salao();
    $cadastro = $salao->cadastrarCliente($cliente);
    $resultado = $cliente->buscarCliente("10000110020");
    
    $this->assertEquals('Maria', $resultado->getNome());
  }
  function testBuscarFuncionario()
  {
    $funcionario = new Funcionario("10000110458", "Maria", "formol");

    $salao = new Salao();
    $cadastro = $salao->cadastrarFuncionario($funcionario);
    $resultado = $funcionario->buscarFuncionario("10000110458");
    
    $this->assertEquals('10000110458', $resultado->getCpf());
  }
  function testBuscarServico()
  {
    $servico = new Servico("corte", "corte máquina", "30","corte a maquina tipo desfarçado","50");

    $salao = new Salao();
    $cadastro = $salao->cadastrarServico($servico);
    $resultado = $servico->buscarServico("corte");
    
    $this->assertEquals('corte', $resultado->getNome());
  }
  function testBuscarAgenda()
  {
    $agenda = new Agenda("12/07/2023", "14:30","MARIA","002");

    $salao = new Salao();
    $cadastro = $salao->cadastrarAgenda($agenda);
    $resultado = $agenda->buscarAgenda("002");
    
    $this->assertEquals('002', $resultado->getCodAgenda());
  }
}
