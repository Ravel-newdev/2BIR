<?php

if(!empty($_GET['id'])){

include_once('Dados_forms.php');

$id = $_GET['id'];

$select_sql = "SELECT * FROM lugar Where id=$id";

$result = $conect->query($select_sql);

if($result->num_rows > 0){
   while($data_lugar = mysqli_fetch_assoc($result)){
    
$nome = $data_lugar['nome'];
   }
   //print_r($nome);
}
else{
    header('Location: Site.php');
}
}
else{
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
        <input type="text" name="nome" id="nome" class="Input" value="<?php echo $nome?>" placeholder="nome" required >
    </div>
    <br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="salvar_lugar" id="salvar_lugar">
  </fieldset>
    </form>
    </div>
</body>
</html>