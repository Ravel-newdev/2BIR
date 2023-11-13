<?php

if (isset($_POST['submit'])) {
    include_once('Dados_forms.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $genero = $_POST['genero'];


    if(isset($_POST['senha'])){
    $s_i = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
    $s_s = password_hash($s_i, PASSWORD_DEFAULT);

}
    $testador = $conect -> query("SELECT * FROM usuarios WHERE email = '$email'");

    if (mysqli_num_rows($testador) > 0) {
       
       echo "<script>
        window.onload = function() {
            Swal.fire({
                title: 'Erro!',
                text: 'Este e-mail já está cadastrado.',
                icon: 'error'
            });
        };
        </script>";
    
    } else {
    $result = mysqli_query($conect, "INSERT INTO usuarios(nome,senha,email,telefone,cidade,genero) VALUES('$nome','$s_s','$email','$telefone','$cidade','$genero')");

    if ($result) {
        echo "<script>
        window.onload = function() {
            Swal.fire({
                title: 'Feito!',
                text: 'Cadastro realizado com sucesso.',
                icon: 'success'
            });
        };
        </script>";
    } else {
        echo "<script>
        window.onload = function() {
            Swal.fire({
                title: 'Erro ao cadastrar',
                text: 'Ocorreu um erro ao salvar os dados. Tente novamente.',
                icon: 'error'
            });
        };
        </script>";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">

    <title>Se cadastre!</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="caixa">
    <form action="login.php" method="post" id="formlogin">            
        
    <fieldset>
                <legend for="fieldset"><b>Login</b></legend>
                <br>
                <div class="divs">
                    <input type="text" name="nome" id="nome" class="Input" placeholder="Nome Completo" required>
                    <label for="nome" class="labels"> </label>
                </div>
                <br>
                <div class="divs">
                    <input type="password" name="senha" id="senha" class="Input" placeholder="Senha" min="4" required>
                    <label for="senha" class="labels"></label>
                </div>
                <br>
                <div class="divs">
                    <input type="email" name="email" id="email" class="Input" placeholder="Email" required>
                    <label for="email" class="labels"></label>
                </div>
                <br>
                <div class="divs">
                    <input type="tel" name="telefone" id="telefone" class="Input" placeholder="Telefone" required>
                    <label for="telefone" class="labels"></label>
                </div>
                <br>
                <div class="divs">
                    <label for="Cidade" class="labels"></label>
                    <select class="Input" name="cidade">
                        <option class="cid">Cidade</option>
                        <option>Caucaia</option>
                        <option>Maracanaú</option>
                        <option>Eusébio</option>
                        <option>Pacatuba</option>
                        <option>Itaitinga</option>
                        <option>Maranguape</option>
                        <option>Guaiúba</option>
                        <option>Aquiraz</option>
                        <option>Pindoretama</option>
                        <option>Cascavel</option>
                        <option>Horizonte</option>
                        <option>Pacajus</option>
                        <option>Chorozinho</option>
                        <option>São G do Amarante</option>
                        <option>São L do curu</option>
                        <option>Paracuru</option>
                        <option>Paraipaba</option>
                        <option>Trairi</option>
                        <option>Fortaleza</option>
                    </select>
                </div>
                <br>

                Genero:<br>
                <input type="radio" id="feminino" name="genero" value="Feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="Masculino" name="genero" value="Masculino" required>
                <label for="Masculino">Masculino</label>
                <br>
                <input type="radio" id="nb" name="genero" value="Outro" required>
                <label for="nb">Outro</label>

                <br>
                <br>
                <input type="submit" name="submit" value="Enviar" id="button">
                <br>
                <br>
                <center><a href="cadastro.php">Fazer login</a></center>
            </fieldset>
        </form>
    </div>
</body>

</html>
