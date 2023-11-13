<?php

if(!empty($_GET['id'])){

    include_once('Dados_forms.php');

    $id = $_GET['id'];

    $select_sql = "SELECT * FROM usuarios Where id=$id";

    $result = $conect->query($select_sql);

    if($result->num_rows > 0){
        $sql_deletar = "DELETE FROM usuarios WHERE id= $id";
        $sql_delete = $conect->query($sql_deletar);
    }

    $id = $_GET['id'];

    $select_sql = "SELECT * FROM lugar Where id=$id";

    $result = $conect->query($select_sql);

    if($result->num_rows > 0){
        $sql_deletar_lugar = "DELETE FROM lugar WHERE id= $id";
        $sql_delete = $conect->query($sql_deletar_lugar);
    }

    $id = $_GET['id'];

    $select_sql = "SELECT * FROM funcionarios Where id=$id";

    $result = $conect->query($select_sql);

    if($result->num_rows > 0){
        $sql_deletar_funcionarios = "DELETE FROM funcionarios WHERE id= $id";
        $sql_delete = $conect->query($sql_deletar_funcionarios);
    }

    $id = $_GET['id'];

    $select_sql = "SELECT * FROM produto Where id=$id";

    $result = $conect->query($select_sql);

    if($result->num_rows > 0){
        $sql_deletar_produto = "DELETE FROM produto WHERE id= $id";
        $sql_delete = $conect->query($sql_deletar_produto);
    }

    $id = $_GET['id'];

    $select_sql = "SELECT * FROM horario Where id=$id";

    $result = $conect->query($select_sql);

    if($result->num_rows > 0){
        $sql_deletar_horario = "DELETE FROM horario WHERE id= $id";
        $sql_delete = $conect->query($sql_deletar_horario);
    }
    $id = $_GET['id'];

    $select_sql = "SELECT * FROM reserva Where id=$id";

    $result = $conect->query($select_sql);

    if($result->num_rows > 0){
        $sql_deletar = "DELETE FROM reserva WHERE id= $id";
        $sql_delete = $conect->query($sql_deletar);
    }
}

        header('Location: Site.php');

?>
