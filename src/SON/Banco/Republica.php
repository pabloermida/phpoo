<?php

namespace SON\Banco;

use SON\Conta\ContaAbstract;
use SON\Conta\Types\ContaType;

class Republica
{
    private $nome;
    private $conta;

    public function __construct(ContaAbstract $conta = null)
    {
        $this->conta = $conta;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function setConta($conta)
    {
        $this->conta = $conta;
    }


}