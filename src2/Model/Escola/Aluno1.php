<?php

namespace Lucas\Banco\Model\Escola;

use Lucas\Banco\Model\Sala\Sala;

class Aluno1 extends Aluno{

    public function __construct(
        string $nomeAluno,
        Sala $sala,
    ){
        parent::__construct($nomeAluno, $sala);
    }

    public function getNomeAluno(): string{
        return $this->nomeAluno;
    }

     protected function Funcao(){

    }
}