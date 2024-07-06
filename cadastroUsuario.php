<?php
    include('./config/include.php');
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styles.css">
    <title>Cadastro Usuário</title>
</head>

<body class="login-cadastro-usuario">
    <div class="d-flex" style="height:100%;">
        <div class="container align-content-center">
            <div class="row justify-content-start">
                <div class="col-lg-5 mt-5">
                    <div class="card" style="background-color: rgb(255, 255, 255, 0.8);">
                        <div class="card-body">
                            <h3>Cadastro de usuário!</h3>
                        </div>
                        <div class="card-body">
                            <form action="?page=salvar" method="POST">
                                <input type="hidden" name="acao" value="cadastroUsuario">
                                <input type="hidden" name="dataCadastro" id="dataCadastro">
                                <div class="mb-3">
                                    <label class="form-label" for="">Nome:</label>
                                    <input class="form-control" type="text" name="nome" id="" placeholder="Seu nome completo">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Login:</label>
                                    <input class="form-control" type="text" name="login" id="" placeholder="Seu Usuário login">
                                </div>
                                <div class="d-flex mb-3">
                                <div class="col-lg-6">
                                    <label class="form-label" for="">Senha:</label>
                                    <input class="form-control" type="password" name="senha" id="" placeholder="Sua Senha">
                                </div> 
                                <div class="ms-1 col-lg-6">
                                    <label class="form-label" for="">Confirmar Senha:</label>
                                    <input class="form-control" type="password" name="confirmarSenha" id="" placeholder="Cofirme a Senha">
                                </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-outline-primary">Cadastrar Usuário</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>