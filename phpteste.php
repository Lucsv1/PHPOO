<?php

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Pessoa;

require_once 'autoload.php';


$funcionario =  new Funcionario("Lucas", new CPF("123"), "cargo");
$Pessoa = new Pessoa("joans", new CPF("123"));
$endereco = new Endereco("cidade", "bairro", "rua", "numero");
$titular =  new Titular("Lucas", new CPF("123"), $endereco);
// $conta1 = new Conta($titular , 123);

$endereco2 = new Endereco("cidade1" , "bairro1", "rua1", "numero1");
$titular2 = new Titular("Joaowew",new CPF("123"), $endereco2 );
// $conta2 = new Conta($titular2 ,100);


$conta2->depositar(200);
$conta1->depositar(300);

$conta2->transferir(30, $conta1);
$conta1->transferir(20, $conta2);


echo "Numero de contas " . Conta::getNumeroContas() . PHP_EOL;

var_dump($conta1);

// Sistema Escola

// require_once "autoload2.php";

// use Lucas\Banco\Model\Escola\Aluno1;
// use Lucas\Banco\Model\Escola\Professor;
// use Lucas\Banco\Model\Sala\Sala;
// use Lucas\Banco\Model\Sistema\SistemaNota;

// $sala  = new Sala("sala 02", "2 alunos");
// $aluno = new Aluno1("Lucas Vinicius", $sala);
// $professor = new Professor("JOTA", "4111", $sala);
// $notas = new SistemaNota(10, 5, 3, 4);


// echo "Nome do professor da turma: " . $professor->nome . PHP_EOL;
// echo "nome do aluno: " . $aluno->getNomeAluno() . PHP_EOL;
// echo $notas->calcularNota();





