<?php

class Agenda
{
    private $data;
    private $hora;
    private $funcionario;
    private $cliente;
    private $servico;
    private $status;
    private $codAgenda;

    function __construct($data, $hora, $cliente, $codAgenda)
    {
        $this->data = $data;
        $this->hora = $hora;
        $this->cliente = $cliente;
        $this->codAgenda = $codAgenda;
    }

    function setData($data)
    {
        $this->data = $data;
    }

    function getData()
    {
        return $this->data;
    }

    function setHora($hora)
    {
        $this->hora = $hora;
    }

    function getHora()
    {
        return $this->hora;
    }
    function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;
    }

    function getFuncionarios()
    {
        return $this->funcionario;
    }
    function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    function getCliente()
    {
        return $this->cliente;
    }
    function setServico($servico)
    {
        $this->servico = $servico;
    }

    function getServicos()
    {
        return $this->servico;
    }
    function setStatus($status)
    {
        $this->status = $status;
    }

    function getStatus()
    {
        return $this->status;
    }
    function setCodAgenda($codAgenda)
    {
        $this->codAgenda = $codAgenda;
    }

    function getCodAgenda()
    {
        return $this->codAgenda;
    }
}
