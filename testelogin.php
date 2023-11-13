<?php

session_start();
print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('Dados_forms.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $senha_digitada = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
    $s_s = password_hash($senha_digitada, PASSWORD_DEFAULT);
    if(password_verify($senha_digitada, $senha)){
        echo "senha correta";
    }
    //print_r('Nome: ' . $nome);
    //print_r('<br>');
    //print_r('Senha: ' . $senha);
    $usuarios_sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $usuarios_resultado = $conect->query($usuarios_sql);

   
    $funcionarios_sql = "SELECT * FROM funcionarios WHERE email = '$email' and senha = '$senha'";
    $funcionarios_resultado = $conect->query($funcionarios_sql);

    if (mysqli_num_rows($usuarios_resultado) < 1 && mysqli_num_rows($funcionarios_resultado) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: cadastro.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        if($email === 'ravel.araujo1@aluno.ce.gov.br'){
            header('Location: Site.php');
        }
        elseif($email === 'beatriz.monteiro5@aluno.ce.gov.br' || $email === 'isabely.santos5@aluno.ce.gov.br' || $email === 'kethelly.silva@aluno.ce.gov.br' ){
            header('Location: Site_funcionarios.php');
        }
        else{
            header('Location: acessar.php');
        }
      
    }
} else {
    header('Location: cadastro.php');
}


