<?php

namespace Alura\Banco\Model\Conta;
class ContaPoupanca extends Conta{

    protected function precentualTarifa() :float{
        return 0.03;
  
     }
      

}