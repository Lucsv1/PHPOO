<?php

namespace Lucas\Banco\Model\Sala;

class Sala{
    public function __construct(
        public string $numeroSala,
        public string $qntdAluno,
    ){}

    public function getNumeroSala(): string{
        return $this->numeroSala;
    }

    public function getQntdAluno(): string{
        return $this->qntdAluno;
    }
}