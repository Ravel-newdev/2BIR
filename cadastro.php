<?php

if(isset($_POST['submit'])){
    /*
    print_r('nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('senha: ' . $_POST['senha']);
    print_r('<br>');
    print_r('email: ' . $_POST['email']);
    print_r('<br>');
    print_r('telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('genero: ' . $_POST['genero']);
    print_r('<br>');
    print_r('cidade: ' . $_POST['cidade']); 
    print_r('<br>');   
}
*/
include_once('Dados_forms.php');


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade']; 
$genero = $_POST['genero'];

$result = mysqli_query($conect, "INSERT INTO usuarios(nome,senha,email,telefone,cidade,genero) VALUES ('$nome','$senha','$email','$telefone','$cidade','$genero')");
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
</head>
<body>
    <div class="caixa">
    <form action="cadastro.php" method="post">
      <fieldset>
        <legend for="fieldset"><b>Login</b></legend>
        <br>
        <div class="divs">
        <input type="text" name="nome" id="nome" class="Input" placeholder="nome" required>
    </div>
    <br>
    <div class="divs">
        <input type="password" name="senha" id="senha" class="Input" min="4" placeholder="senha" required>      
    </div>
    <br>
    <div class="divs">
        <input type="email" name="email" id="email" class="Input" placeholder="Email" required>       
    </div>
    <br>
    <div class="divs">
        <input type="tel" name="telefone" id="telefone" class="Input" placeholder="Telefone" required>       
    </div>
    <br>
    <div class="divs">
        <select class="Input" name="cidade">
            <option selected disabled value="Cidade">
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

    <p>Genero:</p>
    <input type="radio" id="feminino" name="genero" value="Feminino"   required>
    <label for="feminino" >Feminino</label>
    <br>
    <input type="radio" id="Masculino" name="genero" value="Masculino"   required>
    <label for="Masculino">Masculino</label>
    <br>
    <input type="radio" id="nb" name="genero" value="Outro"   required>
    <label for="nb">Outro</label>

    <br>
    <br>
    <input type="submit" name="submit" id="button">
  </fieldset>
    </form>

    </div>
</body>
</html>