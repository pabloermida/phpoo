<?php

class Produto
{
    private $nome;
    private $descricao;
    private $valor;
    private $estoque;
    /*
    public function __construct($nome, $descricao, $valor, $estoque)
    {

    }
    */

    public function baixaEstoque()
    {
        $this->estoque = $this->estoque - 1;
    }
}

