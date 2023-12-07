<?php


require_once "src/Conta.php";
require_once "src/Titular.php";

$conta = new Conta(new Titular ("123", "LUCAS VIN"));
$conta1 = new Conta(new Titular ("321", "joaoS", 123));



$conta->depositar(200);
$conta1->depositar(300);

$conta1->transferir(20, $conta);
$conta->transferir(50, $conta1);

echo "Numero de contas " . Conta::getNumeroContas() . PHP_EOL;

echo $conta->nomeTitular . PHP_EOL;
echo $conta->cpfTitular . PHP_EOL;
echo $conta->saldo . PHP_EOL;