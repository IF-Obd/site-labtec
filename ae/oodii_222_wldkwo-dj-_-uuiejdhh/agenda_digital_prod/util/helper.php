<?php

function formata_data_banco($data)
{
    if ($data == null) {
        $dados['data'] = " ";
        $dados['hora'] = " ";
        return $dados;
    }
    $objeto_data = DateTime::createFromFormat('Y-m-d H:i:s', $data);

    $data = $objeto_data->format('d/m/Y-H:i:s');

    $partes = explode("-", $data);

    $dados['data'] = $partes[0];
    $dados['hora'] = $partes[1];

    return $dados;
}

function formata_data_banco_string($data)
{

    if ($data == null) {
        return " ";
    }
    $objeto_data = DateTime::createFromFormat('Y-m-d H:i:s', $data);
    $data = $objeto_data->format('d/m/Y-H:i');
    $partes = explode("-", $data);

    return $partes[0] . " às " . $partes[1];
}

?>