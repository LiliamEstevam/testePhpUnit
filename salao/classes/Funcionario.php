<?php

class Funcionario
{
    private $cpf;
    private $nome;
    private $servicos = [];

    function __construct($cpf, $nome, $servicos)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->servicos = $servicos;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setServicos($servicos)
    {
        $this->servicos = $servicos;
    }

    function getServicos()
    {
        return $this->servicos;
    }

    function adicionarServico($servico)
    {
        $this->servicos[] = $servico;
    }
}
