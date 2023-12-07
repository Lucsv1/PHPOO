<?php

class Titular 
{

    public function __construct(
        public readonly string $name,
        public readonly string $cpf,
    ) {
        $this->verificarNome($name);

    }

    private function verificarNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome deve conter no minimo 5 caracteres";
            exit;
        }

        return;

    }


}