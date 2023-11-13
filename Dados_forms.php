<?php
$dbhost = 'Localhost';
$dbuser = 'root';
$dbsenha = '';
$dbnome = 'locationbir';

$conect = new mysqli($dbhost, $dbuser, $dbsenha, $dbnome);

/*
if($conect -> connect_errno){
    echo 'erro';
}
else{
    echo 'conexão feita com sucesso, parabéns Bia.';
}
*/
