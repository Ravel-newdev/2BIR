<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="caixa">
        <form action="testelogin.php" method="post">
            <fieldset>
                <legend for="fieldset"><b>Login</b></legend>
                <br>
                <div class="divs">
                <input type="text" name="nome" id="nome" class="Input" placeholder="nome" required>     
            </div>
            <br>
            <div class="divs">
            <input type ="password" name="senha" id="senha" class="Input" placeholder="senha" min="4" required>
            </div>
            <br>
            <input type="submit" name="submit" id="button">
            <br>
            <br>
            <a href="cadastro.php">Sem cadastro? clique aqui</a>
        </fieldset>   
        </form>
    </div>
</body>
</html>