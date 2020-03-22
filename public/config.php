<?php

ob_start();
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

session_name(md5('seg_' . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']));
session_start();

$versao = '3'; 
$localhost = TRUE;

$baseurl_assets = $baseurl = "http://localhost:8080/";

if (!empty($localhost))
    $baseurl_assets = "http://localhost:8080/";

