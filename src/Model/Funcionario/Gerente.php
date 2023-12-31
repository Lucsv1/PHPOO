<?php

namespace Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Autenticador;
use Alura\Banco\Model\Autenticavel;

class Gerente extends Funcionario implements Autenticavel{
    
    public function calcularBonifica (): float{
        return $this->getSalario();
    }

    public function podeAutenticar(string $senha) : bool{
        return $senha == '4321';
    }
}