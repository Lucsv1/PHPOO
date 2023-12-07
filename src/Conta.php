<?php

class Conta
{

   private string $cpfTitular;
   private string $nomeTitular;
   private float $saldo;

   //GETTERS AND SETTERS
   public function getCpfTitular(){
      return $this->cpfTitular;
   }

   public function setCpfTitular(string $cpf ): void{
      $this->cpfTitular = $cpf;
   }

   
   public function getNomeTitular(){
      return $this->nomeTitular;
   }

   public function setNomeTitular(string $nomeTitular): void{
      $this->nomeTitular = $nomeTitular;
   }

   
   public function getSaldo(){
      return $this->saldo;
   }

   public function setSaldo(float $saldo): void{
      $this->saldo = $saldo;
   }
      
   //Metodos

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

}


