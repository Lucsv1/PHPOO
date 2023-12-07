<?php

class Conta
{

   public string $cpfTitular;
   public string $nomeTitular;
   public float $saldo;


   public function sacar(float $valorSacar)
   {
      if ($valorSacar > $this->saldo) {
         echo "valor acima";
      } else {
         $this->saldo -= $valorSacar;
      }

   }

   public function depositar(float $valorDepositar){
      if ($valorDepositar < 0){
         echo "Naop tem como depositar valor negativo";
      } else {
         $this -> saldo += $valorDepositar;
      }
   }

}