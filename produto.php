<?php
if(isset($_POST['submit'])){
include_once('Dados_forms.php');

$nome = $_POST['nome'];
$qnt = $_POST['qnt'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];


$testador = $conect -> query("SELECT * FROM produto WHERE nome = '$nome'");

    if (mysqli_num_rows($testador) > 0) {
       
       echo "<script>
        window.onload = function() {
            Swal.fire({
                title: 'Erro!',
                text: 'Este produto já está cadastrado.',
                icon: 'error'
            });
        };
        </script>";
    
    } else {
$result = mysqli_query($conect, "INSERT INTO produto(nome,qnt,marca,modelo) VALUES('$nome','$qnt','$marca','$modelo')");

if ($result) {
    echo "<script>
    window.onload = function() {
        Swal.fire({
            title: 'Feito!',
            text: 'Cadastro realizado com sucesso',
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
    <title>Produto</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div class="caixa">
        <form action="produto.php" method="post">
        <fieldset class="field"> <legend for="fieldset">Entrada de produtos</legend>
        <div class="div">
            <label for="nome">Nome do produto; </label>
            <input type="text" name="nome" id="nome" class="Input" required>
        </div>
        <br>
        <div class="div">
            <label for="qnt">Quantidade do produto; </label>
            <input type="number" name="qnt" id="qnt" class="Input" required>
        </div>
        <br>
        <div class="div">
            <label for="marca">Marca; </label>
            <input type="text" name="marca" id="marca" class="Input" required>
        </div>
        <br>
        <div class="div">
            <label for="modelo">Modelo; </label>
            <input type="text" name="modelo" id="modelo" class="Input" required>
        </div>
        <br> 
        <input type="submit" name="submit" value="Enviar" id="button">

        </fieldset>
    </div>
</body>
</html>
