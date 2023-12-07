<?php

Class CadastroPessoas{
    private Pessoa $pessoas;

    public function __construct(){
        $this->pessoas = [];
    }

    public function getPessoas (){
        return $this->pessoas;
    }

    public function adicionarPessoa(Pessoa $pessoas){
        $this->pessoas[] = $pessoas;

    }
}