<?php
class Servico
{
    private $nome;
    private $tipo;
    private $tempo;
    private $descricao;
    private $valor;
    private $codServico;

    function __construct($codServico, $nome,$tipo,$tempo, $descricao,$valor)
    {
         $this->setcodServico($codServico);
         $this->nome = $nome;
         $this->tipo = $tipo;
         $this->descricao = $descricao;
         $this->tempo = $tempo;
         $this->valor= $valor;
        
        }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }
    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    function getTipo()
    {
        return $this->tipo;
    }
    function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }
    function getTempo()
    {
        return $this->tempo;
    }
    function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    function getDescricao()
    {
        return $this->descricao;
    }
    function setValor($valor)
    {
        $this->valor = $valor;
    }
    function getValor()
    {
        return $this->valor;
    }
    function setCodServico($codServico)
    {
        $this->codServico = $codServico;
    }
    function getCodServico()
    {
        return $this->codServico;
    }
  


}