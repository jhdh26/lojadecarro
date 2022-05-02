<?php
    include_once('conexao.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM tab_carros WHERE id=$id";
        $result = $mysqli->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $ano = $user_data['ano'];
                $km = $user_data['km'];
            }
        }
        else
        {
            header('Location: paineladmin.php');
        }
    }
    else
    {
        header('Location: paineladmin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
<section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <div class="notification is-success">
                    <div class="notification is-info">
                    </div>
                    <div class="box">
                        <form action="saveedit.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="nome" autofocus value=<?php echo $nome;?> required>>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="ano" type="text" class="input is-large" placeholder="ano" value=<?php echo $ano;?> required>>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="km" class="input is-large" type="text" placeholder="km" value=<?php echo $km;?> required>>
                                </div>
                            </div>
                            <br><br>
				            <input type="hidden" name="id" value=<?php echo $id;?>>
                            <input type="submit" name="update" id="update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <p>
        <a href="paineladmin.php">Retornar</a>
    </p>
</body>
</html>