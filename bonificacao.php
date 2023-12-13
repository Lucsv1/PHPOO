<?php

require_once "autoload.php";
use Alura\Banco\Model\{CPF};
use Alura\Banco\Model\Funcionario\{Diretor, Gerente, Funcionario};
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\Funcionario\EditorVideo;
use Alura\Banco\Service\ControladorBonificacao;

$desenvolvedor = new Desenvolvedor("Lucas Vinicius1", new CPF("111.111.111-11"), 8000);
$gerente = new Gerente("Lucas Vinicius2 ", new CPF("222.222.222-33"), 11000 );
$diretor = new Diretor("Lucas Vinicius3 ", new CPF("222.222.222-22"), 20000 );
$editor = new EditorVideo("Paulo", new CPF("000.000.000-00"), 3000);



$controlador = new ControladorBonificacao();
// $controlador->adicionaBonifica($funcionario);

echo $controlador->adicionaBonifica($gerente) . PHP_EOL;
echo $controlador->adicionaBonifica($diretor) . PHP_EOL;
echo $controlador->adicionaBonifica($desenvolvedor) . PHP_EOL;
echo $controlador->adicionaBonifica($editor);
// $controlador->adicionaBonifica($diretor);

// echo $controlador->getTotalBonificacoes($funcionario);