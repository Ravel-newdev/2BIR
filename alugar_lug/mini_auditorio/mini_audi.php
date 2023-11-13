<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Lugares</title>
    <link rel="stylesheet" href="mini_audi.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <div class="logo">
        <img src="logo1.png">

        <div class="c"><a href="../../acessar/acessar.php">Cancelar</a></div>
    </div>

    <div class="tudo">
<div class="imag">
<h2>MINI AUDITÓRIO</h2>
<img src="mini_auditorio.webp">
</div>

<div class="form">
    <h2>Preencha os campos para prosseguir</h2>
    <form action="" method="post">
        <label for="Nome">Nome:</label><br>
        <input id="nm" type="text" class="s" >

        <br>

        <label for="Nome">Data para a reserva:</label><br>
        <input id="nm" type="date" class="s" >

        <br>

        <div class="ch"> <h3>Aula para a reserva:</h3>
            <input type="checkbox"id="um" class="sei">
            <label for="um" class="p">1° Aula</label>

            <input type="checkbox"id="dois" class="sei">
            <label for="dois" class="p">2° Aula</label>

            <input type="checkbox"id="tres" class="sei">
            <label for="tres" class="p">3° Aula</label>

            <input type="checkbox"id="quatro" class="sei">
            <label for="quatro" class="p">4° Aula</label>

            <input type="checkbox"id="cinco" class="sei">
            <label for="cinco" class="p">5° Aula</label>

            <input type="checkbox"id="seis" class="sei">
            <label for="seis" class="p">6° Aula</label>

            <input type="checkbox"id="sete" class="sei">
            <label for="sete" class="p">7° Aula</label>

            <input type="checkbox"id="oito" class="sei">
            <label for="oito" class="p">8° Aula</label>

            <input type="checkbox"id="nove" class="sei">
            <label for="nove" class="p">9° Aula</label>
        </div>

        <div class="but">
        <input type="submit" name="submit" value="Resevar" id="button"></div>
    </form>
</div>

</div>

</body>
</html>
