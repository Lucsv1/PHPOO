<?php 

namespace Lucas\Banco\Model\Escola;

use Lucas\Banco\Model\Sala\Sala;

class Professor{
    public function __construct(
        public string $nome,
        public string $cpf,
        public Sala $sala,
    ){

    }

}