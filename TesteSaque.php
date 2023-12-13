<?php 

use Alura\Banco\Model\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Model\{CPF, Endereco};


require_once "autoload.php";

$endereco = new Endereco("Sao Paulo", "Vila Mangalot", "Rua Portao Preto", "164");
$cpf = new CPF("427.016.658-41");
$titular = new Titular("Lucas Vinicius", $cpf, $endereco);
$conta = new ContaCorrente($titular, 1200);     

var_dump($conta);
$conta->sacar(200);
echo $conta->saldo;