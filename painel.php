<?php
include_once('conexao.php');
include('protect.php');

$sql = "SELECT * FROM tab_carros ORDER BY id DESC";

$result = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X- UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <p> Bem vindo ao painel<p>
    <div>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Ano</td>
            <td>KM</td>
            <td>Preco</td>
            <td>Status</td>
            <td>Funcoes</td>
        </tr>
        <?php while($dado = $result->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["id"]; ?></td>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ano"]; ?></td>
            <td><?php echo $dado["km"]; ?></td>
            <td><?php echo $dado["preco"]; ?></td>
            <td><?php echo $dado["stats"]; ?></td>
            <td><a href="savecompra.php?id=<?php echo $dado["id"]; ?>">Comprar</a>
        </tr>
        <?php } ?>
    </table>
    </div>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>