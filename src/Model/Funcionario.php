<?php

namespace Alura\Banco\Model;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;

class Funcionario extends Pessoa
{
    public function __construct(
        public string $nome,
        public  CPF $cpf,
        public readonly string $cargo,
    ) {

        parent::__construct($nome, $cpf);



    }

    public function alteraNome(string $nome): void
    {
        $this->verificarNome($nome);
        $this->nome = $nome;
    }


}