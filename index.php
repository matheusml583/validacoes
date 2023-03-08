<?php

// programa para extrair o valor de um DETERMINADO argumento
$arg = 'nome';

$input = "nome==matheusmarques;tel=999;;99999;cpf=938475948";
if(isset($arg)){

$size = strlen($input);

$arg = explode($arg . "=", $input);

if($size == strlen($arg[0])){
    echo "indice não encontrado \n";
    exit;
}

    if(is_numeric($arg[1][0])){
        for($i = 0; $i < strlen($arg[1]); $i++){
            if(!is_numeric($arg[1][$i])){
                $arg = explode($arg[1][$i], $arg[1]);
                break;
            };
        }
    }else{
        $regex = "/[a-zA-Z]/i";
        for($i = 0; $i < strlen($arg[1]); $i++){
            if(!preg_match($regex, $arg[1][$i])){
                $arg = explode($arg[1][$i], $arg[1]);
                break;
            };
        }
    }
    echo $arg[0] . "\n";
}
else{
    echo "Sem Argumentos \n";
}