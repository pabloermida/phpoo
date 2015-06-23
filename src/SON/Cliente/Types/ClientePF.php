<?php

namespace SON\Cliente\Types;
use SON\Cliente\ClassificacaoInterface;
use SON\Cliente\ClienteAbstract;

class ClientePF extends ClienteAbstract implements ClassificacaoInterface {

    private $cpf;
    private $classificacao;

    public function __construct($nome, $cpf, $endereco, $telefone)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
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