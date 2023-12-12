<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

class Titular extends Pessoa 
{

    public function __construct(
        public readonly string $nome,
        public readonly CPF $cpf,
        public readonly Endereco $endereco,
    ) {

        parent::__construct($nome, $cpf);
        $this->verificarNome($nome);

    }

    

    

    


}