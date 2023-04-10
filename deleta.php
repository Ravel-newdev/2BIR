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
}
        header('Location: Site.php');  

?>