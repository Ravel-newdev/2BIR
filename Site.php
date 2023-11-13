
<?php
  session_start();
  include_once('Dados_forms.php');
//print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: cadastro.php');
}
    $log  = $_SESSION['email'];
//header('Location: Site.php');

if (!empty($_GET['search'])) {
  $info = $_GET['search'];
  $sql = "SELECT * FROM usuarios WHERE id LIKE '%$info%' or nome LIKE '%$info%' or email LIKE '%$info%' ORDER BY id DESC";
} else {
  $sql = "SELECT * FROM usuarios ORDER BY id DESC";
  $newl = "SELECT * FROM lugar ORDER BY id DESC";
  $newf = "SELECT * FROM funcionarios ORDER BY id DESC";
  $newp = "SELECT * FROM produto ORDER BY id DESC";
  $newh = "SELECT * FROM horario ORDER BY id DESC";
  $newr = "SELECT * FROM reserva ORDER BY id DESC";
$r = $conect->query($sql);
$l = $conect->query($newl);
$f = $conect->query($newf);
$p = $conect->query($newp);
$h = $conect->query($newh);
$v = $conect->query($newr);
}
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
<script>
    document.getElementById("btn-pesquisar").addEventListener("click", search_info);

    function search_info() {
        var searchTerm = document.getElementById("pesquisa").value;
        window.location.href = "Site.php?search=" + searchTerm;
    }
</script>

</head>
<body>
    <header class="header">
        <div class="logo">
          <img src="2BIR.png" alt="2BIR location">
      </div>
        <ul class="ul">
        <li><a href='edit.php?id=$data_funcionarios[id]'>conta</a>
        <li><a href="funcionarios.php">Funcionarios</a></li>
        <li><a href="local.php">Lugares</a></li>
        <li><a href="horario.php">Horarios</a></li>
        <li><a href="produto.php">Produtos</a></li>
        <li><a href="reserva.php">Reservar</a></li>
        <li><a href="#">ajuda</a></li>
        </ul>
    </header>
    <div class="res">
    <?php
         echo "<h2>Seja bem vindo(a), $log.</h2>";
    ?>
    </div>
    <div class="pesquisar">
      <input type="search" id="pesquisa" class="form-control w-25" placeholder="Pesquisar">
      <button onclick="search_info()" class="btn btn-primary" id="btn-pesquisar">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
      </button>
    </div>
    <div class="m-5">
      <h1>Usuarios</h1>
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
    while ($data_usuarios = mysqli_fetch_assoc($r)) {
        echo "<tr>";
        echo "<td>" . $data_usuarios['id'] . "</td>";
        echo "<td>" . $data_usuarios['nome'] . "</td>";
        echo "<td>" . $data_usuarios['senha'] . "</td>";
        echo "<td>" . $data_usuarios['email'] . "</td>";
        echo "<td>" . $data_usuarios['telefone'] . "</td>";
        echo "<td>" . $data_usuarios['cidade'] . "</td>";
        echo "<td>" . $data_usuarios['genero'] . "</td>";
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
    </div>
    <div class="m-5">
    <h1>Salas</h1>
    <table class="table text-white">
  <thead>
    <tr class="tr">
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">.</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($data_lugar = mysqli_fetch_assoc($l)) {
        echo "<tr>";
        echo "<td>" . $data_lugar['id'] . "</td>";
        echo "<td>" . $data_lugar['nome'] . "</td>";
        echo "<td>
 <a class = 'btn btn-sm btn-primary' href= 'edita_sala.php?id=$data_lugar[id]'>
 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
 <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>
</a>
<a class ='btn btn-sm btn-danger' href='deleta.php?id=$data_lugar[id]'>
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
    <div class="m-5">
    <h1>Funcionarios</h1>
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
    while ($data_funcionarios = mysqli_fetch_assoc($f)) {
        echo "<tr>";
        echo "<td>" . $data_funcionarios['id'] . "</td>";
        echo "<td>" . $data_funcionarios['nome'] . "</td>";
        echo "<td>" . $data_funcionarios['senha'] . "</td>";
        echo "<td>" . $data_funcionarios['email'] . "</td>";
        echo "<td>" . $data_funcionarios['telefone'] . "</td>";
        echo "<td>" . $data_funcionarios['cidade'] . "</td>";
        echo "<td>" . $data_funcionarios['genero'] . "</td>";
        echo "<td>
 <a class = 'btn btn-sm btn-primary' href= 'edita_funcionario.php?id=$data_funcionarios[id]'>
 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
 <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>
</a>
<a class ='btn btn-sm btn-danger' href='deleta.php?id=$data_funcionarios[id]'>
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
    <div class="m-5">
    <h1>Produtos</h1>
    <table class="table text-white">
  <thead>
    <tr class="tr">
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">.</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($data_produto = mysqli_fetch_assoc($p)) {
        echo "<tr>";
        echo "<td>" . $data_produto['id'] . "</td>";
        echo "<td>" . $data_produto['nome'] . "</td>";
        echo "<td>" . $data_produto['qnt'] . "</td>";
        echo "<td>" . $data_produto['marca'] . "</td>";
        echo "<td>" . $data_produto['modelo'] . "</td>";
        echo "<td>
 <a class = 'btn btn-sm btn-primary' href= 'edita_produto.php?id=$data_produto[id]'>
 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
 <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>
</a>
<a class ='btn btn-sm btn-danger' href='deleta.php?id=$data_produto[id]'>
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
    <div class="m-5">
    <h1>Horarios</h1>
    <table class="table text-white">
  <thead>
    <tr class="tr">
      <th scope="col">#</th>
      <th scope="col">Aula</th>
      <th scope="col">Descrição</th>
      <th scope="col">.</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($data_horario = mysqli_fetch_assoc($h)) {
        echo "<tr>";
        echo "<td>" . $data_horario['id'] . "</td>";
        echo "<td>" . $data_horario['aula'] . "</td>";
        echo "<td>" . $data_horario['descri'] . "</td>";
        echo "<td>
 <a class = 'btn btn-sm btn-primary' href= 'edita_horario.php?id=$data_horario[id]'>
 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
 <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>
</a>
<a class ='btn btn-sm btn-danger' href='deleta.php?id=$data_horario[id]'>
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
    <div class="m-5">
      <h1>Reservas</h1>
    <table class="table text-white">
  <thead>
    <tr class="tr">
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Equipamento</th>
      <th scope="col">Data de reserva</th>
      <th scope="col">aula reserva</th>
      <th scope="col">.</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($data_reservas = mysqli_fetch_assoc($v)) {
        echo "<tr>";
        echo "<td>" . $data_reservas['id'] . "</td>";
        echo "<td>" . $data_reservas['nome'] . "</td>";
        echo "<td>" . $data_reservas['equip'] . "</td>";
        echo "<td>" . $data_reservas['data_reserva'] . "</td>";
        echo "<td>" . $data_reservas['horario'] . "</td>";

        echo "<td>
 <a class = 'btn btn-sm btn-primary' href= 'edita_reserva.php?id=$data_reservas[id]'>
 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
 <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg>
</a>
<a class ='btn btn-sm btn-danger' href='deleta.php?id=$data_reservas[id]'>
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
    </div>
</body>

</html>
