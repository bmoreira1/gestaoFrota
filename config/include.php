<?php
require('./config/conexao.php');
switch (@$_REQUEST["page"]) {
    case 'salvar':
        include('./routes/servicesCadastroUsuario.php');
    break;

    case 'login':
        include('./login.php');
    break;

    case 'realizarLogin':
        include('./routes/servicesLogin.php');
    break;

    case 'homePage':
        include('./index.php');
    break;
}
