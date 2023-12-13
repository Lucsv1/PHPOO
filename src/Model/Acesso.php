<?php

trait Acesso{

    public function __get(string $name){
        $metodo = ucfirst($name);
        return $this->$metodo();
    }
}