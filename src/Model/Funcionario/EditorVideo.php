<?php 

namespace Alura\Banco\Model\Funcionario;
class EditorVideo extends Funcionario{

    public function calcularBonifica() : float{
        return $this->getSalario();
    }


}