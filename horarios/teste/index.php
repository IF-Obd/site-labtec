<?php

if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') {
    $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    header('HTTP/1.1 301 Moved Permanently');
    header("Location: $redirect_url");
    exit();
}


require_once './contador.php';
require_once 'models/Planilha.php';
require_once 'controllers/controle.php';
require_once 'controllers/ProcuraPlanilhas.php';











