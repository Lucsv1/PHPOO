<?php

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Pessoa;


$funcionario =  new Funcionario("Lucas", new CPF("123"), "cargo");
$Pessoa = new Pessoa("joans", new CPF("123"));
$endereco = new Endereco("cidade", "bairro", "rua", "numero");
$titular =  new Titular("Lucas", new CPF("123"), $endereco);
$conta1 = new Conta($titular , 123);

$endereco2 = new Endereco("cidade1" , "bairro1", "rua1", "numero1");
$titular2 = new Titular("Joaowew",new CPF("123"), $endereco2 );
$conta2 = new Conta($titular2 ,100);


$conta2->depositar(200);
$conta1->depositar(300);

$conta2->transferir(30, $conta1);
$conta1->transferir(20, $conta2);


echo "Numero de contas " . Conta::getNumeroContas() . PHP_EOL;

var_dump($conta1);


