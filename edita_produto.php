<?php
include_once('Dados_forms.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $select_sql = "SELECT * FROM produto WHERE id=$id";
    $result = $conect->query($select_sql);

    if ($result->num_rows > 0) {
        while ($data_produto = mysqli_fetch_assoc($result)) {
            $nome = $data_produto['nome'];
            $qnt = $data_produto['qnt'];
            $marca = $data_produto['marca'];
            $modelo = $data_produto['modelo'];
        }
    } else {
        header('Location: Site.php');
        exit();
    }
} else {
    header('Location: Site.php');
    exit();
}

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $qnt = $_POST['qnt'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];

    $update_sql = "UPDATE produto SET nome='$nome', qnt='$qnt', marca='$marca', modelo='$modelo' WHERE id=$id";
    if ($conect->query($update_sql) === true) {
        header('Location: Site.php');
        exit();
    } else {
        echo "Erro ao atualizar o produto: " . $conect->error;
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
</head>
<body>
    <div class="caixa">
        <form action="" method="post">
            <fieldset class="field"> 
                <legend for="fieldset">Entrada de produtos</legend>
                <div class="div">
                    <label for="nome">Nome do produto:</label>
                    <input type="text" name="nome" id="nome" class="Input" value="<?php echo $nome ?>" required>
                </div>
                <br>
                <div class="div">
                    <label for="qnt">Quantidade do produto:</label>
                    <input type="number" name="qnt" id="qnt" class="Input" value="<?php echo $qnt ?>" required>
                </div>
                <br>
                <div class="div">
                    <label for="marca">Marca:</label>
                    <input type="text" name="marca" id="marca" class="Input" value="<?php echo $marca ?>" required>
                </div>
                <br>
                <div class="div">
                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo" id="modelo" class="Input" value="<?php echo $modelo ?>" required>
                </div>
                <br>
                <br>
                <input type="submit" name="submit" value="Salvar" id="salvar_produto">
                <input type="hidden" name="id" value="<?php echo $id ?>">
            </fieldset>
        </form>
    </div>
</body>
</html>
