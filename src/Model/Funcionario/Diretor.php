<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Autenticador;
use Alura\Banco\Model\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{

    public function calcularBonifica(): float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';

    }
}