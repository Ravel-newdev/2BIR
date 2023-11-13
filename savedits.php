<?php

  include_once('Dados_forms.php');
if (isset($_POST['salvar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $genero = $_POST['genero'];
    $sql_salvar = "UPDATE usuarios SET nome= '$nome', senha='$senha', email='$email', telefone='$telefone', cidade='$cidade', genero='$genero' where id='$id'";
    $result = $conect->query($sql_salvar);
}
if (isset($_POST['salvar_lugar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sql_salvar_sala = "UPDATE lugar SET nome= '$nome'  where id='$id'";
    $result = $conect->query($sql_salvar_sala);
}
if (isset($_POST['salvar_funcionario'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $genero = $_POST['genero'];
    $sql_salvar_funcionario = "UPDATE funcionarios SET nome= '$nome', senha='$senha', email='$email', telefone='$telefone', cidade='$cidade', genero='$genero' where id='$id'";
    $result = $conect->query($sql_salvar_funcionario);
}
if (isset($_POST['salvar_produto'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $qnt = $_POST['qnt'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $sql_salvar_produto = "UPDATE produto SET nome= '$nome', qnt ='$qnt', marca = '$marca', modelo = '$modelo', where id='$id'";
    $result = $conect->query($sql_salvar_produto);
}
if (isset($_POST['salvar_horario'])) {
    $id = $_POST['id'];
    $aula = $_POST['aula'];
    $descri = $_POST['descri'];
    $sql_salvar_horario = "UPDATE horario SET aula= '$aula', descri= '$descri' where id='$id'";
    $result = $conect->query($sql_salvar_horario);
}
if (isset($_POST['salvar_reserva'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $equip = $_POST['equip'];
    $horario = $_POST['horario'];
    $dr = $_POST['data_reserva'];
    $sql_salvar_reserva = "UPDATE reserva SET nome= '$nome', equip= '$equip', horario='$horario', data_reserva= '$dr' where id='$id'";
    $result = $conect->query($sql_salvar_reserva);
}
header('Location: Site.php');
