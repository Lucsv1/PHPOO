<?php

namespace Alura\Banco\Model;

class Endereco
{
    public function __construct(
        public readonly string $cidade,
        public readonly string $bairro,
        public readonly string $rua,
        public readonly string $numero
    ) {

    }
}