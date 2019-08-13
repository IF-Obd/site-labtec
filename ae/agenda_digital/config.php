<?php

require 'environment.php';

if(ENVIRONMENT == 'development'){
    define('BASE_URL', 'http://labtecifpa.com.br/ae/agenda_digital');
    $config['dbname']    = 'labtecif_ae_producao';
    $config['host']      = 'localhost';
    $config['dbuser']   = 'labtecif_ng';
    $config['dbpass']   = 'asdfhasiud8e98ur989ur9y3';
}else{
    define('BASE_URL', 'http://labtecifpa.com.br/ae/agenda_digital');
    $config['dbname']    = 'labtecif_ae_teste';
    $config['host']      = 'localhost';
    $config['dbuser']   = 'labtecif_ng';
    $config['dbpass']   = 'asdfhasiud8e98ur989ur9y3';
}

global $db; //variável global pode ser acessada de qualquer lugar do código

try{
  $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}


function trataErro($e, $rotina = NULL, $gera_except = FALSE)
{

    if ($rotina == NULL) $rotina = "Não informada";

    $resultado = '<strong>Ocorreu um erro com os seguintes detalhes:</strong><br>
						<strong>Arquivo:</strong> ' . $e->getFile() . '<br>
						<strong>Rotina:</strong> ' . $rotina . '<br>
						<strong>Codigo:</strong> ' . $e->getCode() . '<br>
						<strong>Mensagem:</strong> ' . $e->getMessage();

    if ($gera_except == FALSE):
        echo($resultado);
    else:
        die($resultado);
    endif;

}//trataErro
