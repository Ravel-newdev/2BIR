<?php
session_start();
print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
{
    include_once('Dados_forms.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //print_r('Nome: ' . $nome);
    //print_r('<br>');
    //print_r('Senha: ' . $senha);
    $db_sql = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = '$senha'";

    $resultado = $conect->query($db_sql);

    //print_r($resultado);
    //print_r($db_sql);
    

    if(mysqli_num_rows($resultado) < 1){
      unset($_SESSION['nome']);
      unset($_SESSION['senha']);
      header('Location: cadastro.php');
    }
    else{
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header('Location: Site.php');
    }
}
else{
    header('Location: cadastro.php');
}
?>