<?php

if (isset($_POST['submit'])) {
    include_once('Dados_forms.php');

    $nome = $_POST['nome'];

    $testador = $conect -> query("SELECT * FROM lugar WHERE nome = '$nome'");

    if (mysqli_num_rows($testador) > 0) {
       
       echo "<script>
        window.onload = function() {
            Swal.fire({
                title: 'Erro!',
                text: 'Esta sala já está cadastrada.',
                icon: 'error'
            });
        };
        </script>";
    
    } else {
    $result = mysqli_query($conect, "INSERT INTO lugar(nome) VALUES('$nome')");

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
    <link rel="stylesheet" href="style1.css">

    <title>Cadastro de produtos</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="caixa">
    <form action="local.php" method="post">            
        
    <fieldset>
                <legend for="fieldset"><b>Salas</b></legend>
                <br>
                <div class="divs">
                    <input type="text" name="nome" id="nome" class="Input" placeholder="Nome Completo" required>
                    <label for="nome" class="labels"> </label>
                </div>
                <br>

                <br>
                <br>
                <input type="submit" name="submit" value="Enviar" id="button">
            </fieldset>
        </form>
    </div>
</body>

</html>