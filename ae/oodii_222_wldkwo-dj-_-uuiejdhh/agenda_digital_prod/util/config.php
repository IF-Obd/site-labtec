<?php
define("BASEURL","http://labtecifpa.com.br/ae/oodii_222_wldkwo-dj-_-uuiejdhh/agenda_digital_prod");
define("SERVIDOR", "localhost");
define("DBNAME", "mydb");
//define("DBDNS", "mysql:dbname=labtecif_ae_teste;host=localhost");
//define("DBUSER", "phpmyadmin");
//define("DBPASS", "LABTEC!20190b1d0s");

define("DBDNS", "mysql:dbname=labtecif_ae_teste;host=localhost");
define("DBUSER", "phpmyadmin");
define("DBPASS", "LABTEC!20190b1d0s");
try {
    $pdo = new PDO(DBDNS, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    retornaJSON(false, "Erro com a conexão do banco de dados, entre em contato com o adm do sistema.", $e->getMessage());
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
