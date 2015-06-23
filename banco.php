<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conta = new \SON\Conta\Types\ContaPremiumType();

$conta->depositar(10);

$bancoRepublica = new \SON\Banco\Republica($conta);
$bancoRepublica->setNome("Banco República");
echo $bancoRepublica->getConta()->getSaldo();
$conta->depositar(10);
echo $conta->getSaldo();
echo $bancoRepublica->getConta()->getSaldo();