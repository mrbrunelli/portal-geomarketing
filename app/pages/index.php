<?php

session_start();
if (!isset($_SESSION['UsuarioID'])) {
    header('location: ../../index.php');
}

include '../../includes/header.php';

if ($_SESSION['UsuarioTipo'] == 'A') {
    isset($_GET['pagina']) ? $pagina = trim($_GET['pagina']) : $pagina = 'home';
} else {
    isset($_GET['pagina']) ? $pagina = trim($_GET['pagina']) : $pagina = 'erro';
}

$pagina = $pagina . ".php";
if (file_exists($pagina)) {
    include $pagina;
} else {
    include 'erro.php';
}


include '../../includes/footer.php';
