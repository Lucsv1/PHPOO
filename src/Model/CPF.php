<?php

namespace Alura\Banco\Model;

class CPF
{
    public function __construct(
        public readonly string $pf,
    ) {

    }
}