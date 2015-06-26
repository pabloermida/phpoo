<?php

namespace SON\BD;

use SON\Cliente\ClienteAbstract;

class PersistBD {
    protected $pdo;
    protected $clientes = array();

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function persist(ClienteAbstract $cliente)
    {
        if (!in_array($cliente, $this->clientes)) {
            $this->clientes[] = $cliente;
        }
    }

    public function flush()
    {
        try {
            foreach($this->clientes as $cliente) {
                if ($cliente->getTipoCliente() == 'PF') {
                    $stmt = $this->pdo->prepare("INSERT INTO cliente (nome, endereco, telefone, cpf, endereco_cobranca, grau, tipo)
                                                  VALUES (?, ?, ?, ?, ?, ?, ?)");
                }
                else {
                    $stmt = $this->pdo->prepare("INSERT INTO cliente (nome, endereco, telefone, cnpj, endereco_cobranca, grau, tipo)
                                                  VALUES (?, ?, ?, ?, ?, ?, ?)");
                }
                $stmt->bindParam(1, $cliente->getNome());
                $stmt->bindParam(2, $cliente->getEndereco());
                $stmt->bindParam(3, $cliente->getTelefone());
                $stmt->bindParam(4, $cliente->getIdDocumento());
                $stmt->bindParam(5, $cliente->getEnderecoCobranca());
                $stmt->bindParam(6, $cliente->getGrauImportancia());
                $stmt->bindParam(7, $cliente->getTipoCliente());
                $stmt->execute();
            }
            return true;
        }
        catch(PDOException $e) {
            return false;
        }
    }

    public function getClientes() {
        $result = $this->pdo->query("SELECT id, nome, endereco, telefone, cpf, cnpj, endereco_cobranca, grau, tipo FROM cliente");
        return $result;
    }
}