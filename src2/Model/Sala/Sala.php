<?php

namespace Lucas\Banco\Model\Sala;

class Sala{
    public function __construct(
        public string $numeroSala,
        public string $qntdAluno,
    ){}
}