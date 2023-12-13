<?php


spl_autoload_register(function (string $nomeClasse) {


    $caminhorArquivo = str_replace("Alura\\Banco", "src", $nomeClasse);
    $caminhorArquivo = str_replace("\\", DIRECTORY_SEPARATOR, $caminhorArquivo);
    $caminhorArquivo .= '.php';

    

    if (file_exists($caminhorArquivo)) {
        require_once $caminhorArquivo;
    }
});