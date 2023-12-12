<?php

namespace Lucas\Banco\Model\Sistema;
class SistemaNota{
    public function __construct(
        public float $prova1,
        public float $prova2,
        public float $prova3,
        public float $provaFinal
    ) {

    }

    public function calcularNota(){
        $nota1 = $this->prova1;
        $nota2 = $this->prova2;
        $nota3 = $this->prova3;
        $notaFinal = $this->provaFinal;
        $caulculo = $nota1 + $nota2 + $nota3 / $notaFinal * 10;
        if ($caulculo < 40 ){
            echo "Reprovado ficou com " . $caulculo . " de media " . PHP_EOL;
        }
    }
}