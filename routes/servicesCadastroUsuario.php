<?php
date_default_timezone_set('America/Sao_Paulo');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $acesso = $_POST['acesso'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    $dataCadastro = date('Y-m-d H:i:s');

    if (isset($_POST['nome'], $_POST['acesso'], $_POST['senha'], $_POST['confirmarSenha'])) {


        if ($senha !== $confirmarSenha) {
            echo "<script> alert('Os campos senha e confirmar senha estão diferentes!');</script>";
        } else {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $senhaConfirmadaHash = password_hash($confirmarSenha, PASSWORD_DEFAULT);

            switch ($_POST['acao']) {
                case "cadastroUsuario":
                    $sql = "INSERT INTO usuarios (nome, acesso, senha, confirmarSenha, dataCadastro
                    ) VALUES (
                    '{$nome}', '{$acesso}', '{$senhaHash}', '{$senhaConfirmadaHash}', '{$dataCadastro}'
                    )";

                    $result = $conect->query($sql);

                    if($result){
                        header('location:?page=login');
                    } else {
                        die('Erro ao cadastrar:' . $result->error);
                    }

                break;
            }
        }
    }
}
