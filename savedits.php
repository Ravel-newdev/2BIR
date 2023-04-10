<?php
  include_once('Dados_forms.php');

  if(isset($_POST['salvar'])){
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
header('Location: Site.php');
?>