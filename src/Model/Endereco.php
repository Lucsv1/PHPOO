<?php

namespace Alura\Banco\Model;
use Acesso;

final class Endereco
{

    use Acesso;
    public function __construct(
        public readonly string $cidade,
        public readonly string $bairro,
        public readonly string $rua,
        public readonly string $numero
    ) {

    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}