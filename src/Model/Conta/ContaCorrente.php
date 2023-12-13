<?php

namespace Alura\Banco\Model\Conta;

class ContaCorrente extends Conta{
    protected function precentualTarifa() :float{
        return 0.05;
  
     }

     public function transferir(float $valorTransferir, Conta $contaDestino): void
   {
      if ($valorTransferir > $this->saldo) {
         echo "Saldo indisponivel";
         return;
      }
      $this->sacar($valorTransferir);
      $contaDestino->depositar($valorTransferir);

   }
}