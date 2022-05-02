<?php
session_start();
include_once ("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);

$result_usuario = "INSERT INTO tab_usuarios (nome, email, senha, created) VALUES ('$nome', '$email', '$senha', NOW())";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_insert_id($conexao)) {
    $_SESSION['msg'] = "Usuario cadastrado com sucesso";
    header("Location: cadastro.php");
}else{
    header("Location: cadastro.php");
}

?>