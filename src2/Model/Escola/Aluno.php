<?php

namespace Lucas\Banco\Model\Escola;

use Lucas\Banco\Model\Sala\Sala;
abstract class Aluno{
    public function __construct(
        protected string $nomeAluno,
        Sala $sala,
        
    ){



    }

    abstract protected function Funcao();


}