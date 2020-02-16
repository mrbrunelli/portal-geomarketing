<?php

if ($_POST) {

    if (isset($_GET['acao']) && $_GET['acao'] == 'login') {
        include './conexao.php';
        include './fn.php';
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        $result = fnQuery("select * from usuario where email = '$email' and senha = '$senha' limit 1");

        if ($result) {
            session_start();

            $_SESSION['UsuarioID'] = $result[0]['idusuario'];
            $_SESSION['UsuarioNome'] = $result[0]['nome'];
            $_SESSION['UsuarioTipo'] = $result[0]['usuariotipo'];
            echo 1;
            exit;
        } else {
            echo 0;
            exit;
        }
    }
} else {
    header('location: ../index.php');
}
