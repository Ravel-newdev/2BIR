<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width/=device-width, initial-scale=1.0">
    <title>Alugar Equipamentos</title>
    <link rel="stylesheet" href="dic_por.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="logo">
        <img src="logo1.png">

        <div class="c"><a href="../../acessar/acessar.php">Cancelar</a></div>
    </div>

    <div class="tudo">
<div class="imag">
<h2>DICIONÁRIO PORTUGUÊS</h2>
<img src="dicionario_port.jpg">
</div>
<div class="form">
    <h2>Preencha os campos para prosseguir</h2>
    <form action="" method="post">
        <label for="Nome" class="o">Nome:</label><br>
        <input id="nm" type="text" class="s" >

        <br>

        <label for="Nome" class="o">Data para a reserva:</label><br>
        <input id="nm" type="date" class="s" >

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
        <br>
        <div class="quan">
        <label for="" class="o">Quantidade:</label><br>
            <select name="" id="">
                <option value="">Selecione</option>
                <option value="">5</option>
                <option value="">10</option>
                <option value="">15</option>
                <option value="">20</option>
                <option value="">25</option>
                <option value="">30</option>
                <option value="">35</option>
                <option value="">40</option>
                <option value="">45</option>
            </select>   
        </div>

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