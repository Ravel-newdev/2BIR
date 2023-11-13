<?php

$db_host = 'Localhost';
$dbusername = 'root';
$dbsenha = '';
$dbnome = 'location';

$conect = new mysqli($db_host, $dbusername, $dbsenha, $dbnome);


if($conect -> connect_errno){
    echo 'erro';
}
else{
    echo 'conexão feita com sucesso, parabéns Ravel.';
}