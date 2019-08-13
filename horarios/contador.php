<!---------CONTADOR DE ACESSOS-------->

<?php

$arquivo = "contador.txt";

$handle = fopen($arquivo, "r+");

$data = fread($handle, 512);

$contador = $data + 1;

fseek($handle, 0);

fwrite($handle, $contador);

fclose($handle);



function consultaAcessos() {

    $arquivo = "contador.txt";

    $handle = fopen($arquivo, "r+");

    $data = fread($handle, 512);



    return $data;

}

?>

<!------------------------------------>