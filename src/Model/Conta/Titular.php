<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Autenticador;
use Alura\Banco\Model\Autenticavel;
use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

class Titular extends Pessoa implements Autenticavel
{

    public function __construct(
        string $nome,
        CPF $cpf,
        public readonly Endereco $endereco,
    ) {

        parent::__construct($nome, $cpf);
        $this->verificarNome($nome);

    }

    public function podeAutenticar(string $senha): bool{
        return $senha == "111";
    }
}