<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $ano = $_POST['ano'];
        $km = $_POST['km'];
        
        $sqlInsert = "UPDATE tab_carros 
        SET nome='$nome',ano='$ano',km='$km'
        WHERE id=$id";
        $result = $mysqli->query($sqlInsert);
        print_r($result);
    }
    header('Location: paineladmin.php');

?>