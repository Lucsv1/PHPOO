<?php

spl_autoload_register(function ($class) {
    $arquivo = str_replace("Lucas\Banco", "src2", $class);
    $arquivo = str_replace("\\", DIRECTORY_SEPARATOR, $arquivo);
    $arquivo .= ".php";
    if (file_exists($arquivo)) {
        require_once $arquivo;
    }

});