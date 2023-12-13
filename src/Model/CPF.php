<?php

namespace Alura\Banco\Model;

final class CPF
{
    public function __construct(
        public readonly string $cpf,
    ) {

    }
}