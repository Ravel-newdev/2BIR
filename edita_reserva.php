<?php

if(!empty($_GET['id'])){

include_once('Dados_forms.php');

$id = $_GET['id'];

$select_sql = "SELECT * FROM reserva WHERE id=$id";

$result = $conect->query($select_sql);

if($result->num_rows > 0){
   while($data_reserva = mysqli_fetch_assoc($result)){

$nome = $data_reserva['nome'];
$dr = $data_reserva['data_reserva'];
$produto = $data_reserva['equip'];
$opcao_string = $data_reserva['horario'];
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
        <input type="text" name="nome" id="nome" class="Input" value="<?php echo $nome?>" required >
    </div>
    <br>
    <div class="divs">
        <input type="text" name="dr" id="dr" class="Input" value="<?php echo $dr?>" required>
    
    </div>
    <br>
    <div class="divs">
        <input type="text" name="produto" id="produto" class="Input"  value="<?php echo $produto?>" required>
        
    </div>
    <br>
    <div class="divs">
        <input type="text" name="opcao" id="opcao" class="Input" value="<?php echo $opcao_string?>" required>
        
    </div>
    <br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="salvar_reserva" id="salvar_reserva">
  </fieldset>
    </form>
    </div>
</body>
</html>
