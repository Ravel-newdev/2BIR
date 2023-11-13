<?php

if(!empty($_GET['id'])){

include_once('Dados_forms.php');

$id = $_GET['id'];

$select_sql = "SELECT * FROM horario Where id=$id";

$result = $conect->query($select_sql);

if($result->num_rows > 0){
   while($data_horario = mysqli_fetch_assoc($result)){
    
$aula = $data_horario['aula'];
$descri = $data_horario['descri'];
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
        <input type="text" name="aula" id="aula" class="Input" value="<?php echo $aula?>" required >
    </div>
    <div class="divs">
        <input type="text" name="descri" id="descri" class="Input" value="<?php echo $descri?>" required >
    </div>
    <br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="salvar_horario" id="salvar_horario">
  </fieldset>
    </form>
    </div>
</body>
</html>