<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 25/06/2015
 * Time: 10:19
 */

namespace SON\Cliente\Types;


interface PFInterface {
    public function setCPF($cpf);
    public function getCPF();
}