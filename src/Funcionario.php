<?php

namespace Alura\Banco\Model;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;

Class Funcionario extends Pessoa
{
    public function __construct(
        public readonly string $nome,
        public readonly CPF $cpf,
        public readonly string $cargo,
        ){

            parent::__construct($nome, $cpf);



    }

    public function alteraNome(string $nome): void {
        $this->verificarNome($nome);
        $this->nome = $nome;
    }
    

}