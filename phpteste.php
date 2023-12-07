<?php

require_once "src/Conta.php";

$conta = new Conta ();
$conta -> cpfTitular = "12323123123";
$conta -> nomeTitular = "Lucas Vincius";
$conta -> saldo = 100;

$conta1 = new Conta ();
$conta1 -> saldo = 300;
$conta1 -> cpfTitular = "3333333";
$conta1 -> nomeTitular = "JoaO";




$conta->depositar(200);
$conta1->depositar(300);

var_dump($conta);
var_dump($conta1);