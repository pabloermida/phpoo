<?php

namespace SON\Conta\Types;

use SON\Conta\ContaAbstract;

class ContaType extends ContaAbstract
{

    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }
}