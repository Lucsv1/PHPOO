<?php

class Conta
{

   private static $numeroContas = 0;

   public function __construct(
      public readonly string $cpfTitular, 
      public readonly string $nomeTitular, 
      public float $saldo,
      )
   {
      $this->verificarNome($nomeTitular);
      Conta::$numeroContas++;
   }

   public static function getNumeroContas() : int{
      return Conta::$numeroContas++;
   }

   private function verificarNome(string $nomeTitular){
      if (strlen($nomeTitular) < 5){
         echo "Nome deve conter no minimo 5 caracteres";
         exit;
      }

      return;

   }


   public  function sacar(float $valorSacar): void
   {
      if ($valorSacar > $this->saldo) {
         echo "valor acima";
         return;
      }
      $this->saldo -= $valorSacar;

   }

   public function depositar(float $valorDepositar): void
   {
      if ($valorDepositar < 0) {
         echo "Naop tem como depositar valor negativo";
         return;
      }
      $this->saldo += $valorDepositar;
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


