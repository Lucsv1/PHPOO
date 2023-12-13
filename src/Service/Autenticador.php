<?php

namespace Alura\Banco\Service;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Autenticavel;

class Autenticador{

    public function tentaLogin(Autenticavel $autenticavel, string $senha): void{
        if($autenticavel->podeAutenticar($senha)){
            echo "Autenticado";
        } else {
            echo "senha incorreta";
        }
    }
}