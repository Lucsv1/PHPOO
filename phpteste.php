<?php

require_once "src/Conta.php";

$conta = new Conta ("123", "LUCAS VIN", 123);

$conta1 = new Conta ("321", "joaoS", 123);



$conta->depositar(200);
$conta1->depositar(300);

$conta1->transferir(20, $conta);
$conta->transferir(50, $conta1);

echo "Numero de contas " . Conta::getNumeroContas() . PHP_EOL;

echo $conta->nomeTitular . PHP_EOL;
echo $conta->cpfTitular . PHP_EOL;
echo $conta->saldo . PHP_EOL;