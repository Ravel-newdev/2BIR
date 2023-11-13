<?php

if (!empty($_GET['id'])) {
    include_once('Dados_forms.php');

    $id = $_GET['id'];

    $select_sql = "SELECT * FROM funcionarios Where id=$id";

    $result = $conect->query($select_sql);

    if ($result->num_rows > 0) {
        while ($data_funcionarios = mysqli_fetch_assoc($result)) {
            $nome = $data_funcionarios['nome'];
            $senha = $data_funcionarios['senha'];
            $email = $data_funcionarios['email'];
            $telefone = $data_funcionarios['telefone'];
            $cidade = $data_funcionarios['cidade'];
            $genero = $data_funcionarios['genero'];
        }
       //print_r($nome);
    } else {
        header('Location: Site.php');
    }
} else {
    header('Location: Site.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Edição</title>
</head>
<body>
    <div class="caixa">
    <form action="savedits.php" method="post">
      <fieldset>
        <legend for="fieldset"><b>Editar conta</b></legend>
        <br>
        <div class="divs">
        <input type="text" name="nome" id="nome" class="Input" value="<?php echo $nome?>" required >
    </div>
    <br>
    <div class="divs">
        <input type="text" name="senha" id="senha" class="Input" min="4" value="<?php echo $senha?>" required>
    </div>
    <br>
    <div class="divs">
        <input type="email" name="email" id="email" class="Input" value="<?php echo $email?>" required>
    </div>
    <br>
    <div class="divs">
        <input type="tel" name="telefone" id="telefone" class="Input" value="<?php echo $telefone?>" required>
    </div>
    <br>
    <div class="divs">
        <select class="Input" name="cidade" value="<?php echo $cidade?>">
            <option>Cidade</option>
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
    <input type="radio" id="feminino" name="genero" value="Feminino" <?php echo  ($genero == 'Feminino') ? 'checked' : '' ?>  required>
    <label for="feminino" >Feminino</label>
    <br>
    <input type="radio" id="Masculino" name="genero" value="Masculino" <?php echo  ($genero == 'Masculino') ? 'checked' : '' ?>   required>
    <label for="Masculino">Masculino</label>
    <br>
    <input type="radio" id="nb" name="genero" value="Outro"  <?php echo  ($genero == 'outro') ? 'checked' : '' ?>  required>
    <label for="nb">Outro</label>

    <br>
    <br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="salvar_funcionario" id="salvar_funcionario">
  </fieldset>
    </form>
    </div>
</body>
</html>
