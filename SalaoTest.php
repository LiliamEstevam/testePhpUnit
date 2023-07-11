<?php

use PHPUnit\Framework\TestCase;
require_once './Salao.php';

class SalaoTest extends TestCase {

    function testCpfCliente () {
      $cliente = new Cliente("20106645879", "Jose");
      $this->assertEquals(20106645879, $cliente->getCpf());
       
      
    }
    function testNomeCliente () {
      $cliente = new Cliente("20106645879", "Jose");
      $this->assertEquals("Jose", $cliente->getNome());
             
    }

  function testCadastrarCliente () {
      $cliente = new Cliente("10000110020", "Maria", "formol");

      $salao = new Salao();
      $resultado = $salao->cadastrarCliente($cliente);

      $this->assertEquals(true, $resultado);
    }

    function testFalhaCadastrarCliente () {
      $salao = new Salao();

      $cliente = new Cliente("10000110020", "Maria", "formol");
      $resultado = $salao->cadastrarCliente($cliente);

      $cliente2 = new Cliente ("10000110020", "Maria", "formol");
      $resultado2 = $salao->cadastrarCliente($cliente2);


      $this->assertEquals(false, $resultado2);
    }
    function testCadastrarFuncionario () {
      $funcionario = new Funcionario("12300110010", "Maria", "cabelereira");

      $salao = new Salao();
      $resultado = $salao->cadastrarFuncionario($funcionario);

      $this->assertEquals(true, $resultado);
    }
    function testFalhaCadastrarFuncionario () {
      $salao = new Salao();

      $funcionario = new Funcionario("12300110020", "Claudia", "manicure");
      $resultado = $salao->cadastrarFuncionario($funcionario);

      $funcionario2 = new Funcionario ("12300110020", "Claudia", "manicure");
      $resultado2 = $salao->cadastrarFuncionario($funcionario2);

      $this->assertEquals(false, $resultado2);
    }
    function testCadastrarServico () {
    
      $servico = new Servico("001", "corte", "feminino", "60","lavagem com corte e escova", "100,00");

      $salao = new Salao();
      $resultado = $salao->cadastrarServico($servico);

      $this->assertEquals(true, $resultado);
    }
    function testCadastrarAgenda () {
      $cliente = new Cliente("20106645879", "Jose");
      
      $agenda = new Agenda("29/06/2023", "15:00", $cliente,"002");

      $salao = new Salao();
      $resultado = $salao->cadastrarAgenda($agenda);

      $this->assertEquals(true, $resultado);
    }
  }