<?php

namespace Alura\Banco\Model\Conta;

abstract class Conta
{

   private static $numeroContas = 0;

   public function __construct(
      public readonly Titular $titular,
      public float $saldo,
   ) {
      self::$numeroContas++;
   }

   public function getSaldo () : float{
      return $this->saldo;
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

      $tarifaSaque = $valorSacar * $this->precentualTarifa();
      $valorSaque = $valorSacar + $tarifaSaque;
      echo "valor da tarifa: " . $tarifaSaque . PHP_EOL;
      if ($valorSaque > $this->saldo) {
         echo "valor acima";
         return;
      }
      $this->saldo -= $valorSaque;

   }

   public function depositar(float $valorDepositar): void
   {
      if ($valorDepositar < 0) {
         echo "Naop tem como depositar valor negativo";
         return;
      }
      $this->saldo += $valorDepositar;
   }

   abstract protected function precentualTarifa(): float;

   

}





