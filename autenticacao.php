<?php
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once "autoload.php";

$autenticador = new Autenticador();
$diretor = new Gerente("lucio", new CPF("213.123.213-33"), 1000);
$autenticador->tentaLogin($diretor, "4321");