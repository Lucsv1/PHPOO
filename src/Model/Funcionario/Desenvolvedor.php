<?php

namespace Alura\Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calcularBonifica(): float{
        return 500.0;
    }

}