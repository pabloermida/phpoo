<?php

namespace SON\Cliente\Types;

use SON\Cliente\ClienteAbstract;

class ClientePF extends ClienteAbstract implements PFInterface {

    protected $cpf;


    public function __construct($nome, $cpf, $endereco, $telefone)
    {
        parent::__construct($nome, $endereco, $telefone);
        $this->cpf = $cpf;
    }

    public function getIdDocumento()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getTipoCliente()
    {
        return "Pessoa Física";
    }




}