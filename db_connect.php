<?php
//Conexão com o Banco de Dados
$servername = "localhost"; #nome do servidor
$username = "root";
$senha = ""; #sempre precisa estar vazia
$db_connect = "sistemalogin"; #nome do banco de dados

$connect = mysqli_connect($servername, $username, $senha, $db_connect);
#fazendo a conexão com o banco de dados

if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;


?>
