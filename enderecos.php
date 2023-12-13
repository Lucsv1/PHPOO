<?php
use Alura\Banco\Model\Endereco;

require_once "autoload.php";

$endereco1 = new Endereco("Sao Paulo", "Vila Mangalot", "Rua Portao Preto", "164");
$endereco2 = new Endereco("Osasco", "Bairro", "Rua 2", "11");

echo $endereco1 . PHP_EOL;
echo $endereco2;