<?php

class Conta
{

   private static $numeroContas = 0;

   public function __construct(
      public readonly Titular $titular,
      public float $saldo,
   ) {

      self::$numeroContas++;
   }

   public function __destruct()
   {
      if (self::$numeroContas > 1) {
         echo "So pode conter uma conta so";
      }

   }

   public static function getNumeroContas(): int
   {
      return Conta::$numeroContas++;
   }

   public function sacar(float $valorSacar): void
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

   public function getTitular(): string{
      return $this->titular;
  }

}





