<?php

require_once "src/Conta.php";

$conta = new Conta ();
$conta -> setCpfTitular("427.016.658-41");
$conta -> setNomeTitular("Lucas Vincius");
$conta -> setSaldo(100);

$conta1 = new Conta ();
$conta1 -> setCpfTitular("111.111.111-21");
$conta1 -> setNomeTitular("Joao");
$conta1 -> setSaldo(200);



$conta->depositar(200);
$conta1->depositar(300);

$conta1->transferir(20, $conta);
$conta->transferir(50, $conta1);

var_dump($conta);
var_dump($conta1);