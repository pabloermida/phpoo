<?php

namespace SON\Cliente\Types;

use SON\Cliente\ClienteAbstract;

class ClientePJ extends ClienteAbstract {

    private $cnpj;

    public function __construct($nome, $cnpj, $endereco, $telefone)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
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
        return "Pessoa Jurídica";
    }

    public function setClassificacao($tipo) {
        $this->classificacao = $tipo;
    }

    public function getClassificacao() {
        return $this->classificacao;
    }

    public function setEnderecoCobranca($endereco)
    {
        $this->enderecoCobranca = $endereco;
    }
}