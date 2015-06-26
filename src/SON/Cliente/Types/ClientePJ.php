<?php

namespace SON\Cliente\Types;

use SON\Cliente\ClienteAbstract;

class ClientePJ extends ClienteAbstract implements PJInterface {

    protected $cnpj;

    public function __construct($nome, $cnpj, $endereco, $telefone)
    {
        parent::__construct($nome, $endereco, $telefone);
        $this->cnpj = $cnpj;
    }

    public function getIdDocumento()
    {
        return $this->cnpj;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getTipoCliente()
    {
        return "PJ";
    }

}