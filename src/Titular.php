<?php

class Titular extends Pessoa 
{

    public function __construct(
        public readonly string $nome,
        public readonly CPF $cpf,
        public readonly Endereco $endereco,
    ) {

        parent::__construct($nome, $cpf);
        $this->verificarNome($nome);

    }

    

    

    


}