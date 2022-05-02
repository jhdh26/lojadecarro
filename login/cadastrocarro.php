<?php

include('protect.php');

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
                        <form action="cadastrarcarro.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="ano" type="text" class="input is-large" placeholder="ano">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="km" class="input is-large" type="text" placeholder="km">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
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