<?php
    include('./config/include.php');
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styles.css">
    <title>Login Gestão</title>
</head>

<body class="login-background">
    <div class="d-flex" style="height:100%;">
        <div class="container align-content-center">
            <div class="row justify-content-end">
                <div class="col-lg-5 mt-5">
                    <div class="card transparencia">
                        <div class="card-body">
                            <h3>Faça login para acessar o sistema!</h3>
                        </div>
                        <div class="card-body">
                            <form action="?page=realizarLogin" method="POST">
                                <div class="mb-3">
                                    <label class="form-label" for="">Login:</label>
                                    <input class="form-control" type="text" name="acesso" id="" placeholder="Seu Usuário">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Senha:</label>
                                    <input class="form-control" type="text" name="senha" id="" placeholder="Sua Senha">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-outline-primary">Acessar Sistema</button>
                                    <p class="m-3">Ainda não tem acesso? <a href="./cadastroUsuario.php">contate o Administrador aqui</a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>