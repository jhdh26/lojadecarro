<?php

    if(!empty($_GET['id']))
    {
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM tab_carros WHERE id=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlUpdate = "UPDATE `tab_carros` SET `stats`='Vendido' WHERE id=$id";
            $resultDelete = $mysqli->query($sqlUpdate);
        }
    }
    header('Location: telapagamento.php');
   
?>