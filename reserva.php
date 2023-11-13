<?php

if (isset($_POST['submit'])) {
    include_once('Dados_forms.php');
    $opcao = null;
    $nome = $_POST['nome'];
    $dr = $_POST['dr'];
    $produto = $_POST['produto'];
    $opcao = $_POST['opcao'];
    if($opcao !== null)
    for($i = 0; $i < count($opcao); $i++){
        $opcao_string = implode(",", $opcao);
        //echo "<p>{$opcao[$i]}</p>";
    }

    $testador = $conect -> query("SELECT * FROM reserva WHERE equip = '$produto' and data_reserva ='$dr'");

    if (mysqli_num_rows($testador) > 0) {
       
       echo "<script>
        window.onload = function() {
            Swal.fire({
                title: 'Erro!',
                text: 'Este produto já está reservado.',
                icon: 'error'
            });
        };
        </script>";
    
    } else {
    $result = mysqli_query($conect, "INSERT INTO reserva(nome,equip,data_reserva,horario) VALUES('$nome','$produto','$dr','$opcao_string')");

    if ($result) {
        echo "<script>
        window.onload = function() {
            Swal.fire({
                title: 'Feito!',
                text: 'Reserva realizada com sucesso.',
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
    <title>Alugar Equipamentos</title>
    <link rel="stylesheet" href="reserva.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<form action="reserva.php" method="post">
    <div class="logo">
        <img src="logo1.png">

        <div class="c"><a href="acessar.php">Cancelar</a></div>
    </div>

    <div class="tudo">


<div class="form">
    <h2>Preencha os campos para prosseguir</h2>
    <form action="" method="post">
        <label for="Nome">Nome:</label><br>
        <input id="nome" name="nome" type="text" class="s" >

        <br>

        <label for="Nome">Data para a reserva:</label><br>
        <input id="dr" name="dr" type="date" class="s" >

        <br>
        <label for="produto" class="labels"></label>
                    <select class="Input" name="produto">
                        <option disabled class="cid">Equipamentos</option>
                        <option>caixa</option>
                        <option>datashow</option>
                        <option>dicionario de portugues</option>
                        <option>dicionario ingles</option>
                        <option>kit de livros</option>
                        <option>notebook</option>
                    </select>

        <div class="ch"> <h3>Aula para a reserva:</h3>
            <input type="checkbox"id="um" name="opcao[]" value="1 aula" class="sei">
            <label for="um" class="p">1° Aula</label>

            <input type="checkbox"id="dois" name="opcao[]" value="2 aula" class="sei">
            <label for="dois" class="p">2° Aula</label>

            <input type="checkbox"id="tres" name="opcao[]" value="3 aula" class="sei">
            <label for="tres" class="p">3° Aula</label>

            <input type="checkbox"id="quatro" name="opcao[]" value="4 aula" class="sei">
            <label for="quatro" class="p">4° Aula</label>

            <input type="checkbox"id="cinco" name="opcao[]" value="5 aula" class="sei">
            <label for="cinco" class="p">5° Aula</label>

            <input type="checkbox"id="seis" name="opcao[]" value="6 aula" class="sei">
            <label for="seis" class="p">6° Aula</label>

            <input type="checkbox"id="sete" name="opcao[]" value="7 aula" class="sei">
            <label for="sete" class="p">7° Aula</label>

            <input type="checkbox"id="oito" name="opcao[]" value="8 aula" class="sei">
            <label for="oito" class="p">8° Aula</label>

            <input type="checkbox"id="nove" name="opcao[]" value="9 aula" class="sei">
            <label for="nove" class="p">9° Aula</label>
        </div>

        <div class="but">
        <input type="submit" name="submit" value="Resevar" id="button"></div>
    </form>
</div>

</div>
</form>
</body>
</html>