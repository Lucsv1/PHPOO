<?php

namespace Lucas\Banco\Model\Escola;

use Lucas\Banco\Model\Sala\Sala;
class Aluno{
    public function __construct(
        public string $nome,
        public Sala $sala,
        public string $cpf
        
    ){

    }


}