<?php

Class Pessoa{
    private String $nome;
    private int $idade;


    public function __construct(String $nome, int $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade; 
    }

}