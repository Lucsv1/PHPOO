<?php

Class Pessoa{
    public function __construct(
        protected readonly string $nome,
        protected readonly CPF $cpf,
        
    ){

        $this->verificaNome($nome);

    }

    protected function verificarNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome deve conter no minimo 5 caracteres";
            exit;
        }

        return;

    }
}