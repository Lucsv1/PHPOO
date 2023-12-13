<?php 

namespace Lucas\Banco\Model\Escola;

use Lucas\Banco\Model\Sala\Sala;

class Professor{
    public function __construct(
        public readonly string $nome,
        public readonly string $cpf,
        protected Sala $sala,
    ){

    }

}