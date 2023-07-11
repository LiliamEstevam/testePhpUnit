<?php

class Produto
{
    private $nome;
    private $valor;
    private $codigo;
    private $quantidade;

    function __construct($nome, $valor, $codigo, $quantidade)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->codigo = $codigo;
        $this->quantidade = $quantidade;
    }

    
    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }
    function setValor($valor){
        $this->valor = $valor;
    }

    function getValor(){
        return $this->valor;
    }
  function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    function getCodigo(){
        return $this->codigo;
    }
   function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    function getQuantidade(){
        return $this->quantidade;
    }
}