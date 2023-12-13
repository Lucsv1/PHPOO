<?php
namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Funcionario;
 class ControladorBonificacao
{

    public function __construct(
        private float $totalBonificacoes = 0
    ) {

    }


   public function adicionaBonifica(Funcionario $funcionario) : float{

    return $this->totalBonificacoes += $funcionario->calcularBonifica();

   }
    public function getTotalBonificacoes(): float
    {   

        return $this->totalBonificacoes;

    }

}