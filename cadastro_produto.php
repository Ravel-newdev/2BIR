<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produtos.</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="caixa">
        <form action="cadastro_produto.html" method="post">
        <fieldset class="field"> <legend for="fieldset">entrada de produtos</legend>
        <div class="div">
            <label for="nome">Nome do produto; </label>
            <input type="text" name="nome" id="nome" class="nome">
        </div>
        <br>
        div class="div">
            <label for="numero">Quantidade do produto; </label>
            <input type="number" name="numero" id="numero" class="numero">
        </div>
        <br>
        <input type="submit" name="submit" id="button">
</fieldset>
    </div>
</body>
</html>