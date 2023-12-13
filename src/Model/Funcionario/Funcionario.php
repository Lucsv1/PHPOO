<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;

abstract class Funcionario extends Pessoa
{
    public function __construct(
        string $nome,
        CPF $cpf,
        private float $salario
    ) {

        parent::__construct($nome, $cpf);

    }

    final public function alteraNome(string $nome): void
    {
        $this->verificarNome($nome);
        $this->nome = $nome;
    }

    public function getSalario(): float{
        return $this->salario;
    }

    abstract public function calcularBonifica(): float;


}