<?php 

class Conta {

   public string $cpfTitular;
   public string $nomeTitular;
   public float $saldo;


   public function sacar(float $valorSacar): Conta {
    if ($valorSacar > $saldo) {
        echo"valor acima";
   }

}