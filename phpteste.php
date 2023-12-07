<?php

require_once "src/Conta.php";

$conta = new Conta ();
$conta -> cpfTitular = "12323123123";
$conta -> nomeTitular = "Lucas Vincius";

$conta1 = new Conta ();
$conta1 -> saldo = 300;
$conta1 -> cpfTitular = "3333333";
$conta1 -> nomeTitular = "JoaO";

$conta2 = $conta;

var_dump($conta);