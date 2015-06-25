<?php

namespace SON\Cliente;

abstract class ClienteAbstract implements GrauImportanciaInterface, EnderecoCobrancaInterface {

    protected $nome;
    protected $endereco;
    protected $telefone;
    protected $enderecoCobranca;
    protected $grau;

    public function __construct($nome, $endereco, $telefone)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
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

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getGrauImportancia()
    {
        return $this->grau;
    }

    /**
     * @param mixed $nivel
     */
    public function setGrauImportancia($grau)
    {
        $this->nivel = $grau;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }
    /**
     * @return mixed
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
    }



    abstract protected function getTipoCliente();
    abstract protected function getIdDocumento();


}