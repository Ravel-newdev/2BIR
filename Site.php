
<?php
  session_start();
  include_once('Dados_forms.php');
//print_r($_SESSION);
if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('Location: cadastro.php');

   }
    $log  = $_SESSION['nome'];
//header('Location: Site.php');
   if(!empty($_GET['search']))
   {
    $info = $_GET['search'];
    $sql = "SELECT * FROM usuarios WHERE id LIKE '%info%' or nome LIKE '%info%' or email LIKE '%info%' ORDER BY id DESC";
   }
   else{
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
   }

$r = $conect->query($sql);

//print_r($r);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2BIR LOCATION</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="logo">
          <img src="2BIR1.png" alt="2BIR location">
      </div>
        <ul id="ul-Site">
        <li><a href='edit.php?id=$data_location[id]'>conta</a>
        <li><a href="#">sobre</a></li>
        <li><a href="#">ajuda</a></li>
        </ul>
    </header>
    <div class="res">
    <?php
         echo "<h2>seja bem vindo $log</h2>";
        ?>
    </div>
    <div class="pesquisar">
      <input type="search" id="pesquisa" class="form-control w-25" placeholder="pesquisar">
      <button onclick="search_info()" class="btn btn-primary">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
      </button>
    </div>
    <div class="m-5">
    <table class="table text-white">
  <thead>
    <tr class="tr">
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">senha</th>
      <th scope="col">email</th>
      <th scope="col">telefone</th>
      <th scope="col">cidade</th>
      <th scope="col">genero</th>
      <th scope="col">.</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($data_usuarios = mysqli_fetch_assoc($r)){
echo "<tr>";
echo "<td>".$data_usuarios['id']. "</td>";
echo "<td>".$data_usuarios['nome']. "</td>";
echo "<td>".$data_usuarios['senha']. "</td>";
echo "<td>".$data_usuarios['email']. "</td>";
echo "<td>".$data_usuarios['telefone']. "</td>";
echo "<td>".$data_usuarios['cidade']. "</td>";
echo "<td>".$data_usuarios['genero']. "</td>";
echo "<td>
 <a class = 'btn btn-sm btn-primary' href= 'edit.php?id=$data_usuarios[id]'>
 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
 <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>
</a>
<a class ='btn btn-sm btn-danger' href='deleta.php?id=$data_usuarios[id]'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
</svg>
</td>";
echo "</tr>";
    }
    
    ?>
  </tbody>
    </table>
    </div>
</body>
<script>
  var search = document.getElementById('pesquisa');

  search.addEventListener("keydown", function(event){
    if(event.key === "Enter"){
      search_info();
    }
  });
  function search_info(){
    window.location = 'Site.php?search = '+search.value;
  }
</script>
</html>