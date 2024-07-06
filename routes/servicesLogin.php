<?php
session_start();

if (empty($_POST) or (empty($_POST['acesso']) or (empty($_POST['senha'])))) {
    echo "<script>alert('preencha os campos corretamente')</script>";
    // print "<script>location.href='./pages/veiculos.php';</script>";
}

$acesso = $_POST['acesso'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE 
        acesso = '{$acesso}'";

$result = $conect->query($sql) or die($conect->error);

$row = $result->fetch_object();

$qtd = $result->num_rows;

if ($qtd > 0) {
    if (password_verify($senha, $row->senha)) {
        $_SESSION['acesso'] = $acesso;
        $_SESSION['nome'] = $row->nome;

        print "<script>location.href='index.php'</script>";
    } else {
        print "<script>alert('deu Erro no usuario ou senha')</script>";
        // print "<script>location.href='cadastroUsuario.php'</script>";
    }
}